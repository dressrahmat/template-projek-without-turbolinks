<div class="text-base-content z-20">
    <div class="bg-base-200 flex flex-row-reverse items-center p-1 fixed inset-x-0 px-5">

        <!-- Navbar -->
        <div :class="{'w-10/12': isOpen, 'w-11/12': !isOpen}" class="flex py-3 justify-between transition-all duration-500">
            <p class="font-bold">Simple Projek
                <span class="font-normal block">Jadikan sistem manajemen instansi anda menjadi lebih optimal dan efisien
                    dengan Simple Projek</span>
            </p>

            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        @if (auth()->user()->profile)
                        <img alt="Tailwind CSS Navbar component"
                            src="{{asset(auth()->user()->profile->photo_profile)}}" />
                        @else
                        <img alt="Tailwind CSS Navbar component"
                            src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                        @endif
                    </div>
                </div>
                <ul tabindex="0"
                    class="mt-3 z-[1] p-2 menu menu-sm dropdown-content bg-base-100 shadow-lg rounded-box w-52">
                    <li>
                        <a href="{{route('akun.edit')}}" class="justify-between">
                            Akun
                        </a>
                    </li>
                    <li>
                        <a href="{{route('profile.form', auth()->user()->id)}}" class="justify-between">
                            Profile
                        </a>
                    </li>
                    <li>
                        <!-- Logout Button -->
                        <form action="{{ route('logout') }}" method="POST" class="mr-4">
                            @csrf
                            <button type="submit"
                                >Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
