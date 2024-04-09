@extends('centros_de_formacoes.layout')

@section('content')


<head>
@vite(['resources/css/app.css', 'resources/js/app.js'])

<style>
hr {
height: 0;
}

</style>
</head>
<br>
<body class="has-text-centered has-text-black has-background-white" align="center">
<figure class=" image is-3by1">
<img src="{{ asset('img/fundo.jpg') }}" alt="description of myimage">
</figure>
<br>
<div class="columns is-multiline ">
@foreach ($centros_de_formacoes as $centro)
<div class="column">
<div class="card has-text-black has-background-light">
  <div class="card-image">
    <figure class="image image is-3by1">
      <img src="{{ $centro->imglink }}" alt="Placeholder image"/>
    </figure>
  </div>
  <div class="card-content">
<figure class="image image is-3by1">
<iframe src="{{ $centro->localizacao }}" title="description" width="350" height="200"></iframe>
</figure>
<td>Centro Nº {{$centro->id}} : {{ $centro->nome }}</td>
<br>
<td>Vagas : {{ $centro->vagas }}</td>
<form action="{{ route('centros_de_formacoes.destroy',$centro->id) }}" method="POST">
<footer class="card-footer" style="border-color:lightgrey;   box-shadow: 5px 5px lightblue;">
<a class="card-footer-item" style="border-color:lightgrey; color:black;" href="{{ route('centros_de_formacoes.show',$centro->id) }}">Show</a>
@csrf
@method('DELETE')
<a type="submit" class="card-footer-item" style="color:black;"> Apagar </a>
</footer>
</form>
</div>
</div>
</div>
@endforeach
</div>
</body>
@endsection
