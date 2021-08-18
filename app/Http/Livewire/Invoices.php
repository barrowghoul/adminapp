<?php

namespace App\Http\Livewire;

use App\Models\Invoice;
use Livewire\Component;
use Livewire\WithPagination;

class Invoices extends Component
{
    use WithPagination;
    
    public $search;

    public function render()
    {
        $invoices = Invoice::where('folio', 'LIKE', '%' . $this->search . '%')->paginate(10);
        return view('livewire.invoices', compact('invoices'));
    }

    public function limpiar_page(){
        $this->reset('page');
    }
}
