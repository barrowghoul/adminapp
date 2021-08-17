<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;

class Customers extends Component
{
    use WithPagination;

    public $search;

    public function render()
    {
        $customers = Customer::where('name', 'LIKE', '%' . $this->search . '%')->paginate(2);
        return view('livewire.customers', compact('customers'));
    }

    public function limpiar_page(){
        $this->reset('page');
    }
}
