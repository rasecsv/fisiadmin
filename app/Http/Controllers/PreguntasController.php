<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\Models\Preguntas;
use App\Models\Examen;



class PreguntasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
      $preguntas = Preguntas::select('*')->where('examen_id',$id)->get();
        if (!$preguntas) {
            return back();
        } 
    return view('preguntas.listar',compact('preguntas'))->with('id',$id);
     
    }

     public function add($id)
    {
        
        return view('preguntas.agregar')->with('id',$id);
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
        $preguntas = new Preguntas();
        $preguntas->encabezado = $request->input('encabezado');
        $preguntas->examen_id = $request->input('examen_id');
        $preguntas->save();
       
        return redirect()->route('examen_view',$preguntas->examen_id);
       
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
    public function detail($id)
    {
        //
         $preguntas = Preguntas::where('id',$id)->first();
        if (!$preguntas) {
            return back();
        }
        return view('preguntas.editar')->with('preguntas',$preguntas);
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar(Request $request)
    {
    
        $preguntas = Preguntas::findOrFail($request->id);
        $preguntas->encabezado = $request->input('encabezado');
        $preguntas->save();

        return redirect()->route('examen_view');

    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        //
        $preguntas = Preguntas::findOrFail($request->id);
        $preguntas->delete();
        return redirect()->route('examen_view');
    }
}
