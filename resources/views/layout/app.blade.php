<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'my simple app')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'deep-blue': '#1A237E',
                        'deep-blue-light': '#283593',
                        'gold': '#FFD700',
                    },
                },
            },
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="min-h-screen bg-deep-blue">
<header class="container mx-auto px-4 py-6 flex justify-between items-center">
    <div class="flex items-center space-x-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
        </svg>
        <span class="text-xl font-bold text-white">RamadanJoy</span>
    </div>
    <nav>
        <ul class="flex space-x-4">
            <li><a href="/" class="hover:text-gold transition-colors text-white">Home</a></li>
            <li><a href="/posts" class="hover:text-gold transition-colors text-white">Posts</a></li>
            <li><a href="/recettes" class="hover:text-gold transition-colors text-white">Recettes</a></li>
            <li><a href="/con" class="hover:text-gold transition-colors text-white">Contact</a></li>
        </ul>
    </nav>
</header>

@yield('statistiques')


@yield('herosection')
@yield('ramadanEssetials')
@yield('countdown')

<!-- Recette Page -->
@yield('recettes')
@yield('recette')
<!-- Post Page  -->
@yield('posts')

<!-- Statistiques -->
@yield('statistique')

@yield('post')
@yield('comments')

<footer class="bg-deep-blue-light mt-20">
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-wrap justify-between">
            <div class="w-full md:w-1/3 mb-6 md:mb-0">
                <h3 class="text-xl font-semibold mb-4 text-white">About Us</h3>
                <p class="text-gray-300">RamadanJoy is your one-stop shop for all your Ramadan needs. We aim to make your holy month more blessed and convenient.</p>
            </div>
            <div class="w-full md:w-1/3 mb-6 md:mb-0">
                <h3 class="text-xl font-semibold mb-4 text-white">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-300 hover:text-gold transition-colors">FAQs</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-gold transition-colors">Shipping Information</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-gold transition-colors">Returns Policy</a></li>
                </ul>
            </div>
            <div class="w-full md:w-1/3">
                <h3 class="text-xl font-semibold mb-4 text-white">Connect With Us</h3>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-300 hover:text-gold transition-colors">Facebook</a>
                    <a href="#" class="text-gray-300 hover:text-gold transition-colors">Instagram</a>
                    <a href="#" class="text-gray-300 hover:text-gold transition-colors">Twitter</a>
                </div>
            </div>
        </div>
        <div class="mt-8 pt-8 border-t border-gray-700 text-center text-gray-300">
            <p>&copy; <span id="current-year">2025</span> RamadanJoy. All rights reserved.</p>
        </div>
    </div>
</footer>

@stack('countdownJs')
@stack('modal')

</body>
</html>
