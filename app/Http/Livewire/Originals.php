<?php

namespace App\Http\Livewire;

use App\Models\Original;
use Livewire\Component;
use Livewire\WithPagination;

class Originals extends Component
{
    use WithPagination;

    public $search;

    public function render()
    {
        $originals = Original::where('folio', 'LIKE', '%' . $this->search . '%')->paginate(10);
        return view('livewire.originals', compact('originals'));
    }

    public function limpiar_page(){
        $this->reset('page');
    }
}
