<?php

namespace App\Http\Controllers;

use App\Models\toko;
use App\Http\Requests\StoretokoRequest;
use App\Http\Requests\UpdatetokoRequest;

class TokoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.store', [
            'active' => 'store',
            'title' => 'Our Store',
            'toko' => Toko::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretokoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretokoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function show(toko $toko)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function edit(toko $toko)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetokoRequest  $request
     * @param  \App\Models\toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetokoRequest $request, toko $toko)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function destroy(toko $toko)
    {
        //
    }
}
