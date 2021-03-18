@extends('layouts.admin-dashboard')

@section('content')

<div class="container-fluid">

    <!-- Cursos Editar -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{$capitulo->name}}</h1>
    </div>

    <!-- Início Row -->
    <div class="row">

        @foreach($aulas as $aula)

        <!-- Curso -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-secondary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="row justify-content-center">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">{{$aula->identifyer}} - {{ $aula->name}}</div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $aula->description }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="row justify-content-center">
                                <form action="{{route('admin.aulas.edit', ['aula' => $aula])}}" method="GET">
                                    <button class="btn btn-sm btn-primary">Editar</button>
                                </form>
                            </div>
                        </div>
                        <div class="col">
                            <form action="{{route('admin.aulas.delete', ['aula' => $aula])}}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-sm btn-danger">Excluir</button>
                            </form>
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

    <hr>

    <!-- Cursos Cadastrar -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Cadastrar</h1>
    </div>

    <!-- Início Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <form action="{{route('admin.aulas.store', ['capitulo'=>$capitulo])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="identifyer" class="form-label">Número:</label>
                                    <input type="number" class="form-control" id="identifyer" name="identifyer" required>
                                </div>
                                <div class="mb-3">
                                  <label for="name" class="form-label">Título:</label>
                                  <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Descrição:</label>
                                    <input type="text-area" class="form-control" id="description" name="description" required>
                                  </div>
                                <div class="row justify-content-center">
                                    <button type="submit" class="btn btn-primary btn-lg">Confirmar</button>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

      

    </div>
    <!-- Fim Row -->
    <!-- FIM Cursos Cadastrar -->


</div>
<!-- /.container-fluid -->

@endsection