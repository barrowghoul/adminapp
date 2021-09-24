<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Original extends Model
{
    use HasFactory;

    protected $fillable = ['transmitter', 'customer', 'folio', 'fe', 'total'];
}
