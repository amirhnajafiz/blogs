<?php

namespace App\View\Components\post;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FeaturesBar extends Component
{
    public $post;
    public $type;

    /**
     * Create a new component instance.
     *
     * @param $type
     * @param $post
     */
    public function __construct($type, $post)
    {
        $this->post = $post;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render()
    {
        return view('components.post.features-bar');
    }
}