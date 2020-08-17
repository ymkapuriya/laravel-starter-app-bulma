<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Breadcrumb extends Component
{

    /**
     * The breadcrumb links
     *
     * @var array
     */
    public $links;

    /**
     * Create a new component instance.
     *
     * @param array $links
     * @return void
     */
    public function __construct($links = [])
    {
        //
        if (count($links) == 0) {
            $routeName = Route::currentRouteName();
            if ($routeName !== 'home') {
                $tokens = Str::of($routeName)->explode('.');
                foreach ($tokens as $token) {
                    $label = Str::of($token)->replace("_", " ");
                    $label = Str::title($label);
                    if ($label == 'Index') {
                        $label = 'List';
                    }
                    $links[$label] = null;
                }
            }
        }
        $this->links = $links;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.breadcrumb');
    }
}
