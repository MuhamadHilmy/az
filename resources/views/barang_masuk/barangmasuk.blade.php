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
			align-content: center;
		}
		#gambar{
			width: 100px;
		}
	</style>
@endsection

@section('body')
	    	
     	<div class="row">
     		<div class="col s3">
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
     		<div class="col s9">
     			<div class="row">
     				
     			</div>
     			<div class="row right">
     				<a class="btn-flat waves-effect waves-light blue accent-2" style="color: white;" href="{{url('barangmasuk/tambah')}}"><i class="material-icons left">add</i>TAMBAH BARANG MASUK</a>
     			</div>
     			<div class="row">
	     			<!-- Table -->
			     	<table class="responsive-table">
				        <thead>
				          <tr>
				          	  <th>No.Transaksi</th>
				              <th>No.Faktur</th>
				              <th>Tanggal Transaksi</th>
				              <th>Nama Barang</th>
				              <th>Nama Supplier</th>
				              <th>Jumlah</th>
				              <th>Total Harga</th>
				          </tr>
				        </thead>
				        @foreach($barang_masuk as $key)
				        <tbody>
				          <tr>
				          	<td>{{$key->no_trans}}</td>
				            <td>{{$key->no_fak}}</td>
				            <td>{{$key->tgl_trans}}</td>
				            <td>{{$key->nama_barang}}</td>
				            <td>{{$key->supplier}}</td>
				            <td>{{$key->jumlah}}</td>
				            <td>{{$key->total_harga}}</td>
				          </tr>
				        </tbody>
				        @endforeach
				    </table>
			     	<!-- End Table -->
     			</div>
     		</div>
     	</div>

@endsection

@section('footer')
    
@endsection