<head>
@extends('centros_de_formacoes.layout')
@section('content')
</head>
<br>
<br>
<body class="has-text-centered"  align="center">
<div class="columns is-mobile is-centered">
<div class="column is-half">

<form action="{{ route('centros_de_formacoes.store') }}" method="POST">
    @csrf

<div class="field">
  <label class="label">Nome da universidade </label>
  <div class="control">
    <input class="input is-success " type="text" name="nome" placeholder="Insira o nome da universidade">
  </div>
</div>



<div class="field">
  <label class="label">Imagem da  universidade</label>
  <div class="control">
    <input class="input is-danger" type="text" name="imglink" placeholder="Insira a imagem do curso">
  </div>
</div>


<div class="field">
<label class="label"> Mapa </label>
<div class="control">
<input class="input is-info" type="text"  name="localizacao" placeholder="insira a localização ">
</div>
</div>

<div class="field">
<label class="label"> Imagem da faculadade Banner </label>
<div class="control">
<input class="input is-info" type="text"  name="imagemfau" placeholder="insira a imagem">
</div>
</div>



<div class="field">
  <label class="label">Vagas</label>
  <div class="control">
    <input class="input" type="text" placeholder="Vagas" name="vagas">
  </div>
</div>
         <div>
          <button class="button is-success"type="submit">Submeter</button>
        </div>

</form>

</div>
</div>
</body>
@endsection
