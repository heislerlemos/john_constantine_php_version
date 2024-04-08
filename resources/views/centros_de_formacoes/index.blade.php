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
<td>visualizar<a class="btn btn-info" href="{{ route('centros_de_formacoes.show',$centro->id) }}">Show</a></td>
</div>
@csrf
@endforeach
<a class="btn btn-success" href="{{ route('centros_de_formacoes.create') }}"> Create New Product</a>
</div>
</body>

@endsection
