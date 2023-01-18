<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Modal extends Component
{
    public bool $open = false;

    public $component;
    public $data;
    public $key;

    protected $listeners = [
        'modal.close' => 'close',
        'modal.open' => 'open',
    ];

    public function close(): void
    {
        $this->reset();
    }

    public function open($data): void
    {
        $this->open = true;

        $this->component = $data['component'];
        $this->data = $data;
        $this->key = time().$data['component'];
    }
    
    public function render()
    {
        return view('livewire.components.modal');
    }
}
