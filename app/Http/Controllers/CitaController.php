<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Horario;
use App\Models\Doctor;
use App\Models\Cita;
use App\Models\Test;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function load()
    {
        //
        $cita = Cita::select('*')->get();
        return view('cita.listar',compact('cita'));
        //dd($cita);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
            $i = 1;
          $alumno = Test::select('*')->join('alumnos','test.alumno_id','=','alumnos.id')->where('test_estado',$i)->get();
          $doctor = Horario::select('*')->join('doctor','horario.doctor_id','=','doctor.id')->get();
        return view('cita.agregar',compact('alumno'),compact('doctor'));
        // dd($horario);
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
        $cita = new Cita();
        $cita->horario_id = $request->input('doctor');
        $cita->test_id = $request->input('alumno');
        $cita->fecita = $request->input('atencion');
        $cita->descripcion = $request->input('descripcion');
        $cita->save();  

        return redirect()->route('cita_view')->with('success','Se registro la Cita con éxito.');

      //  dd($request->input('alumno'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        //
        return view('cita.editar');
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
