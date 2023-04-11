<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ContactForm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $pos = null;
    
    public function __construct($pos='top')
    {
        $this->pos = $pos;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.contact-form');
    }
}
