@extends('centros_de_formacoes.layout')
@section('content')
<head> 
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="has-text-centered has-text-black has-background-white" align="center">
<br>
<div class="columns">
<div class="column">
<p>
<h1> Nome  : </h1>
{{ $centros_de_formaco->nome }} 
</p>
<br>
<p>
<h1> Localização : </h1> <hr>
<iframe src="{{ $centros_de_formaco->localizacao }}" width="400"  
height="200"></frame>
</p>
<br>
<p>
<strong> Vagas : </strong>
{{ $centros_de_formaco->vagas }}
</p>
</div>
</div>
</body>
@endsection
