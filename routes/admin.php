<?php

use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Pedimentos;

Route::get('',Pedimentos::class);
Route::resource('customers',CustomerController::class)->names('customers'); 
Route::resource('invoices',InvoiceController::class)->names('invoices'); 