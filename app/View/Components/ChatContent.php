<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ChatContent extends Component
{  

    public $id, $img , $name, $dateTime, $title, $activeClass, $about, $nickName, $contact, $dob, $gender, $lang, $status;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $img , $name, $dateTime='', $title='', $activeClass='',$about='', $nickName='', $contact='', $dob='', $gender='', $lang='', $status='')
    {
        $this->id = $id;
        $this->img = $img;
        $this->name = $name;
        $this->dateTime = $dateTime;
        $this->title = $title;
        $this->activeClass = $activeClass;
        $this->about = $about;
        $this->nickName = $nickName;
        $this->contact = $contact;
        $this->dob = $dob;
        $this->gender = $gender;
        $this->lang = $lang;
        $this->status = $status;


    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.chat-content');
    }
}
