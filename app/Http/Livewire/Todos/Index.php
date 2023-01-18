<?php

namespace App\Http\Livewire\Todos;

use App\Enums\Scheduled;
use Livewire\Component;

class Index extends Component
{
    public $scheduled;

    public function mount(Scheduled $scheduled)
    {
        $this->scheduled = $scheduled;
    }

    public function render()
    {
        return view('livewire.todos.index');
    }

    public function getTodosProperty()
    {
        $todos = auth()->user()
            ->todos()
            ->scheduled($this->scheduled)
            ->orderBy('importance', 'desc')
            ->get();

        if ($this->scheduled == Scheduled::UPCOMING) {
            $todos = collect($todos)->groupBy('scheduled_at')->sortKeys();
        }

        return $todos;
    }

    public function getIsUpcomingProperty()
    {
        return $this->scheduled == Scheduled::UPCOMING;
    }
}
