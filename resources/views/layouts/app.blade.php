<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'TBCheck - Edukasi Tuberkulosis')</title>
    
    <!-- Tailwind CSS -->
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    {{-- vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Custom CSS -->
    <style>
        .swiper-button-next,
        .swiper-button-prev {
            color: #2563eb !important;
        }

        .swiper-pagination-bullet-active {
            background-color: #2563eb !important;
        }

        .gallery-filter-btn.active {
            background-color: #2563eb;
            color: white;
        }

        .gallery-filter-btn:not(.active) {
            color: #6b7280;
        }

        .gallery-filter-btn:not(.active):hover {
            background-color: #f3f4f6;
        }

        .accordion-content,
        .faq-content {
            transition: all 0.3s ease;
        }

        @media (max-width: 768px) {
            .swiper-button-next,
            .swiper-button-prev {
                display: none;
            }
        }
    </style>
    
    @stack('styles')
</head>
<body class="bg-gray-50">
    @yield('content')
    
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    @stack('scripts')
</body>
</html>
