<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    public $layout, $dir, $assets;

    public function __construct($layout = '', $dir=false, $assets = [])
    {
        $this->layout = $layout;
        $this->dir = $dir;
        $this->assets = $assets;
    }

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        switch($this->layout){
            case 'horizontal':
                return view('layouts.dashboard.horizontal');
            break;
            case 'dualhorizontal':
                return view('layouts.dashboard.dual-horizontal');
            break;
            case 'dualcompact':
                return view('layouts.dashboard.dual-compact');
            break;
            case 'boxed':
                return view('layouts.dashboard.boxed');
            break;
            case 'boxedfancy':
                return view('layouts.dashboard.boxed-fancy');
            break;
            case 'simple':
                return view('layouts.dashboard.simple');
            break;
            default:
                return view('layouts.dashboard.dashboard');
            break;
        }
    }
}
