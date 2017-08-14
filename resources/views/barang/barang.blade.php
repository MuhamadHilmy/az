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
     				<a class="btn-flat waves-effect waves-light blue accent-2" style="color: white;" href="{{url('barang/tambah')}}"><i class="material-icons left">add</i>TAMBAH BARANG</a>
     			</div>
     			<div class="row">
     				<!-- Table -->
			     	<table class="responsive-table">
				        <thead>
				          <tr>
				          	  <th>Kode Barang</th>
				              <th>Nama Barang</th>
				              <th>Satuan</th>
				              <th>Harga Beli</th>
				              <th>Harga Jual</th>
				              <th>Aksi</th>
				          </tr>
				        </thead>
				        @foreach($barang as $key)
				        <tbody>
				          <tr>
				          	<td>{{$key->kode_barang}}</td>
				            <td>{{$key->nama_barang}}</td>
				            <td>{{$key->satuan}}</td>
				            <td>{{$key->harga_beli}}</td>
				            <td>{{$key->harga_jual}}</td>
				            <td>
				            	<div>
				            		 <a class="btn-floating waves-effect waves-light blue accent-2" href="{{url('barang/'.$key->id)}}"><i class="material-icons">edit</i></a>
				            		 <button id="delete" class="btn-floating waves-effect waves-light red" onclick="hapus()"><i class="material-icons">delete</i></button>
				            	</div>
				            </td>
				          </tr>
				        </tbody>
				        @endforeach
				    </table>
			     	<!-- End Table -->	
     			</div>
     			<div class="row right">
		     		{!! ($barang)->render() !!}
		     	</div>
     		</div>
     	</div>    

@endsection

@section('footer')
	@foreach($barang as $key)
	<script type="text/javascript">
		function hapus(){
			swal({
			  title: "Apakah anda yakin?",
			  text: "Data Barang Akan Dihapus!",
			  type: "warning",
			  showCancelButton: true,
			  confirmButtonColor: "#DD6B55",
			  confirmButtonText: "Ya",
			  cancelButtonText: "Tidak",
			  closeOnConfirm: false,
			  closeOnCancel: true
			},
			function(isConfirm){
			  if (isConfirm) {
			    window.location = 'barang/hapus/{{$key->id}}';
			  }
			});
		}
	</script>
	@endforeach
@endsection