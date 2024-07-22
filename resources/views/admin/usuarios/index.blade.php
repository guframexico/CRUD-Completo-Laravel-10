@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1>Usuarios</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Primary</h3>
                    <div class="card-tools">
                        <a href="/admin/usuarios/create" class="btn btn-primary"> <i class="bi bi-person-fill-add"></i> Nuevo
                            Usuario</a>
                    </div>
                </div>


                <div class="card-body">
                    <table class="table table-bordered table-sm table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Accion</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @php
                                $contador = 0;
                            @endphp
                            @foreach ($usuarios as $usuario)
                                @php
                                    $contador = $contador + 1;
                                    $id = $usuario->id;
                                @endphp
                                <tr>
                                    <td style="text-align: ">{{ $contador }}</td>
                                    <td>{{ $usuario->name }}</td>
                                    <td>{{ $usuario->email }}</td>

                                    {{-- <td>
                                        <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i
                                                class="material-icons" data-toggle="tooltip" title="Edit"
                                                style="font-size:24px;color:rgb(255, 255, 0)">&#xE254;</i></a>
                                        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i
                                                class="material-icons" data-toggle="tooltip" title="Delete"
                                                style="font-size:24px;color:rgb(255, 0, 0)">&#xE872;</i></a>
                                    </td> --}}
                                    <td>
                                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                            <div class="btn-group" role="group" aria-label="Basic mixed">
                                                <div class="btn-group me-2">
                                                    <a href="{{ route('usuarios.show', $usuario->id) }}" type="button"
                                                        class="btn btn-info"><i class="bi bi-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="btn-group" role="group" aria-label="Basic mixed">
                                                <div class="btn-group me-2">
                                                    <a href="{{ route('usuarios.edit', $usuario->id) }}" type="button"
                                                        class="btn btn-success"><i class="bi bi-pencil"></i></a>
                                                </div>
                                            </div>
                                            <div class="btn-group" role="group" aria-label="Basic mixed">
                                                {{-- <div class="btn-group me-2">
                                                    <a href="{{ route('usuarios.destroy', $usuario->id) }}" type="button"
                                                        class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                                </div> --}}
                                                <form action="{{ route('usuarios.destroy', $usuario->id) }}"
                                                    onclick="preguntar<?= $id ?>(event)" method="post"
                                                    id="miFormulario<?= $id ?>">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        style="border-radius: 0px 5px 5px 0px"><i
                                                            class="bi bi-trash"></i></button>
                                                </form>
                                                <script>
                                                    function preguntar<?= $id ?>(event) {
                                                        event.preventDefault();
                                                        Swal.fire({
                                                            title: 'Eliminar Registro',
                                                            text: '¿Desea eliminar este registro?',
                                                            icon: 'question',
                                                            showDenyButton: true,
                                                            confirmButtonText: 'Eliminar',
                                                            confirmButtonColor: '#a5161d',
                                                            denyButtonColor: '#270a0a',
                                                            denyButtonText: 'Cancelar',
                                                        }).then((result) => {
                                                            if (result.isConfirmed) {
                                                                var form = $('#miFormulario<?= $id ?>');
                                                                form.submit();
                                                            }
                                                        });
                                                    }
                                                </script>

                                            </div>
                                        </div>
                </div>
                </td>

                </tr>
                @endforeach
                </tbody>
                </table>
            </div>

        </div>

    </div>
    </div>
@endsection
