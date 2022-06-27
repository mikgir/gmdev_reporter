<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\News\CreateRequest;
use App\Http\Requests\News\EditRequest;
use App\Models\Category;
use App\Models\News;
use App\Services\UploadService;
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
//            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateRequest $request
     * @return RedirectResponse
     */
    public function store(CreateRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $service = app(UploadService::class);

        if ($request->hasFile('image')) {
            $validated['image'] = $service->uploadFile($request->file('image'));
        }
        $news = News::create($validated);
        if ($news) {
            return redirect()->route('admin.news.index')
                ->with('success', __('messages.admin.news.create.success'));
        }
        return back()->with('error', __('messages.admin.news.create.fail'));

    }

    /**
     * Display the specified resource.
     *
     * @param News $news
     * @return Application|Factory|View
     */
    public function show(News $news): View|Factory|Application
    {
        return view('admin.news.edit', [
            'news' => $news,
//            'categories' => Category::all()
        ]);
    }

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
     * @param EditRequest $request
     * @param News $news
     * @return RedirectResponse
     */
    public function update(EditRequest $request, News $news): RedirectResponse
    {
        $validated = $request->validated();
        $service = app(UploadService::class);

        if ($request->hasFile('image')) {
            $validated['image'] = $service->uploadFile($request->file('image'));
        }
        $status = $news->fill($validated)
            ->save();
        if ($status) {
            return redirect()->route('admin.news.index')
                ->with('success', __('messages.admin.news.update.success'));
        }
        return back()->with('error', __('messages.admin.news.update.fail'));
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
                ->with('success', __('messages.admin.news.destroy.success'));
        }
        return redirect()->route('admin.news.index')
            ->with('error', __('messages.admin.news.destroy.fail'));
    }
}
