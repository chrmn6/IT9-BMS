<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Activities') }}
        </h2>
    </x-slot>
    
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 space-y-3">
    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Welcome to Your Activities Dashboard!</h3>
    <p class="text-gray-600 dark:text-gray-400">
        Stay on top of all community events and programs. Check upcoming activities, join events and keep track of important dates all in one place.
    </p>
    </p>
</div>

            </div>

        
            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg overflow-x-auto">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">Recent Activities</h3>
                    
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th class="px-4 py-2 text-left text-s font-bold text-gray-500 dark:text-gray-300 uppercase tracking-wider">Activity Name</th>
                                <th class="px-4 py-2 text-left text-s font-bold text-gray-500 dark:text-gray-300 uppercase tracking-wider">Type</th>
                                <th class="px-4 py-2 text-left text-s font-bold text-gray-500 dark:text-gray-300 uppercase tracking-wider">Date</th>
                                <th class="px-4 py-2 text-left text-s font-bold text-gray-500 dark:text-gray-300 uppercase tracking-wider">Location</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                            <tr>
                                
                            </tr>
                            <tr class="bg-gray-50 dark:bg-gray-700">
                               
                            </tr>
                            <tr>
                                
                            </tr>
                            <tr>
                        </tbody>
                    </table>
                    
                </div>
            </div>
            
        </div>
    </div>
</x-app-layout>
