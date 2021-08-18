<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = ['customer', 'customer_name','transmitter', 'transmitter_name', 'folio', 'pac', 'total', 'efecto', 'estado', 'status', 'recaptcha'];

    public function transmitter(){
        return $this->belongsTo(Transmitter::class);
    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

}
