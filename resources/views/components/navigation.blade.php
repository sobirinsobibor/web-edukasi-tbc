<nav class="container mx-auto px-4 py-4">
    <div class="flex justify-between items-center">
        <div class="flex items-center space-x-2">
            <i class="fas fa-lungs text-2xl"></i>
            <span class="text-xl font-bold">{{ config('app.name', 'TBCheck') }}</span>
        </div>
        <div class="hidden md:flex space-x-6">
            @foreach($navItems as $item)
                <a href="{{ $item['url'] }}" class="hover:text-blue-200 transition-colors">
                    {{ $item['label'] }}
                </a>
            @endforeach
        </div>
        <button id="mobile-menu-btn" class="md:hidden">
            <i class="fas fa-bars text-xl"></i>
        </button>
    </div>
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden mt-4 space-y-2">
        @foreach($navItems as $item)
            <a href="{{ $item['url'] }}" class="block py-2 hover:text-blue-200">
                {{ $item['label'] }}
            </a>
        @endforeach
    </div>
</nav>
