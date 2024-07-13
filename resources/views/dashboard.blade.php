<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <span id="typewriter">
                        {{ sprintf("Hi %s! it's nice to see you again. Welcome to Salakot Philippines where we offer various educational blog content for agricultural farmers and agri-tech enthusiast.", $name) }}
                    </span>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
