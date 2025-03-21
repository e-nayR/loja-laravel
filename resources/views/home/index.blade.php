@extends('layouts.base')
@section('title', $viewData['title'])
@section('content')
<!-- Seção de Boas-vindas -->
<div class="container text-center py-5">
    <h1>Bem-vindo à Nossa Página!</h1>
    <p class="lead">Aqui você encontra tudo o que precisa para melhorar sua experiência online.</p>
</div>

  <!-- Seção de conteúdo principal -->
  <div class="container py-5">
    <div class="row">
      <div class="col-md-6">
        <h2>Nossos Serviços</h2>
        <p>Oferecemos soluções inovadoras para o seu negócio. Desde o desenvolvimento de sites até consultoria digital, estamos prontos para ajudar você a alcançar seus objetivos.</p>
        <ul>
          <li>Desenvolvimento de sites</li>
          <li>Consultoria digital</li>
          <li>Marketing online</li>
        </ul>
      </div>
      <div class="col-md-6">
        <img src="{{ asset(path:'/img/'.$viewData['img'])}}" class="img-fluid" alt="Imagem ilustrativa">
      </div>
    </div>
</div>
@endsection