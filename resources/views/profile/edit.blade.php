<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl grid grid-cols-2 gap-4">

        <div class="grid gap-3">
            <div class="p-4 sm:p-8 bg-base-100 shadow sm:rounded-lg h-fit">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>
            <div class="p-4 sm:p-8 bg-base-100 shadow sm:rounded-lg h-fit">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>

        <div class="p-4 sm:p-8 bg-base-100 shadow sm:rounded-lg h-fit">
            <div class="max-w-xl">
                @include('profile.partials.update-password-form')
            </div>
        </div>

    </div>
</x-app-layout>
