

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@vite(['resources/css/layout.css', 'resources/js/layout.js', 'resources/css/app.css', 'resources/js/app.js'])


<title> @yield('title')</title>

<!---Navbar responsivo --->


<div class="navbarmobile">
<ul>
  <li><a class="active" href="{{route('centros_de_formacoes.index')}}">Inicio</a></li>
  <li><a href="{{route ('centros_de_formacoes.create')}}">Criar</a></li>
</ul>
</div>


<!-- Navbar normal --> :
<form method="get" action="/procurar">
 <div class="header"  id="myHeader">
   <nav class="navbar is-dark" style="position: fixed;top: 0px; width:100%;" role="navigation"  aria-label="main navigation">
<div class="navbar-brand">
<div class="navbar-item">
<a class="navbar-item" href="{{route('centros_de_formacoes.index')}}">
<img src="{{ URL::asset ('img/logo_site.png')}}">
</a>
</div>
</div>


<div class="navbar-item"> 
    <a class="navbar-item" href="{{route('centros_de_formacoes.index')}}">
    <img src="{{URL::asset('img/home.png')}}">
    </a>
</div>


<div class="navbar-item">
 <div class="dropdown is-hoverable">
  <div class="dropdown-trigger">
    <a aria-haspopup="true" aria-controls="dropdown-menu">
    <img src="{{URL::asset ('img/dropdown.png')}}" > 
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
            <input class="input is-warning" style="width:600px;"type="text" name="procurar"   placeholder="Encontrar universidade" />
         </p>
         <p class="control">
            <button class="button is-warning ">Procurar</button>
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
  </nav>
 </div>
</form>
</head>
<br>


<div class="content">
    <body>
        @show
        @yield('content')




</div>
</body>




<!--- Isto têm que ser refaturador-->
@if (url()->current() == 'http://localhost:8080/centros_de_formacoes/create')

<footer style="width:100%;left:0;bottom:0;box-shadow:0 0 5px 5px lightblue; position:fixed;">
<img src="{{ URL::asset ('img/footer.jpg')}}" style="width:100%" >
</footer>
@else
<footer style="width:100%;left: 0; bottom:0;box-shadow:0 0 5px 5px lightblue">
<img src="{{ URL::asset ('img/footer.jpg')}}" style="width:100%" >
 </footer>
@endif
</html>
