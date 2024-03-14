@include('Shared.components.header')

<div x-data="setup()" :class="{ 'dark': isDark }">
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased  text-black dark:text-white">
        <section class="flex w-full h-full">
            <!-- Sidebar -->
            @include('Shared.components.side-bar')

            <!-- container -->
            <main class="h-screen w-full overflow-y-auto" style="background-image: url('http://127.0.0.1:8000/storage/images/white-background.png'); background-size: cover; background-position: center">
                @yield('content')
            </main>

        </section>

    </div>
</div>
@include('Shared.components.footer')
