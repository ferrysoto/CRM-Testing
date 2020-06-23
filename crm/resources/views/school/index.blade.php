@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h5 class="float-left" style="padding-top: 5px">Escuelas</h5>
          <a type="button" href="{{ route('school.create') }}" class="btn btn-outline-primary float-right">
            <i class="far fa-plus-square"></i>
            Añadir nueva escuela
          </a>
        </div>
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
           <table class="table">
            <thead>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Email</th>
              <th scope="col">Teléfono</th>
              <th scope="col">Opciones</th>
            </thead>
            <tbody>
              @foreach ($schools as $sch)
                <tr>
                  <td>
                    {{ $sch->id }}
                  </td>
                  <td>
                    {{ $sch->name }}
                  </td>
                  <td>
                    {{ $sch->email }}
                  </td>
                  <td>
                    {{ $sch->phone }}
                  </td>
                  <td>
                    <div class="btn-group" role="group">
                      <a class="btn btn-outline-primary" href="{{ route('school.show', $sch->id) }}">
                        <i class="fas fa-info-circle"></i>
                      </a>
                      <form action="{{ route('school.remove', $sch->id) }}" method="post">
                        @csrf
                        <button class="btn btn-outline-danger" type="submit">
                          <i class="fas fa-user-minus"></i>
                        </button>
                      </form>
                    </div>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="float-right">
        {{ $schools->links() }}
      </div>
    </div>
  </div>
@endsection
