<div class="modal fade" id="removeStudent" tabindex="-1" role="dialog" aria-labelledby="removeStudentLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header alert alert-danger">
        <h5 class="modal-title" id="removeStudentLabel">¡Advertencia!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
          ¿Estás totalmente seguro de que deseas eliminar al alumno {{ $student->name }}?
        </p>
        <b>
          Estos cambios no podrán deshacerse
        </b>
      </div>
      <div class="modal-footer">
        <form action="{{ route('student.remove', $student->id) }}" method="post">
          @csrf
          <button type="submit" class="btn btn-danger float-left">Borrar ficha del alumno</button>
        </form>
      </div>
    </div>
  </div>
</div>
