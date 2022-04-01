<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        return view('admin.news.index', [
            'newsList' => News::with('category')->paginate(5),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        return view('admin.news.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $news = News::create($request->only(['category_id', 'title', 'image',
            'author', 'status', 'description']));
        if ($news) {
            return redirect()->route('admin.news.index')
                ->with('success', 'Новость успешно создана');
        }
        return back()->with('error', 'Не удалось создать новость');

    }

//    /**
//     * Display the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function show($id)
//    {
//        //
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param News $news
     * @return Application|Factory|View
     */
    public function edit(News $news): View|Factory|Application
    {
        return view('admin.news.edit', [
            'news' => $news,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param News $news
     * @return RedirectResponse
     */
    public function update(Request $request, News $news): RedirectResponse
    {
        $status = $news->fill($request->only(['category_id', 'title',
            'image', 'author', 'status', 'description']))
            ->save();
        if ($status) {
            return redirect()->route('admin.news.index')
                ->with('success', 'Новость успешно обновлена');
        }
        return back()->with('error', 'Не удалось обновить новость');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param News $news
     * @return RedirectResponse
     * @throws \Throwable
     */
    public function destroy(News $news): RedirectResponse
    {
        $status = $news->delete();
        if ($status) {
            return redirect()->route('admin.news.index')
                ->with('success', 'Новость успешно удалена');
        }
        return redirect()->route('admin.news.index')
            ->with('error', 'Не удалось удалить новость');
    }
}
