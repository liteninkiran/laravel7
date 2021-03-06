<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Sidebar extends Component
{
    public $title;
    public $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $name)
    {
        $this->title = $title;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.sidebar');
    }

    public function list($include): array
    {
        return [
            'Hello',
            'Item 2',
            $include,
        ];
    }
}
