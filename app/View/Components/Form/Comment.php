<?php

namespace App\View\Components\Form;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Comment extends Component
{
    public $action;
    public $method;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($action, $method)
    {
        $this->action = $action;
        $this->method = $method;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|\Closure|string
     */
    public function render(): View|string|\Closure
    {
        return view('components.form.comment');
    }
}
