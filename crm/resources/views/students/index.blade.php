@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="col-md-12">
      <div class="card">
        <h5 class="card-header">Estudiantes</h5>
        <div class="card-body">
          <table class="table">
            <thead>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Opciones</th>
            </thead>
            <tbody>
              @foreach ($students as $std)
                <tr>
                  <td>
                    {{ $std->id }}
                  </td>
                  <td>
                    {{ $std->name }}
                  </td>
                  <td>
                    <a href="{{ route('school.show', $std->id) }}">
                      <i class="fas fa-info-circle"></i>
                    </a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="float-right">
        {{ $students->links() }}
      </div>
    </div>
  </div>
@endsection
