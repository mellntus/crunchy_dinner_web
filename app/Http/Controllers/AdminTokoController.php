<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use Illuminate\Http\Request;

class AdminTokoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.crud.store.index', [
            "title" => 'List Toko',
            "toko" => Toko::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crud.store.create', [
            "title" => 'Add Toko'

        ]);
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
            "provinsi" => 'required|max:255',
            "alamat" => 'required'
        ]);

        $input = $request->all();

        Toko::create($input);

        return redirect('/admin/listtoko')->with('success', 'New Toko added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function show(Toko $toko)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $toko = Toko::findOrFail($id);

        return view('admin.crud.store.edit', [
            "title" => 'Edit Toko',
            "toko" => $toko,

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Toko::findOrFail($id);
        $data = $request->except('_token');

        $item->update($data);
        return redirect('/admin/listtoko')->with('success', 'Toko Edited Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $toko = Toko::find($id);

        $toko->delete();

        return redirect('/admin/listtoko')->with('success', 'Toko Deleted Succesfully');
    }
}
