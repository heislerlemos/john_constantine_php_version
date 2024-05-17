



@vite(['resources/css/app.css', 'resources/js/app.js'])
<html>
    <head>
        <title> @yield('title')</title>

 <form method="get" action="/procurar">
 <nav class="navbar " role="navigation" aria-label="main navigation">
 <div class="navbar-item"> 
<div class="navbar-brand">
    <a class="navbar-item" href="{{route('centros_de_formacoes.index')}}">
    <img src="{{URL::asset('img/home.png')}}">
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
<div class="dropdown is-hoverable">
  <div class="dropdown-trigger">
    <a aria-haspopup="true" aria-controls="dropdown-menu">
    <img src="{{URL::asset ('img/dropdown.png')}}"  > 
  </a>
  </div>
  <div class="dropdown-menu" id="dropdown-menu" role="menu">
    <div class="dropdown-content">
      <a href="/procurar?procurar=Universidade Agostinho Neto" class="dropdown-item">Universidade Agostinho Neto </a>
      <a href="/procurar?procurar=Universidade Catolica" class="dropdown-item"> Universidade Catolica</a>
      <a href="/procurar?procurar=Universidade Óscar Ribras" class="dropdown-item">Universidade Óscar Ribras</a>
      <a href="/procurar?procurar=Universidade Independente de Angola" class="dropdown-item"> Universidade Independente de Angola </a>
      <a href="/procurar?procurar=Universidade Grégorio Semedo" class="dropdown-item" > Universidade Grégorio Semedo </a>
      <a href="/procurar?procurar=Universidade Metodista de Angola" class="dropdown-item"> Universidade Metodista de Angola </a>
      <a href="/procurar?procurar=Universidade Lusíadas" class="dropdown-item"> Universidade Lusíadas </a>
      <a href="/procurar?procurar=Universidade Jean Piaget" class="dropdown-item"> Universidade Jean Piaget </a>
      <a href="/procurar?procurar=Universidade Upra Angola" class="dropdown-item"> Universidade Upra Angola </a>        
      <hr class="dropdown-divider" />
      <a href="/centros_de_formacoes" class="dropdown-item"> Todas </a>
    </div>
  </div>
</div>
</div>
    <div class="navbar-item"></div>
    <div class="navbar-item"></div>
    <div class="navbar-item"></div>
    <div class="navbar-item"></div>
    <div class="navbar-item"></div>
    <div class="navbar-item"></div>
    <div class="navbar-item"></div>
    <div class="navbar-item"></div>
    <div class="navbar-item"></div>
    <div class="navbar-item"></div>


      <div class="navbar-item">
       <div class="field has-addons">
          <p class="control ">
            <input class="input is-danger" style="width:600px"type="text" name="procurar"   placeholder="Encontrar universidade" />
         </p>
         <p class="control">
            <button class="button is-danger is-outlined">Procurar</button>
          </p>
        </div>
      </div>


<div class="navbar-end">
      <div class="navbar-item">
        <a href="{{route ('centros_de_formacoes.create')}}">
        <img src="{{ URL::asset ('img/create.png')}}">
        </a> 
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
<br>
<footer>
<img src="{{ URL::asset ('img/footer.jpg')}}" style="width:100%" >
</footer>


</html>
