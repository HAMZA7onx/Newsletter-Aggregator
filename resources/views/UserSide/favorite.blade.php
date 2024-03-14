@include('Shared.components.header')

<body>

<x-Navbar :links="[
        'Home' => '/home',
        'Trend' => '/Trend',
        'Favorites' => '/favorites',
        'Categories' => '/categories',
        'Profile' => '/profile',
    ]" />



    <div class="container my-40  w-full  right-0 px-4 py-5 ">
        <div class="mt-2  grid gap-10 md:grid-cols-2  lg:gap-10 xl:grid-cols-2">
            @foreach ($userFavoriteRssItems as $rssItem)
            <div class="group cursor-pointer">
                <div class="flex flex-col justify-center">
                    <div id="group" class="relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl p-3 max-w-xs md:max-w-full mx-auto border border-white transition-all duration-300 transform hover:scale-102 shadowrss shadow-xl">
                        <div class="w-full md:w-1/3 bg-white grid place-items-center">
                            <img src="{{ $rssItem->image }}" alt="RSS Image" class="rounded-xl" />
                        </div>


                        <div class="w-1/2 md:w-2/3 bg-white flex flex-col space-y-2 p-3">
                            <div class="flex justify-between item-center">

                                <div class="bg-gray-200 px-3 py-1 rounded-full text-xs font-medium text-gray-800 hidden md:block">
                                    <span class="font-black text-gray-800 md:text-1xl text-lg">{{ $rssItem->category }}</span>
                                </div>
                                @if (Auth::check())
                                @if (Auth::user()->favorites->contains($rssItem->id))
                                <!-- Show button/icon to remove from favorites -->
                                <form action="{{ route('removeFromFavorites', $rssItem->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-pink-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </form>
                                @else
                                <!-- Show button/icon to add to favorites -->
                                <form action="{{ route('addToFavorites', $rssItem->id) }}" method="POST" id="addToFavoritesForm">
                                    @csrf
                                    <button type="submit" class="flex items-center justify-center bg-gray-100 rounded-full p-2 hover:bg-gray-200 focus:outline-none" id="addToFavoritesButton">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 4.472l1.546-1.455a4.347 4.347 0 016.156 6.1l-7.65 7.205a1.2 1.2 0 01-1.656 0l-7.65-7.205a4.347 4.347 0 016.156-6.1L10 4.472z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </form>
                                @endif
                                @else
                                <!-- Show button/icon to add to favorites for non-logged-in users -->
                                <button type="button" class="flex items-center justify-center bg-gray-100 rounded-full p-2 hover:bg-gray-200 focus:outline-none" onclick="showLoginAlert()">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 4.472l1.546-1.455a4.347 4.347 0 016.156 6.1l-7.65 7.205a1.2 1.2 0 01-1.656 0l-7.65-7.205a4.347 4.347 0 016.156-6.1L10 4.472z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                                @endif

                            </div>
                            <div class="flex flex-col justify-between h-60">
                                <div class="fixtheheight">
                                    <h3 class="font-black text-gray-800 md:text-md text-xl">{{ $rssItem->name }}
                                    </h3>
                                    <p class="text-gray-600 overflow-hidden" style="height: 4.5em;">
                                        {{ $rssItem->description }}
                                    </p>
                                </div>
                                <div class="flex justify-between items-center mt-4">
                                    <a href="{{ route('news.detail', ['id' => $rssItem->id, 'slug' => $rssItem->slug]) }}" class="text-blue-600 hover:text-blue-700 font-semibold">Read More</a>
                                    <p class="text-sm font-black text-gray-800">
                                        Created-at: <span class="font-light text-gray-400">{{ $rssItem->created_at->toFormattedDateString() }}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>




</body>
