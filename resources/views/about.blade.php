<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatApp - About</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css">
</head>

<body class="text-gray-100 bg-gray-900">
    <header class="bg-gray-800 shadow-lg">
        <div class="container flex items-center justify-between px-4 py-4 mx-auto">
            <div class="flex items-center space-x-2">
                <img src="{{ asset('images/logo.ico') }}" alt="ChatApp Logo" class="w-10 h-10">
                <h1 class="text-2xl font-bold text-[#FF2D20]">Chena</h1>
            </div>
            <nav class="justify-center flex-1 hidden space-x-4 md:flex">
                <a href="{{ url('/') }}" class="px-3 py-2 text-gray-100 transition rounded-md ring-1 ring-transparent hover:text-gray-300">Home</a>
                <a href="{{ url('/about') }}" class="px-3 py-2 text-gray-100 transition rounded-md ring-1 ring-transparent hover:text-gray-300">About</a>
                <a href="{{ url('/contact') }}" class="px-3 py-2 text-gray-100 transition rounded-md ring-1 ring-transparent hover:text-gray-300">Contact</a>
            </nav>
            @if (Route::has('login'))
                <div class="flex items-center space-x-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="px-3 py-2 text-gray-100 transition rounded-md ring-1 ring-transparent hover:text-gray-300">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="px-3 py-2 text-gray-100 transition rounded-md ring-1 ring-transparent hover:text-gray-300">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="px-3 py-2 text-gray-100 transition rounded-md ring-1 ring-transparent hover:text-gray-300">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <button id="menu-btn" class="p-2 text-gray-100 md:hidden focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
        <div id="mobile-menu" class="hidden bg-gray-800 md:hidden">
            <nav class="flex flex-col py-2 space-y-1">
                <a href="{{ url('/') }}" class="block px-3 py-2 text-gray-100 transition rounded-md hover:text-gray-300">Home</a>
                <a href="{{ url('/about') }}" class="block px-3 py-2 text-gray-100 transition rounded-md hover:text-gray-300">About</a>
                <a href="{{ url('/contact') }}" class="block px-3 py-2 text-gray-100 transition rounded-md hover:text-gray-300">Contact</a>
            </nav>
        </div>
    </header>

    <main class="flex flex-col items-center justify-center min-h-screen py-8 bg-gray-900">
        <section class="max-w-2xl text-center">
            <h2 class="text-4xl font-bold text-gray-100">About Chena</h2>
            <p class="mt-4 text-gray-400">Chena is a chat application designed to help you connect with friends and family seamlessly. Our platform prioritizes real-time communication, making it easier than ever to stay in touch with the people who matter most to you.</p>
            <p class="mt-4 text-gray-400">With features like group chats, multimedia sharing, and a user-friendly interface, Chena transforms the way you communicate. Whether you’re catching up with friends or collaborating with colleagues, Chena has got you covered.</p>
        </section>
    </main>

    <footer class="py-4 mt-8 bg-gray-800">
        <div class="container mx-auto text-center text-gray-400">
            <p>&copy; {{ date('Y') }} ChatApp. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Mobile menu toggle functionality
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>
