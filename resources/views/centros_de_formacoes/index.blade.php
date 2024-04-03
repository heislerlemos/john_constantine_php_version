@extends('centros_de_formacoes.layout')

@section('content')

<head>
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<br>
<body class="has-text-centered has-text-black has-background-white" align="center">
<br>
  <div class="columns is-multiline ">
@foreach ($centros_de_formacoes as $centro)
<div class="column">
<td>{{ $centro->nome }}</td>
<iframe src="{{ $centro->localizacao }}" title="description"></iframe>
<td>{{ $centro->vagas }}</td>
</div>
@csrf
@endforeach
</div>
</body>

@endsection
