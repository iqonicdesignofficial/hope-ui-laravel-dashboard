<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MembersCard extends Component
{
    public $img, $imgClass, $id, $title, $role, $popoverdatacontent, $popovertitle, $popoverrol, $popovertrainername, $chart, $value, $value1, $value2, $value3, $value4, $value5,$rating;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($img = '', $imgClass = '', $id = '', $title = '', $role = '', $popoverdatacontent = '', $popovertitle = '', $popoverrol = '', $popovertrainername = '', $chart = '', $value = '', $value1 = '', $value2 = '', $value3 = '', $value4 = '', $value5 = '', $rating='')
    {
        $this->img = $img;
        $this->imgClass = $imgClass;
        $this->id = $id;
        $this->title = $title;
        $this->role = $role;    
        $this->popoverdatacontent = $popoverdatacontent;
        $this->popovertitle = $popovertitle;
        $this->popoverrol = $popoverrol;
        $this->popovertrainername = $popovertrainername;
        $this->chart = $chart;
        $this->value = $value;
        $this->value1 = $value1;
        $this->value2 = $value2;
        $this->value3 = $value3;
        $this->value4 = $value4;
        $this->value5 = $value5;
        $this->rating = $rating;
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.members-card');
    }
}
