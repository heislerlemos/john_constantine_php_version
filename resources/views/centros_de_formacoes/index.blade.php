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
<iframe src="{{ $centro->localizacao }}" title="description"></iframe><hr>
<td>Centro Nº {{$centro->id}} : {{ $centro->nome }}</td><hr>
<td>Vagas : {{ $centro->vagas }}</td><hr>
<a class="button is-info has-text-white" href="{{ route('centros_de_formacoes.show',$centro->id) }}">Show</a>
<hr>
</div>
</div>
@csrf
@endforeach
</div>
</body>

@endsection
