<?php

namespace App\Http\Livewire\Todos;

use App\Enums\Scheduled;
use App\Models\Todo;
use Livewire\Component;

class Index extends Component
{
    public $scheduled;
    public $todos;

    public function mount(Scheduled $scheduled)
    {
        $this->scheduled = $scheduled;
        $this->todos = Todo::scheduled($scheduled)->get();
    }

    public function render()
    {
        return view('livewire.todos.index');
    }
}
