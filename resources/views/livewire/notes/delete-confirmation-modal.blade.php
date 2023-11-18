<div class="modal fade" id="deleteConfirmationModal{{ $note->id }}" tabindex="-1" aria-labelledby="deleteConfirmationModal{{ $note->id }}Label"
    aria-hidden="true" wire:ignore>
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteConfirmationModal{{ $note->id }}Label">Delete Note {{ $note->id }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this note?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form wire:submit="delete({{ $note->id }})">
                    <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Delete</button>
                </form>
            </div>

        </div>
    </div>
</div>
