<?php

namespace App\Http\Livewire\Todos;

use Livewire\Component;

class Show extends Component
{
    public $todo;
    
    public function mount($todo)
    {
        $this->todo = auth()->user()->todos()->find($todo);
    }

    public function render()
    {
        return view('livewire.todos.show');
    }
}
