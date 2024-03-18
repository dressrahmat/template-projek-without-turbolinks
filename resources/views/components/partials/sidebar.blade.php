<div :class="{'w-32 p-2': !isOpen, 'w-48 lg:w-64 pt-2': isOpen}"
    class="hidden md:block bg-base-100 text-white  border-r-2 border-accent shadow-xl z-30 transition-width duration-300 fixed inset-y-0">

    <!-- Logo -->
    <div class="flex items-center text-base-content justify-between mx-3">
        <div :class="{'text-3xl': isOpen, 'hidden': !isOpen}" class=" w-1/2 my-2 mx-1">
            <p class="text-left">Simple Projek</p>
        </div>
        <div :class="{'hidden': isOpen, 'text-3xl': !isOpen}" class=" w-1/2 my-2 mx-1">
            <p class="text-left">SM</p>
        </div>
        <button @click="isOpen = !isOpen" class="px-4 my-4">
            <!-- Toggle -->
            <div x-show="isOpen" class="ml-6">
                <i class="far fa-caret-square-left text-2xl"></i>
            </div>
            <div x-show="!isOpen" class="ml-3">
                <i class="far fa-caret-square-right text-2xl"></i>
            </div>
        </button>
    </div>
    <!-- Sidebar Content -->
    <ul class="menu text-xl mt-3">
        <li class="py-2">
            <a href="{{route('dashboard')}}"
                class="flex items-center px-4 py-4 my-1 hover:bg-primary font-semibold hover:bg-opacity-50 hover:text-slate-600 hover:border-2 hover:border-accent {{ request()->routeIs('dashboard') ? 'text-base-100 bg-primary ' : 'text-base-content' }}">
                <i class="fas fa-home"></i>
                <span class="ml-2" x-show="isOpen">Dashboard</span>
            </a>
        </li>
        {{-- <li class="py-2 bg-transparent">
            <a href="#"
                class="flex items-center px-4 py-2 my-1 text-base-content {{ request()->routeIs('masjid') ? 'bg-gray-700' : '' }}">
                <i class="fa fa-solid fa-mosque"></i>
                <span class="ml-2" x-show="isOpen">Masjid</span>
            </a>
        </li> --}}
        <li class="py-2 {{ request()->routeIs('permissions.*') || request()->routeIs('role.*') || request()->routeIs('user.*') ? 'glass rounded-md' : '' }}">
            <details {{ request()->routeIs('permissions.*') || request()->routeIs('role.*') || request()->routeIs('user.*') ? 'open' : '' }}>
                <summary class="bg-transparent text-base-content hover:bg-primary hover:text-base-100 py-4">
                    <i class="fa fa-solid fa-toolbox"></i>
                    <span class="ml-2" x-show="isOpen">Setting</span>
                </summary>
                <ul :class="{'ml-4 mt-2': isOpen, 'ml-1 mt-4': !isOpen}">
                    <li>
                        <a href="{{route('permissions.index')}}"
                            class="flex items-center px-4 py-4 my-1 hover:bg-primary font-semibold hover:bg-opacity-50 hover:text-slate-600 hover:border-2 hover:border-accent {{ request()->routeIs('permissions.index') ? 'text-base-100 bg-primary ' : 'text-base-content' }}">
                            <i class="fas fa-file-contract"></i>
                            <span class="ml-2" x-show="isOpen">Hak Akses</span>
                        </a>
                    </li>
                    {{-- <li class="{{ request()->routeIs('role.index') ? 'bg-gray-900 glass rounded-md' : '' }}">
                        <a href="{{route('role.index')}}"
                            class="flex items-center px-4 py-2 my-1 text-base-content">
                            <i class="fas fa-plus-circle"></i>
                            <span class="ml-2" x-show="isOpen">Role</span>
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('user.*') ? 'bg-gray-900 glass rounded-md' : '' }}">
                        <a href="{{route('user.index')}}"
                            class="flex items-center px-4 py-2 my-1 text-base-content">
                            <i class="fas fa-user"></i>
                            <span class="ml-2" x-show="isOpen">User</span>
                        </a>
                    </li> --}}
                </ul>
            </details>
        </li>
    </ul>
</div>
