
@extends('centros_de_formacoes.layout')
@section('content')

<head>
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="has-text-centered" align="center">
<figure class=" image is-3by1" style="width:100%; ;   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
<img src="{{ asset('img/panel.jpg') }}" alt="description of myimage">
</figure>
<br>

<div class="container">
<br>
<div class="columns is-centered is-multiline ">
@foreach ($centros_de_formacoes as $centro)
<div class="column is-one-third">
<div class="card has-text-black has-background-light">
  <div class="card-image">
    <figure class="image is-3by1">
      <img src="{{ $centro->imglink }}" alt="Placeholder image"/>
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
@endsection
