<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    public function load(){
        $alumno = Alumno::select('*')->get();
       // return $alumno;
        return view('alumno.listar', compact('alumno'));
    }
    //
    public function add(){
        return view('alumno.agregar');
    }
    
    public function index(){
    	//return Alumno::all();
        
    }

    public function detail($id){
        $alumno = Alumno::where('id', $id) ->first();
        if (!$alumno) {
            return back();
        }
        return view('alumno.editar')->with('alumno',$alumno);
        
    }

    public function show($id){
    	return Alumno::find($id);
    }

    public function save(Request $request){
        $alumno = new Alumno();
        $alumno->apPaterno = $request->input('apPaterno');
        $alumno->apMaterno = $request->input('apMaterno');
        $alumno->nombre = $request->input('nombre');
        $alumno->codigo = $request->input('codigo');
        $alumno->dni = $request->input('dni');
        $alumno->ciclo = $request->input('ciclo');
        $alumno->departamento = $request->input('departamento');
        $alumno->provincia = $request->input('provincia');
        $alumno->distrito = $request->input('distrito');
        $alumno->direccion = $request->input('direccion');
        $alumno->escuela = $request->input('escuela');
        $alumno->genero = $request->input('genero');
        $alumno->correo = $request->input('correo');
        $alumno->telefono = $request->input('telefono');
        $alumno->estado = $request->input('estado');
         $alumno->username = $request->input('codigo');
        $alumno->password = $request->input('dni');
       
        
        $alumno->save();

        return redirect()->route('alumno_view')->with('status','Se registro alumno con éxito.');
        
        //print_r($request->input());
    //	return Alumno::create($request->all());
   //    return $this->$request ->all();
        
    }

    public function editar(Request $request){
    	
        $alumno = Alumno::findOrFail($request->id);
    	$alumno->apPaterno = $request->input('apPaterno');     
        $alumno->apMaterno = $request->input('apMaterno');     
        $alumno->nombre = $request->input('nombre');
        $alumno->dni = $request->input('dni');
        $alumno->codigo = $request->input('codigo');
        $alumno->direccion = $request->input('direccion');
        $alumno->save();

        return redirect()->route('alumno_view');
    
    	
    }

    public function delete(Request $request){
    	$alumno = Alumno::findOrFail($request->id);
    	$alumno->delete();
    	return redirect()->route('alumno_view');
    }
}
    