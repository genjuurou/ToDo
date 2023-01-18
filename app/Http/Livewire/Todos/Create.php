<?php

namespace App\Http\Livewire\Todos;

use App\Enums\Scheduled;
use App\Models\Todo;
use Livewire\Component;

class Create extends Component
{
    public $todo;
    public $scheduled;

    protected $rules = [
        'todo.title' => 'required|max:255',
        'todo.description' => 'nullable',
    ];

    public function mount($scheduled)
    {
        $this->scheduled = Scheduled::tryFrom($scheduled);
        $this->todo = new Todo;
    }

    public function render()
    {
        return view('livewire.todos.create');
    }

    public function submit()
    {
        $this->validate();

        // dd($this->scheduled == Scheduled::TODAY);
        $this->todo->scheduled_at = today();

        $this->save();
    }
}
