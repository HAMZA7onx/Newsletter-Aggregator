@include('Shared.components.header')
<body style="background-image: url('http://127.0.0.1:8000/images/anime_letters.jpg'); background-size: cover; background-position: center" class=" ">
<x-Navbar :links="[
        'Home' => '/home',
        'Trend' => '/Trend',
        'Favorites' => '/favorites',
        'Categories' => '/categories',
        'Profile' => '/profile',
    ]" />
<div class="container mx-auto p-8  bg-gray-100 font-sans">

    <!-- En-tête de la Page -->
    <header class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Détails du News</h1>

    </header>

    <main class="flex flex-column justify-content-around">

        <!-- Section des Détails -->
        <section class="bg-white p-6 rounded-lg shadow-md">
            <h1 class="text-3xl font-bold text-gray-800">Title</h1>

            <!-- Image Principale -->
            <img src="logo2.png" alt="Détails" class="mb-4 w-full h-64 object-cover rounded">

            <!-- Description -->
            <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac urna vel libero consequat vehicula sit amet vel felis.</p>

            <!-- Autres Informations -->
            <ul class="text-gray-700">
                <li><span class="font-semibold">Catégorie:</span> Catégorie A</li>
                <li><span class="font-semibold">Date de Publication:</span> 25 février 2024</li>
            </ul>

        </section>

        <!-- Section des Commentaires -->
        <section class="bg-white p-6 rounded-lg shadow-md">

            <!-- Titre des Commentaires -->
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Commentaires</h2>

            <!-- Liste des Commentaires -->
            <!-- Liste des Commentaires -->
            <ul class="space-y-4">

                <!-- Commentaire 1 -->
                <li class="bg-white p-4 rounded-lg shadow-md">
                    <div class="flex items-center space-x-4">
                        <img src="user.jpg" alt="Utilisateur" class="w-12 h-12 rounded-full">
                        <div>
                            <p class="text-gray-800 font-semibold text-lg">Nom de l'utilisateur</p>
                            <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </li>

                <!-- Commentaire 2 -->
                <li class="bg-white p-4 rounded-lg shadow-md">
                    <div class="flex items-center space-x-4">
                        <img src="user.jpg" alt="Utilisateur" class="w-12 h-12 rounded-full">
                        <div>
                            <p class="text-gray-800 font-semibold text-lg">Nom de l'utilisateur</p>
                            <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </li>

            </ul>


        </section>

    </main>



</div>
</body>
