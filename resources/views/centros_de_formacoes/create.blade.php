@extends('centros_de_formacoes.layout')


@section('content')

<h1> Criar centro ... </h1>
<h2>Adicionar um novo centro</h2>

<a href="{{ route('centros_de_formacoes.index') }}"> Voltar</a>
<br>

<form action="{{ route('centros_de_formacoes.store') }}" method="POST">
    @csrf

            <div>
                <strong>Nome do Curso :</strong>
                <input type="text" name="nome"  placeholder="Name">
            </div>

            <div>
                <strong>Localização </strong>
                <input type="text" name="localizacao" placeholder="localização"></textarea>
            </div>           

             <div>
                <strong> Vagas: </strong>
                <input type="text" name="vagas" placeholder="Vagas">
            </div>
            <br>
         <div>
          <button type="submit">Submit</button>
        </div>

</form>


@endsection
