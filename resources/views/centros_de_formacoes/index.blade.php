@extends('centros_de_formacoes.layout')


@section('content')


<h1> Pagina principal do centro de formação </h1>

@foreach ($centros_de_formacoes as $centro)
<td>{{ $centro->nome }}</td>

<iframe src="{{ $centro->localizacao }}" title="description"></iframe>
<td>{{ $centro->vagas }}</td>

@csrf
@endforeach

@endsection
