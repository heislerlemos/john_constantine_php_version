@extends('centros_de_formacoes.layout')

@section('content')

<head>
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body align="center">

<div class="container">
<section class="hero is-danger">
  <div class="hero-body">
    <p class="title">Editar </p>
    <p class="subtitle">So pessoas autorizadas podem editar </p>
<div  align="center">
<a class="button is-link" href="{{ route('centros_de_formacoes.index') }}"> Voltar </a>
</div>



  </div>
</section>
</div>
<br>
<div class="container">
<div class="columns is-centered">
<div class="column ">
    <form action="{{ route('centros_de_formacoes.update',$centros_de_formaco->id) }}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('PUT')

                <div class="field">
                    <label class="label">Nome</label>
                         <div class="control">         
                            <input class="input is-danger" type="text" name="nome" value="{{ $centros_de_formaco->nome }}">
                        </div>
                </div>
                <div class="field">
                    <label class="label"> Vagas </label>            
                    <input class="input is-danger" type="text" name="vagas"  value="{{ $centros_de_formaco->vagas }}">
                </div>
                    
                    <br>
                     <button class="button is-danger is-fullwidth" type="submit" >Submit</button>



    </form>
</div>
<div class="column is-half">
<form action="{{route("centros_de_formacoes.cursos.store",$centros_de_formaco->id)}}" method="POST">
@csrf <!-- {{ csrf_field() }} -->
@method('PUT')

<div class="field">
  <label class="label">ID do Curso</label>
  <div class="control">
    <input class="input" type="text" placeholder="Text " name="cadeiras"  value="{{$centros_de_formaco->id}}">
  </div>
</div>




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
    <input class="input is-info" name="documentos" placeholder="Insira o nome do documento " value="{{$centros_de_formaco->documentos}}" type="text">
  </div>
</div>

<div class="field">
<label class="label">Semestre</label>
<div class="control">
<input class="input is-danger" type="text" name="semestre" value="{{$centros_de_formaco -> semestre  }}">
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

</div>
</body>
<br>
<br>
<br>
<br>
<br>
@endsection
