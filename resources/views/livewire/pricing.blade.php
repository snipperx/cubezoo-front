<div class="container mx-auto px-4 py-12">
    <div class="text-center mb-12">
        <h1 class="text-3xl font-bold mb-4">Choose Your <span class="text-primary">Plan</span></h1>
        <p class="text-xl max-w-2xl mx-auto">Select the perfect plan for your video editing needs</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
        @foreach($plans as $plan)
            <div class="bg-darker-bg rounded-lg overflow-hidden shadow-lg h-full {{ $plan['recommended'] ? 'border-2 border-primary' : '' }}">
                @if($plan['recommended'])
                    <div class="bg-primary text-darker-bg text-center py-2 font-bold">
                        RECOMMENDED
                    </div>
                @endif
                <div class="p-6">
                    <h5 class="text-xl font-bold mb-2">{{ $plan['name'] }}</h5>
                    <div class="my-6 flex items-end">
                        <span class="text-4xl font-bold">${{ $plan['price'] }}</span>
                        <span class="text-gray-400 ml-2">/ {{ $plan['period'] }}</span>
                    </div>
                    <ul class="space-y-3 mb-8">
                        @foreach($plan['features'] as $feature)
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>{{ $feature }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="px-6 pb-6">
                    <a href="#" class="{{ $plan['recommended'] ? 'btn-yellow' : 'btn-outline-light' }} w-full block text-center">Choose Plan</a>
                </div>
            </div>
        @endforeach
    </div>

    <div class="text-center mt-16">
        <h2 class="text-2xl font-bold mb-4">Have Questions?</h2>
        <p class="mb-6 max-w-2xl mx-auto">Contact our sales team for customized solutions for your business needs.</p>
        <a href="{{ route('contact') }}" class="btn-yellow inline-block">Contact Sales</a>
    </div>
</div>
