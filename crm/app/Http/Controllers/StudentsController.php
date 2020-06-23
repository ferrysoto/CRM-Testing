<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\School;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $students = Student::paginate(10);
      $schools = School::get();

      return view('students.index', compact('students', 'schools'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $schools = School::get();

      return view('students.create', compact('schools'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validate = $request->validate([
            'name'      => 'required|max:255',
            'address'   => 'required|max:255',
            'born_date' => 'required|date',
            'born_city' => 'required|max:255',
            'school_id' => 'required',
        ]);

        if ($validate) {
          $is_insert = Student::insert([
            'name'      => $request['name'],
            'address'   => $request['address'],
            'born_date' => $request['born_date'],
            'born_city' => $request['born_city'],
            'school_id' => $request['school_id'],
          ]);
          if ($is_insert) {
            return redirect()->route('student.index')->with('success', 'Alumno creado correctamente');
          }
        } else {
          return redirect()->route('student.index')->with('error', 'Comprueba los datos del formulario y vuelve a intentarlo');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::where('id', $id)->first();
        $schools = School::get();

        return view('students.show', compact('student', 'schools'));
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

      $validate = $request->validate([
            'name'      => 'required|max:255',
            'address'   => 'required|max:255',
            'born_date' => 'required|date',
            'born_city' => 'required|max:255',
            'school_id' => 'required',
        ]);

        if ($validate) {
         $is_updated =  Student::where('id', $id)->update([
            'name'      => $request['name'],
            'address'   => $request['address'],
            'born_date' => $request['born_date'],
            'born_city' => $request['born_city'],
            'school_id' => $request['school_id'],
          ]);

          if ($is_updated) {
            return back()->with('success', 'Alumno modificado correctamente');
          }
        } else {
          return back()->with('error', 'Comprueba los datos del formulario y vuelve a intentarlo');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $is_deleted = Student::where('id', $id)->delete();

      if ($is_deleted) {
        return redirect()->route('student.index')->with('success', 'Alumno eliminado correctamente');
      } else {
        return redirect()->route('student.index')->with('error', 'No se ha podido eliminar el alumno seleccionado');
      }
    }
}
