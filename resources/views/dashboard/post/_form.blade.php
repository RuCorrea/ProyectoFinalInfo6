
      
      <div class="mb-3">
        <label for="title" class="form-label">Titulo</label>
        <input type="text" class="form-control" name="title"id="title" value="{{ old('title', $post->title) }}">
      </div>
      <div class="mb-3">
        <label for="url_clean" class="form-label">URL Limpia</label>
        <input type="text" class="form-control" name="url_clean"id="url_clean" value="{{ old('url_clean', $post->url_clean) }}">
      </div>
      <div class="mb-3">
          <label for="content"> Contenido </label>
          <textarea class="form-control" id="content" name="content" rows="3"> {{ old('content', $post->content) }} </textarea>
        </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
    