@extends('plantilla')
@section('content')

<div class="container-xxl">
    <!-- Page Header -->
    <div class="hk-pg-header pg-header-wth-tab pt-4">
        <div class="d-flex">
            <div class="d-flex flex-wrap justify-content-between flex-1">
                <div class="mb-lg-0 mb-2 me-8">
                    <h1 class="pg-title">Fotógrafos</h1>
                    <p>Listado de son todos los fotografos y estudios fotograficos activos.</p>
                </div>

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Añadir fotografo/estudio fotografico
                </button>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Registrar fotografo/estudio fotografico</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ URL::to('fotografo/guardar') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nombre</label>
                                        <input type="text" class="form-control" name="nombre">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Usuario</label>
                                        <input type="text" class="form-control" name="usuario">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Clave</label>
                                        <input type="password" class="form-control" name="clave">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Rol</label>
                                        <select class="form-control" name="rol">
                                            <option>Administrador</option>
                                            <option>Fotografo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /Page Header -->

    <!-- Page Body -->
    <div class="hk-pg-body">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <strong> {{$message}} </strong>
        </div>
        @endif

        @if ($message = Session::get('delete'))
        <div class="alert alert-danger">
            <strong> {{$message}} </strong>
        </div>
        @endif


        <div class="table-responsive">
            <table class="table nowrap table-advance">
                <thead>
                    <tr>
                        <th class="mnw-150p">Nombre</th>
                        <th class="mnw-200p">Email</th>
                        <th class="mnw-150p">Telefono</th>
                        <th class="mnw-150p">Estado</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($fotografos as $fotografo)
                    <tr>
                        <td class="text-truncate">
                            <div class="media align-items-center">
                                <div class="media-head me-3">
                                    <div class="avatar avatar-xs">
                                        <img src="dist/img/avatar3.jpg" alt="user" class="avatar-img">
                                    </div>
                                </div>
                                <div class="media-body mnw-0">
                                    <a href="#" class="table-link-text text-high-em text-truncate mb-0">{{$fotografo->nombre}} {{$fotografo->apellido}}</a>
                                </div>
                            </div>
                        </td>
                        <td class="text-truncate">{{$fotografo->nombre}}@gmail.com</td>
                        <td class="text-truncate">+591 78405532</td>
                        <td><span class="badge badge-lg badge-success">activo</span></td>
                        <td>
                            <div class="d-flex align-items-center justify-content-end">
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="abrir" href="#"><span class="icon"><span class="feather-icon"><i data-feather="archive"></i></span></span></a>
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="ocultar" href="#"><span class="icon"><span class="feather-icon"><i data-feather="edit-2"></i></span></span></a>

                            </div>
                        </td>
                    </tr>
                    <tr class="table-row-gap">
                        <td></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
    <!-- /Page Body -->
</div>

@endsection('content')
