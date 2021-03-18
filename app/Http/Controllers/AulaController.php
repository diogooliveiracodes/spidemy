<?php

namespace App\Http\Controllers;

use App\Aula;
use App\Capitulo;
use App\Curso;
use Illuminate\Http\Request;
use Auth;

class AulaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Capitulo $capitulo)
    {
        $aulas = Aula::where('capitulo_id', $capitulo->id)->get();
        return view('admin.aulas.index', [
            'capitulo' => $capitulo,
            'aulas' => $aulas
        ]);
    }

    public function capitulos(Curso $curso){
        $capitulos = Capitulo::where('curso_id', $curso->id)->get();
        return view('admin.aulas.capitulos', [
            'curso'=>$curso,
            'capitulos'=>$capitulos
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Capitulo $capitulo, Request $request)
    {
        $aula = new Aula();
        $aula->curso_id = $capitulo->curso_id;
        $aula->capitulo_id = $capitulo->id;
        $aula->identifyer = $request->identifyer;
        $aula->name = $request->name;
        $aula->description = $request->description;
        $aula->created_by = Auth::user()->name;
        $aula->save();
        return redirect(route('admin.aulas.index', ['capitulo' => $capitulo]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function edit(Aula $aula)
    {
        return view('admin.aulas.edit', ['aula'=>$aula]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aula $aula)
    {
        $capitulo = Capitulo::where('id', $aula->capitulo_id)->first();
        $aula->name = $request->name;
        $aula->description = $request->description;
        $aula->identifyer = $request->identifyer;
        $aula->updated_by = Auth::user()->name;
        $aula->save();
        return redirect(route('admin.aulas.index', ['capitulo'=>$capitulo]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aula $aula)
    {
        $capitulo = Capitulo::where('id', $aula->capitulo_id)->first();
        $aula->delete();
        return redirect(route('admin.aulas.index', ['capitulo'=>$capitulo]));
    }
}
