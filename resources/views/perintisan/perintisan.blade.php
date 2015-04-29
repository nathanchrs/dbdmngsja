@extends('layout')

@section('title', 'DMN GSJA - Perintisan')

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
              @foreach(array_only($columnDescription, $searchableColumns) as $colkey => $colval)
                <option value="{{ $colkey }}" <?php if($colkey==old('searchcolumn')) echo 'selected'; ?>>{{ $colval }}</option>
              @endforeach
            </select>
          </div>
        </div>
      </form>
      
      <a href="{{ url('/perintisan').'/create' }}" class="btn btn-default navbar-btn"><span class="glyphicon glyphicon-plus"></span> Data Baru</a>
    </div>

  </div>
</div>

<div class="container-fluid">

  @if(Session::has('message'))
    <div class="alert alert-info">
      {{ Session::get('message') }}
    </div>
  @endif

  <div class="table-responsive">
    <table class="table" id="maintable">
      <thead>
        <tr>
          @foreach($visibleColumns as $col)
            <th>{{ $columnDescription[$col] }}</th>
          @endforeach
        </tr>
      </thead>
      <tbody>

        @forelse($data as $perintisan)
          <tr class="clickable" onclick="document.location='{{ url('/perintisan') }}/{{ $perintisan->id }}/edit';">
            <?php $firstColumn = true; ?>
            @foreach($visibleColumns as $col)
              <td>
                @if($firstColumn)
                  <a class="no-js-fallback" href="{{ url('/perintisan') }}/{{ $perintisan->id }}/edit"><span class="glyphicon glyphicon-chevron-right"></span></a>
                  <?php $firstColumn = false; ?>
                @endif
                {{ $perintisan[$col] }}
              </td>
            @endforeach
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

  <br>
  <footer>
    <p>© DMN GSJA 2015</p>
  </footer>
</div>

<script>
  $(window).load(function(){
    $('.table-responsive').floatingScrollbar();
  });
</script>

@stop