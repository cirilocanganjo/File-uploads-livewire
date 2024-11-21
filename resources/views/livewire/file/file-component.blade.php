<div class="container col-md-5 bg-secondary p-2 my-5 rounded">

<form wire:submit='save'>
    <div class="">
        <label class="text-light">Name</label>
        <input wire:model='name' class="form-control" type="text">
        @error('name') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div class="">
        <label class="text-light">File</label>
        <input class="form-control" wire:model='photo' type="file" accept="image/png, image/jpeg, application/pdf, application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document, application/vnd.ms-excel, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet">
        @error('photo') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div class="mt-2">
        <button type="submit" class="text-uppercase btn btn-sm btn-primary">Save</button>
    </div>
</form>

</div>
