<div class="modal fade" id="removeModal" tabindex="-1" role="dialog" aria-labelledby="removeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header alert alert-danger">
        <h5 class="modal-title" id="removeModalLabel">¡Advertencia!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
          ¿Estás totalmente seguro de que deseas eliminar la ficha de {{ $element->name }}?
        </p>
        <b>
          Estos cambios no podrán deshacerse
        </b>
      </div>
      <div class="modal-footer">
        <form action="{{ route($element->element . '.remove', $element->id) }}" method="post">
          @csrf
          <button type="submit" class="btn btn-danger float-left">Borrar ficha</button>
        </form>
      </div>
    </div>
  </div>
</div>
