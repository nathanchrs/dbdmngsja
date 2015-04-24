@extends('layout')

@section('title', 'DMN GSJA - Dashboard')

@section('content')

<style>
  body { padding-top:115px; }
</style>

<div class="navbar navbar-default navbar-fixed-top databar">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#databar-collapse">
        <span class="sr-only">Toggle databar</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Perintisan</a>
    </div>
      
    <div class="collapse navbar-collapse" id="databar-collapse">
      <form class="navbar-form navbar-left" role="search" method="get" action="{{ url('/perintisan') }}">
        <div class="form-group">
          <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari" value="{{ old('search') }}">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
            </span>
          </div>
        </div>

        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon">berdasarkan</span>
            <select class="form-control" name="searchcolumn">
              @foreach($validcolumns as $colkey => $colval)
                <option value="{{ $colkey }}" <?php if($colkey==old('searchcolumn')) echo 'selected'; ?>>{{ $colval }}</option>
              @endforeach
            </select>
          </div>
        </div>
      </form>
      
      <a href="{{ url('/perintisan').'/create' }}" class="btn btn-default navbar-btn"><span class="glyphicon glyphicon-plus"></span> Data Baru</a>
      <a href="#" class="btn btn-default navbar-btn"><span class="glyphicon glyphicon-cog"></span> Pengaturan</a>
    </div>

  </div>
</div>

<div class="container-fluid">
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>Nama Perintisan</th>
          <th>Alamat</th>
          <th>Departemen</th>
          <th>Daerah</th>
          <th>Telepon</th>
        </tr>
      </thead>
      <tbody>
        @forelse($data as $perintisan)
          <tr class="clickable" onclick="document.location='{{ url('/perintisan') }}/{{ $perintisan->id }}/edit';">
            <td><a href="{{ url('/perintisan') }}/{{ $perintisan->id }}/edit">{{ $perintisan->namaperintisan }}</a></td>
            <td>{{ $perintisan->alamat }}</td>
            <td>{{ $perintisan->departemen }}</td>
            <td>{{ $perintisan->daerah }}</td>
            <td>{{ $perintisan->telepon }}</td>
          </tr>
        @empty
          <tr><td>Tidak ada data.</td></tr>
        @endforelse
      </tbody>
    </table>
  </div>

  <nav>
    {!! $data->render() !!}
  </nav>

  <footer>
    <p>© DMN GSJA 2015</p>
  </footer>
</div>

@stop