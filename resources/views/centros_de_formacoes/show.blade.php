@extends('centros_de_formacoes.layout')
@section('content')
<head> 
</head>

<body class="has-text-centered" align="center">
<div class="flex dark:hidden">
<br>
<div class="columns is-centered">
<div class="column has-text-black is-half " >
<p>

<h1> Nome do curso  </h1>
{{ $centros_de_formaco->nome }} 
</p>
<strong> teste Vagas : </strong>
{{ $centros_de_formaco->vagas }}
<br>
<h1> Localização : </h1><!--<iframe src="{{ $centros_de_formaco->localizacao }}"></frame>-->
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

<div class="field">
  <label class="label">Cursos</label>
  <div class="control">
    <input class="input" type="text" placeholder="Text " name="cadeiras"  value="{{$centros_de_formaco->cadeiras}}">
  </div>
</div>

<div class="field">
  <label class="label"> Preçario </label>
  <div class="control ">
    <input class="input is-success" type="text" placeholder="Text input" name="precario" value="{{$centros_de_formaco->precario }}">
  </div>
</div>

<div class="field">
  <label class="label">Data</label>
  <div class="control">
    <input class="input is-danger" type="text"  name='data' value="{{$centros_de_formaco->data}}">
  </div>
</div>

<div class="field">
  <label class="label">Tempo de Duração</label>
  <div class="control">
  <input class="input is-info" type="text" name='tempo_de_duracao' value="{{ $centros_de_formaco->tempo_de_duracao}}">       
 </div>
</div>

<div class="field">
  <label class="label">Horario</label>
  <div class="control">
    <textarea class="textarea" name="horario" placeholder="Insira as informações do curso" value="{{$centros_de_formaco->horario}}"></textarea>
  </div>
</div>

<div class="field is-grouped">
  <div class="control">
    <button class="button is-link" type="submit"> Publicar o curso </button>
  </div>
</form>
</div>
</div>
</div>
</body>
@endsection
