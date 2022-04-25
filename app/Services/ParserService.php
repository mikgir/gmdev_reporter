<?php

namespace App\Services;

use App\Contracts\ParserInterface;
use App\Models\News;
use App\Models\Source;
use Orchestra\Parser\Xml\Facade as Parser;

class ParserService implements ParserInterface
{
    protected string $url;

    /**
     * @param string $url
     * @return ParserService
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return void
     */
    public function saveNews(): void
    {
        $xml = Parser::load($this->url);
        $data = $xml->parse([
            'title' => [
                'uses' => 'channel.title'
            ],
            'link' => [
                'uses' => 'channel.link'
            ],
            'description' => [
                'uses' => 'channel.description'
            ],
            'image' => [
                'uses' => 'channel.image.url'
            ],
            'news' => [
                'uses' => 'channel.item[title,link,guid,description,pubDate]'
            ]
        ]);

            $source = Source::query()->firstOrNew(['source_link' => $this->url]);
            if (!$source->link){
                $source->title = $data['title'];
                $source->link = $data['link'];
                $source->image = $data['image'];
                $source->description = $data['description'];

                $source->save();
            }


        foreach ($data['news'] as $item) {

            $news = News::query()->firstOrNew(['title' => $item['title']]);

            if ($news->id) {
                continue;
            } else {
                $news = new News();
                $news->category_id = $source->category_id;
                $news->source_id = $source->id;
                $news->title = $item['title'];
                $news->link = $item['link'];
                $news->guid = $item['guid'];
                $news->description = $item['description'];
                $news->pubDate = $item['pubDate'];

                $news->save();
            }
        }

    }
}
