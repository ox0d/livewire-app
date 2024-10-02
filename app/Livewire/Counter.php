<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Counter')]
class Counter extends Component
{
    public $count = 0;

    public function render()
    {
        return view('livewire.counter');
    }

    public function increment($by = null)
    {
        if ($this->count >= 0 && $this->count < 100) {
            $by ? $this->count += $by : $this->count++;
        }
    }

    public function decrement($by = null)
    {
        if ($this->count > 0 && $this->count <= 100) {
            $by ? $this->count -= $by : $this->count--;
        }
    }
}
