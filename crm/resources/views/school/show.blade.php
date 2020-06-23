@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="col-md-12">
      <div class="card">
        <h5 class="card-header">Ficha de la escuela {{ $school->name }}</h5>
        <div class="card-body">
          <div class="col-md-6">
            <img src="{{ asset('images/' . $school->img_name) }}">
          </div>
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
          <form action="{{ route('school.update', $school->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" name="name" maxlength="255" required value="{{ $school->name }}">
              </div>
              <div class="form-group col-md-6">
                <label for="address">Dirección</label>
                <input type="text" class="form-control" name="address" maxlength="255" required value="{{ $school->address }}">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" maxlength="255" required value="{{ $school->email }}">
              </div>
              <div class="form-group col-md-6">
                <label for="phone">Teléfono</label>
                <input type="tel" class="form-control" name="phone" maxlength="255" required value="{{ $school->phone }}">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="web_link">Página web</label>
                <input type="text" class="form-control" name="web_link" value="{{ $school->web_link }}" required>
              </div>
              <div class="form-group col-md-6">
                <label for="image">Logotipo</label>
                <input type="file" class="form-control" name="image">
              </div>
            </div>
            <button type="submit" class="btn btn-success float-right">Guardar cambios</button>
          </form>
          <button type="button" class="btn btn-danger float-left" data-toggle="modal" data-target="#removeModal">
            Borrar ficha
          </button>
          @include('removeAlertModal')
        </div>
      </div>
    </div>
  </div>
@endsection
