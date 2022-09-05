<h1>Editar Post</h1>

@include('livewire.form')

<div class="d-grid gap-2 mt-2">
    <button class="btn btn-primary" wire:click="update">
        Editar
    </button>

    <button class="btn btn-outline-primary" wire:click="default">
        Cancelar
    </button>
</div>
