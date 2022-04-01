<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
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
        return view('home', [
            'newsList' => News::with('category')->paginate(0),
            'categories' => Category::with('news')->paginate(0)
        ]);
    }

    /**
     * @return Factory|View|Application
     */
    public function showAll(): Factory|View|Application
    {
        return view('news.news', [
            'categories' => Category::with('news')->paginate(1),
        ]);

    }

    /**
     * @param $id
     * @return Application|Factory|View
     */
    public function show($id): View|Factory|Application
    {
        return view('news.show', [
            'news' => News::findOrFail($id)
        ]);
    }
}
