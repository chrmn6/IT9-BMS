<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Contact Information') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- General Contact Info Card -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">
                    {{ __('Resident Contact Details') }}
                </h3>
                <p class="text-gray-600 dark:text-gray-400 mb-6">
                    {{ __('Use this section to view or update personal contact information.') }}
                </p>

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Contact Type</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Details</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Notes</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                <td class="px-4 py-2 text-gray-700 dark:text-gray-300">Phone</td>
                                <td class="px-4 py-2 text-gray-700 dark:text-gray-300">
                                    {{-- Insert phone number dynamically --}}
                                </td>
                                <td class="px-4 py-2 text-gray-700 dark:text-gray-300"></td>
                            </tr>
                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                <td class="px-4 py-2 text-gray-700 dark:text-gray-300">Email</td>
                                <td class="px-4 py-2 text-gray-700 dark:text-gray-300">
                                    {{-- Insert email dynamically --}}
                                </td>
                                <td class="px-4 py-2 text-gray-700 dark:text-gray-300"></td>
                            </tr>
                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                <td class="px-4 py-2 text-gray-700 dark:text-gray-300">Address</td>
                                <td class="px-4 py-2 text-gray-700 dark:text-gray-300">
                                    {{-- Insert address dynamically --}}
                                </td>
                                <td class="px-4 py-2 text-gray-700 dark:text-gray-300"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Barangay Office Contact Card -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">
                    {{ __('Barangay Office Contact Info') }}
                </h3>
                <p class="text-gray-600 dark:text-gray-400 mb-6">
                    {{ __('Official contact details for the barangay office. Residents can use these to report issues, request documents, or inquire about programs.') }}
                </p>

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Contact Type</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Details</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Office Hours</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                <td class="px-4 py-2 text-gray-700 dark:text-gray-300">Phone</td>
                                <td class="px-4 py-2 text-gray-700 dark:text-gray-300">
                                    {{-- Insert official barangay phone dynamically --}}
                                </td>
                                <td class="px-4 py-2 text-gray-700 dark:text-gray-300">
                                    {{-- Insert office hours dynamically --}}
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                <td class="px-4 py-2 text-gray-700 dark:text-gray-300">Email</td>
                                <td class="px-4 py-2 text-gray-700 dark:text-gray-300">
                                    {{-- Insert official barangay email dynamically --}}
                                </td>
                                <td class="px-4 py-2 text-gray-700 dark:text-gray-300">
                                    {{-- Insert office hours dynamically --}}
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                <td class="px-4 py-2 text-gray-700 dark:text-gray-300">Office Address</td>
                                <td class="px-4 py-2 text-gray-700 dark:text-gray-300">
                                    {{-- Insert barangay office address dynamically --}}
                                </td>
                                <td class="px-4 py-2 text-gray-700 dark:text-gray-300">
                                    {{-- Optional: visiting hours --}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
