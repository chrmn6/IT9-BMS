<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Barangay Matina Gravahan Management System') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Welcome Message --}}
            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900 dark:text-gray-100 text-lg font-medium">
                    Welcome, {{ Auth::user()->name }}!
                </div>
            </div>

            {{-- Dashboard Cards --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Residents</h3>
                    <p class="text-gray-600 dark:text-gray-400 mt-2">120 Registered</p>
                </div>

                <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Requests</h3>
                    <p class="text-gray-600 dark:text-gray-400 mt-2"></p>
                </div>

                <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Active Issues</h3>
                    <p class="text-gray-600 dark:text-gray-400 mt-2"></p>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
