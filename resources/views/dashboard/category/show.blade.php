@extends('dashboard.master')

@section('content')

    <div class="mb-3">
        <label for="title" class="form-label">Titulo</label>
        <input readonly type="text" class="form-control" id="title" name="title" value="{{ $category->title }}">

    </div>
    <div class="mb-3">
        <label for="url_clean" class="form-label">Url limpia</label>
        <input readonly type="text" class="form-control" id="url_clean" name="url_clean"
            value="{{ $category->url_clean }}">
    </div>


@endsection
