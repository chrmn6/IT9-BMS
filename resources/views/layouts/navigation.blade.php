<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="flex flex-col h-full">
        <!-- Logo -->
        <div class="shrink-0 flex items-center h-16 px-4">
            <a href="{{ route('dashboard') }}">
                <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
            </a>
        </div>

        <!-- Navigation Links -->
        <div class="flex-grow px-4 space-y-1 overflow-y-auto">
            <x-nav-link :href="route('dashboard')"
                :active="request()->routeIs('dashboard')">{{ __('Dashboard') }}</x-nav-link>
            <x-nav-link :href="route('activities')"
                :active="request()->routeIs('activities')">{{ __('Activities') }}</x-nav-link>
            <x-nav-link :href="route('announcement')"
                :active="request()->routeIs('announcement')">{{ __('Announcement') }}</x-nav-link>
            <x-nav-link :href="route('services')"
                :active="request()->routeIs('services')">{{ __('Services') }}</x-nav-link>
            <x-nav-link :href="route('service-request')"
                :active="request()->routeIs('service-request')">{{ __('Service Request') }}</x-nav-link>
            <x-nav-link :href="route('emergency')"
                :active="request()->routeIs('emergency')">{{ __('Contact Info') }}</x-nav-link>
        </div>

        <!-- User Settings Dropdown -->
        <div class="px-4 py-4 border-t border-gray-200 dark:border-gray-600">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button
                        class="inline-flex items-center w-full px-3 py-2 border border-transparent text-sm font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                        <div>{{ Auth::user()->name }}</div>
                        <div class="ms-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link :href="route('profile.edit')">{{ __('Profile') }}</x-dropdown-link>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault(); this.closest('form').submit();">{{ __('Log Out') }}</x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>
    </div>
</nav>