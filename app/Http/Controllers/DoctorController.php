<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctor;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function load()
    {
        $doctor = Doctor::select('*')->get();
       // return $doctor;
        return view('doctor.listar', compact('doctor'));
    }

    public function enviar(){
        return view('doctor.agregar');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        //
        $doctor = Doctor::where('id', $id)->first();
        if (!$doctor) {
            return back();
        }
        return view('doctor.editar')->with('doctor',$doctor);
       
    }

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
        $doctor = new Doctor();
        $doctor->apPaterno = $request->input('apPaterno');
        $doctor->apMaterno = $request->input('apMaterno');
        $doctor->nombre = $request->input('nombre');
        $doctor->codigo = $request->input('codigo');
        $doctor->genero = $request->input('genero');
        $doctor->departamento = $request->input('departamento');
        $doctor->provincia = $request->input('provincia');
        $doctor->distrito = $request->input('distrito');
        $doctor->direccion = $request->input('direccion');
        $doctor->dni = $request->input('dni');
        $doctor->correo = $request->input('correo');
        $doctor->especialidad = $request->input('especialidad');
        $doctor->correo = $request->input('correo');
        $doctor->telefono = $request->input('telefono');
        $doctor->estado = $request->input('estado');

        $doctor->save();

        return redirect()->route('doctor_view')->with('status' , 'Se registro al Doctor con éxito.');

        
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
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar(Request $request){
        
        $alumno = Doctor::findOrFail($request->id);
        $alumno->apPaterno = $request->input('apPaterno');     
        $alumno->apMaterno = $request->input('apMaterno');     
        $alumno->nombre = $request->input('nombre');
        $alumno->dni = $request->input('dni');
        $alumno->codigo = $request->input('codigo');
        $alumno->direccion = $request->input('direccion');
        $alumno->save();

        return redirect()->route('doctor_view');
    
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function delete(Request $request){
        $doctor = Doctor::findOrFail($request->id);
        $doctor->delete();
        return redirect()->route('doctor_view');
    }
}
