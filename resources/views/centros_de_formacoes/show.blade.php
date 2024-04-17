@extends('centros_de_formacoes.layout')
@section('content')
<head> 
</head>

<body class="has-text-centered hast-text-black has-background-white" align="center">
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

<div class="field">
  <label class="label">Cadeira</label>
  <div class="control">
    <input class="input" type="text" placeholder="Text ">
  </div>
</div>

<div class="field">
  <label class="label">Username</label>
  <div class="control has-icons-left has-icons-right">
    <input class="input is-success" type="text" placeholder="Text input" value="bulma">
    <span class="icon is-small is-left">
      <i class="fas fa-user"></i>
    </span>
    <span class="icon is-small is-right">
      <i class="fas fa-check"></i>
    </span>
  </div>
  <p class="help is-success">This username is available</p>
</div>

<div class="field">
  <label class="label">Email</label>
  <div class="control has-icons-left has-icons-right">
    <input class="input is-danger" type="email" placeholder="Email input" value="hello@">
    <span class="icon is-small is-left">
      <i class="fas fa-envelope"></i>
    </span>
    <span class="icon is-small is-right">
      <i class="fas fa-exclamation-triangle"></i>
    </span>
  </div>
  <p class="help is-danger">This email is invalid</p>
</div>

<div class="field">
  <label class="label">Subject</label>
  <div class="control">
    <div class="select">
      <select>
        <option>Select dropdown</option>
        <option>With options</option>
      </select>
    </div>
  </div>
</div>

<div class="field">
  <label class="label">Message</label>
  <div class="control">
    <textarea class="textarea" placeholder="Textarea"></textarea>
  </div>
</div>

<div class="field">
  <div class="control">
    <label class="checkbox">
      <input type="checkbox">
      I agree to the <a href="#">terms and conditions</a>
    </label>
  </div>
</div>

<div class="field">
  <div class="control">
    <label class="radio">
      <input type="radio" name="question">
      Yes
    </label>
    <label class="radio">
      <input type="radio" name="question">
      No
    </label>
  </div>
</div>

<div class="field is-grouped">
  <div class="control">
    <button class="button is-link">Submit</button>
  </div>
  <div class="control">
    <button class="button is-link is-light">Cancel</button>
  </div>
</div>














</div>
</div>
</div>
</body>
@endsection
