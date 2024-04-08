@extends('centros_de_formacoes.layout')

@section('content')
<head> 
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="has-text-centered has-text-black has-background-white" align="center">
<br>
<h2> Ver produtos </h2>
<h2> Nome  : </h2>

{{ $centros_de_formaco->id }}
{{ $centros_de_formaco->nome }} 

<h2> Localização : </h2>
{{ $centros_de_formaco->localizacao }}

<h2> Vagas : </h2>
{{ $centros_de_formaco->vagas }}
</body>
@endsection
