<?php

namespace App\Http\Livewire\Todos;

use App\Enums\Importance;
use App\Enums\Scheduled;
use App\Models\Todo;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Create extends Component
{
    public $todo;
    public $scheduled;

    protected function rules()
    {
        return [
            'todo.title' => 'required|max:255',
            'todo.importance' => ['required', Rule::in(array_keys(Importance::toArray()))],
            'todo.description' => 'nullable',
        ];
    }

    public function mount($scheduled)
    {
        $this->scheduled = Scheduled::tryFrom($scheduled);
        $this->todo = new Todo;
        $this->todo->importance = 1;
    }

    public function render()
    {
        return view('livewire.todos.create');
    }

    public function getOptionsProperty()
    {
        return Importance::toArray();
    }

    public function close()
    {
        $this->emitUp('modal.close');
    }

    public function submit()
    {
        $this->validate();

        $this->todo->scheduled_at = today();
        $this->todo->user_id = auth()->user()->id;

        $this->todo->save();

        $this->close();
    }
}
