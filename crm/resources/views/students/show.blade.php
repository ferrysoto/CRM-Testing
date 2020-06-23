@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="col-md-12">
      <div class="card">
        <h5 class="card-header">Ficha de {{ $student->name }}</h5>
        <div class="card-body">
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          @if (\Session::has('success'))
            <div class="alert alert-success">
              {!! \Session::get('success') !!}
            </div>
          @endif
          <form action="{{ route('student.update', $student->id) }}" method="post">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" name="name" maxlength="255" required value="{{ $student->name }}">
              </div>
              <div class="form-group col-md-6">
                <label for="address">Dirección</label>
                <input type="text" class="form-control" name="address" maxlength="255" required value="{{ $student->address }}">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="born_city">Ciudad natal</label>
                <input type="text" class="form-control" name="born_city" maxlength="255" required value="{{ $student->born_city }}">
              </div>
              <div class="form-group col-md-4">
                <label for="school_id">Escuela</label>
                <select name="school_id" class="form-control">
                  @foreach ($schools as $sch)
                    @if ($sch->id == $student->school_id)
                      <option value="{{ $sch->id }}" selected>{{ $sch->name }}</option>
                    @else
                      <option value="{{ $sch->id }}">{{ $sch->name }}</option>
                    @endif
                  @endforeach
                </select>
              </div>
              <div class="form-group col-md-2">
                <label for="born_date">Fecha de nacimiento</label>
                <input type="date" class="form-control" name="born_date" value="{{ $student->born_date }}" required>
              </div>
            </div>
            <button type="submit" class="btn btn-success float-right">Guardar cambios del alumno</button>
          </form>
          <button type="button" class="btn btn-danger float-left" data-toggle="modal" data-target="#removeModal">
            Borrar ficha del alumno
          </button>
          @include('removeAlertModal')
        </div>
      </div>
    </div>
  </div>
@endsection
