

@vite(['resources/css/app.css', 'resources/js/app.js'])
<html>
    <head>
        <title> @yield('title')</title>
   <nav class="navbar is-light" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="{{route('centros_de_formacoes.index')}}">
    <img src="{{URL::asset('https://th.bing.com/th/id/OIP.W-rR47Apq4tHQKuGrPS3ygAAAA?rs=1&pid=ImgDetMain')}}">
     </a>
    </div>
    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>
<div class="navbar-end">
      <div class="navbar-item">
            <strong>Sign up</strong>
        <a class="button is-primary has-text-white" href="{{ route('centros_de_formacoes.create') }}"> Criar novo centro</a>
      </div>
    </div>
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
