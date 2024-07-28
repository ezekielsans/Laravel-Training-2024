<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SubmitButton extends Component
{
    private $buttonText;
    /**
     * Create a new component instance.
     */
    public function __construct($text)
    {
        $this->buttonText = $text;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.submit-button', [
            'buttonText' => $this->buttonText,
        ]);
    }
}
