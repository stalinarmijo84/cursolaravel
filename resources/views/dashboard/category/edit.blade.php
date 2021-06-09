@extends('dashboard.master')
@section('content')
<div class="card border-primary">
  <div class="card-header">
    <h3 class="text-center">Editar Categoria</h3>
  </div>
  <div class="card-body text-primary">
    <form action="{{ route("category.update",$category->id) }}" method="POST">
      @method('PUT')
      @include('dashboard.category._form')
    </form>
  </div>
</div>
@endsection