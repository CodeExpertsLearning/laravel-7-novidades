<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Post extends Component
{
    public $post;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($post)
    {
        $this->post = $post;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return <<<'blade'
<div>
        <h1>{{$post->title}}</h1>
        <hr>
        <p>{{$post->body}}
</div>
blade;
    }
}
