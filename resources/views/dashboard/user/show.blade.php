@extends('dashboard.master')

@section('content')

    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input readonly type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">

    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Apellido</label>
        <input readonly type="text" class="form-control" id="surname" name="surname" value="{{ $user->surname }}">
    </div>

@endsection
