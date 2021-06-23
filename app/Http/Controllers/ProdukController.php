<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Produk::all();
        return view('produk',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('produk_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = new Produk();
        $data->nama_produk = $request->nama_produk;
        $data->keterangan = $request->keterangan;
        $data->harga = $request->harga;
        $data->jumlah = $request->jumlah;
        $data->save();
        return redirect()->route('produk.index')->with('alert-success','Berhasil Menambahkan Data!');
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
        $data = Produk::where('id_produk',$id)->get();

        return view('produk_edit',compact('data'));
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

        $data = Produk::where('id_produk',$id)->first();
        // Produk::find('id_produk');
        $data->nama_produk = $request->nama_produk;
        $data->keterangan = $request->keterangan;
        $data->harga = $request->harga;
        $data->jumlah = $request->jumlah;
        $data->save();
        return redirect()->route('produk.index')->with('alert-success','Data berhasil diubah!');
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
        $data = Produk::where('id_produk',$id)->first();
        $data->delete();
        return redirect()->route('produk.index')->with('alert-success','Data berhasi dihapus!');
    }
}
