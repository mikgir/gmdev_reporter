<?php

namespace App\View\Components;

use App\Models\Category;
use App\Models\News;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeaderSlider extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|\Closure|string
     */
    public function render(): View|string|\Closure
    {
        return view('components.header-slider', [
            'categories' => Category::all(),
            'news'=>News::with('category')->limit(3)->get()
        ]);
    }
}
