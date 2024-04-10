@extends('centros_de_formacoes.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('centros_de_formacoes.index') }}"> Back</a>
            </div>
        </div>
    </div>


    <form action="{{ route('centros_de_formacoes.update',$centros_de_formaco->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome:</strong>
                    <input type="text" name="name" value="{{ $centros_de_formaco->nome }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Vagas </strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $centros_de_formaco->vagas }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
