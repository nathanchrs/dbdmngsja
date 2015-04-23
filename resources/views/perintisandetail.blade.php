@extends('layout')

@section('title', 'DMN GSJA - Detail Perintisan')

@section('content')

<div class="container-fluid">

	<h1>Nama Perintisan</h1>
	
	<ol class="breadcrumb" style="background-color:transparent; padding:2px;">
		<li><a href="#">Perintisan</a></li>
		<li class="active">Detail Perintisan</li>
	</ol>

	<form role="form" method="post">
		<div class="row">
			<div class="col-sm-6">

				<div class="panel panel-default">
					<div class="panel-heading">
						Informasi Umum
					</div>
					<div class="panel-body">
						<div class="form-group">
							<label>Nama perintisan</label>
							<input type="text" class="form-control" value="">
						</div>
						<div class="form-group">
							<label>Jenis perintisan</label>
							<input type="text" class="form-control" value="">
						</div>
						<div class="form-group">
							<label>Daerah</label>
							<input type="text" class="form-control" value="">
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<textarea class="form-control" rows="4"></textarea>
						</div>
						<div class="form-group">
							<label>Telepon</label>
							<input type="text" class="form-control" value="">
						</div>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						Informasi Perintis
					</div>
					<div class="panel-body">
						<div class="form-group">
							<label>Mulai berdiri</label>
							<input type="text" class="form-control" value="">
						</div>
						<div class="form-group">
							<label>Perintis</label>
							<input type="text" class="form-control" value="">
						</div>
						<div class="form-group">
							<label>Tempat lahir perintis</label>
							<input type="text" class="form-control" value="">
						</div>
						<div class="form-group">
							<label>Tanggal lahir perintis</label>
							<input type="text" class="form-control" value="">
						</div>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						Informasi Organisasi
					</div>
					<div class="panel-body">
						<div class="form-group">
							<label>Gereja mentor</label>
							<input type="text" class="form-control" value="">
						</div>
						<div class="form-group">
							<label>Departemen</label>
							<input type="text" class="form-control" value="">
						</div>
						<div class="form-group">
							<label>BPD</label>
							<input type="text" class="form-control" value="">
						</div>
					</div>
				</div>

				

			</div>

			<div class="col-sm-6">

				<div class="panel panel-default">
					<div class="panel-heading">
						Laporan Keuangan
					</div>
					<div class="panel-body">
						<div class="form-group">
							<textarea class="form-control" rows="4"></textarea>
						</div>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						Jemaat
					</div>
					<div class="panel-body">
						<div class="form-group">
							<label>Jumlah jemaat dewasa</label>
							<input type="text" class="form-control" value="">
						</div>
						<div class="form-group">
							<label>Jumlah jemaat Sekolah Minggu</label>
							<input type="text" class="form-control" value="">
						</div>
						<div class="form-group">
							<label>Jumlah jemaat RKM</label>
							<input type="text" class="form-control" value="">
						</div>
						<div class="form-group">
							<label>Jumlah jemaat KKA</label>
							<input type="text" class="form-control" value="">
						</div>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						Keterangan Lainnya
					</div>
					<div class="panel-body">
						<div class="form-group">
							<textarea class="form-control" rows="4"></textarea>
						</div>
					</div>
				</div>

			</div>
		</div>

		<button type="submit" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan Data</button>
		<a href="#" class="btn btn-lg btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus Data</a>
	</form>
  
  <hr>
  <footer>
    <p>© DMN GSJA 2015</p>
  </footer>
</div>

@stop