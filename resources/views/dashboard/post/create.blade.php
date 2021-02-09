@extends('dashboard.master')

@section('content')

    @include('dashboard.partials.validation-error')
    <form action="{{ route('post.store') }}" method="post">
        @include('dashboard.post._form')
    </form>

@endsection
