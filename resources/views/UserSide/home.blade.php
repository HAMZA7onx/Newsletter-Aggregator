@include('Shared.components.header')

<body class="bbb">
<style>
    .bbb{
        z-index: 100;
        /* background: url("https://wallpapers.com/images/hd/white-hd-1920-x-1200-background-w5xsbyermln13aks.jpg"); */
    }
    .containerbg {

  --sz: 4px; /*** size ***/
  --sp: 5s; /*** speed ***/
  --b1: #ffffff; /*** color ***/
--b2: #f0f0f0; /*** color ***/
--b3: #e0e0e0; /*** color ***/
--b4: #e0e0e0e0; /*** color ***/
--c1: #000000; /*** color ***/

  --ts: 50% / calc(var(--sz) * 17.5) calc(var(--sz) * 29.5);
  background:
		/* black shadows */ radial-gradient(
        circle at 50% 50%,
        var(--b4) calc(var(--sz) * 1),
        #fff0 calc(var(--sz) * 8)
      )
      var(--ts),
    radial-gradient(
        circle at 0% 0%,
        var(--b4) calc(var(--sz) * 1),
        #fff0 calc(var(--sz) * 8)
      )
      var(--ts),
    radial-gradient(
        circle at 0% 100%,
        var(--b4) calc(var(--sz) * 1),
        #fff0 calc(var(--sz) * 8)
      )
      var(--ts),
    radial-gradient(
        circle at 100% 0%,
        var(--b4) calc(var(--sz) * 1),
        #fff0 calc(var(--sz) * 8)
      )
      var(--ts),
    radial-gradient(
        circle at 100% 100%,
        var(--b4) calc(var(--sz) * 1),
        #fff0 calc(var(--sz) * 8)
      )
      var(--ts),
    /* border bottom */
      conic-gradient(
        from 90deg at 97.5% 67%,
        var(--c1) 0 87.5deg,
        #fff0 88deg 100%
      )
      var(--ts),
    /*repeated*/
      conic-gradient(
        from 90deg at 97.5% 67%,
        var(--c1) 0 87.5deg,
        #fff0 88deg 100%
      )
      var(--ts),
    conic-gradient(
        from 182.5deg at 2.5% 67%,
        #fff0 0 0deg,
        var(--c1) 0.5deg 90deg,
        #fff0 0 100%
      )
      var(--ts),
    /*repeated*/
      conic-gradient(
        from 182.5deg at 2.5% 67%,
        #fff0 0 0deg,
        var(--c1) 0.5deg 90deg,
        #fff0 0 100%
      )
      var(--ts),
    /* border top */
      conic-gradient(
        from 270deg at 2.5% 33%,
        var(--c1) 0 87.5deg,
        #fff0 88deg 100%
      )
      var(--ts),
    /*repeated*/
      conic-gradient(
        from 270deg at 2.5% 33%,
        var(--c1) 0 87.5deg,
        #fff0 88deg 100%
      )
      var(--ts),
    conic-gradient(
        from 2.5deg at 97.5% 33%,
        #fff0 0 0deg,
        var(--c1) 0.5deg 90deg,
        #fff0 0 100%
      )
      var(--ts),
    /*repeated*/
      conic-gradient(
        from 2.5deg at 97.5% 33%,
        #fff0 0 0deg,
        var(--c1) 0.5deg 90deg,
        #fff0 0 100%
      )
      var(--ts),
    /* bottom */
      conic-gradient(
        from 116.5deg at 50% 85.5%,
        var(--b1) 0 127deg,
        #fff0 0 100%
      )
      var(--ts),
    /*repeated*/
      conic-gradient(
        from 116.5deg at 50% 85.5%,
        var(--b1) 0 127deg,
        #fff0 0 100%
      )
      var(--ts),
    /*repeated*/
      conic-gradient(
        from 116.5deg at 50% 85.5%,
        var(--b1) 0 127deg,
        #fff0 0 100%
      )
      var(--ts),
    conic-gradient(from 120deg at 50% 83%, var(--c1) 0 120deg, #fff0 0 100%)
      var(--ts),
    /* top */
      conic-gradient(
        from -63.5deg at 50% 14.5%,
        var(--b1) 0 127deg,
        #fff0 0 100%
      )
      var(--ts),
    /*repeated*/
      conic-gradient(
        from -63.5deg at 50% 14.5%,
        var(--b1) 0 127deg,
        #fff0 0 100%
      )
      var(--ts),
    /*repeated*/
      conic-gradient(
        from -63.5deg at 50% 14.5%,
        var(--b1) 0 127deg,
        #fff0 0 100%
      )
      var(--ts),
    conic-gradient(from -60deg at 50% 17%, var(--c1) 0 120deg, #fff0 0 100%)
      var(--ts),
    /* central gradient */
      conic-gradient(
        from 0deg at 50% 50%,
        #fff0 0 2deg,
        var(--b2) 2.5deg 57.5deg,
        #fff0 58deg 62.5deg,
        var(--b1) 63deg 117.5deg,
        #fff0 118deg 122.5deg,
        var(--b3) 123deg 177.5deg,
        #fff0 178deg 182deg,
        var(--b2) 182.5deg 237.5deg,
        #fff0 0 242.5deg,
        var(--b1) 243deg 297.5deg,
        #fff0 298deg 302.5deg,
        var(--b3) 303deg 357.5deg,
        #fff0 358deg 360deg
      )
      var(--ts),
    /* bg */ var(--c1);
  animation: colors var(--sp) linear 0s infinite;
}

@keyframes colors {
  100% {
    filter: hue-rotate(360deg);
  }
}

</style>
    <style>
        /* Add this style to the head of your HTML document or in your CSS file */
        .h-screen {
            height: 100vh;
            /* Set the height to 100% of the viewport height */
            overflow-y: auto;
            /* Enable vertical scrolling */
        }

        .collapsed {
            width: 10px;
            overflow: hidden;
            height: 400px;
        }

        .fixtheheight {
            height: 300px;
        }

        .shadowrss:hover {
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        }

        body {
            height: 200vh;
            width: 100vw;
            overflow-x: hidden;

        }

        .containerr {
            position: relative;
            width: 320px;
            margin: 100px auto 0 auto;
            perspective: 1000px;
        }

        .carouselll {
            position: absolute;
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
            animation: rotate360 60s infinite forwards linear;
        }

        .carouselll__face {
            position: absolute;
            width: 300px;
            height: 187px;
            top: 20px;
            left: 10px;
            right: 10px;
            background-size: cover;
            display: flex;
        }




        .carouselll__face:nth-child(1) {
            background-image: url("https://images.pexels.com/photos/1141853/pexels-photo-1141853.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
            transform: rotateY(0deg) translateZ(430px);
        }

        .carouselll__face:nth-child(2) {
            background-image: url("https://images.pexels.com/photos/1258865/pexels-photo-1258865.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
            transform: rotateY(40deg) translateZ(430px);
        }

        .carouselll__face:nth-child(3) {
            background-image: url("https://images.pexels.com/photos/808466/pexels-photo-808466.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
            transform: rotateY(80deg) translateZ(430px);
        }

        .carouselll__face:nth-child(4) {
            background-image: url("https://images.pexels.com/photos/1394841/pexels-photo-1394841.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
            transform: rotateY(120deg) translateZ(430px);
        }

        .carouselll__face:nth-child(5) {
            background-image: url("https://images.pexels.com/photos/1141853/pexels-photo-1141853.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
            transform: rotateY(160deg) translateZ(430px);
        }

        .carouselll__face:nth-child(6) {
            background-image: url("https://images.pexels.com/photos/1834400/pexels-photo-1834400.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
            transform: rotateY(200deg) translateZ(430px);
        }

        .carouselll__face:nth-child(7) {
            background-image: url("https://images.pexels.com/photos/1415268/pexels-photo-1415268.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
            transform: rotateY(240deg) translateZ(430px);
        }

        .carouselll__face:nth-child(8) {
            background-image: url("https://images.pexels.com/photos/135018/pexels-photo-135018.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
            transform: rotateY(280deg) translateZ(430px);
        }

        .carouselll__face:nth-child(9) {
            background-image: url("https://images.pexels.com/photos/1175135/pexels-photo-1175135.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
            transform: rotateY(320deg) translateZ(430px);
        }



        @keyframes rotate360 {
            from {
                transform: rotateY(0deg);
            }

            to {
                transform: rotateY(-360deg);
            }
        }


        .max-h-80 {
            max-height: 200px;
        }


        @media (max-width: 375px) {
            .categorie {
                display: block;
            }
        }

        @media (min-width: 1440px) {
            .categorie {
                position: fixed;
            }
        }
    </style>
    <x-Navbar :links="[
        'Home' => '/home',
        'Trend' => '/Trend',
        'Favorites' => '/favorites',
        'Categories' => '/categories',
        'Profile' => '/profile',
    ]" />




    <!--
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    ~~~~~~~~~~~~~~~~ Carousell ~~~~~~~~~~~~~~~~
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
-->










    <div class="containerr">
        <div class="carouselll">
            <div class="carouselll__face"><span></span></div>
            <div class="carouselll__face"><span></span></div>
            <div class="carouselll__face"><span></span></div>
            <div class="carouselll__face"><span></span></div>
            <div class="carouselll__face"><span></span></div>
            <div class="carouselll__face"><span></span></div>
            <div class="carouselll__face"><span></span></div>
            <div class="carouselll__face"><span></span></div>
            <div class="carouselll__face"><span></span></div>
        </div>
    </div>


    <main class="flex-auto invisible m-40 ">


        <div class="sm:px-8 mt-9">
            <div class="mx-auto w-full max-w-7xl lg:px-8">
                <div class="relative px-4 sm:px-8 lg:px-12">
                    <div class="mx-auto max-w-2xl lg:max-w-5xl">
                        <div class="max-w-2xl">
                            <h1 class="text-4xl font-bold tracking-tight text-blue-700 dark:text-zinc-900 sm:text-5xl">
                                What's New? RSS Feed Updates:</h1>
                            <p class="mt-6 text-base text-zinc-600 dark:text-zinc-400">Latest RSS Feed Items:
                                Serving as dynamic sources of information and updates for your audience. From breaking
                                news
                                to insightful articles, your RSS feed keeps users informed and engaged with the latest
                                content in an accessible manner.
                            </p>

                            <div class="mt-6 flex gap-6"><a class="group -m-1 p-1" aria-label="Follow on Twitter" href="https://twitter.com"><svg viewBox="0 0 24 24" aria-hidden="true" class="h-6 w-6 fill-zinc-500 transition group-hover:fill-zinc-600 dark:fill-zinc-400 dark:group-hover:fill-zinc-300">
                                        <path d="M20.055 7.983c.011.174.011.347.011.523 0 5.338-3.92 11.494-11.09 11.494v-.003A10.755 10.755 0 0 1 3 18.186c.308.038.618.057.928.058a7.655 7.655 0 0 0 4.841-1.733c-1.668-.032-3.13-1.16-3.642-2.805a3.753 3.753 0 0 0 1.76-.07C5.07 13.256 3.76 11.6 3.76 9.676v-.05a3.77 3.77 0 0 0 1.77.505C3.816 8.945 3.288 6.583 4.322 4.737c1.98 2.524 4.9 4.058 8.034 4.22a4.137 4.137 0 0 1 1.128-3.86A3.807 3.807 0 0 1 19 5.274a7.657 7.657 0 0 0 2.475-.98c-.29.934-.9 1.729-1.713 2.233A7.54 7.54 0 0 0 22 5.89a8.084 8.084 0 0 1-1.945 2.093Z">
                                        </path>
                                    </svg></a><a class="group -m-1 p-1" aria-label="Follow on Instagram" href="https://instagram.com"><svg viewBox="0 0 24 24" aria-hidden="true" class="h-6 w-6 fill-zinc-500 transition group-hover:fill-zinc-600 dark:fill-zinc-400 dark:group-hover:fill-zinc-300">
                                        <path d="M12 3c-2.444 0-2.75.01-3.71.054-.959.044-1.613.196-2.185.418A4.412 4.412 0 0 0 4.51 4.511c-.5.5-.809 1.002-1.039 1.594-.222.572-.374 1.226-.418 2.184C3.01 9.25 3 9.556 3 12s.01 2.75.054 3.71c.044.959.196 1.613.418 2.185.23.592.538 1.094 1.039 1.595.5.5 1.002.808 1.594 1.038.572.222 1.226.374 2.184.418C9.25 20.99 9.556 21 12 21s2.75-.01 3.71-.054c.959-.044 1.613-.196 2.185-.419a4.412 4.412 0 0 0 1.595-1.038c.5-.5.808-1.002 1.038-1.594.222-.572.374-1.226.418-2.184.044-.96.054-1.267.054-3.711s-.01-2.75-.054-3.71c-.044-.959-.196-1.613-.419-2.185A4.412 4.412 0 0 0 19.49 4.51c-.5-.5-1.002-.809-1.594-1.039-.572-.222-1.226-.374-2.184-.418C14.75 3.01 14.444 3 12 3Zm0 1.622c2.403 0 2.688.009 3.637.052.877.04 1.354.187 1.67.31.421.163.72.358 1.036.673.315.315.51.615.673 1.035.123.317.27.794.31 1.671.043.95.052 1.234.052 3.637s-.009 2.688-.052 3.637c-.04.877-.187 1.354-.31 1.67-.163.421-.358.72-.673 1.036a2.79 2.79 0 0 1-1.035.673c-.317.123-.794.27-1.671.31-.95.043-1.234.052-3.637.052s-2.688-.009-3.637-.052c-.877-.04-1.354-.187-1.67-.31a2.789 2.789 0 0 1-1.036-.673 2.79 2.79 0 0 1-.673-1.035c-.123-.317-.27-.794-.31-1.671-.043-.95-.052-1.234-.052-3.637s.009-2.688.052-3.637c.04-.877.187-1.354.31-1.67.163-.421.358-.72.673-1.036.315-.315.615-.51 1.035-.673.317-.123.794-.27 1.671-.31.95-.043 1.234-.052 3.637-.052Z">
                                        </path>
                                        <path d="M12 15a3 3 0 1 1 0-6 3 3 0 0 1 0 6Zm0-7.622a4.622 4.622 0 1 0 0 9.244 4.622 4.622 0 0 0 0-9.244Zm5.884-.182a1.08 1.08 0 1 1-2.16 0 1.08 1.08 0 0 1 2.16 0Z">
                                        </path>
                                    </svg></a><a class="group -m-1 p-1" aria-label="Follow on GitHub" href="https://github.com"><svg viewBox="0 0 24 24" aria-hidden="true" class="h-6 w-6 fill-zinc-500 transition group-hover:fill-zinc-600 dark:fill-zinc-400 dark:group-hover:fill-zinc-300">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.475 2 2 6.588 2 12.253c0 4.537 2.862 8.369 6.838 9.727.5.09.687-.218.687-.487 0-.243-.013-1.05-.013-1.91C7 20.059 6.35 18.957 6.15 18.38c-.113-.295-.6-1.205-1.025-1.448-.35-.192-.85-.667-.013-.68.788-.012 1.35.744 1.538 1.051.9 1.551 2.338 1.116 2.912.846.088-.666.35-1.115.638-1.371-2.225-.256-4.55-1.14-4.55-5.062 0-1.115.387-2.038 1.025-2.756-.1-.256-.45-1.307.1-2.717 0 0 .837-.269 2.75 1.051.8-.23 1.65-.346 2.5-.346.85 0 1.7.115 2.5.346 1.912-1.333 2.75-1.05 2.75-1.05.55 1.409.2 2.46.1 2.716.637.718 1.025 1.628 1.025 2.756 0 3.934-2.337 4.806-4.562 5.062.362.32.675.936.675 1.897 0 1.371-.013 2.473-.013 2.82 0 .268.188.589.688.486a10.039 10.039 0 0 0 4.932-3.74A10.447 10.447 0 0 0 22 12.253C22 6.588 17.525 2 12 2Z">
                                        </path>
                                    </svg></a><a class="group -m-1 p-1" aria-label="Follow on LinkedIn" href="https://linkedin.com"><svg viewBox="0 0 24 24" aria-hidden="true" class="h-6 w-6 fill-zinc-500 transition group-hover:fill-zinc-600 dark:fill-zinc-400 dark:group-hover:fill-zinc-300">
                                        <path d="M18.335 18.339H15.67v-4.177c0-.996-.02-2.278-1.39-2.278-1.389 0-1.601 1.084-1.601 2.205v4.25h-2.666V9.75h2.56v1.17h.035c.358-.674 1.228-1.387 2.528-1.387 2.7 0 3.2 1.778 3.2 4.091v4.715zM7.003 8.575a1.546 1.546 0 01-1.548-1.549 1.548 1.548 0 111.547 1.549zm1.336 9.764H5.666V9.75H8.34v8.589zM19.67 3H4.329C3.593 3 3 3.58 3 4.297v15.406C3 20.42 3.594 21 4.328 21h15.338C20.4 21 21 20.42 21 19.703V4.297C21 3.58 20.4 3 19.666 3h.003z">
                                        </path>
                                    </svg></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!--

        /*
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        */
        -->






    </main>









    <!--
     ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    ~~~~~~~~~~~~~~~~ rss list ~~~~~~~~~~~~~~~~
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


    -->
    <!-- Your existing HTML code -->
    <div class="container right-0 px-4 py-5 ml-0">
        <div id="rssItemList" class="mt-2 pl-10 grid gap-10 md:grid-cols-2 xl:mr-80 lg:gap-10 xl:grid-cols-2">
            @foreach ($rssItems as $rssItem)
            <div class="group cursor-pointer" data-category="{{ $rssItem->category }}">
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
                                <!-- Add your favorite button logic here -->
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
                                    @if(auth()->user()->hasRole('member-lvl1'))
                                        <form action="{{ route('addToFavorites', $rssItem->id) }}" method="POST" id="addToFavoritesForm">
                                            @csrf
                                            <button type="submit" class="flex items-center justify-center bg-gray-100 rounded-full p-2 hover:bg-gray-200 focus:outline-none" id="addToFavoritesButton">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M10 4.472l1.546-1.455a4.347 4.347 0 016.156 6.1l-7.65 7.205a1.2 1.2 0 01-1.656 0l-7.65-7.205a4.347 4.347 0 016.156-6.1L10 4.472z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </form>
                                    @endif
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
                                    <h3 class="font-black text-gray-800 md:text-md text-xl">{{ $rssItem->name }}</h3>
                                    <p class="text-gray-600 overflow-hidden" style="height: 4.5em;">{{ $rssItem->description }}</p>
                                </div>
                                <div class="flex justify-between items-center mt-4">
                                    @if(auth()->user()->hasRole('member-lvl2'))
                                        <a href="{{ route('news.detail', ['id' => $rssItem->id, 'slug' => $rssItem->slug]) }}" class="text-blue-600 hover:text-blue-700 font-semibold">Read More</a>
                                    @endif
                                    <p class="text-sm font-black text-gray-800">Created-at: <span class="font-light text-gray-400">{{ $rssItem->created_at->toFormattedDateString() }}</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{$rssItems->links()}}
        </div>
    </div>

    <!-- JavaScript script to filter and display only selected categories -->
    <script>
        // Retrieve selected categories from localStorage
        var selectedCategories = JSON.parse(localStorage.getItem("catgerie"));

        // Filter and display only items with selected categories, or all items if none selected
        document.querySelectorAll('.group').forEach(function(item) {
            var category = item.getAttribute('data-category');
            if (!selectedCategories || selectedCategories.length === 0 || selectedCategories.includes(category)) {
                item.style.display = 'block'; // or 'flex' depending on your CSS
            } else {
                item.style.display = 'none';
            }
        });
    </script>

<script>
        document.addEventListener('DOMContentLoaded', function () {
            // Get the search input element
            const searchInput = document.getElementById('searchInput');
            // Get the list of RSS items container
            const rssItemList = document.getElementById('rssItemList');

            // Add event listener for input change
            searchInput.addEventListener('input', function () {
                // Get the search query value
                const query = searchInput.value.trim().toLowerCase();

                // Filter RSS items based on the search query
                Array.from(rssItemList.children).forEach(item => {
                    const name = item.querySelector('h3').textContent.trim().toLowerCase();
                    if (name.includes(query)) {
                        item.style.display = '';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    </script>










    <!--
     ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    ~~~~~~~~~~~~~~~~ Subscribe/Categories list ~~~~~~~~~~~~~~~~
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


    -->
    <div class="categorie mx-auto  grid grid-cols-1 z-20 lg:max-w-none m-6 py-2 right-2 bottom-24 w-12">
        <button id="toggleButton" class="bg-blue-900 text-white p-2 rounded-md mb-4"><-></button>
    </div>
    <div id="collapsibleDiv" class="categorie mx-auto grid grid-cols-1 lg:max-w-none m-6 right-0 bottom-1 w-80">


        <div class="space-y-10 ">

            <form class="rounded-2xl border border-zinc-100 p-6 dark:border-zinc-700/40 bg-white" action="/thank-you">
                <h2 class="flex text-sm font-semibold text-zinc-900 dark:text-zinc-100"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" class="h-6 w-6 flex-none">
                        <path d="M2.75 7.75a3 3 0 0 1 3-3h12.5a3 3 0 0 1 3 3v8.5a3 3 0 0 1-3 3H5.75a3 3 0 0 1-3-3v-8.5Z" class="fill-zinc-100 stroke-zinc-400 dark:fill-zinc-100/10 dark:stroke-zinc-500">
                        </path>
                        <path d="m4 6 6.024 5.479a2.915 2.915 0 0 0 3.952 0L20 6" class="stroke-zinc-400 dark:stroke-zinc-500"></path>
                    </svg><span class="ml-3 text-black">Stay up to date</span></h2>
                <p class="mt-2 text-sm text-zinc-800 dark:text-zinc-800">Get notified when I
                    publish something new, and unsubscribe at any time.</p>
                <div class="mt-6 flex"><input type="email" placeholder="Email address" aria-label="Email address" required="" class="min-w-0 flex-auto appearance-none rounded-md border border-zinc-900/10 bg-white px-3 py-[calc(theme(spacing.2)-1px)] shadow-md shadow-zinc-800/5 placeholder:text-zinc-400 focus:border-teal-500 focus:outline-none focus:ring-4 focus:ring-teal-500/10 dark:border-zinc-700 dark:bg-zinc-700/[0.15] dark:text-zinc-600 dark:placeholder:text-zinc-400 dark:focus:border-teal-400 dark:focus:ring-teal-400/10 sm:text-sm"><button class="inline-flex items-center gap-2 justify-center rounded-md py-2 px-3 text-sm outline-offset-2 transition active:transition-none bg-zinc-800 font-semibold text-zinc-100 hover:bg-zinc-700 active:bg-zinc-800 active:text-zinc-100/70 dark:bg-zinc-700 dark:hover:bg-zinc-600 dark:active:bg-zinc-700 dark:active:text-zinc-100/70 ml-4 flex-none" type="submit">Join</button></div>
            </form>

            <div class="rounded-2xl border border-zinc-100 bg-white  p-3 dark:border-zinc-700/40">
                <!--
     ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    ~~~~~~~~~~~~~~~~ search bar ~~~~~~~~~~~~~~~~
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


    -->
                <div class="mt-4 md:mt-6">
                    <div class="mr-10 w-full max-w-md">
                        <div class="relative">
                            <div class="max-w-2xl lg:max-w-5xl">
                                <div class="relative flex mb-6 items-center">
                                    <div class="absolute inset-y-0 px-2 flex items-center pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                        </svg>
                                    </div>
                                    <input type="search" id="searchInput" placeholder="Search rss Items" class="rounded-md border border-zinc-900/10 bg-gray-50 px-12 py-2 shadow-md shadow-zinc-800/5
                            placeholder:text-gray-400 focus:border-teal-500 focus:outline-none focus:ring-4
                            focus:ring-teal-500/10 dark:border-zinc-700 dark:bg-zinc-700/[0.15] dark:text-zinc-600
                            dark:placeholder:text-gray-400 dark:focus:border-teal-400 dark:focus:ring-teal-100 sm:text-base">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!--
     ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    ~~~~~~~~~~~~~~~~ END search bar ~~~~~~~~~~~~~~~~
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


    -->


            </div>
        </div>


    </div>

    <script>
        document.getElementById("toggleButton").addEventListener("click", function() {
            const div = document.getElementById("collapsibleDiv");
            div.classList.toggle("collapsed");
        });
    </script>



    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flickity@2.2.2/dist/flickity.pkgd.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/home.js') }}"></script>
    <!-- Your existing code for displaying categories -->





</body>
