

<html>
    <head>
        <title> @yield('title')</title>
   <nav class="navbar is-light" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item">
    <img src="{{URL::asset('https://ula.co.ao/assets/imagens/ula/LOGO_ULA-01.png')}}">

     </a>
      <div class="navbar-end">
        <a class="navbar-item">

        </a>
      </div>
    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>
</nav>

     </head>
    <body>
        @section('sidebar')
        @show

        <div class="container">
            @yield('content')
        </div>

    </body>
</html>
