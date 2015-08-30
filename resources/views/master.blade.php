
    <!doctype html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My gallery App</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{url(elixir('css/all.css'))}}">
        <script type="text/javascript">
            var basUrl="{{url('/')}}";
        </script>
    </head>
    <body>


    <div class="container">
        @yield('content')
    </div>

    <script type="text/javascript" src="{{asset('js/vendor/vendor.js')}}"></script>
    <script type="text/javascript" src="{{url(elixir('js/all.js'))}}"></script>

    <!--
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Tasks</a>
        </div>
        <div class="nav navbar-nav navbar-right">
            <li><a href="#">Home</a></li>
            <li><a href="#">Tasks</a></li>
        </div>
      </div>
    </nav>

    <main>
        <div class="container">
            yield('content')
        </div>
    </main>
    -->
    </body>
    </html>