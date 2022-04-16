<?php

namespace App\Services;

use App\Contracts\ParserInterface;
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
     * @return array
     */
    public function getNews(): array
    {
        $xml = Parser::load( $this->url );
        return $xml->parse([
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
    }
}
