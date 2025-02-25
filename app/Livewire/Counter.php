<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $count = 0;
    public $message = '';


    public function increment()
    {
        $this->count++;
    }

    public function decreament()
    {
        if ($this->count == 0) {
            $this->message = "You can't decrease more";
        } else {
            $this->count--;
        }
    }
    public function render()
    {
        $title = 'Counter';
        return view('livewire.counter')
            ->layout('components.layouts.app', ['title' => $title, 'message' => $this->message]);
    }
}
