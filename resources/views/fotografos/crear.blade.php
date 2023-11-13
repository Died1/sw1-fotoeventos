@extends('plantilla')

@section('content')

<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Añadir Nuevo Fotografo
                        <div class="page-title-subheading">Formulario para agregar un nuevo fotografo.
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <div class="d-inline-block dropdown">
                        <a href="{{ URL::to('fotografo') }}" class="btn-shadow btn btn-info">volver a Fotografos</a>                                         
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="container mt-5">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong> {{$message}} </strong>
            </div>
            @endif

            <form action="{{ URL::to('fotografo/guardar') }}" method="post" enctype="multipart/form-data">
                @csrf
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

                <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                    Añadir
                </button>
            </form>
        </div>
        </div>        
    </div>
</div>




@endsection('content')