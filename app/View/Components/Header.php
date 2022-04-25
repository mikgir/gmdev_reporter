<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{

    /**
     * @return View|Factory|Htmlable|string|\Closure|Application
     */
    public function render(): View|Factory|Htmlable|string|\Closure|Application
    {
        return view('components.header', [
            'categories' => Category::all(),
        ]);
    }
}
