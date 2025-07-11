<div class="gallery-item bg-white rounded-lg overflow-hidden shadow-sm" data-category="{{ $category }}">
    <div class="aspect-square bg-gradient-to-br from-{{ $color }}-400 to-{{ $color }}-600 flex items-center justify-center">
        @if($image)
            <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-full object-cover">
        @else
            <i class="fas fa-{{ $icon }} text-4xl text-white"></i>
        @endif
    </div>
    <div class="p-4">
        <h3 class="font-semibold mb-2">{{ $title }}</h3>
        {{-- @if($downloadUrl)
            <a href="{{ $downloadUrl }}" class="text-blue-600 hover:text-blue-800 text-sm" download>
                <i class="fas fa-download mr-1"></i>Download
            </a>
        @elseif($watchUrl)
            <a href="{{ $watchUrl }}" class="text-blue-600 hover:text-blue-800 text-sm" target="_blank">
                <i class="fas fa-play mr-1"></i>Tonton
            </a>
        @endif --}}
    </div>
</div>
