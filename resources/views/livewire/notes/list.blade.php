<?php

use App\Models\Note;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\On; 
use Livewire\Volt\Component;

new class extends Component
{
    public $notes;
    public $mynote;
    public $isModalOpen = false;
    
    public function mount(): void
    {
        $this->getNotes();
    } 

    public function edit($id) {
        $note = Note::where('id' , $id)->first();
        $this->mynote = $note->note;
    }

    public function update($id) {
        $note = Note::where('id' , $id)->first();
        $note->update([
            'note' => $this->mynote,
        ]);
        $this->mynote = "";
        $this->isModalOpen = false;
        $this->dispatch('note-updated'); 
    }

    public function delete($id) {
        $note = Note::where('id' , $id)->first();
        $note->delete();
        $this->dispatch('note-updated'); 
    }

    #[On('note-updated')]
    public function getNotes(): void
    {
        $this->notes = Note::all();
    }

    
}


?>

<div>
    @foreach ($notes as $note)
    <div class="card mb-3">
        <div class="card-body d-flex justify-content-between align-items-center">
            <p class="card-text">{{ $note->note }}</p>
            <div class="btn-group">
                <button type="button" wire:click="edit({{ $note->id }})" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal{{ $note->id }}" >
                    Edit
                </button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal{{ $note->id }}" >
                    Delete
                </button>
            </div>
        </div>
    </div>
    @include('livewire.notes.edit-modal')
    @include('livewire.notes.delete-confirmation-modal')
    @endforeach
</div>
