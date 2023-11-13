@extends('plantilla')

@section('content')
<!-- Page Body -->
<div id="app" class="hk-pg-body py-0">
    <div class="galleryapp-wrap">
        <nav class="galleryapp-sidebar">
            <!-- <div data-simplebar class="nicescroll-bar">
                <div class="menu-content-wrap">
                    <form action="{{ URL::to('/foto') }}" method="post" class="dropzone" id="remove_link" enctype="multipart/form-data">
                        @csrf
                        <div class="fallback">
                            <input name="file" type="file" multiple />
                        </div>
                        <input id="id_evento" type="hidden" name="id_evento" value="{{$evento->id}}">
                    </form>
                </div>
            </div> -->
            <!--Sidebar Fixnav-->
            <!-- <div class="galleryapp-fixednav">
                <button id="cargar-fotos" @click="cargarFotos" class="btn btn-primary btn-rounded btn-block btn-file mb-4">
                    Subir Images
                </button>
            </div> -->
            <!--/ Sidebar Fixnav-->
        </nav>
        <div class="galleryapp-content ps-5">
            <div class="galleryapp-detail-wrap">
                <header class="gallery-header">
                    <div class="d-flex align-items-center flex-grow-1">
                        <a class="galleryapp-title dropdown-toggle link-dark" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <h1>Fotos</h1>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="hard-drive"></i></span><span>Imagenes</span></a>
                            <a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="folder"></i></span><span>Videos</span></a>
                        </div>
                        <form class="mx-3 flex-grow-1 mw-400p" role="search">
                            <input type="text" class="form-control" placeholder="Buscar">
                        </form>
                    </div>
                    <div class="gallery-options-wrap">
                        <div class="v-separator d-xl-inline-block d-none"></div>
                        <a class="btn btn-icon btn-flush-dark btn-rounded btn-file flush-soft-hover d-md-inline-block d-none" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <span class="icon">
                                <span class="feather-icon">
                                    <i data-feather="upload-cloud"></i>
                                </span>
                            </span>
                        </a>


                        <div class="v-separator d-lg-inline-block d-none"></div>
                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover hk-navbar-togglable" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Collapse">
                            <span class="icon">
                                <span class="feather-icon"><i data-feather="chevron-up"></i></span>
                                <span class="feather-icon d-none"><i data-feather="chevron-down"></i></span>
                            </span>
                        </a>
                    </div>
                    <div class="hk-sidebar-togglable"></div>
                </header>
                <div class="gallery-body">
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
                    <div data-simplebar class="nicescroll-bar">
                        <div class="collapse-simple">
                            <div class="card card-border">
                                <div id="gal_collapse_1" class="collapse show">
                                    <div class="card-body">
                                        <div ref="galeria" class="row gx-3 row-cols-xxl-6 row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-1 hk-gallery">
                                            @if($fotos->isEmpty())
                                            <p>No se han cargado aún ninguna foto.</p>
                                            @else
                                            @foreach($fotos as $foto)
                                            <div class="col">
                                                <a href="#">
                                                    <div class="card card-border gallery-img" data-sub-html="#caption" data-src="{{ $foto->url_foto }}" style="background-image:url({{ $foto->url_foto }});">
                                                    </div>
                                                </a>
                                            </div>
                                            @endforeach
                                            @endif
                                        </div>
                                        @verbatim
                                        <div id="caption" style="display:none">
                                            <div class="gallery-info h-100">
                                                <div data-simplebar class="nicescroll-bar">
                                                    <header class="gallery-header">
                                                        <div>
                                                            <div class="file-name">{{fotoselected.nombre}}</div>
                                                            <span class="fs-7">JPG File</span>
                                                        </div>
                                                        <div class="gallery-options-wrap">
                                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="#"><span class="icon"><span class="feather-icon"><i data-feather="link-2"></i></span></span></a>
                                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="#"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></a>
                                                        </div>
                                                    </header>
                                                    <div class="gallery-detail-body">
                                                        <div class="collapse-simple">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <a role="button" data-bs-toggle="collapse" href="#fl_info" aria-expanded="true">Specification</a>
                                                                </div>
                                                                <div id="fl_info" class="collapse show">
                                                                    <div class="card-body">
                                                                        <ul class="file-info">
                                                                            <li>
                                                                                <span>Date Modified</span>
                                                                                <span>20 Nov,2020</span>
                                                                            </li>
                                                                            <li>
                                                                                <span>Size</span>
                                                                                <span>15.2 GB</span>
                                                                            </li>
                                                                            <li>
                                                                                <span>Created by</span>
                                                                                <span>Morgan Freeman</span>
                                                                            </li>
                                                                            <li>
                                                                                <span>Date Created</span>
                                                                                <span>12 Nov,2020</span>
                                                                            </li>
                                                                            <li>
                                                                                <span>Dimension</span>
                                                                                <span>1920 x 1245</span>
                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="separator separator-light mt-0"></div>
                                                        <form>
                                                            <div class="form-group">
                                                                <label class="form-label">Add Comment</label>
                                                                <textarea class="form-control" rows="5"></textarea>
                                                                <small class="form-text text-muted">Basic HTML is allowed</small>
                                                            </div>
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <button class="btn btn-primary">Send</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endverbatim
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Category -->
            <div id="add_new_cat" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <h6 class="text-uppercase fw-bold mb-3">Add Category</h6>
                            <form>
                                <div class="row gx-3">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Category Name" />
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary float-end" data-bs-dismiss="modal">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Add Category -->
        </div>
    </div>
    <!-- Modal  caragar fotos-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cargar Imagenes</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="{{ URL::to('/foto') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <input name="file[]" id="fileInput" type="file" multiple />
                        <input id="id_evento" type="hidden" name="id_evento" value="{{$evento->id}}">
                        <div class="mt-3" id="previewContainer"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button id="submitBtn" type="submit" class="btn btn-primary">
                            <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                            Upload
                        </button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection('content')

@push('styles')
<!-- CSS -->
<!-- Lightgallery CSS -->
<link href="{{ asset('vendors/lightgallery/dist/css/lightgallery.min.css')}}" rel="stylesheet" type="text/css">
<!-- dropzone CSS -->
<link href="{{ asset('vendors/dropzone/dist/dropzone.min.css')}}" rel="stylesheet" type="text/css">
<!-- Toastr CSS -->
<link href="{{ asset('vendors/jquery-toast-plugin/dist/jquery.toast.min.css') }}" rel="stylesheet" type="text/css">
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js"></script>
<!-- Dropzone JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/dropzone@5.9.3/dist/min/dropzone.min.js"></script>
<!-- Gallery JS -->
<script src="{{ asset('vendors/lightgallery/dist/js/lightgallery-all.min.js') }}"></script>
<!-- Toastr JS -->
<script src="{{ asset('vendors/jquery-toast-plugin/dist/jquery.toast.min.js') }}"></script>


<script>
    new Vue({
        el: '#app',
        data: {

            fotoselected: {
                nombre: 'hhj',
            },
        },
        methods: {},
        mounted() {
            // Inicializar LightGallery
            this.$nextTick(() => {
                const gallery = this.$refs.galeria;
                $(gallery).lightGallery({
                    addClass: 'galleryapp-info-active',
                    mode: 'lg-fade',
                    selector: '.gallery-img',
                    thumbnail: false,
                    hash: false,
                    onAfterOpen: () => {
                        console.log("Nombre de la foto actual: ");
                    },
                    onBeforeClose: () => {
                        console.log("Nombre de la foto actual: ");
                    },
                    onAfterSlide: function(event, prevIndex, index) {
                        console.log("Nombre de la foto actual: " + currentImageName);
                        var currentImage = event.target;
                        var currentImageName = $(currentImage).find('.file-name').text();

                    },
                    onBeforeOpen: function() {
                        console.log("Nombre de la foto actual: ");
                        // Acciones a realizar antes de abrir la galería
                    }
                });
            });


        },

    });
</script>
<script type="module">
    // Import the functions you need from the SDKs you need
    import {
        initializeApp
    } from "https://www.gstatic.com/firebasejs/9.21.0/firebase-app.js";
    import {
        getAnalytics
    } from "https://www.gstatic.com/firebasejs/9.21.0/firebase-analytics.js";
    import {
        getMessaging,
        getToken
    } from "https://www.gstatic.com/firebasejs/9.21.0/firebase-messaging.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries

    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
        apiKey: "AIzaSyCIrQIBNxwDtx1ZPzEmZnOIlBONUeCtReg",
        authDomain: "primerparcial-347021.firebaseapp.com",
        projectId: "primerparcial-347021",
        storageBucket: "primerparcial-347021.appspot.com",
        messagingSenderId: "422014919648",
        appId: "1:422014919648:web:9f25d335fb7f606b5fc185",
    };

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);

    const messaging = getMessaging(app);
    getToken(messaging).then((token) => {

        updateToken(token)

        // Guarda el token en tu servidor o realiza otras acciones necesarias
    }).catch((error) => {
        console.log('Error al obtener el token del cliente:', error);
    });

    let updateToken = (_token) => {
        console.log('token', _token);
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: "{{ URL::to('/token') }}",
            type: 'POST',
            data: {
                token: _token,
            },
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            success: function(response) {
                console.log(response);
            },
            error: function(xhr, status, error) {
                console.log('Error en la solicitud. Código de estado: ' + xhr.status);
            }
        });

    }
</script>

<script>
    // Obtener el elemento de entrada de archivos
    const fileInput = document.getElementById('fileInput');
    // Obtener el contenedor para la vista previa
    const previewContainer = document.getElementById('previewContainer');

    // Escuchar el evento de cambio en el input de archivos
    fileInput.addEventListener('change', function() {
        // Limpiar el contenedor de vista previa
        previewContainer.innerHTML = '';

        // Obtener los archivos seleccionados
        const files = fileInput.files;

        // Recorrer los archivos y generar la vista previa para cada uno
        for (let i = 0; i < files.length; i++) {
            const file = files[i];
            const reader = new FileReader();

            // Leer el archivo y generar la vista previa
            reader.addEventListener('load', function() {
                const image = new Image();
                image.src = reader.result;
                image.classList.add('preview-image');

                // Agregar la imagen al contenedor de vista previa
                previewContainer.appendChild(image);
            });

            // Leer el archivo como una URL de datos
            reader.readAsDataURL(file);
        }
    });

    $(document).ready(function() {
        $('form').submit(function() {
            // Deshabilitar el botón
            $('#submitBtn').prop('disabled', true);

            // Mostrar el indicador de carga
            $('#submitBtn .spinner-border').removeClass('d-none');

            // Retornar true para enviar el formulario
            return true;
        });
    });
</script>

<style>
    .preview-image {
        width: 100px;
        height: 100px;
        object-fit: cover;
        margin-right: 10px;
    }
</style>


@endpush
