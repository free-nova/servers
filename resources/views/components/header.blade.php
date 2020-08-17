<nav class="bg-gray-500">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between py-3">
            <div class="flex-shrink-0">
                <h1 class="text-white text-sm">TurnKey Digital Servers</h1>
            </div>
            <div class="sm:block sm:ml-6">
                <div class="flex">
                    <a href="/nova/resources/servers/new" class="ml-4 px-3 py-2 rounded-md text-sm font-medium leading-5 text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Add Server</a>
                    <a href="/nova/resources/domains/new" class="ml-4 px-3 py-2 rounded-md text-sm font-medium leading-5 text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Add Domain</a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="ml-4 px-3 py-2 rounded-md text-sm font-medium leading-5 text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Logout</a>
                </div>
            </div>
        </div>
    </div>
</nav>
