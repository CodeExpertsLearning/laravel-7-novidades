<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Hello extends Component
{
    public $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.hello');
    }

    public function extraText($param)
    {
        return 'Texto extra a ser exibido! ' . $param;
    }
}
