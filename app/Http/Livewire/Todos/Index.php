<?php

namespace App\Http\Livewire\Todos;

use App\Enums\Schedule;
use Livewire\Component;

class Index extends Component
{
    public $schedule;

    public function mount(Schedule $schedule)
    {
        $this->schedule = $schedule;
    }

    public function render()
    {
        return view('livewire.todos.index');
    }
}
