@include('Shared.components.header')

<body>

<x-Navbar :links="[
        'Home' => '/home',
        'Trend' => '/Trend',
        'Favorites' => '/favorites',
        'Categories' => '/categories',
        'Profile' => '/profile',
    ]" />



    <div class="container mx-auto px-4 mt-40">
        <div class="container mx-auto px-4 mt-4">
            <!-- Button to uncheck all categories -->
            <button onclick="uncheckAllCategories()" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Uncheck </button>
        </div>
        @php $i = 0; @endphp
        @foreach($categories as $category)
        @if($i % 3 == 0)
        <div class="flex justify-between mt-6">
            @endif
            <div class="relative max-w-xl mx-auto w-[400px]">
                <img class="h-64 w-full object-cover rounded-md" src="https://source.unsplash.com/1000x1000/?{{ $category->name }}" alt="Random image">
                <div class="absolute inset-0 bg-gray-700 opacity-60 rounded-md"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <h2 class="text-white text-3xl font-bold">{{ $category->name }}</h2>
                    <!-- Make the category name clickable -->
                    <button onclick="toggleCategory('{{ $category->name }}')" class="absolute bottom-5 bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded" id="{{ $category->name }}Button">+</button>
                </div>
            </div>
            @php $i++; @endphp
            @if($i % 3 == 0)
        </div>
        @endif
        @endforeach
        @if($i % 3 != 0)
    </div> <!-- Close the last row if not already closed -->
    @endif
    </div>

    <script>
        var selectedCategories = JSON.parse(localStorage.getItem("catgerie")) || [];

        window.onload = function() {
            // Update UI based on selected categories retrieved from localStorage
            selectedCategories.forEach(function(categoryId) {
                var button = document.getElementById(categoryId + 'Button');
                if (button) {
                    button.innerHTML = '✓'; // Change button content to check mark
                }
            });
        };

        function toggleCategory(categoryId) {
            var button = document.getElementById(categoryId + 'Button');
            // Check if the category is already selected
            if (!selectedCategories.includes(categoryId)) {
                selectedCategories.push(categoryId);
                button.innerHTML = '✓'; // Change button content to check mark
                console.log(selectedCategories);
                localStorage.setItem("catgerie", JSON.stringify(selectedCategories));
            } else {
                var index = selectedCategories.indexOf(categoryId);
                if (index !== -1) {
                    selectedCategories.splice(index, 1);
                    button.innerHTML = '+'; // Change button content to plus symbol
                    console.log(selectedCategories);
                    localStorage.setItem("catgerie", JSON.stringify(selectedCategories));
                }
            }
        }

        // Function to uncheck all categories
        function uncheckAllCategories() {
            selectedCategories = []; // Empty the selectedCategories array
            // Update UI to show that all categories are unchecked
            var buttons = document.querySelectorAll('button[id$="Button"]');
            buttons.forEach(function(button) {
                button.innerHTML = '+'; // Change button content to plus symbol
            });
            console.log(selectedCategories);
            localStorage.setItem("catgerie", JSON.stringify(selectedCategories));
        }
    </script>