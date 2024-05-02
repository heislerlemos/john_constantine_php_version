



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
  <div class="level-left">
    <div class="level-item">
      <div class="field has-addons">
        <p class="control">
          <input class="input" type="text" placeholder="Encontrar universidade" />
        </p>
        <p class="control">
          <button class="button">Search</button>
        </p>
      </div>
    </div>
  
    <div class="level-item">
<div class="dropdown is-hoverable">
  <div class="dropdown-trigger">
    <button class="button" aria-haspopup="true" aria-controls="dropdown-menu">
      <span>Universidades Disponiveis</span>
      <span class="icon is-small">
        <i class="fas fa-angle-down" aria-hidden="true"></i>
      </span>
    </button>
  </div>
  <div class="dropdown-menu" id="dropdown-menu" role="menu">
    <div class="dropdown-content">
      <a href="#" class="dropdown-item"> Dropdown item </a>
      <a class="dropdown-item"> Other dropdown item </a>
      <a href="#" class="dropdown-item"> Active dropdown item </a>
      <a href="#" class="dropdown-item"> Other dropdown item </a>
      <hr class="dropdown-divider" />
      <a href="#" class="dropdown-item"> With a divider </a>
    </div>
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

     </head>
    <body>
        @section('sidebar')
        @show

        
            @yield('content')
        

    </body>
</html>
