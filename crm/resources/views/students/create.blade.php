@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="col-md-12">
      <div class="card">
        <h5 class="card-header">Crear un alumno nuevo</h5>
        <div class="card-body">
          <form action="{{ route('student.store') }}" method="post">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" name="name" maxlength="255" required>
              </div>
              <div class="form-group col-md-6">
                <label for="address">Dirección</label>
                <input type="text" class="form-control" name="address" maxlength="255" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="born_city">Ciudad natal</label>
                <input type="text" class="form-control" name="born_city" maxlength="255" required>
              </div>
              <div class="form-group col-md-4">
                <label for="school_id">Escuela</label>
                <select name="school_id" class="form-control">
                  <option selected disabled>Elegir centro</option>
                  @foreach ($schools as $sch)
                    <option value="{{ $sch->id }}">{{ $sch->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group col-md-2">
                <label for="born_date">Fecha de nacimiento</label>
                <input type="date" class="form-control" name="born_date" required>
              </div>
            </div>
            <button type="submit" class="btn btn-success float-right">Añadir alumno</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
