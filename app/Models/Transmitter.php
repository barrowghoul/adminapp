<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transmitter extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'code'];

    public function invoices(){
        return $this->hasMany(Invoice::class);
    }
}
