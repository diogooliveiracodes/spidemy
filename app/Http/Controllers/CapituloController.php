<?php

namespace App\Http\Controllers;

use App\Capitulo;
use App\Curso;
use Illuminate\Http\Request;
use Auth;

class CapituloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Curso $curso, Capitulo $capitulo)
    {
        $capitulos = Capitulo::where('curso_id', $curso->id)->get();
        return view('admin.capitulos.index', [
            'curso' => $curso, 
            'capitulos'=>$capitulos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Curso $curso, Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Curso $curso, Request $request)
    {
        $capitulo = new Capitulo();
        $capitulo->curso_id = $curso->id;
        $capitulo->name = $request->name;
        $capitulo->description = $request->description;
        $capitulo->identifyer = $request->identifyer;
        $capitulo->created_by = Auth::user()->name;
        $capitulo->save();
        return redirect(route('admin.capitulos.index', ['curso'=>$curso]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Capitulo  $capitulo
     * @return \Illuminate\Http\Response
     */
    public function show(Capitulo $capitulo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Capitulo  $capitulo
     * @return \Illuminate\Http\Response
     */
    public function edit(Capitulo $capitulo)
    {
        return view('admin.capitulos.edit', ['capitulo'=>$capitulo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Capitulo  $capitulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Capitulo $capitulo)
    {
        $curso = Curso::where('id', $capitulo->curso_id)->first();
        $capitulo->name = $request->name;
        $capitulo->description = $request->description;
        $capitulo->identifyer = $request->identifyer;
        $capitulo->updated_by = Auth::user()->name;
        $capitulo->save();
        return redirect(route('admin.capitulos.index', ['curso'=>$curso]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Capitulo  $capitulo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Capitulo $capitulo)
    {
        $curso = Curso::where('id', $capitulo->curso_id)->first();
        // dd($curso);
        $capitulo->delete();
        return redirect(route('admin.capitulos.index', ['curso'=>$curso]));
    }
}
