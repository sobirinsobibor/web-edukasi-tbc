<div class="border border-gray-200 rounded-lg">
    <button class="accordion-btn w-full px-6 py-4 text-left bg-gray-50 hover:bg-gray-100 transition-colors flex justify-between items-center">
        <span class="font-semibold text-gray-800">{{ $title }}</span>
        <i class="fas fa-chevron-down transition-transform"></i>
    </button>
    <div class="accordion-content hidden px-6 py-4 bg-white">
        {!! $content !!}
    </div>
</div>
