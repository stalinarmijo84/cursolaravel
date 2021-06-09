@csrf
<div class="form-group">
  <label for="title">Titulo</label>
  <input class="form-control" type="text" name="title" id="title" value="{{old('title',$post->title)}}">
  @error('title')
  <small class="text-danger">{{ $message }}</small>
  @enderror
</div>
<div class="form-group">
  <label for="url_clean">Url limpia</label>
  <input class="form-control" type="text" name="url_clean" id="url_clean" value="{{old('url_clean',$post->url_clean)}}">
</div>
<div class="form-group">
  <label for="content" class="form-label">Contenido</label>
  <textarea class="form-control" name="content" id="content" rows="3">{{old('content',$post->content)}}</textarea>
</div>
<div class="form-group">
  <input type="submit" class="btn btn-primary" value="Enviar">
</div>