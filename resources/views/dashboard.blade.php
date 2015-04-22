@extends('layout')

@section('title', 'DMN GSJA - Dashboard')

@section('content')

<style>
  body { padding-top:235px; }
  @media (min-width: 768px){
    body { padding-top:105px; }
  }
</style>

<div class="navbar navbar-default navbar-fixed-top databar">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Perintisan {{ isset($search) ? ' - '.$search : ''}}</a>
    </div>
      
    <form class="navbar-form navbar-left" role="search" method="get" action="{{ url('/dashboard') }}">
      <div class="form-group">
        <div class="input-group">
          <input type="text" name="search" class="form-control" placeholder="Cari" value="{{ $search or '' }}">
          <span class="input-group-btn">
            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
          </span>
        </div>
      </div>
    </form>
    
    <a href="#" class="btn btn-default navbar-btn"><span class="glyphicon glyphicon-plus"></span> Data Baru</a>
    <a href="#" class="btn btn-default navbar-btn"><span class="glyphicon glyphicon-cog"></span> Pengaturan</a>

  </div>
</div>

<div class="container-fluid">
  <div class="table-responsive">
    <table class="table table-striped">
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
          <tr>
            <td>{{ $perintisan->namaperintisan }}</td>
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
    <ul class="pagination">
      <li>
        <a href="#" aria-label="Kembali">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <li class="active" ><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li>
        <a href="#" aria-label="Lanjut">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    </ul>
  </nav>

  <footer>
    <p>© DMN GSJA 2015</p>
  </footer>
</div>

@stop