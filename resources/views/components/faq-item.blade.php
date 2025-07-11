<div class="border border-gray-200 rounded-lg">
    <button class="faq-btn w-full px-6 py-4 text-left bg-gray-50 hover:bg-gray-100 transition-colors flex justify-between items-center">
        <span class="font-semibold text-gray-800">{{ $question }}</span>
        <i class="fas fa-chevron-down transition-transform"></i>
    </button>
    <div class="faq-content hidden px-6 py-4 bg-white">
        <p class="text-gray-600">{{ $answer }}</p>
    </div>
</div>
