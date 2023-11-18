<div class="modal fade" id="editModal{{ $note->id }}" tabindex="-1" aria-labelledby="editModal{{ $note->id }}Label"
    aria-hidden="true" wire:ignore>
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editModal{{ $note->id }}Label">Edit Note {{ $note->id }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <input type="text" class="form-control" wire:model="mynote" value="{{ $note->id }}">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form wire:submit="update({{ $note->id }})">
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                </form>
            </div>

        </div>
    </div>
</div>
