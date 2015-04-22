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
      <a class="navbar-brand" href="#">Perintisan</a>
    </div>
      
    <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Cari">
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
          <th>#</th>
          <th>Header</th>
          <th>Header</th>
          <th>Header</th>
          <th>Header</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1,001</td>
          <td>Lorem</td>
          <td>ipsum</td>
          <td>dolor</td>
          <td>sit</td>
        </tr>
        <tr>
          <td>1,002</td>
          <td>amet</td>
          <td>consectetur</td>
          <td>adipiscing</td>
          <td>elit</td>
        </tr>
        <tr>
          <td>1,003</td>
          <td>Integer</td>
          <td>nec</td>
          <td>odio</td>
          <td>Praesent</td>
        </tr>
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