<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $news = $this->getNews();
        $bigNews = $this->getSlideNews($id = '1');
        $thumbNews = $this->getThumbNews();

        return view('home', [
            'newsList' => $news,
            'bigNews' => $bigNews,
            'thumbNews' => $thumbNews
        ]);
    }

    /**
     * @return Factory|View|Application
     */
    public function showAll(): Factory|View|Application
    {
        $news = $this->getNews();
        $bigNews = $this->getSlideNews($id = '1');
        $thumbNews = $this->getThumbNews();

        return view('news.news', [
            'newsList' => $news,
            'bigNews' => $bigNews,
            'thumbNews' => $thumbNews
        ]);

    }

    /**
     * @param int $id
     * @return Application|Factory|View
     */
    public function show(int $id)
    {
        return view('news.show', [
            'news' => $this->getNews($id)
        ]);
    }
}
