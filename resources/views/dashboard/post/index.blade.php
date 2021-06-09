@extends('dashboard.master')
@section('content')
<br>
<a class="btn btn-primary mt-3 mb-3" href="{{route('post.create')}}"><i class="fa fa-plus" aria-hidden="true"></i>
  Nuevo</a>
<table id="datatable-responsive" class="table table-striped table-bordered responsive no-wrap" cellspacing="0"
  width="100%">
  <thead>
    <tr>
      <th>Id</th>
      <th>Title</th>
      <th>Url</th>
      <th>Content</th>
      <th>Fecha</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($posts as $item)
    <tr>
      <td>
        {{$item->id}}
      </td>
      <td>
        {{$item->title}}
      </td>
      <td>
        {{$item->url_clean}}
      </td>
      <td>
        {{$item->content}}
      </td>
      <td>
        {{$item->created_at->format('d-m-Y')}}
      </td>
      <td>
        <a class="btn btn-success" href="{{route('post.show',$item->id)}}">
          <i class="fa fa-eye" aria-hidden="true" title="Ver mas">Ver</i></a>
        <a class="btn btn-warning" href="{{route('post.edit',$item->id)}}">
          <i class="fa fa-pencil" aria-hidden="true" title="Editar">Editar</i></a>

        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal"
          data-id="{{$item->id}}">
          Eliminar
        </button>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>
{{ $posts->links() }}

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3>Deseas borrar este registro?</h3>
      </div>
      <div class="modal-footer">
        <form id="formDelete" action="{{route('post.destroy',0)}}" data-action="{{route('post.destroy',0)}}"
          method="POST">
          @method('DELETE')
          @csrf
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-danger">Borrar</button>
        </form>

      </div>
    </div>
  </div>
</div>

<script>
  window.onload = function() {
    $('#deleteModal').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var id = button.data('id') // Extract info from data-* attributes
      console.log('modal abierto')
      action = $('#formDelete').attr('data-action').slice(0, -1)
      action += id
      $('#formDelete').attr('action', action)
      var modal = $(this)
      modal.find('.modal-title').text('Borrar el POST: ' + id)
    })
  };
</script>
@endsection