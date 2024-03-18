<div class="card bg-base-100 text-base-content overflow-hidden">
    <div class="card-body items-center text-center">
        <h2 class="card-title">Yakin!</h2>
        <p>Anda ingin menghapus : {{ $permission->name }}.</p>
        <div class="card-actions justify-end">
            <button wire:click="delete()" class="btn btn-secondary">Setuju</button>
            <button wire:click="$dispatch('closeModal')" class="btn btn-ghost">Cancel</button>
        </div>
    </div>
</div>