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
<div align="center">
<a class="button is-link" href="{{ route('centros_de_formacoes.index') }}"> Voltar </a>
</div>
</div>
</section>
</div>
<br>


<div class="container">
<div class="columns is-mobile is-multiline">
@foreach($centros_de_formaco->cursos as $curso )
<div class="column is-half">
<form action="{{route('centros_de_formacoes.cursos.update',$curso->id  )}}" method="post"> 
        @csrf
        @method('PUT')


<div class="card ">
<div class="card-content  has-text-centered ">



<div class="content">
<p> Numero de ID {{ $curso->id }} </p>
</div>

<div class="content">
<div class="control">

<label class="label">Curso disponivel </label>
 
<input class="input" type="text"  name="cadeiras"  value="{{$curso->cadeiras}}">
</div>
</div>

<div class="content">
<label class="label">Data de inicio </label>
<input class="input" type="text"  name='data' value="{{$curso->data}}">
</div>
<div class="content">
<label class="label">Tempo de duração</label>
  <input class="input " type="text" name='tempo_de_duracao'  placeholder="Tempo de duracao" value="{{ $curso->tempo_de_duracao}}">       
</div>  

<div class="content">
<label class="label">Preço da proprina </label> 
    <input class="input " type="text" placeholder="Valor das proprinas" name="precario" value="{{$curso->precario }}">
</div> 



   <footer class="card-footer">
    <button  type="submit"  class="card-footer-item button is-info  ">Editar curso</button>

    


  </footer>

</div>


</div>
</form>
<form action="{{route('centros_de_formacoes.cursos.destroy',$curso->id  )}}" method="post"> 
        @csrf
        @method('DELETE')


<div class="card ">
<div class="card-content  has-text-centered ">


   <footer class="card-footer">
    <button  type="submit"  class="card-footer-item button is-danger ">Apagar Curso</button>
  </footer>

</div>


</div>
</form>
</div>
<!-- end of foreach -->
@endforeach
<!-- end of columns -->
</div>

<!-- end of container -->
</div>
</body>


<br>
<br>
<br>
<br>
<br>
@endsection
