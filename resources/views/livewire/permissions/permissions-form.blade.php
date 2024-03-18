<div class="card card-side bg-base-100 shadow-xl">
    <div class="card-body">
        @include('components.partials.alert')
        <div class="border-l-8 border-accent px-4 py-4 my-2 bg-gray-700 shadow-md w-fit">
            <h1 class="text-xl text-slate-50 font-bold">Tambah Hak Akses</h1>
        </div>
        <form>
            <!-- Nama Permission -->
            <div class="mb-2">
                <label class="form-control relative">
                    <span class="label-text py-2">Nama Hak Akses</span>
                    <input type="text" wire:model="form.name" placeholder="Masukkan nama role"
                        class="input input-primary rounded-md @error('form.name') border-red-500 @enderror" 
                        autofocus />
                        @error('form.name') <span class="absolute bottom-1/2 top-1/2 translate-y-1/2 my-auto right-0"><i class="fa-solid font-bold fa-exclamation text-red-500 p-2 border border-secondary rounded-full w-fit "></i></span> @enderror
                    @error('form.name') <span class="error text-red-500">{{ $message }}</span> @enderror
                </label>
            </div>

            <!-- Submit Button -->
            <div class="flex flex-col gap-y-3 mt-2">
                @if ($editMode)
                <button wire:click.prevent="save()" class="btn btn-primary rounded-md text-slate-50">
                        Update
                </button>
                <button wire:click.prevent="cancel()" class="btn btn-neutral">Cancel</button>
                @else
                <button wire:click.prevent="save()" class="btn btn-primary rounded-md text-slate-50">
                        Tambah
                </button>
                        @endif
            </div>
        </form>
    </div>
</div>