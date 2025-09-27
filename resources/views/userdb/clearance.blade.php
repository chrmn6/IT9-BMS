<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-900 dark:text-gray-200 leading-tight">
        {{ __('Clearance') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

        
            <div class="bg-gradient-to-r from-blue-400 to-indigo-500 dark:from-gray-700 dark:to-gray-900 overflow-hidden shadow-lg sm:rounded-xl">
                <div class="p-6 text-black dark:text-gray-100">
                    <h3 class="text-xl font-semibold mb-2">Welcome to Your Clearance Dashboard</h3>
                    <p class="mb-1">Here you can track all your clearance requests, view approval status, and manage details efficiently.</p>
                    <p class="italic text-sm"> Click on a request to see more information or download your clearance once approved.</p>
                </div>
            </div>

            
            <div class="bg-white dark:bg-gray-800 shadow-lg sm:rounded-xl overflow-x-auto">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">Recent Clearances</h3>
                    
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Name</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Request Type</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Date</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Status</th>
                          
                                </td>
                                <td class="px-4 py-2">
                                    <button class="bg-blue-500 hover:bg-blue-600 text-white text-xs px-3 py-1 rounded-lg"></button>
                                </td>
                                    </span>
                                </td>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
