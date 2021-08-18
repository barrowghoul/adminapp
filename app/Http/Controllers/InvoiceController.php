<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Recaptcha;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.invoices.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.invoices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {                
        $request->validate([
            'transmitter' => 'required|min:12|max:13',
            'transmitter_name' => 'required|min:3',
            'customer' => 'required|min:12|max:13',
            'customer_name' => 'required|min:3',
            'folio' => 'required',
            'pac' => 'required',
            'total' => 'required|numeric',
            'efecto' => 'required',
            'estado' => 'required',
            'status' => 'required',
        ]);

        #Invoice::create($request->all());
        Invoice::create([
            'transmitter' => $request->transmitter,
            'transmitter_name' => $request->transmitter_name,
            'customer' => $request->customer,
            'customer_name' => $request->customer_name,
            'folio' => $request->folio,
            'pac' => $request->pac,
            'total' => $request->total,
            'efecto' => $request->efecto,
            'estado' => $request->estado,
            'status' => $request->status,
            'recaptcha' => $this->getRecaptcha(),
        ]);

        return redirect()->route('invoices.index');
    }

    public function getRecaptcha(){        
        return Recaptcha::all()->random()->name;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
