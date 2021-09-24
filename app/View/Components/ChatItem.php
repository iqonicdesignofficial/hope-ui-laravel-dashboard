<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ChatItem extends Component
{  
    
    public $id, $img ,$msg, $name, $dateTime;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $img , $msg='', $name, $dateTime='')
    {
        $this->id = $id;
        $this->img = $img;
        $this->msg= $msg;
        $this->name = $name;
        $this->dateTime = $dateTime;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.chat-item');
    }
}
