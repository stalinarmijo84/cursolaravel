@extends('dashboard.master')
@section('content')

<div class="card border-primary">
  <div class="card-header">
    <h3 class="text-center">Modificar Post</h3>

  </div>
  <div class="card-body text-primary">
    <form action="{{ route("post.update",$post->id) }}" method="POST">
      @method('PUT')
      @include('dashboard.post._form')
    </form>
  </div>
</div>
@endsection