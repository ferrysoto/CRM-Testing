@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="col-md-12">
      <div class="card">
        <h5 class="card-header">Crear una escuela nueva</h5>
        <div class="card-body">
          <form action="{{ route('school.store') }}" method="post" enctype="multipart/form-data">
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
                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" maxlength="255" required>
              </div>
              <div class="form-group col-md-6">
                <label for="phone">Teléfono</label>
                <input type="number" class="form-control" name="phone" max="999999999" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="web_link">Página web</label>
                <input type="text" class="form-control" name="web_link" required>
              </div>
              <div class="form-group col-md-6">
                <label for="img_name">Logotipo</label>
                <input type="file" class="form-control" name="image" accept="image/*" required>
              </div>
            </div>
            <button type="submit" class="btn btn-success float-right">Crear escuela</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
