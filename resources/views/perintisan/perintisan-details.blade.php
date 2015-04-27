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
						<div class="form-group @if ($errors->has('namaperintisan')) has-error @endif">
							<label>{{ $columnDescription['namaperintisan'] }}</label>
							<input type="text" class="form-control" name="namaperintisan" value="{{ old('namaperintisan', isset($perintisan->namaperintisan) ? $perintisan->namaperintisan : '') }}">
							@if ($errors->has('namaperintisan')) <p class="help-block"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('namaperintisan') }}</p> @endif
						</div>
						<div class="form-group @if ($errors->has('jenisperintisan')) has-error @endif">
							<label>{{ $columnDescription['jenisperintisan'] }}</label>
							<input type="text" class="form-control" name="jenisperintisan" value="{{ old('jenisperintisan', isset($perintisan->jenisperintisan) ? $perintisan->jenisperintisan : '') }}">
							@if ($errors->has('jenisperintisan')) <p class="help-block"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('jenisperintisan') }}</p> @endif
						</div>
						<div class="form-group @if ($errors->has('daerah')) has-error @endif">
							<label>{{ $columnDescription['daerah'] }}</label>
							<input type="text" class="form-control" name="daerah" value="{{ old('daerah', isset($perintisan->daerah) ? $perintisan->daerah : '') }}">
							@if ($errors->has('daerah')) <p class="help-block"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('daerah') }}</p> @endif
						</div>
						<div class="form-group @if ($errors->has('alamat')) has-error @endif">
							<label>{{ $columnDescription['alamat'] }}</label>
							<textarea class="form-control" name="alamat" rows="4">{{ old('alamat', isset($perintisan->alamat) ? $perintisan->alamat : '') }}</textarea>
							@if ($errors->has('alamat')) <p class="help-block"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('alamat') }}</p> @endif
						</div>
						<div class="form-group @if ($errors->has('telepon')) has-error @endif">
							<label>{{ $columnDescription['telepon'] }}</label>
							<input type="text" class="form-control" name="telepon" value="{{ old('telepon', isset($perintisan->telepon) ? $perintisan->telepon : '') }}">
							@if ($errors->has('telepon')) <p class="help-block"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('telepon') }}</p> @endif
						</div>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						Informasi Perintis
					</div>
					<div class="panel-body">
						<div class="form-group @if ($errors->has('mulaiberdiri')) has-error @endif">
							<label>{{ $columnDescription['mulaiberdiri'] }}</label>
							<input type="text" class="form-control" name="mulaiberdiri" value="{{ old('mulaiberdiri', isset($perintisan->mulaiberdiri) ? $perintisan->mulaiberdiri : '') }}">
							@if ($errors->has('mulaiberdiri')) <p class="help-block"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('mulaiberdiri') }}</p> @endif
						</div>
						<div class="form-group @if ($errors->has('namaperintis')) has-error @endif">
							<label>{{ $columnDescription['namaperintis'] }}</label>
							<input type="text" class="form-control" name="namaperintis" value="{{ old('namaperintis', isset($perintisan->namaperintis) ? $perintisan->namaperintis : '') }}">
							@if ($errors->has('namaperintis')) <p class="help-block"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('namaperintis') }}</p> @endif
						</div>
						<div class="form-group @if ($errors->has('tempatlahir')) has-error @endif">
							<label>{{ $columnDescription['tempatlahir'] }}</label>
							<input type="text" class="form-control" name="tempatlahir" value="{{ old('tempatlahir', isset($perintisan->tempatlahir) ? $perintisan->tempatlahir : '') }}">
							@if ($errors->has('tempatlahir')) <p class="help-block"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('tempatlahir') }}</p> @endif
						</div>
						<div class="form-group @if ($errors->has('tanggallahir')) has-error @endif">
							<label>{{ $columnDescription['tanggallahir'] }}</label>
							<input type="text" class="form-control" name="tanggallahir" value="{{ old('tanggallahir', isset($perintisan->tanggallahir) ? $perintisan->tanggallahir : '') }}">
							@if ($errors->has('tanggallahir')) <p class="help-block"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('tanggallahir') }}</p> @endif
						</div>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						Informasi Organisasi
					</div>
					<div class="panel-body">
						<div class="form-group @if ($errors->has('gerejamentor')) has-error @endif">
							<label>{{ $columnDescription['gerejamentor'] }}</label>
							<input type="text" class="form-control" name="gerejamentor" value="{{ old('gerejamentor', isset($perintisan->gerejamentor) ? $perintisan->gerejamentor : '') }}">
							@if ($errors->has('gerejamentor')) <p class="help-block"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('gerejamentor') }}</p> @endif
						</div>
						<div class="form-group @if ($errors->has('departemen')) has-error @endif">
							<label>{{ $columnDescription['departemen'] }}</label>
							<input type="text" class="form-control" name="departemen" value="{{ old('departemen', isset($perintisan->departemen) ? $perintisan->departemen : '') }}">
							@if ($errors->has('departemen')) <p class="help-block"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('departemen') }}</p> @endif
						</div>
						<div class="form-group @if ($errors->has('bpd')) has-error @endif">
							<label>{{ $columnDescription['bpd'] }}</label>
							<input type="text" class="form-control" name="bpd" value="{{ old('bpd', isset($perintisan->bpd) ? $perintisan->bpd : '') }}">
							@if ($errors->has('bpd')) <p class="help-block"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('bpd') }}</p> @endif
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
						<div class="form-group @if ($errors->has('jemaatdewasa')) has-error @endif">
							<label>{{ $columnDescription['jemaatdewasa'] }}</label>
							<input type="text" class="form-control" name="jemaatdewasa" value="{{ old('jemaatdewasa', isset($perintisan->jemaatdewasa) ? $perintisan->jemaatdewasa : '') }}">
							@if ($errors->has('jemaatdewasa')) <p class="help-block"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('jemaatdewasa') }}</p> @endif
						</div>
						<div class="form-group @if ($errors->has('jemaatsm')) has-error @endif">
							<label>{{ $columnDescription['jemaatsm'] }}</label>
							<input type="text" class="form-control" name="jemaatsm" value="{{ old('jemaatsm', isset($perintisan->jemaatsm) ? $perintisan->jemaatsm : '') }}">
							@if ($errors->has('jemaatsm')) <p class="help-block"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('jemaatsm') }}</p> @endif
						</div>
						<div class="form-group @if ($errors->has('jemaatrkm')) has-error @endif">
							<label>{{ $columnDescription['jemaatrkm'] }}</label>
							<input type="text" class="form-control" name="jemaatrkm" value="{{ old('jemaatrkm', isset($perintisan->jemaatrkm) ? $perintisan->jemaatrkm : '') }}">
							@if ($errors->has('jemaatrkm')) <p class="help-block"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('jemaatrkm') }}</p> @endif
						</div>
						<div class="form-group @if ($errors->has('jemaatkka')) has-error @endif">
							<label>{{ $columnDescription['jemaatkka'] }}</label>
							<input type="text" class="form-control" name="jemaatkka" value="{{ old('jemaatkka', isset($perintisan->jemaatkka) ? $perintisan->jemaatkka : '') }}">
							@if ($errors->has('jemaatkka')) <p class="help-block"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('jemaatkka') }}</p> @endif
						</div>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						Keterangan Lainnya
					</div>
					<div class="panel-body">
						<div class="form-group @if ($errors->has('keterangan')) has-error @endif">
							<label>{{ $columnDescription['keterangan'] }}</label>
							<textarea class="form-control" name="keterangan" rows="4">{{ old('keterangan', isset($perintisan->keterangan) ? $perintisan->keterangan : '') }}</textarea>
							@if ($errors->has('keterangan')) <p class="help-block"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('keterangan') }}</p> @endif
						</div>
					</div>
				</div>

			</div>
		</div>

		<button type="submit" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan Data</button>
	</form>

	@if(isset($perintisan))
		<form style="margin-top:10px;" role="form" method="post" action="{{ url('/perintisan') }}{{ '/'.$perintisan->id }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="_method" value="DELETE">
			<button type="submit" class="btn btn-lg btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus Data</button>
		</form>
	@endif	

  <hr>
  <footer>
    <p>© DMN GSJA 2015</p>
  </footer>
</div>

@stop