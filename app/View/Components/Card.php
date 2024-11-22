<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $title;
    public $projectName;
    public $dueDate;
    public $route;

    public function __construct($title, $route, $projectName = null, $dueDate = null)
    {
        $this->title = $title;
        $this->route = $route;
        $this->projectName = $projectName;
        $this->dueDate = $dueDate;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
