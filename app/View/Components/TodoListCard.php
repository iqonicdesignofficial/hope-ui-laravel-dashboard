<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TodoListCard extends Component
{
    public $id;

    public $class;

    public $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id,$class = '',$title)
    {
        $this->id = $id;
        $this->class = $class;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.todo-list-card');
    }
}
