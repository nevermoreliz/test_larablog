@csrf
<div class="mb-3">
    <label for="title" class="form-label">Titulo</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title) }}">
    {{-- @error('title')
            <small class="text-danger">{{ $message }}</small>
            @enderror --}}
</div>
<div class="mb-3">
    <label for="url_clean" class="form-label">Url limpia</label>
    <input type="text" class="form-control" id="url_clean" name="url_clean"
        value="{{ old('url_clean', $post->url_clean) }}">
</div>
<div class="mb-3">
    <label for="category_id" class="form-label">Categorías</label>
    <select class="form-select" name="category_id" id="category_id">
        @foreach ($categories as $title => $id)
            <option {{ $post->category_id == $id ? 'selected="selected"' : '' }} value="{{ $id }}">
                {{ $title }}</option>
        @endforeach
    </select>
</div>
<div class="mb-3">
    <label for="posted" class="form-label">Posted</label>
    <select class="form-select" name="posted" id="posted">
        @include('dashboard.partials.option-yes-not',['val'=> $post->posted])
    </select>
</div>
<div class="mb-3">
    <label for="content" class="form-label">Contenido</label>
    <textarea class="form-control" id="content" name="content"
        rows="3">{{ old('content', $post->content) }}</textarea>
    {{-- @error('content')
            <small class="text-danger">{{ $message }}</small>
            @enderror --}}
</div>
<input type="submit" class="btn btn-primary" value="Enviar"></input>
