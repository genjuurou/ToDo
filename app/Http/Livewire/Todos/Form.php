<?php

namespace App\Http\Livewire\Todos;

use App\Enums\Importance;
use App\Enums\Scheduled;
use App\Models\Todo;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Form extends Component
{
    public $todo;
    public $scheduled;

    protected function rules()
    {
        $rules = [
            'todo.title' => 'required|max:255',
            'todo.importance' => ['required', Rule::in(array_keys(Importance::toArray()))],
            'todo.description' => 'nullable',
        ];

        if ($this->isUpcoming()) {
            $rules['todo.scheduled_at'] = 'required|date_format:Y-m-d';
        }

        return $rules;
    }

    public function mount($todo = null, $scheduled = Scheduled::UPCOMING->value)
    {
        $this->scheduled = Scheduled::tryFrom($scheduled);

        if (is_null($todo)) {
            $this->todo = new Todo;
            $this->todo->importance = 1;

            return;
        }

        $this->todo = auth()->user()->todos()->find($todo);
    }

    public function render()
    {
        return view('livewire.todos.form');
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

        if (! $this->isUpcoming()) {
            $this->todo->scheduled_at = $this->scheduled == Scheduled::TODAY ? today() : today()->addDay();
        }

        $this->todo->user_id = auth()->user()->id;

        $this->todo->save();

        $this->emit('todo.saved');

        $this->close();
    }

    public function isUpcoming()
    {
        return $this->scheduled == Scheduled::UPCOMING;
    }
}
