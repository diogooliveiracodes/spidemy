@extends('layouts.admin-dashboard')

@section('content')

<div class="container-fluid">
    <!-- Cursos Cadastrar -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Editar</h1>
    </div>

    <!-- Início Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <form action="{{route('admin.aulas.update', ['aula'=>$aula])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="identifyer" class="form-label">Número:</label>
                                    <input type="number" class="form-control" id="identifyer" name="identifyer" value="{{$aula->identifyer}}">
                                </div>
                                <div class="mb-3">
                                  <label for="name" class="form-label">Título:</label>
                                  <input type="text" class="form-control" id="name" name="name" value="{{$aula->name}}">
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Descrição:</label>
                                    <input type="text-area" class="form-control" id="description" name="description" value="{{$aula->description}}">
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

@endsection
