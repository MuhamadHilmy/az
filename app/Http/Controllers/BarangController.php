<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Pagination\Presenter;

use App\Barang;
use App\penjualan;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Image;
use DB;

class BarangController extends Controller
{
    public function add(request $request){
    	$a = new \App\Barang;
    	$a->kode_barang = input::get('kode_barang');
    	$a->nama_barang = input::get('nama_barang');
    	$a->satuan = input::get('satuan');
    	$a->qty = input::get('qty');
    	$a->harga_beli = input::get('harga_beli');
    	$a->harga_jual = input::get('harga_jual');
        if($request->hasFile('gambar')){
            $filename = $request->gambar->getClientOriginalName();
            $request->file('gambar')->move('images/',$filename);
            $a->gambar = $filename;
        }

    	$a->save();
        return redirect(url('barang'));
    }

    public function Barang(){
        $data['barang'] = Barang::paginate(10);
        return view('barang.barang')->with($data);
    }

    public function stok(){

        $data['barang'] = Barang::paginate(1);
        return view('stok')->with($data);
    }

    public function edit($id)
    {
        $data['barang'] = Barang::find($id);
        return view('barang.ubah_barang')->with($data);
    }

    public function update(request $request)
    {
        $a = Barang::find(Input::get('id'));
        $a->nama_barang = input::get('nama_barang');
        $a->satuan = input::get('satuan');
        $a->qty = input::get('qty');
        $a->harga_beli = input::get('harga_beli');
        $a->harga_jual = input::get('harga_jual');
        if($request->hasFile('gambars')){
            $filename = $request->gambars->getClientOriginalName();
            $request->file('gambars')->move('images/',$filename);
            $a->gambar = $filename;
        }

        $a->save();

        return redirect(url('barang'));
    }

    public function delete($id)
    {
        $a = Barang::find($id);
        $a->delete();

        return redirect(url('barang'));
    }
}

