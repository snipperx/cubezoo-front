<div>
    <!-- Hero Section -->
    <div>
        <section class="relative overflow-hidden bg-black text-white py-20">
            <div class="container mx-auto px-4 flex flex-col lg:flex-row items-center gap-8">
                <!-- Left Side Content -->
                <div class="w-full lg:w-1/2 flex flex-col items-start text-left">
                    <h1 class="text-6xl font-bold mb-6">
                        Your Ultimate <br> Destination for <br> <span class="text-yellow-400">Quality Edits</span>
                    </h1>
                    <div class="flex items-center gap-4 mb-4">
                    <span class="flex items-center gap-2 text-gray-300">
                        ✅ <span class="underline">Royalty-free</span>
                    </span>
                        <span class="flex items-center gap-2 text-gray-300">
                        ✅ <span class="underline">High Quality</span>
                    </span>
                    </div>
                    <!-- Search Bar -->
                    <div class="relative mb-6 w-full">
                        <input type="text" wire:model.defer="searchQuery" placeholder="Search"
                               class="w-full bg-gray-800 text-white rounded-lg py-2 pl-4 pr-10 focus:outline-none">
                        <button wire:click="search" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 cursor-pointer">
                            🔍
                        </button>
                    </div>
                    <!-- Category Buttons -->
                    <div class="flex flex-wrap gap-2">
                        @foreach($categories as $category)
                            <button wire:click="filterByCategory('{{ $category }}')"
                                    class="px-4 py-2 bg-gray-700 rounded-md text-gray-300 hover:bg-gray-600">
                                {{ $category }}
                            </button>
                        @endforeach
                    </div>
                </div>
                <!-- Right Side Image -->
                <div class="w-full lg:w-2/3 flex justify-end">
                    <div class="relative w-full h-96">
                        <img src="{{ asset('images/hero.jpg') }}" alt="Hero Image"
                             class="w-full h-full object-contain rounded-lg">
                    </div>
                </div>
            </div>
        </section>
    </div>


    <!-- Revenue Section -->
    <section class="py-16">
        <div class="container mx-auto px-6">
            <div class="bg-dark-bg bg-opacity-80 rounded-xl p-10 border border-white border-opacity-10">
                <div class="flex flex-col lg:flex-row items-center lg:items-start gap-8">
                    <!-- Left Content -->
                    <div class="w-full lg:w-1/2 lg:pr-12 text-center lg:text-left">
                        <h2 class="text-4xl font-bold mb-6 leading-tight">
                            Turn <span class="text-primary">Your Work</span> <br> into <span class="text-primary">Revenue</span>
                        </h2>
                        <p class="mb-6 text-gray-300">
                            Sign up as an editor to gain access to our library of stock footage,
                            which you can use to create edits and resell on the High Five Videos platform.
                        </p>
                        <a href="{{ route('contributor') }}" class="btn-yellow inline-block px-6 py-3 text-lg rounded-lg">
                            Become a Contributor
                        </a>
                    </div>
                    <!-- Right Image -->
                    <div class="w-full lg:w-1/2">
                        <img src="{{ asset('images/revenue.png') }}" alt="Video Editing"
                             class="rounded-lg w-full h-auto object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="relative py-20 bg-gradient-to-r from-dark-bg to-darker-bg bg-center bg-cover" style="background-image: url({{ asset('images/video.jpeg') }});">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="container mx-auto px-4 text-center relative z-10">
            <h2 class="text-3xl font-bold mb-4 text-white">Explore a world of <span class="text-primary">Unique Edits</span></h2>
            <p class="mb-8 max-w-2xl mx-auto text-gray-200">
                Subscribe to High Five Videos and gain access to a library of unique and beautiful fully edited videos
                contributed by video editors from all around the world!
            </p>
            <a href="{{ route('browse') }}" class="btn-yellow inline-block">Explore Now</a>
        </div>
    </section>



    <!-- Best Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="w-full lg:w-2/5">
                    <img src="{{ asset('images/train.jpeg') }}" alt="Video Quality" class="rounded-lg w-full">
                </div>
                <div class="w-full lg:w-3/5 mt-8 lg:mt-0 lg:pl-12">
                    <h2 class="text-3xl font-bold mb-4">Get only the <span class="text-primary">Best</span></h2>
                    <p class="mb-6">Subscribe to High Five Videos and gain access to a library of unique and beautiful fully edited videos contributed by video editors from all around the world!</p>
                    <a href="{{ route('pricing') }}" class="btn-yellow inline-block">Subscribe Now</a>
                </div>
            </div>
        </div>
    </section>

</div>
