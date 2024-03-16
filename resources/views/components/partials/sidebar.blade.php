<div :class="{'w-28 pt-20': !isOpen, 'w-48 lg:w-64 pt-20': isOpen}"
    class="hidden md:block bg-base-100 text-white shadow-xl z-30 transition-width duration-300 fixed inset-y-0">
    <!-- Sidebar Content -->
    <ul class="menu text-lg mt-3">
        <li class="py-2">
            <a href="{{route('dashboard')}}"
                class="flex items-center px-4 py-4 my-1 hover:bg-primary hover:bg-opacity-40 hover:text-slate-600 hover:border-2 hover:border-accent  {{ request()->routeIs('dashboard') ? 'text-base-100 bg-primary ' : 'text-base-content' }}">
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
        {{-- <li class="py-2 {{ request()->routeIs('permission.*') || request()->routeIs('role.*') || request()->routeIs('user.*') ? 'glass rounded-md' : '' }}">
            <details {{ request()->routeIs('permission.*') || request()->routeIs('role.*') || request()->routeIs('user.*') ? 'open' : '' }}>
                <summary class="bg-transparent">
                    <i class="fa fa-solid fa-toolbox"></i>
                    <span class="ml-2" x-show="isOpen">Setting</span>
                </summary>
                <ul :class="{'ml-4 mt-2': isOpen, 'ml-1 mt-4': !isOpen}">
                    <li class="{{ request()->routeIs('permission.index') ? 'bg-gray-900 glass rounded-md' : '' }}">
                        <a href="{{route('permission.index')}}"
                            class="flex items-center px-4 py-2 my-1 text-base-content">
                            <i class="fas fa-file-contract"></i>
                            <span class="ml-2" x-show="isOpen">Permission</span>
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('role.index') ? 'bg-gray-900 glass rounded-md' : '' }}">
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
                    </li>
                </ul>
            </details>
        </li> --}}
    </ul>
</div>
