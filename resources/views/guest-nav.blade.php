<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">DMN GSJA</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">

      <form class="navbar-form navbar-right" role="form" method="POST" action="{{ url('/auth/login') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
          <input placeholder="Username" class="form-control" type="text" name="username" value="{{ old('username') }}">
        </div>
        <div class="form-group">
          <input placeholder="Password" class="form-control" type="password" name="password">
        </div>
        <button type="submit" class="btn btn-success">Masuk</button>
      </form>

    </div><!--/.navbar-collapse -->
  </div>
</nav>

<style>
  body { padding-top:50px; }
  div.alert { position:fixed; top:70px; right:105px; z-index:999; }
</style>

@if(count($errors) > 0)
  <div class="alert alert-danger">
    @foreach ($errors->all() as $error)
      <p>{{ $error }}</p>
    @endforeach
  </div>
@endif