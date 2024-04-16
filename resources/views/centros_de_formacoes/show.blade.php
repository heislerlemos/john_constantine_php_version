@extends('centros_de_formacoes.layout')
@section('content')
<head> 
</head>
<br>
<div class="columns">
<div class="column">
<p>

<h1> Nome teste : </h1>
{{ $centros_de_formaco->nome }} 
</p>
<strong> teste Vagas : </strong>
{{ $centros_de_formaco->vagas }}
<br>
<h1> Localização : </h1>
<!--<iframe src="{{ $centros_de_formaco->localizacao }}"></frame>-->
</p>
<p>
</p>
@foreach($centros_de_formaco->cursos as $curso ) 

{{$curso->id}}
{{ $curso->cadeiras}}
{{ $curso->data }}
{{$curso->horario }}
@endforeach

<br>
<form action="{{route("centros_de_formacoes.cursos.store",$centros_de_formaco->id)}}" method="POST">
@csrf <!-- {{ csrf_field() }} -->
<p> Cadeiras </p>
<textarea name="cadeiras"></textarea>
<p>Horario</p>
<textarea name="horario"></textarea>
<p> Data</p>
<textarea name="data"></textarea>
<p>Tempo_de_Duracao</p>
<textarea name="tempo_de_duracao"></textarea>
<p> Precario </p>
<textarea name="precario"></textarea>
<button type="submit"> Publicar o curso </button>
</form>

</div>
</div>
@endsection
