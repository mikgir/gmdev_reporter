<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $news = DB::select('SELECT id, title, category_id, image, big_image, thumb_image, author, description FROM news');
        return view('home', [
            'newsList' => $news
        ]);
    }

    /**
     * @return Factory|View|Application
     */
    public function showAll(): Factory|View|Application
    {
        $news = DB::select('SELECT id, title, category_id, image, big_image, thumb_image, author, description FROM news');

        return view('news.news', [
            'newsList' => $news
        ]);

    }

    /**
     * @param int $id
     * @return Application|Factory|View
     */
    public function show(int $id): View|Factory|Application
    {
        $news = DB::select('SELECT id, title, category_id, image, big_image, thumb_image, author, description FROM news WHERE id = :id', ['id'=> $id]);

        return view('news.show', [
            'news' => $news[0]
        ]);
    }
}
