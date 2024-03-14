<div class="h-screen flex flex-col w-14 hover:w-64 md:w-64 bg-blue-900 dark:bg-gray-500 h-full text-white transition-all duration-300 border-none z-10 sidebar">
    <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
        <ul class="flex flex-col py-4 space-y-1">
            <li class="px-5 hidden md:block">
                <div class="flex flex-row items-center h-8">
                    <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Main</div>
                </div>
            </li>
            <li>
                <a href="/home" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                          <ion-icon name="home-outline" class="text-2xl"></ion-icon>
                        </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Home</span>
                </a>
            </li>

            <li>
                <a href="{{ route('adminDash') }}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                          <ion-icon name="radio-outline" class="text-2xl"></ion-icon>
                        </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Add RSS Link</span>
                </a>
            </li>
            <li>
                <a href="{{ route('storedRssLinks') }}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                          <ion-icon name="link-outline" class="text-2xl"></ion-icon>
                        </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Stored RSS Links</span>
                </a>
            </li>
            <li>
                <a href="{{ route('storedRssItems') }}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                          <ion-icon name="clipboard-outline" class="text-2xl"></ion-icon>
                        </span>
                    <span class="ml-2 text-sm tracking-wide truncate">RSS's Items List</span>
                </a>
            </li>
            <li>
                <a href="{{ route('storedUsers') }}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                          <ion-icon name="people-outline" class="text-2xl"></ion-icon>
                        </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Users Management</span>
                </a>
            </li>
            <li>
                <a href="{{ route('flowchart') }}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                          <ion-icon name="analytics-outline" class="text-2xl"></ion-icon>
                        </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Items Per RSS</span>
                </a>
            </li>
            <li>
                <a href="{{ route('piechart') }}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                          <ion-icon name="pie-chart-outline" class="text-2xl"></ion-icon>
                        </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Categories population</span>
                </a>
            </li>
            <li>
                <a href="{{ route('display-items') }}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                          <ion-icon name="apps-outline" class="text-2xl"></ion-icon>
                        </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Display Items</span>
                </a>
            </li>
            <li>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="w-full relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                              <ion-icon name="log-out" class="text-2xl"></ion-icon>
                            </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Lgout</span>
                    </button>
                </form>
            </li>
        </ul>
        <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">Copyright @2024</p>
    </div>
</div>
