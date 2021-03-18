@extends('layouts.admin-dashboard')

@section('content')


<div class="container-fluid">

    <!-- Cursos Editar -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{$curso->name}}</h1>
    </div>

    <!-- Início Row -->
    <div class="row">

        @foreach($capitulos as $capitulo)

        <!-- Curso -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-secondary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="row justify-content-center">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">{{$capitulo->identifyer}} - {{ $capitulo->name}}</div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $capitulo->description }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="row justify-content-center">
                                <form action="{{route('admin.aulas.index', ['capitulo' => $capitulo])}}" method="GET">
                                    <button class="btn btn-sm btn-primary">Entrar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Curso -->
        @endforeach

    </div>
    <!-- Fim Row -->
    <!-- FIM Cursos Editar -->

</div>

@endsection