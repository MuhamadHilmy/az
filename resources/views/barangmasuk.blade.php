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
     			<!-- Table -->
		     	<table class="responsive-table">
			        <thead>
			          <tr>
			          	  <th>No.Transaksi</th>
			              <th>No.Faktur</th>
			              <th>Tanggal Transaksi</th>
			              <th>Nama Supplier</th>
			              <th>Total Harga</th>
			          </tr>
			        </thead>

			        <tbody>
			          <tr>
			          	<td id="gambar"><img src="images/bg.jpg" class="responsive-img"></td>
			            <td>Alvin</td>
			            <td>Eclair</td>
			            <td>$0.87</td>
			          </tr>
			        </tbody>
			    </table>
		     	<!-- End Table -->	
     		</div>
     	</div>
     </div>
     

@endsection

@section('footer')
    
@endsection