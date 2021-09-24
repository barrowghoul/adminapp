<?php

namespace App\Http\Controllers;

use App\Models\Original;
use Illuminate\Http\Request;

class OriginalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.originals.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.originals.create');
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
            'customer' => 'required|min:12|max:13',
            'folio' => 'required|unique:originals',
            'fe' => 'required|min:6|max:8',
            'total' => 'required|numeric',
        ]);

        Original::create([
            'transmitter' => $request->transmitter,
            'customer' => $request->customer,
            'folio' => $request->folio,
            'fe' => $request->fe,
            'total' => $request->total,
        ]);

        return redirect()->route('originals.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Original $original)
    {
        return view('admin.originals.show', compact('original'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Original $original)
    {
        return view('admin.originals.edit', compact('original'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Original $original)
    {
        $request->validate([
            'transmitter' => 'required|min:12|max:13',
            'customer' => 'required|min:12|max:13',
            'folio' => 'required|unique:originals',
            'fe' => 'required|min:6|max:8',
            'total' => 'required|numeric',
        ]);

        $original->update($request->all());
        return redirect()->route('originals.index');
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
