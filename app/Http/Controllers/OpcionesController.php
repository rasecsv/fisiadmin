<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\Models\Opcion;

class OpcionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
      $opciones = Opcion::select('*')->where('pregunta_id',$id)->get();
        if (!$opciones) {
            return back();
        } 
    return view('opciones.listar',compact('opciones'))->with('id',$id);
     
    }

     public function add($id)
    {
        
        return view('opciones.agregar')->with('id',$id);
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
    public function save(Request $request)
    {
        //
        $opciones = new Opcion();
        $opciones->descripcion = $request->input('descripcion');
        $opciones->puntuacion = $request->input('puntuacion');
        $opciones->pregunta_id = $request->input('pregunta_id');
        $opciones->save();
       
        return redirect()->route('preguntas_ver',$opciones->pregunta_id);

    }

     public function s(Request $request)
    {
        dd($request->all());
        /*$opciones = new Opcion();
        $opciones->descripcion = $request->input('descripcion');
        $opciones->puntuacion = $request->input('puntuacion');
        $opciones->pregunta_id = $request->input('pregunta_id');
        $opciones->save();
       
        return redirect()->route('opciones_view',$opciones->pregunta_id);*/
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
