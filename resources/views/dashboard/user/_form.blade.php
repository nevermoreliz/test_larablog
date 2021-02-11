@csrf
<div class="mb-3">
    <label for="name" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}">
</div>
<div class="mb-3">
    <label for="surname" class="form-label">Apellido</label>
    <input type="text" class="form-control" id="surname" name="surname" value="{{ old('surname', $user->surname) }}">
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}">
</div>
@if ($pasw)
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password"
            value="{{ old('password', $user->password) }}">
    </div>
@endif

<input type="submit" class="btn btn-primary" value="Enviar"></input>
