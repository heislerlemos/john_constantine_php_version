<head>
@extends('centros_de_formacoes.layout')
@section('content')
</head>
<br>
<br>
<body class="has-text-centered"  align="center">
<div class="columns is-centered "
<div class="column is-half">


<form action="{{ route('centros_de_formacoes.store') }}" method="POST">
    @csrf

<div class="field">
  <label class="label">Nome do Curso </label>
  <div class="control">
    <input class="input " type="text" name="nome" placeholder="Insira o nome da universidade">
  </div>
</div>



<div class="field">
  <label class="label">Image do curso</label>
  <div class="control">
    <input class="input" type="text" name="imglink" placeholder="Insira a imagem do curso">
  </div>
</div>


<div class="field">
<label class="label"> Localização </label>
<div class="control">
<input class="input" type="text"  name="localizacao" placeholder="insira a localização ">
</div>
</div>


<div class="field">
  <label class="label">Vagas</label>
  <div class="control">
    <input class="input" type="text" placeholder="Vagas" name="vagas">
  </div>
</div>


         <div>
          <button class="button is-success"type="submit">Submit</button>
        </div>

</form>


</div>
<div>
<a href="{{ route('centros_de_formacoes.index') }}"> Voltar</a>
</body>
@endsection
