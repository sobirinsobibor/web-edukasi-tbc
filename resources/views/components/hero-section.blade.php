<div class="container mx-auto px-4 py-16 md:py-24">
    <div class="grid md:grid-cols-2 gap-8 items-center">
        <div>
            <h1 class="text-4xl md:text-6xl font-bold mb-4">
                {{ $title }}
            </h1>
            <p class="text-xl mb-8 text-blue-100">
                {{ $subtitle }}
            </p>
            <a href="{{ $ctaUrl }}" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition-colors inline-block">
                {{ $ctaText }}
            </a>
        </div>
        <div class="text-center">
            <div class="bg-white/10 rounded-full p-8 inline-block">
                <i class="fas fa-lungs text-8xl text-white/80"></i>
            </div>
        </div>
    </div>
</div>
