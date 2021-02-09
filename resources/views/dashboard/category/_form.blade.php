@csrf
<div class="mb-3">
    <label for="title" class="form-label">Titulo</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $category->title) }}">
</div>
<div class="mb-3">
    <label for="url_clean" class="form-label">Url limpia</label>
    <input type="text" class="form-control" id="url_clean" name="url_clean"
        value="{{ old('url_clean', $category->url_clean) }}">
</div>

<input type="submit" class="btn btn-primary" value="Enviar"></input>
