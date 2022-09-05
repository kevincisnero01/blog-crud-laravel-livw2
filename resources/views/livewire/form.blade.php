<label for="title" class="form-label">Titutlo</label>
<input type="text" class="form-control" id="title" wire:model="title">
@error('title') <span>{{ $message }}</span> @enderror

<label for="body" class="form-label">Contenido</label>
<textarea  class="form-control" id="body" rows="5" wire:model="body">
</textarea>
@error('body') <span>{{ $message }}</span> @enderror

