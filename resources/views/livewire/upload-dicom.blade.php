<!--
<div>
    
</div>
-->
<form wire:submit.prevent="save">
	<input type="file" wire:model="dicoms">
	
	@error('dicoms') <span class="error">{{ $message }}</span> @enderror
	
	<button type="submit">Load DICOMS</button>
	
</form>