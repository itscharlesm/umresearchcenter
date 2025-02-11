<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class AdmissionSidebar extends Component
{
    public $activePage;

    /**
     * Create a new component instance.
     */
    public function __construct($activePage = 'requirements')
    {
        $this->activePage = $activePage;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admission-sidebar');
    }
}
