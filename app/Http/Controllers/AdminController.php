<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Image;
use File;
use App\Curso;
use Auth;

class AdminController extends Controller
{
    public function index(){
        /**Get mês e ano atuais */
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        $mes = strftime("%B");
        $ano = strftime("%Y");
        return view('admin.index', ['mes' => $mes, 'ano' => $ano]);
    }

    public function capitulos(){
        $cursos = Curso::all();
        return view ('admin.capitulos', [
            'cursos' => $cursos
        ]);
    }

    public function aulas(){
        $cursos = Curso::all();
        return view ('admin.aulas', [
            'cursos' => $cursos
        ]);
    }

    public function atividades(){
        return view('admin.atividades');
    }

    public function forum(){
        return view('admin.forum');
    }

    public function usuarios(){
        return view('admin.usuarios');
    }
}
