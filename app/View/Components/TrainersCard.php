<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TrainersCard extends Component
{
    public $cardstyle, $id, $rating, $percent, $progresssmColor, $name, $role, $img, $color, $description, $value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($cardstyle= '', $id= '', $rating= '', $percent= '', $progresssmColor= '' ,$name= '', $role= '', $img= '',$color= '', $description= '', $value= '')
    {
        $this-> cardstyle=$cardstyle;
        $this-> id=$id;
        $this-> rating=$rating;
        $this-> progresssmColor=$progresssmColor;
        $this-> percent=$percent;
        $this-> name=$name;
        $this-> role=$role; 
        $this-> img=$img;
        $this-> color=$color;
        $this-> description=$description;
        $this-> value=$value;

        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.trainers-card');
    }
}
