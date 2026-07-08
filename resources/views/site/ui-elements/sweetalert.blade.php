@extends('site.templates.layout.app')

@section('js')

<script>

function alertBasic(){

    Swal.fire(
        'Hola',
        'Esta es una alerta básica.',
        'success'
    );

}

function alertSuccess(){

    Swal.fire({
        icon:'success',
        title:'Registro exitoso',
        text:'La información fue guardada correctamente.'
    });

}

function alertError(){

    Swal.fire({
        icon:'error',
        title:'Error',
        text:'Ha ocurrido un problema al guardar.'
    });

}

function alertWarning(){

    Swal.fire({
        icon:'warning',
        title:'Advertencia',
        text:'Verifique la información antes de continuar.'
    });

}

function alertInfo(){

    Swal.fire({
        icon:'info',
        title:'Información',
        text:'Este módulo aún se encuentra en desarrollo.'
    });

}

function alertQuestion(){

    Swal.fire({
        icon:'question',
        title:'¿Desea continuar?',
        text:'Esta acción requiere confirmación.'
    });

}

function alertConfirm(){

    Swal.fire({

        title:'¿Eliminar registro?',

        text:'Esta acción no se puede deshacer.',

        icon:'warning',

        showCancelButton:true,

        confirmButtonText:'Sí, eliminar',

        cancelButtonText:'Cancelar',

        confirmButtonColor:'#dc3545',

        cancelButtonColor:'#6c757d'

    }).then((result)=>{

        if(result.isConfirmed){

            Swal.fire(
                'Eliminado',
                'El registro fue eliminado.',
                'success'
            );

        }

    });

}

function alertToast(){

    Swal.fire({

        toast:true,

        position:'top-end',

        icon:'success',

        title:'Registro guardado',

        showConfirmButton:false,

        timer:3000,

        timerProgressBar:true

    });

}

function alertLoading(){

    Swal.fire({

        title:'Procesando...',

        text:'Espere un momento.',

        allowOutsideClick:false,

        didOpen:()=>{

            Swal.showLoading();

        }

    });

    setTimeout(()=>{

        Swal.close();

    },2500);

}

</script>

@endsection

@section('content')

<div class="container-fluid">

    <div class="mb-4">
        <h1 class="display-5 fw-bold">SweetAlert2</h1>
        <p class="lead text-muted">
            UI Elements → SweetAlert2
        </p>
    </div>

    <div class="row g-4">

        <!-- Básica -->
        <div class="col-lg-4">
            <div class="card shadow-sm h-100">
                <div class="card-header">Alerta Básica</div>
                <div class="card-body text-center">
                    <button class="btn btn-primary w-100" onclick="alertBasic()">
                        Mostrar
                    </button>
                </div>
            </div>
        </div>

        <!-- Éxito -->
        <div class="col-lg-4">
            <div class="card shadow-sm h-100">
                <div class="card-header">Éxito</div>
                <div class="card-body text-center">
                    <button class="btn btn-success w-100" onclick="alertSuccess()">
                        Mostrar
                    </button>
                </div>
            </div>
        </div>

        <!-- Error -->
        <div class="col-lg-4">
            <div class="card shadow-sm h-100">
                <div class="card-header">Error</div>
                <div class="card-body text-center">
                    <button class="btn btn-danger w-100" onclick="alertError()">
                        Mostrar
                    </button>
                </div>
            </div>
        </div>

        <!-- Advertencia -->
        <div class="col-lg-4">
            <div class="card shadow-sm h-100">
                <div class="card-header">Advertencia</div>
                <div class="card-body text-center">
                    <button class="btn btn-warning w-100" onclick="alertWarning()">
                        Mostrar
                    </button>
                </div>
            </div>
        </div>

        <!-- Información -->
        <div class="col-lg-4">
            <div class="card shadow-sm h-100">
                <div class="card-header">Información</div>
                <div class="card-body text-center">
                    <button class="btn btn-info w-100" onclick="alertInfo()">
                        Mostrar
                    </button>
                </div>
            </div>
        </div>

        <!-- Pregunta -->
        <div class="col-lg-4">
            <div class="card shadow-sm h-100">
                <div class="card-header">Pregunta</div>
                <div class="card-body text-center">
                    <button class="btn btn-secondary w-100" onclick="alertQuestion()">
                        Mostrar
                    </button>
                </div>
            </div>
        </div>

        <!-- Confirmación -->
        <div class="col-lg-4">
            <div class="card shadow-sm h-100">
                <div class="card-header">Confirmación</div>
                <div class="card-body text-center">
                    <button class="btn btn-dark w-100" onclick="alertConfirm()">
                        Mostrar
                    </button>
                </div>
            </div>
        </div>

        <!-- Toast -->
        <div class="col-lg-4">
            <div class="card shadow-sm h-100">
                <div class="card-header">Toast</div>
                <div class="card-body text-center">
                    <button class="btn btn-outline-primary w-100" onclick="alertToast()">
                        Mostrar
                    </button>
                </div>
            </div>
        </div>

        <!-- Cargando -->
        <div class="col-lg-4">
            <div class="card shadow-sm h-100">
                <div class="card-header">Cargando</div>
                <div class="card-body text-center">
                    <button class="btn btn-outline-dark w-100" onclick="alertLoading()">
                        Mostrar
                    </button>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection