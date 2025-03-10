<nav class="bg-darker-bg py-4">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between">
            <a href="{{ route('home') }}" class="flex items-center">
                <img src="{{ asset('images/logo.png') }}" alt="High Five Videos Logo" class="h-8">
            </a>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button type="button" class="text-light-text hover:text-primary focus:outline-none"
                        onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex md:items-center md:space-x-8">
                <a href="{{ route('home') }}" class="text-light-text hover:text-primary {{ request()->routeIs('home') ? 'border-b-2 border-primary' : '' }}">Home</a>
                <a href="{{ route('browse') }}" class="text-light-text hover:text-primary {{ request()->routeIs('browse') ? 'border-b-2 border-primary' : '' }}">Browse</a>
                <a href="{{ route('pricing') }}" class="text-light-text hover:text-primary {{ request()->routeIs('pricing') ? 'border-b-2 border-primary' : '' }}">Pricing</a>
            </div>

            <div class="hidden md:flex md:items-center md:space-x-4">
                <img src="{{ asset('images/busket.png') }}" alt="Basket Icon" class="h-8">
                <a href="{{ route('register') }}" class="btn-outline-light">Sign Up</a>
                <a href="{{ route('login') }}" class="btn-yellow">Login</a>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div class="md:hidden hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="{{ route('home') }}" class="block py-2 text-light-text hover:text-primary {{ request()->routeIs('home') ? 'text-primary' : '' }}">Home</a>
                <a href="{{ route('browse') }}" class="block py-2 text-light-text hover:text-primary {{ request()->routeIs('browse') ? 'text-primary' : '' }}">Browse</a>
                <a href="{{ route('pricing') }}" class="block py-2 text-light-text hover:text-primary {{ request()->routeIs('pricing') ? 'text-primary' : '' }}">Pricing</a>
                <div class="flex space-x-2 pt-2">
                    <a href="{{ route('register') }}" class="btn-outline-light">Sign Up</a>
                    <img src="{{ asset('images/busket.png') }}" alt="Basket Icon" class="h-8">
                    <a href="{{ route('login') }}" class="btn-yellow">Login</a>
                </div>
            </div>
        </div>

    </div>
</nav>
