<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{
    public $todos = [];

    public $title = '';
    public $state = false;

    public function render()
    {
        return view('livewire.todos');
    }

    public function mount()
    {
        $this->todos = [
            ['id' => 1, 'title' => 'Learn Laravel', 'completed' => false],
            ['id' => 2, 'title' => 'Learn Livewire', 'completed' => false],
            ['id' => 3, 'title' => 'Learn Vue', 'completed' => false],
        ];
    }

    /**
     * Lifecycle hook that is automatically called when a property is updated from the frontend.
     * 
     * This method is triggered only when a property value is directly changed
     * by user interaction in the frontend, not when updated programmatically
     * from the backend. It's useful for performing actions or validations
     * immediately after a user modifies a value.
     *
     * @param string $property The name of the property that was updated
     * @param mixed $value The new value of the property
     */
    public function updated($property, $value)
    {
        dump('Something has changed!', $property, $value);
    }

    /**
     * Specific lifecycle hook for the 'title' property.
     * 
     * This method follows a Livewire naming convention: 'updated' + PropertyName.
     * It's automatically called when the 'title' property is updated from the frontend.
     * This allows for property-specific logic or validation without needing to check
     * the property name in the general 'updated' method.
     *
     * @param mixed $value The new value of the 'title' property
     */
    public function updatedTitle($value)
    {
        dump('Title has changed!', $value);
    }

    public function addTodo()
    {
        $this->todos[] = [
            'id' => count($this->todos) + 1,
            'title' => $this->title,
            'completed' => $this->state
        ];

        $this->reset(['title', 'state']);
    }

    public function popTodo()
    {
        array_pop($this->todos);
    }
}
