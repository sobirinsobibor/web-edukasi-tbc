<div class="swiper-slide">
    <div class="bg-gray-100 rounded-lg overflow-hidden">
        <div class="aspect-video bg-gray-800 flex items-center justify-center cursor-pointer" onclick="playVideo('{{ $videoId }}')">
            @if($thumbnail)
                <img src="{{ $thumbnail }}" alt="{{ $title }}" class="w-full h-full object-cover">
                <div class="absolute inset-0 flex items-center justify-center">
                    <i class="fas fa-play-circle text-6xl text-white"></i>
                </div>
            @else
                <i class="fas fa-play-circle text-6xl text-white"></i>
            @endif
        </div>
        <div class="p-6">
            <h3 class="text-xl font-semibold mb-2">{{ $title }}</h3>
            <p class="text-gray-600">{{ $description }}</p>
        </div>
    </div>
</div>
