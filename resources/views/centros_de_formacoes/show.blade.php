@extends('centros_de_formacoes.layout')
@section('content')
<body class="has-text-centered" align="center">
<img src="<?php echo asset("img/{$centros_de_formaco->imagemfau}")?>" style="width:100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
<br>
<br>
<br>
<div class="container">
<div class="columns is-centered">
<div class="column is-half">

<img src="{{ asset ('img/avatar.png')}}">
</div>
<div class="column is-half">
<p class="title" style="color: orange; "> Localização </p>
<br>
<iframe src="{{ $centros_de_formaco->localizacao }}" width="650" height="500" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" ></iframe>
</div>
</div>
</div>
</div>
<br>
<div class="container">

<section class="hero is-link">
  <div class="hero-body">
    <p class="title">Cursos de Licenciaturas </p>
    <p class="subtitle">Lista dos cursos disponiveis e actulizados até a data de hoje</p>
  </div>
</section>

<br>
<div class="columns is-mobile is-multiline">

@foreach($centros_de_formaco->cursos as $curso ) 
<div class="column is-half">

<div class="card ">
  <div class="card-content  has-text-centered ">
<div class="content"> 
<h6> Curso :  {{ $curso->cadeiras}} </h6>
</div>
<div class="content">
<p> Data de inicio  {{ $curso->data }} </p>
</div>

<hr>
  <div class="content">
  <div class="dropdown is-hoverable">
    <div class="dropdown-trigger">
       <button class="button is-success" style="color:white;" aria-haspopup="true" aria-controls="dropdown-menu3">   
      <span>Aulas </span>
     </button>
    </div>
    <div class="dropdown-menu" id="dropdown-menu3" role="menu">
      <div class="dropdown-content">
        <div class="dropdown-item">
        <img src="https://drive.google.com/thumbnail?id=1z6wr7IEDwWckV4gihBMO1pP4EdgTq0IG" style="width:500px;">
        </div>
     </div>
    </div>                                                                                                                                                                                 
     </div>
  </div>
 





<div class="content">
<div class="dropdown is-hoverable">
  <div class="dropdown-trigger">
     <button class="button is-primary" style="color:white;" aria-haspopup="true" aria-controls="dropdown-menu2">
      <span>Documentos necessario de matricula </span>
    </button>
  </div>
  <div class="dropdown-menu" id="dropdown-menu2" role="menu">
    <div class="dropdown-content">
      <div class="dropdown-item">
        <p>
         {{ $curso -> documentos }}
        </p>
      </div>
    </div>
  </div>
</div>
</div>







<hr>

<div class="content">
<p> Tempo de Duração : {{ $curso ->  tempo_de_duracao }} Anos
</div>  

<div class="content">
<p> Proprina : {{ $curso ->  precario }} mil kwanzas
</div> 
  </div>
</div>

</div>
@endforeach
</div>
</div>
<br>
<div class="container">
<section class="hero is-warning">
  <div class="hero-body">
    <p class="title">Admnistração</p>
    <p class="subtitle">So a administração pode submeter cursos </p>
  </div>
</section>
</div>
<div class="columns is-centered" >
<div class="column has-text-black is-half">
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
  <label class="label">Documentos</label>
  <div class="control">
    <textarea class="textarea" name="documentos" placeholder="Insira as informações do curso" value="{{$centros_de_formaco->documentos}}"></textarea>
  </div>
</div>

<div class="field is-grouped">
  <div class="control">
    <button class="button is-link " type="submit"> Publicar o curso </button>
  </div>
</form>
</div>
</div>
</div>
</body>
@endsection
