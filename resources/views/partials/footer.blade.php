<footer class="bg-darker-bg py-12 text-light-text">
    <div class="container mx-auto px-4">
        <div class="bg-gray-700 p-6 rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div>
                    <img src="{{ asset('images/logo.png') }}" alt="High Five Videos Logo" class="h-10 mb-6">
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="text-light-text hover:text-primary"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-light-text hover:text-primary"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-light-text hover:text-primary"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-light-text hover:text-primary"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-light-text hover:text-primary"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <div>
                    <h5 class="footer-title text-xl text-primary mb-4">Company</h5>
                    <ul class="space-y-2">
                        <li><a href="{{ route('contributor') }}" class="text-light-text hover:text-primary">Become a contributor</a></li>
                        <li><a href="{{ route('terms') }}" class="text-light-text hover:text-primary">Terms and Conditions</a></li>
                        <li><a href="{{ route('privacy') }}" class="text-light-text hover:text-primary">Privacy policy</a></li>
                    </ul>
                </div>

                <div>
                    <h5 class="footer-title text-xl text-primary mb-4">Pricing and Plans</h5>
                    <ul class="space-y-2">
                        <li><a href="{{ route('pricing.individual') }}" class="text-light-text hover:text-primary">Individual Plan</a></li>
                        <li><a href="{{ route('pricing.company') }}" class="text-light-text hover:text-primary">Company Plan</a></li>
                        <li><a href="{{ route('subscriptions') }}" class="text-light-text hover:text-primary">Subscriptions</a></li>
                    </ul>
                </div>

                <div>
                    <h5 class="footer-title text-xl text-primary mb-4">Customer Support</h5>
                    <ul class="space-y-2">
                        <li><a href="{{ route('contact') }}" class="text-light-text hover:text-primary">Contact Us</a></li>
                        <li><a href="{{ route('faq') }}" class="text-light-text hover:text-primary">FAQs</a></li>
                    </ul>
                </div>
            </div>

            <div class="text-right border-t border-gray-500 mt-8 pt-8 text-sm text-gray-400">
                © {{ date('Y') }} High Five Videos | Designed by CafeZoo
            </div>
        </div>
    </div>
</footer>
