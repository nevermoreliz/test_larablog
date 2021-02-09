@extends('dashboard.master')

@section('content')

    <div class="mb-3">
        <label for="title" class="form-label">Titulo</label>
        <input readonly type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
        {{-- @error('title')
            <small class="text-danger">{{ $message }}</small>
            @enderror --}}
    </div>
    <div class="mb-3">
        <label for="url_clean" class="form-label">Url limpia</label>
        <input readonly type="text" class="form-control" id="url_clean" name="url_clean" value="{{ $post->url_clean }}">
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Contenido</label>
        <textarea readonly class="form-control" id="content" name="content" rows="3">{{ $post->content }}</textarea>
        {{-- @error('content')
            <small class="text-danger">{{ $message }}</small>
            @enderror --}}
    </div>


@endsection
