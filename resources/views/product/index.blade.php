@extends('layouts.base')
@section('title', $viewData['title'])
@section('content')
<div class="row row-cols-1 row-cols-md-3 g-4">
  @foreach ($viewData["products"] as $product)
  <div class="col">
    <img src="{{ asset(path:'/img/'.$product['img'])}}" width=300 height=300 class="card-img-top" alt="...">
    <div class="card">
      <div class="card-body">
      <a href="{{ route('product.show', ['id'=> $product['id']]) }}"class="btn bg-primary text-white">{{ $product["name"] }}</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection