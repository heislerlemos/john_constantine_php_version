@extends('centros_de_formacoes.layout')

@section('content')
<head> 
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="has-text-centered has-text-black has-background-white" align="center">
<h2> Ver produtos </h2>
<h2> Nome  </h2>
{{ $centro_de_formacao -> nome }}

<h2> Localização </h2>
{{ $centro_de_formacao -> localizacao }}

<h2> Vagas </h2>
{{ $centro_de_formacao -> vagas }}
</body>
@endsection
