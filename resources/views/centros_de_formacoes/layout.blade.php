

<html>

<style>

body {
background-color: white;

}

.header {
  position:relative;
  z-index:1000; 

}
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 102px;
}

.navbarmobile {
display:none;

}

@media screen and (max-width: 1020px) {

  .navbar {
    display:none; /* The width is 100%, when the viewport is 800px or smaller */
  }
  
  .navbarmobile {
    display:block;
  }
ul {
  list-style-type: none;
  margin: 0;
  position: fixed;
  width: 100%;
  height: 10.5%;
  padding: 0;
  z-index:1000;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

}
</style>


<!--- Estes estilos irão ir para o directorio css -->


<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@vite(['resources/css/app.css', 'resources/js/app.js'])
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


<div class="navbar-item"> 
 <div class="navbar-brand">
    <a class="navbar-item" href="{{route('centros_de_formacoes.index')}}">
    <img src="{{URL::asset('img/home.png')}}">
    </a>
</div>
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
<br>

</head>



<div class="content">
    <body>
        @show
        @yield('content')






<!--- Javacript codigo -->

<script>
/*** navbar burger menu **/

document.addEventListener('DOMContentLoaded', () => {

const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

$navbarBurgers.forEach( el => {
el.addEventListener('click', () => {

const target = el.dataset.target;
const $target = document.getElementById(target);

el.classList.toggle('is-active');
$target.classList.toggle('is-active');

});
});

});



/** stiky navbar **/

window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}
</script>


</div>
</body>

@if (url()->current() == 'http://localhost:8080/centros_de_formacoes/create' || url()->current() == 'http://localhost:8080/centros_de_formacoes/1/edit')
<footer style="width:100%;left:0;bottom:0;box-shadow:0 0 5px 5px lightblue; position:fixed;">
<img src="{{ URL::asset ('img/footer.jpg')}}" style="width:100%" >
</footer>
@else
<footer style="width:100%;left: 0; bottom:0;box-shadow:0 0 5px 5px lightblue">
<img src="{{ URL::asset ('img/footer.jpg')}}" style="width:100%" >
 </footer>
@endif
</html>
