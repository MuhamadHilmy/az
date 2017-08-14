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
				        <div class="input-field col s12">
				          <i class="material-icons prefix">account_circle</i>
				          <input id="icon_prefix" type="text" name="no_fak" class="validate">
				          <label for="icon_prefix">Nomor Faktur</label>
					    </div>
				        <div class="input-field col s6">
				          <i class="material-icons prefix">account_circle</i>
				          <input id="icon_prefix" type="text" name="tgl_trans" class="datepicker">
				          <label for="icon_prefix">Tanggal Transaksi</label>
				        </div>
				        <div class="input-field col s6">
				          <i class="material-icons prefix">account_circle</i>
				          <input id="icon_prefix" type="text" name="supplier" class="validate">
				          <label for="icon_prefix">Supplier</label>
				        </div>
				        <div class="input-field col s6">
						    <select name="nama_barang">
						      <option value="" disabled selected>Pilih Barang</option>
				        @foreach($qty as $qtu)
						      <option value="{{$qtu->nama_barang}}">{{$qtu->nama_barang}}</option>
				        @endforeach
						    </select>
							<label>Nama Barang</label>
						</div>
				        <div class="input-field col s6">
				          <i class="material-icons prefix">account_circle</i>
				          <input id="icon_prefix" type="text" name="jumlah" class="validate">
				          <label for="icon_prefix">Jumlah</label>
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
	<script type="text/javascript">
		$('.datepicker').pickadate({
			    selectMonths: true, // Creates a dropdown to control month
			    selectYears: 15, // Creates a dropdown of 15 years to control year,
			    today: 'Today',
			    clear: 'Clear',
			    close: 'Ok',
			    closeOnSelect: false // Close upon selecting a date,
			  });
	</script>
@endsection