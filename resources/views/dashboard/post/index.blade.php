@extends('dashboard.master')

@section('content')
    <a class="btn btn-success mb-3 mt-3 text-white" href="{{ route('post.create') }}"> Crear</a>

    <table class="table">
        <thead>
            <tr>
                <td>Id</td>
                <td>Titulo</td>
                <td>Categoría</td>
                <td>Posteado</td>
                <td>Fecha_creación</td>
                <td>Fecha actualizacion</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category->title }}</td>
                    <td>{{ $post->posted }}</td>
                    <td>{{ $post->created_at->format('d-m-Y') }}</td>
                    <td>{{ $post->updated_at->format('d-m-Y') }}</td>
                    <td>
                        <a href="{{ route('post.show', $post->id) }}" class="btn btn-primary btn-sm text-white">Ver</a>
                        <a href="{{ route('post.edit', $post->id) }}"
                            class="btn btn-warning btn-sm text-white">Actualizar</a>

                        <button class="btn btn-sm btn-danger text-white" data-bs-toggle="modal"
                            data-bs-target="#deleteModal" data-bs-id="{{ $post->id }}">Eliminar</button>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    {{ $posts->links() }}

    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Seguro que desea borrar el registro seleccionado?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <form id="formDelete" action="{{ route('post.destroy', 0) }}"
                        data-action="{{ route('post.destroy', 0) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger text-white">Borrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.onload = function() {
            var exampleModal = document.getElementById('deleteModal')
            exampleModal.addEventListener('show.bs.modal', function(event) {

                // Button that triggered the modal
                var button = event.relatedTarget
                // Extract info from data-bs-* attributes
                var id = button.getAttribute('data-bs-id')

                action = $('#formDelete').attr('data-action').slice(0, -1)
                action += id
                console.log(action)
                $('#formDelete').attr('action', action)
                // If necessary, you could initiate an AJAX request here
                // and then do the updating in a callback.
                //
                // Update the modal's content.
                var modalTitle = exampleModal.querySelector('.modal-title')
                var modalBodyInput = exampleModal.querySelector('.modal-body input')

                modalTitle.textContent = 'Vas a borrar el Post: ' + id

            })
        }

    </script>

@endsection
