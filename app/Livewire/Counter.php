<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $count = 0;

    public function increment()
    {
        if ($this->count == 0) {
            return "You can't decrease more";
        } else {
            $this->count++;
        }
    }

    public function decreament()
    {
        $this->count--;
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
