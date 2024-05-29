@extends('centros_de_formacoes.layout')
@section('content')


<head>
@vite(['resources/css/app.css', 'resources/js/app.js' , 
        'resources/js/index.js', 
        'resources/css/index.css'])
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body class="has-text-centered" align="center">
<figure class="image is-3by1" style=" height:35%; width:100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
<img src="{{ asset('img/banner.jpg') }}" alt="description of myimage">
</figure>
<br>
<div align="center">
<div id="sessao1">
<a id="univ" href="#sessao2"  class="title">Universidade</a>
</div>
</div>
<br>
<br>
<div class="container">
<div class="columns is-centered">
<div class="column is-one-third">
<div class="card">
  <div class="card-image">
    <figure class="image is-4by3">
      <img
        src="{{ asset ('img/card.jpg')}}">
    </figure>
  </div> 

 <div class="card-content">
    <div class="content">
      O nosso objectivo é ajudar os estudantes a encontrar informações sobre instituições de ensino superior <hr>
    </div>
  </div>
</div>
</div>
<div class="column is-half">
<div class="card">
<div class="card-content">
<figure>
    <img src="{{ asset ('img/card_2.jpg')  }}"
</figure>
</div>
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
<br>
<br>
<section class="hero is-warning" style=" height:20%; width:100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"  >
  <div class="hero-body">
 <p class="title">Lista corrente</p>
    <p class="subtitle">Veja as informações mais atualizadas das nossas universidades 2024/2025</p>
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
<td>Universidade :<b> {{ $centro->nome }} </b></td>
<br>
<td> Nº Total de Vagas :<b> {{ $centro->vagas }} </b></td> 
<form action="{{ route('centros_de_formacoes.destroy',$centro->id) }}" method="POST">
<footer class="card-footer" style="border-color:lightgrey;   box-shadow: 5px 5px orange;">
<a class="card-footer-item" style="border-color:lightgrey; color:black;" href="{{ route('centros_de_formacoes.show',$centro->id) }}" type="password">Ver</a>
@csrf
@method('DELETE')
<a class="card-footer-item" style="border-color:lightgrey; color:black;" href="centros_de_formacoes/{{$centro->id}}/edit"  required> Editar </a>
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
  <a class="title" id="volt"  href="#sessao1">Inicio</a>
</div>
@endsection
