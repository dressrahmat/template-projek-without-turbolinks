<div class="card card-side bg-base-100 shadow-xl">
    <div class="card-body">
        <div class="flex justify-between items-center mx-4 gap-x-9">
            <div class="border-l-8 border-accent px-4 py-4 my-2 bg-gray-700 shadow-md w-fit">
                <h1 class="text-xl text-slate-50 font-bold">Data Jabatan</h1>
            </div>
            {{-- <div>
                <input type="text" wire:model.debounce.50ms="search" wire:keyup="refreshSearch"
                    class="border border-gray-300 px-3 py-1 mt-2 rounded-md" placeholder="Cari...">
            </div> --}}
        </div>
        <table class="table text-base">
            <!-- head -->
            <thead class="text-lg">
                <tr>
                    <th>No</th>
                    <th>Jabatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $role)
                <tr>
                    <td>{{ $data->firstItem() + $loop->index }}</td>
                    <td>{{ $role->name }}</td>
                    <td>
                        <!-- Dropdown -->
                        <div class="dropdown">
                            <div tabindex="0" role="button" class="btn btn-xs rounded-md btn-neutral m-1"><i
                                    class="fas fa-eye"></i></div>
                            <ul tabindex="0"
                                class="dropdown-content z-[1] menu p-2 shadow bg-base-300 rounded-md w-fit">
                                {{-- <li class="my-1">
                                    <a href="{{ route('profile.edit', $role->id) }}"
                                        class="btn btn-xs rounded-md btn-success">
                                        <i class="far fa-id-card text-base"></i>
                                    </a>
                                </li> --}}
                                <li class="my-1">
                                    <a wire:click="$dispatch('edit-form', {id: {{$role->id}} })"
                                        class="btn btn-xs rounded-md btn-primary">
                                        <i class="fas fa-edit text-base"></i>
                                    </a>
                                </li>

                                <li class="my-1">
                                    <button class="btn btn-xs rounded-md btn-secondary" wire:key="{{ $role->id }}" wire:click="delete({{ $role->id }})" wire:confirm="Apakah Anda yakin ingin menghapus {{ $role->name }}?">
                                        <i class="fas fa-trash-alt text-base"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center">Tidak ada data</td>
                </tr>
                @endforelse

            </tbody>
        </table>
        <div class="my-5">
            {{ $data->links('livewire.pagination-custom', ['paginatorName' => 'user_']) }}
        </div>
    </div>
</div>
