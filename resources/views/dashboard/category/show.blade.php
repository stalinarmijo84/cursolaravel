@extends('dashboard.master')
@section('content')
<div class="card border-primary">
  <div class="card-header">
    <h3 class="text-center">Ver Categoria</h3>
  </div>
  <div class="card-body text-primary">
    <div class="form-group">
      <label for="title">Titulo</label>
      <input class="form-control" type="text" name="title" id="title" value="{{ $category->title }}" readonly>
    </div>
    <div class="form-group">
      <label for="url_clean">Url limpia</label>
      <input class="form-control" type="text" name="url_clean" id="url_clean" value="{{ $category->url_clean }}"
        readonly>
    </div>
  </div>
  @endsection