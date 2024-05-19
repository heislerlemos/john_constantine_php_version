
@extends('centros_de_formacoes.layout')
@section('content')

<head>
@vite(['resources/css/app.css', 'resources/js/app.js'])

<style>
html {
    scroll-behavior: smooth;

}

</style>
</head>
<body class="has-text-centered" align="center">
<figure class="image is-3by1" style=" height:30%; width:100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
<img src="{{ asset('img/banner.jpg') }}" alt="description of myimage">
</figure>
<br>
<div align="center">
<div id="sessao1">
<a href="#sessao2"  class="title" style="border-bottom: 5px solid orange; width:25%; text-align: center;" >Universidades</a>
</div>
</div>
<br>
<br>
<div class="container">
<div class="columns is-centered">
<div class="column is-one-quarter">
<div class="card">
  <div class="card-image">
    <figure class="image is-4by3">
      <img
        src="{{ asset ('img/card.jpg')}}">
    </figure>
  </div> 



 <div class="card-content">
    <div class="content">
      coLorem ipsum dolor sit amet, consectetur adipiscing elit, 
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
     nisi ut aliquip ex ea commodo consequat
    . Duis aute irure dolor in reprehenderit in 
    voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
    laborum.nsectetur purus sit amet fermentum.
    </div>
  </div>
</div>
</div>
<div class="column is-half">
<div class="card">
<figure>
    <img src="{{ asset ('img/card_2.jpg')  }}"
</figure>
<div class="card">
  <footer class="card-footer">
    <a href="#" class="card-footer-item"><img src="{{ asset ('img/twitter.png')}}" style="width:100px; "></a>
    <a href="#" class="card-footer-item"><img src="{{ asset ('img/instagram.png')}}" style="width:100px; "></a>
    <a href="#" class="card-footer-item"><img src="{{ asset ('img/mail.png')}}" style="width:100px; "></a>
    <a href="#" class="card-footer-item"><img src="{{ asset ('img/whatsup.png')}}" style="width:100px; "></a>
    <a href="#" class="card-footer-item"><img src="{{ asset ('img/facebook.png')}}" style="width:100px; "></a>
  </footer>
</div>
</div>
</div>
</div>
</div>
<br>
<section class="hero is-warning" style=" height:25%; width:100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  >
  <div class="hero-body">
  </div>
</section>



<div class="container">
<br>
<div class="columns is-centered is-multiline ">
@foreach ($centros_de_formacoes as $centro)
<div class="column is-one-third">
<div class="card has-text-black has-background-light">
  <div class="card-image">
    <figure class="image is-3by1">
      <img src="{{ $centro->imglink }}"  alt="Placeholder image"/>
    </figure>
  </div>

  <div class="card-content">
<figure class="image is-3by1">
<iframe class="responsive-iframe" style="position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;"src="{{ $centro->localizacao }}" title="description" ></iframe>
</figure>
<td>Universidade :<b> {{ $centro->nome }} </b></td>
<br>
<td> Nº Total de Vagas :<b> {{ $centro->vagas }} </b></td> 
<form action="{{ route('centros_de_formacoes.destroy',$centro->id) }}" method="POST">
<footer class="card-footer" style="border-color:lightgrey;   box-shadow: 5px 5px lightblue;">
<a class="card-footer-item" style="border-color:lightgrey; color:black;" href="{{ route('centros_de_formacoes.show',$centro->id) }}" type="password">Ver</a>
@csrf
@method('DELETE')
<a class="card-footer-item" style="border-color:lightgrey; color:black;" href="{{ route('centros_de_formacoes.edit',$centro->id) }}"  required> Editar </a>
<!--<a type="submit" class="card-footer-item" style="color:black;"> Apagar </a> -->
</footer>
</form>
</div>
</div>
</div>
@endforeach
</div>
</div>
</body>
<br>
<div id="sessao2" align="center">
  <a class="title"  style="border-bottom: 5px solid orange; width:25%; text-align: center;" href="#sessao1">Inicio</a>
</div>
@endsection
