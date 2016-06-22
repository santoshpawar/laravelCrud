
    <!doctype html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My gallery App</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css">
    <link rel="stylesheet" href="{{url(elixir('css/all.css'))}}">
        <script type="text/javascript">
            var basUrl="{{url('/')}}";
        </script>
    </head>
    <body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ route('home') }}">Tasks</a>
    </div>
    <div class="nav navbar-nav navbar-right">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('tasks.index') }}">Tasks</a></li>
        <li><a href="{{url('gallery/list')}}">Gallery</a></li>



        <!-- view/layouts/base.blade.php -->
        @if(Auth::guest())

        @else

           <li class="pull-right"> <a href="{{ route('logout') }}">logout</a></li>
        @endif

    </div>
  </div>
</nav>

    <div class="container">
    @if(Session::has('flash_message'))
        <div class="alert alert-success">{{Session::get('flash_message')}}</div>
    @endif
    @if(Session::has('flash_error'))
        <div class="alert alert-danger">{{Session::get('flash_error')}}</div>
    @endif
     @yield('content')
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.js"></script>
    <script type="text/javascript" src="{{asset('js/vendor/vendor.js')}}"></script>
    <script type="text/javascript" src="{{url(elixir('js/all.js'))}}"></script>
 
    </body>
    </html>
