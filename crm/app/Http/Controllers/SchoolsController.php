<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;

class SchoolsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = School::paginate(10);

        return view('school.index', compact('schools'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('school.create');
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
          'email'     => 'required|max:255',
          'phone'     => 'required|max:11',
          'image'     => 'required',
          'web_link'  => 'required',
        ]);

        if ($validate) {
          if($request->hasFile('image')) {
            $image = $request->file('image');
            $path = public_path(). '/images/';
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move($path, $filename);

            $is_insert =  School::insert([
              'name'      => $request['name'],
              'address'   => $request['address'],
              'img_name'  => $filename,
              'email'     => $request['email'],
              'phone'     => $request['phone'],
              'web_link'  => $request['web_link'],
            ]);

          if ($is_insert) {
            return redirect()->route('school.index')->with('success', 'Colegio modificado correctamente');
          } else {
            return redirect()->route('school.index')->with('error', 'Comprueba los datos del formulario y vuelve a intentarlo');
          }
        }
      } else {
        return redirect()->route('school.index')->with('error', 'Comprueba los datos del formulario y vuelve a intentarlo');
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
        $school = School::where('id', $id)->first();
        $element = $school;
        $element->element = 'school';

        return view('school.show', compact('school', 'element'));
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
          'email'     => 'required|max:255',
          'phone'     => 'required',
          'web_link'  => 'required',
        ]);

        if ($validate) {
          if ($request->image == null) {
            $is_updated =  School::where('id', $id)->update([
              'name'      => $request['name'],
              'address'   => $request['address'],
              'email'     => $request['email'],
              'phone'     => $request['phone'],
              'web_link'  => $request['web_link'],
            ]);

            if ($is_updated) {
              return back()->with('success', 'Colegio modificado correctamente');
            }

          } else {
            if($request->hasFile('image')) {
              $image = $request->file('image');
              $path = public_path(). '/images/';
              $filename = time() . '.' . $image->getClientOriginalExtension();
              $image->move($path, $filename);

              $is_updated =  School::where('id', $id)->update([
                'name'      => $request['name'],
                'address'   => $request['address'],
                'img_name'  => $filename,
                'email'     => $request['email'],
                'phone'     => $request['phone'],
                'web_link'  => $request['web_link'],
              ]);

              if ($is_updated) {
                return back()->with('success', 'Colegio modificado correctamente');
              }
            }
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
      $is_deleted = School::where('id', $id)->delete();

      if ($is_deleted) {
        return redirect()->route('school.index')->with('success', 'Escuela eliminada correctamente');
      } else {
        return redirect()->route('school.index')->with('error', 'No se ha podido eliminar la escuela seleccionada');
      }
    }
}
