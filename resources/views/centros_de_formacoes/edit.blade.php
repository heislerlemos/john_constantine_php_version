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
</div>
<div class="columns is-mobile is-multiline">
@foreach($centros_de_formaco->cursos as $curso ) 
<div class="column is-half">

<div class="card ">
  <div class="card-content  has-text-centered ">

<div class="content">
<p> Curso id  {{ $curso->id }} </p>
</div>
<div class="content"> 
<h6> Curso :  {{ $curso->cadeiras}} </h6>
</div>
<div class="content">
<p> Data de inicio  {{ $curso->data }} </p>
</div>
<div class="content">
<button class="js-modal-trigger is-info" data-target="modal-js-example">
  Cadeiras Anuais 
</button>
</div>


<div class="content">
<button class="js-modal-trigger" data-target="modal-js-example-2">
  Documentos de matricula
</button>


</div>


<hr>

<div class="content">
<p> Tempo de Duração : {{ $curso ->  tempo_de_duracao }} Anos
</div>  

<div class="content">
<p> Proprina : {{ $curso ->  precario }} mil kwanzas
</div> 
   <footer class="card-footer">
    <a href="#" class="card-footer-item">Editar </a>
  </footer>



 </div>
</div>

</div>
 <div id="modal-js-example" class="modal">
   <div class="modal-background"></div>

   <div class="modal-content">

  <img src="<?php echo asset("img/{$curso -> semestre }")?>">
   </div>

   <button class="modal-close is-large" aria-label="close"></button>
 </div>

 <div id="modal-js-example-2" class="modal">
   <div class="modal-background"></div>

   <div class="modal-content">
  <img src="<?php echo asset("img/{$curso -> documentos }")?>">
   </div>
   <button class="modal-close is-large" aria-label="close"></button>
 </div>


@endforeach
</div>
</div>
</body>
<br>
<br>
<br>
<br>
<br>
@endsection
