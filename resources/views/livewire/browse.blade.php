<div class="container mx-auto px-4 py-12">
    <h1 class="text-3xl font-bold mb-8">Browse <span class="text-primary">Videos</span></h1>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="md:col-span-3">
            <div class="search-box">
                <input type="text" wire:model.debounce.300ms="search" placeholder="Search videos..." class="bg-transparent focus:outline-none text-light-text w-full">
                <i class="fas fa-search"></i>
            </div>
        </div>
        <div>
            <select wire:model="sortBy" class="w-full bg-darker-bg text-light-text rounded p-2 border border-gray-700 focus:outline-none focus:border-primary">
                <option value="newest">Newest First</option>
                <option value="oldest">Oldest First</option>
                <option value="popular">Most Popular</option>
            </select>
        </div>
    </div>

    <div class="mb-8">
        <div class="flex flex-wrap">
            <button class="category-btn {{ $category == '' ? 'bg-primary text-darker-bg' : '' }}" wire:click="$set('category', '')">All</button>
            <button class="category-btn {{ $category == 'Lifestyle' ? 'bg-primary text-darker-bg' : '' }}" wire:click="$set('category', 'Lifestyle')">Lifestyle</button>
            <button class="category-btn {{ $category == 'Urban landscape' ? 'bg-primary text-darker-bg' : '' }}" wire:click="$set('category', 'Urban landscape')">Urban landscape</button>
            <button class="category-btn {{ $category == 'Business' ? 'bg-primary text-darker-bg' : '' }}" wire:click="$set('category', 'Business')">Business</button>
            <button class="category-btn {{ $category == 'People' ? 'bg-primary text-darker-bg' : '' }}" wire:click="$set('category', 'People')">People</button>
            <button class="category-btn {{ $category == 'Technology' ? 'bg-primary text-darker-bg' : '' }}" wire:click="$set('category', 'Technology')">Technology</button>
        </div>
    </div>

    <!-- Results section - Would typically show actual data -->
    <div class="mb-8">
        @if($search || $category)
            <p>Showing results for {{ $search ? '"'.$search.'"' : '' }} {{ $category ? 'in '.$category : '' }}</p>
        @endif
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @for($i = 1; $i <= 9; $i++)
            <div class="bg-darker-bg rounded-lg overflow-hidden shadow-lg">
                <img src="{{ asset('images/placeholder-'.$i.'.jpg') }}" class="w-full h-48 object-cover" alt="Video thumbnail">
                <div class="p-4">
                    <h5 class="text-lg font-medium mb-2">Sample Video {{ $i }}</h5>
                    <p class="text-gray-300 mb-4">A beautiful video showcasing something amazing.</p>
                    <div class="flex justify-between items-center">
                        <a href="#" class="btn-yellow text-sm">Preview</a>
                        <span class="text-gray-400"><i class="fas fa-eye mr-1"></i> {{ rand(100, 9999) }}</span>
                    </div>
                </div>
            </div>
        @endfor
    </div>

    <!-- Pagination -->
    <div class="flex justify-center mt-8">
        <nav class="flex">
            <a href="#" class="bg-darker-bg text-light-text px-4 py-2 rounded-l opacity-50 cursor-not-allowed">Previous</a>
            <a href="#" class="bg-primary text-darker-bg px-4 py-2">1</a>
            <a href="#" class="bg-darker-bg text-light-text px-4 py-2">2</a>
            <a href="#" class="bg-darker-bg text-light-text px-4 py-2">3</a>
            <a href="#" class="bg-darker-bg text-light-text px-4 py-2 rounded-r">Next</a>
        </nav>
    </div>
</div>
