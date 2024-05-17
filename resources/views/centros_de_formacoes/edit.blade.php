@extends('centros_de_formacoes.layout')

@section('content')

<head>
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body align="center">
<section class="hero is-danger">
  <div class="hero-body">
    <p class="title">Editar </p>
    <p class="subtitle">So pessoas autorizadas podem editar </p>
  </div>
</section>
<br>
<div class="columns is-centered"
<div class="column">
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
<div  align="center">
<a class="button is-link" href="{{ route('centros_de_formacoes.index') }}"> Voltar </a>
</div>

</body>
@endsection
