@extends('layout.app')

@section('title')
    INVENTORY - HOME
@endsection

@section('header')
	<style type="text/css">
		th{
			text-align: center;
		}
		td{
			text-align: center;
			vertical-align: middle;
		}
	</style>
@endsection

@section('body')
     <div class="container">
	    	
     	<div class="row">
     		<div class="col s2">
     			<!-- side navbar -->
		        <ul id="slide-out" class="side-nav fixed">
				    <li><a class="waves-effect" href="/stok"><i class="material-icons">view_list</i>Stok Barang</a></li>
				    <li><a class="waves-effect" href="/barang"><i class="material-icons">view_comfy</i>Barang</a></li>
				    <li><a class="waves-effect" href="/barangmasuk"><i class="material-icons">subdirectory_arrow_right</i>Barang Masuk</a></li>
				    <li><a class="waves-effect" href="/penjualan"><i class="material-icons">shopping_cart</i>Penjualan</a></li>
				    <li><a class="waves-effect" href="#!"><i class="material-icons">content_paste</i>Laporan</a></li>
				  </ul>
				  <a href="#" data-activates="slide-out" class="button-collapse waves-effect button-floating"><i class="material-icons">menu</i></a>
		     	<!-- end side navbar -->		
     		</div>
     		<div class="col s10">
     			<form class="col s12" action="{{url('barang/add')}}" method="POST" enctype="multipart/form-data">
				    <div class="row">
				        <div class="file-field input-field col s12">
					      <div class="btn-flat waves-effect waves-light blue accent-2">
					        <span>Pilih Gambar</span>
					        <input type="file" name="gambar">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text">
					      </div>
				        </div>
				        <div class="input-field col s6">
				          <i class="material-icons prefix">account_circle</i>
				          <input id="icon_prefix" type="text" name="kode_barang" class="validate">
				          <label for="icon_prefix">Kode Barang</label>
					    </div>
				        <div class="input-field col s6">
				          <i class="material-icons prefix">account_circle</i>
				          <input id="icon_prefix" type="text" name="nama_barang" class="validate">
				          <label for="icon_prefix">Nama Barang</label>
				        </div>
				        <div class="input-field col s6">
				          <i class="material-icons prefix">account_circle</i>
				          <input id="icon_prefix" type="text" name="satuan" class="validate">
				          <label for="icon_prefix">Satuan</label>
				        </div>
				        <div class="input-field col s6">
				          <i class="material-icons prefix">account_circle</i>
				          <input id="icon_prefix" type="text" name="qty" class="validate">
				          <label for="icon_prefix">Qty(Jumlah)</label>
				        </div>
				        <div class="input-field col s6">
				          <i class="material-icons prefix">account_circle</i>
				          <input id="icon_prefix" type="text" name="harga_beli" class="validate">
				          <label for="icon_prefix">Harga Beli</label>
				        </div>
				        <div class="input-field col s6">
				          <i class="material-icons prefix">account_circle</i>
				          <input id="icon_prefix" type="text" name="harga_jual" class="validate">
				          <label for="icon_prefix">Harga Jual</label>
				        </div>
				    </div>
				        <div align="center" class="col s12">
				        	<a class="btn-flat waves-effect waves-light red" href="/barang" style="color: white;"><i class="material-icons left">cancel</i>Batal</a>
					      	<button class="btn-flat waves-effect waves-light blue accent-2" style="color: white;" type="submit"><i class="material-icons right">send</i>Submit</button>
					    	<input type="hidden" name="_token" value="{{csrf_token()}}">
				        </div>
		    	</form>
	     	</div>
	     </div>
     

@endsection

@section('footer')
@endsection