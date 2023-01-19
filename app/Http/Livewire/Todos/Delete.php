<?php

namespace App\Http\Livewire\Todos;

use Livewire\Component;

class Delete extends Component
{
    public $todo;

    public function mount($todo)
    {
        $this->todo = auth()->user()->todos()->find($todo);
    }

    public function render()
    {
        return view('livewire.todos.delete');
    }

    public function close()
    {
        $this->emitUp('modal.close');
    }

    public function submit()
    {
        $this->todo->delete();

        $this->emit('todo.deleted');

        $this->close();
    }
}
