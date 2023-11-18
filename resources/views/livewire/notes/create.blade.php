<?php

use Livewire\Volt\Component;
use App\Models\Note; // Corrected namespace

new class extends Component {
    public string $mynote = "";

    public function store() {
        if($this->mynote != "") {
            Note::create([
                'note' => $this->mynote,
            ]);
            
            $this->mynote = "";
            $this->dispatch('note-updated'); 
        }
    }
}; 

?>

<div>
    <form wire:submit="store">
        <div class="mb-3">
            <input type="text" class="form-control" wire:model="mynote">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
