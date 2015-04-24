@extends('layout')

@section('title', 'DMN GSJA - Detail Perintisan')

@section('content')

<div class="container-fluid">

	<h1>{{ $perintisan->namaperintisan or 'Perintisan Baru' }}</h1>
	
	<ol class="breadcrumb" style="background-color:transparent; padding:2px;">
		<li><a href="{{ url('/perintisan') }}">Perintisan</a></li>
		<li class="active">Detail Perintisan</li>
	</ol>

	<form role="form" method="post" action="{{ url('/perintisan') }}{{ $method=='PUT' ? '/'.$perintisan->id : '' }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="{{ $method or 'POST' }}">

		<div class="row">
			<div class="col-sm-6">

				<div class="panel panel-default">
					<div class="panel-heading">
						Informasi Umum
					</div>
					<div class="panel-body">
						<div class="form-group">
							<label>Nama perintisan</label>
							<input type="text" class="form-control" name="namaperintisan" value="{{ old('namaperintisan', isset($perintisan->namaperintisan) ? $perintisan->namaperintisan : '') }}">
						</div>
						<div class="form-group">
							<label>Jenis perintisan</label>
							<input type="text" class="form-control" name="jenisperintisan" value="{{ old('jenisperintisan', isset($perintisan->jenisperintisan) ? $perintisan->jenisperintisan : '') }}">
						</div>
						<div class="form-group">
							<label>Daerah</label>
							<input type="text" class="form-control" name="daerah" value="{{ old('daerah', isset($perintisan->daerah) ? $perintisan->daerah : '') }}">
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<textarea class="form-control" rows="4" name="alamat">{{ old('alamat', isset($perintisan->alamat) ? $perintisan->alamat : '') }}</textarea>
						</div>
						<div class="form-group">
							<label>Telepon</label>
							<input type="text" class="form-control" name="telepon" value="{{ old('telepon', isset($perintisan->telepon) ? $perintisan->telepon : '') }}">
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
							<input type="text" class="form-control" name="mulaiberdiri" value="{{ old('mulaiberdiri', isset($perintisan->mulaiberdiri) ? $perintisan->mulaiberdiri : '') }}">
						</div>
						<div class="form-group">
							<label>Perintis</label>
							<input type="text" class="form-control" name="namaperintis" value="{{ old('namaperintis', isset($perintisan->namaperintis) ? $perintisan->namaperintis : '') }}">
						</div>
						<div class="form-group">
							<label>Tempat lahir perintis</label>
							<input type="text" class="form-control" name="tempatlahir" value="{{ old('tempatlahir', isset($perintisan->tempatlahir) ? $perintisan->tempatlahir : '') }}">
						</div>
						<div class="form-group">
							<label>Tanggal lahir perintis</label>
							<input type="text" class="form-control" name="tanggallahir" value="{{ old('tanggallahir', isset($perintisan->tanggallahir) ? $perintisan->tanggallahir : '') }}">
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
							<input type="text" class="form-control" name="gerejamentor" value="{{ old('gerejamentor', isset($perintisan->gerejamentor) ? $perintisan->gerejamentor : '') }}">
						</div>
						<div class="form-group">
							<label>Departemen</label>
							<input type="text" class="form-control" name="departemen" value="{{ old('departemen', isset($perintisan->departemen) ? $perintisan->departemen : '') }}">
						</div>
						<div class="form-group">
							<label>BPD</label>
							<input type="text" class="form-control" name="bpd" value="{{ old('bpd', isset($perintisan->bpd) ? $perintisan->bpd : '') }}">
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
							<input type="text" class="form-control" name="jemaatdewasa" value="{{ old('jemaatdewasa', isset($perintisan->jemaatdewasa) ? $perintisan->jemaatdewasa : '') }}">
						</div>
						<div class="form-group">
							<label>Jumlah jemaat Sekolah Minggu</label>
							<input type="text" class="form-control" name="jemaatsm" value="{{ old('jemaatsm', isset($perintisan->jemaatsm) ? $perintisan->jemaatsm : '') }}">
						</div>
						<div class="form-group">
							<label>Jumlah jemaat RKM</label>
							<input type="text" class="form-control" name="jemaatrkm" value="{{ old('jemaatrkm', isset($perintisan->jemaatrkm) ? $perintisan->jemaatrkm : '') }}">
						</div>
						<div class="form-group">
							<label>Jumlah jemaat KKA</label>
							<input type="text" class="form-control" name="jemaatkka" value="{{ old('jemaatkka', isset($perintisan->jemaatkka) ? $perintisan->jemaatkka : '') }}">
						</div>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						Keterangan Lainnya
					</div>
					<div class="panel-body">
						<div class="form-group">
							<textarea class="form-control" rows="4" name="keterangan">{{ old('keterangan', isset($perintisan->keterangan) ? $perintisan->keterangan : '') }}</textarea>
						</div>
					</div>
				</div>

			</div>
		</div>

		<button type="submit" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan Data</button>
		@if(isset($perintisan))
			<form role="form" method="post" action="{{ url('/perintisan') }}{{ '/'.$perintisan->id }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="_method" value="DELETE">
				<button type="submit" class="btn btn-lg btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus Data</button>
			</form>
		@endif
	</form>

	

  <hr>
  <footer>
    <p>© DMN GSJA 2015</p>
  </footer>
</div>

@stop