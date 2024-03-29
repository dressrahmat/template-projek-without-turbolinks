<div class="card card-side bg-base-100 shadow-xl">
    <div class="card-body">
        @include('components.partials.alert')
        <div class="border-l-8 border-accent px-4 py-4 my-2 bg-gray-700 shadow-md w-fit">
            <h1 class="text-xl text-slate-50 font-bold">Tambah Jabatan</h1>
        </div>
        <form>
            <!-- Nama Role -->
            <div class="mb-4">
                <label class="form-control relative">
                    <span class="label-text py-2">Nama Jabatan</span>
                    <input type="text" wire:model="form.name" placeholder="Masukkan nama role"
                        class="input input-primary rounded-md @error('form.name') border-red-500 @enderror" autofocus />
                        <x-input-error :messages="$errors->get('form.permissions')" class="mt-2" />
                </label>
            </div>

            <!-- Beri Hak Akses -->
            <div class="mb-4">
                <label wire:ignore class="form-control relative">
                    <span class="label-text py-2">Hak Akses</span>
                    <x-tom 
                        x-init="$el.permissions = new Tom($el, {
                            sortField: {
                                field: 'permissions',
                                direction: 'asc',
                            },
                            valueField: 'permissions',
                            labelField: 'permissions',
                            searchField: 'permissions',
                        });"
                        @set-reset.window="$el.permissions.clear()"
                    id="form.permissions" type="text" class="mt-1 w-full" multiple wire:model="form.permissions">
                        <option></option>
                        @foreach ($permissions as $permission)
                            <option>{{ $permission->name }}</option>
                        @endforeach
                    </x-tom>
                    <x-input-error :messages="$errors->get('form.permissions')" class="mt-2" />
                </label>
            </div>

            <!-- Submit Button -->
            <div class="flex flex-col gap-y-3 mt-2">
                <button wire:click.prevent="save()" class="btn btn-primary rounded-md text-slate-50">
                    Tambah
                </button>
            </div>
        </form>
    </div>
</div>
