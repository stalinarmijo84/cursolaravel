@if ($errors->any())
@foreach ($errors->all() as $item)
    <div class="alert alert-danger">
      {{$item}}
    </div>
@endforeach
@endif