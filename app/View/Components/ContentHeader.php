<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ContentHeader extends Component
{
    public $title;

    /**
     * Create a new component instance.
     */
    public function __construct($title)
    {
        //
        $this->title = $title;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.content-header');
    }
}
