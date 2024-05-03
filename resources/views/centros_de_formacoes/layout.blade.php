



@vite(['resources/css/app.css', 'resources/js/app.js'])
<html>
    <head>
        <title> @yield('title')</title>

 <form method="get" action="/procurar">
 <nav class="navbar " role="navigation" aria-label="main navigation">
 <div class="navbar-item"> 
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

</div>
    <div class="navbar-item">
      <div class="field has-addons">
        <p class="control ">
          <input class="input" type="text" name="procurar"  placeholder="Encontrar universidade" />
        </p>
        <p class="control">
          <button class="button is-link is-outlined">Search</button>
        </p>
      </div>
    </div>

    <div class="navbar-item">
<div class="dropdown is-hoverable">
  <div class="dropdown-trigger">
    <button class="button is-link is-outlined" aria-haspopup="true" aria-controls="dropdown-menu">
      <span>Universidades Disponiveis</span>
      <span class="icon is-small">
        <i class="fas fa-angle-down" aria-hidden="true"></i>
      </span>
    </button>
  </div>
  <div class="dropdown-menu" id="dropdown-menu" role="menu">
    <div class="dropdown-content">
      <a href="/procurar?procurar=Lusiada" class="dropdown-item"> Lusiada </a>
      <a class="dropdown-item"> Unibelas </a>
      <a href="/procurar?procurar=Ugs" class="dropdown-item"> Gregorio Semedo </a>
      <a href="/procurar?procurar=Jean Piaget" class="dropdown-item"> Jean Piaget</a>
      <hr class="dropdown-divider" />
      <a href="/procurar?procurar=heisler" class="dropdown-item"> Outras </a>
    </div>
  </div>
</div>
</div>


<div class="navbar-end">
      <div class="navbar-item">
        <a class="button is-link  is-outlined" href="{{ route('centros_de_formacoes.create') }}"> Criar novo centro</a>
      </div>
    </div>
  </div>

</nav>
    </form>
     </head>
    <body>
        @section('sidebar')
        @show
        @yield('content')


    </body>
</html>
