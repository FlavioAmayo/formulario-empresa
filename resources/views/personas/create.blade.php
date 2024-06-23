<div class="modal" id="createPersonaModal" tabindex="-1" role="dialog" aria-labelledby="createPersonaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createPersonaModalLabel">Agregar Persona</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @include('partials.form', [
                    'action' => route('personas.store'),
                    'method' => 'POST',
                    'persona' => null,
                    'buttonText' => 'Crear'
                ])
            </div>
        </div>
    </div>
</div>
