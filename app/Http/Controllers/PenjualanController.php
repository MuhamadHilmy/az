<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Barang;
use App\penjualan;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Image;
use DB;

class PenjualanController extends Controller
{
    public function penjualan(){
        $data['penjualan'] = penjualan::paginate(10);
        return view('penjualan.penjualan')->with($data);
    }

    public function add() {
        $bg = input::get('nama_barang');
        $stk = input::get('jumlah_barang');
        $hj = DB::table('barangs')->where('nama_barang', $bg)->value('harga_jual');

        $a = new penjualan;
        $a->tgl_trans = input::get('tgl_trans');
        $a->nama_pembeli = input::get('nama_pembeli');
        $a->nama_barang = input::get('nama_barang');
        $a->jumlah_barang = input::get('jumlah_barang');
        $a->harga_barang = $hj;
        $a->satuan = DB::table('barangs')->where('nama_barang', $bg)->value('satuan');
        $a->total_harga = $stk * $hj;
        $id = DB::table('barangs')->where('nama_barang', $bg)->value('id');
        $stoks = DB::table('barangs')->where('nama_barang', $bg)->value('qty');
        $jumlah_barang = $stoks - $stk;
        $a->save();
        DB::table('barangs')
            ->where('id', $id)
            ->update(['qty' => $jumlah_barang]);

        return redirect(url('penjualan'));
    }

    public function pt(){
        $data['qty'] = Barang::paginate(10);
        return view('penjualan.tambah_penjualan')->with($data);
    }
}
