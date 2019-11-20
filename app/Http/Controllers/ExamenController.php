<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\Models\Examen;


class ExamenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $examen = Examen::select('*')->get();

        return view('examen.listar',compact('examen'));

    }

    public function agregar()
    {
        //
        return view('examen.agregar');
    }
    
    public function save(Request $request){
        $examen = new Examen();
        $examen->titulo = $request->input('titulo');
        
        $examen->save();
       
        return redirect()->route('examen_view')->with('status' , 'Se registro el Examen con éxito.');
        
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
    public function ver($id)
    {
        $examen = Examen::where('id', $id) ->first();
        if (!$examen) {
            return back();
        }
        return view('preguntas.listar')->with('id',$examen->id);
        
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
        $examen = Examen::where('id',$id)->first();
        if(!$examen){
            return back();
        }

        return view('examen.editar')->with('examen',$examen);
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
        //
        $examen= Examen::findOrFail($request->id);
        $examen->titulo = $request->input('titulo');
        $examen->save();

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
        $examen = Examen::findOrFail($request->id);
        $examen->delete();
        return redirect()->route('examen_view');
    }
}
