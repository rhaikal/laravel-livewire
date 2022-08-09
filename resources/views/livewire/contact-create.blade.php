<div>
    <form wire:submit.prevent="store">
        <div class="container px-0 mb-3">
            <div class="row">
                <div class="col">
                    <input wire:model="name" type="text" name="" id="" class="form-control @error('name') is-invalid @enderror" placeholder="Name">
                    @error('name')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col">
                    <input wire:model="phone" type="text" name="" id="" class="form-control @error('phone') is-invalid @enderror" placeholder="Contact">
                    @error('phone')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
    </form>
</div>
