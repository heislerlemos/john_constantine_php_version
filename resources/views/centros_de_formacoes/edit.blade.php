@extends('centros_de_formacoes.layout')

@section('content')



<h2>Editar Product</h2>
<a class="btn btn-primary" href="{{ route('centros_de_formacoes.index') }}"> Voltar </a>
    <form action="{{ route('centros_de_formacoes.update',$centros_de_formaco->id) }}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('PUT')

                    <strong>Nome:</strong>
                    <input type="text" name="nome" value="{{ $centros_de_formaco->nome }}">
                    <strong>Vagas </strong>
                    <input type="text" name="vagas"  value="{{ $centros_de_formaco->vagas }}">
                    <button type="submit" >Submit</button>

    </form>
@endsection
