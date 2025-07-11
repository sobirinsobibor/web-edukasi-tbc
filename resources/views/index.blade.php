<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TBCheck - Platform Edukasi TBC</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        /* Smooth scroll behavior */
        html {
            scroll-behavior: smooth;
        }

        /* Prevent scroll during transitions */
        body.is-scrolling {
            pointer-events: none;
        }

        body.is-scrolling * {
            pointer-events: none;
        }

        /* Accordion smooth transitions */
        .accordion-content {
            overflow: hidden;
            transition: max-height 0.3s ease-in-out;
        }

        /* Gallery filter transitions */
        .gallery-item {
            transition: all 0.3s ease-in-out;
        }

        body.filtering .gallery-item {
            pointer-events: none;
        }

        /* Fade in animation */
        .animate-fade-in {
            animation: fadeInUp 0.6s ease-out forwards;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Smooth navbar transitions */
        nav a {
            transition: all 0.2s ease-in-out;
        }

        /* Video pagination smooth transition */
        .video-pagination {
            transition: opacity 0.15s ease-in-out;
        }

        /* Button hover effects */
        button, .gallery-filter {
            transition: all 0.2s ease-in-out;
        }

        /* Prevent text selection during animations */
        .no-select {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
    </style>
</head>
<body class="bg-white">
    <!-- Header -->
    <header class="fixed top-0 w-full bg-white/95 backdrop-blur-sm border-b border-gray-200 z-50">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-stethoscope text-2xl text-red-600"></i>
                    <span class="text-xl font-bold text-gray-900">TBCheck</span>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex space-x-8">
                    <a href="#beranda" class="text-gray-700 hover:text-red-600 transition-colors nav-link">Beranda</a>
                    <a href="#tentang" class="text-gray-700 hover:text-red-600 transition-colors nav-link">Tentang TBC</a>
                    <a href="#gejala" class="text-gray-700 hover:text-red-600 transition-colors nav-link">Gejala</a>
                    <a href="#video" class="text-gray-700 hover:text-red-600 transition-colors nav-link">Video</a>
                    <a href="#galeri" class="text-gray-700 hover:text-red-600 transition-colors nav-link">Galeri</a>
                    <a href="#faq" class="text-gray-700 hover:text-red-600 transition-colors nav-link">FAQ</a>
                </nav>

                <!-- Mobile Menu Button -->
                <button class="md:hidden" id="mobile-menu-btn">
                    <i class="fas fa-bars text-xl" id="menu-icon"></i>
                </button>
            </div>

            <!-- Mobile Navigation -->
            <nav class="md:hidden mt-4 pb-4 border-t border-gray-200 pt-4 hidden" id="mobile-menu">
                <div class="flex flex-col space-y-4">
                    <a href="#beranda" class="text-left text-gray-700 hover:text-red-600 transition-colors mobile-nav-link">Beranda</a>
                    <a href="#tentang" class="text-left text-gray-700 hover:text-red-600 transition-colors mobile-nav-link">Tentang TBC</a>
                    <a href="#gejala" class="text-left text-gray-700 hover:text-red-600 transition-colors mobile-nav-link">Gejala</a>
                    <a href="#video" class="text-left text-gray-700 hover:text-red-600 transition-colors mobile-nav-link">Video</a>
                    <a href="#galeri" class="text-left text-gray-700 hover:text-red-600 transition-colors mobile-nav-link">Galeri</a>
                    <a href="#faq" class="text-left text-gray-700 hover:text-red-600 transition-colors mobile-nav-link">FAQ</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="beranda" class="pt-20 pb-16 bg-gradient-to-br from-red-50 to-pink-50">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight">
                        Deteksi Gejala TBC
                        <span class="text-red-600">Sedini Mungkin</span>
                    </h1>
                    <p class="text-xl text-gray-600 leading-relaxed">
                        75% penderita TBC adalah usia produktif. Kenali gejala, pahami pencegahan, dan dapatkan pengobatan yang tepat untuk masa depan yang lebih sehat.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#tentang" class="bg-red-600 hover:bg-red-700 text-white px-8 py-3 rounded-lg font-semibold transition-colors text-center">
                            Pelajari Lebih Lanjut
                        </a>
                        <a href="#gejala" class="border border-gray-300 hover:border-red-600 text-gray-700 hover:text-red-600 px-8 py-3 rounded-lg font-semibold transition-colors text-center">
                            Cek Gejala
                        </a>
                    </div>
                </div>
                <div class="relative">
                    <div class="bg-white rounded-2xl shadow-2xl p-8">
                        <img src="{{ asset('storage/img/pngtree-tuberculosi.png') }}"
                            alt="Ilustrasi deteksi TBC"
                            class="w-[500px] h-[400px] object-cover rounded-lg mx-auto">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Tentang TBC / Edukasi Utama -->
    <section id="tentang" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Tentang TBC</h2>
                <button onclick="copyShareLink('tentang')" class="flex items-center gap-1.5 px-3 py-1.5 text-sm border border-gray-300 rounded-md hover:bg-gray-100 transition-colors">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"></path>
                    </svg>
                    <span class="hidden md:inline">Share</span>
                </button>
            </div>

            <div class="space-y-4">
                @foreach($educationSections as $section)
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <button onclick="toggleAccordion('{{ $section['id'] }}')" class="w-full p-6 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                        <h3 class="text-lg font-semibold">{{ $section['title'] }}</h3>
                        <svg class="w-5 h-5 transition-transform accordion-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="{{ $section['id'] }}" class="accordion-content hidden px-6 pb-6">
                        <p class="text-gray-600 leading-relaxed">{{ $section['content'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Gejala TBC -->
    <section id="gejala" class="py-16">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Gejala Umum TBC</h2>
                <button onclick="copyShareLink('gejala')" class="flex items-center gap-1.5 px-3 py-1.5 text-sm border border-gray-300 rounded-md hover:bg-gray-100 transition-colors">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"></path>
                    </svg>
                    <span class="hidden md:inline">Share</span>
                </button>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @foreach($symptoms as $symptom)
                <div class="bg-red-100 text-red-800 px-4 py-3 rounded-full text-center font-medium hover:bg-red-200 transition-colors">
                    {{ $symptom }}
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Video Edukasi -->
    <section id="video" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Video Edukasi</h2>
                <button onclick="copyShareLink('video')" class="flex items-center gap-1.5 px-3 py-1.5 text-sm border border-gray-300 rounded-md hover:bg-gray-100 transition-colors">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"></path>
                    </svg>
                    <span class="hidden md:inline">Share</span>
                </button>
            </div>

            <div class="max-w-4xl mx-auto">
                <div class="swiper video-swiper">
                    <div class="swiper-wrapper">
                        @foreach($videos as $index => $video)
                        <div class="swiper-slide">
                            <div class="bg-white rounded-lg shadow-sm p-6">
                                <h3 class="text-xl font-semibold mb-2">{{ $video['title'] }}</h3>
                                <p class="text-gray-600 mb-4">{{ $video['description'] }}</p>
                                <div class="aspect-video bg-gray-200 rounded-lg flex items-center justify-center">
                                    <iframe
                                        class="w-full h-full rounded-lg"
                                        src="{{ 'https://www.youtube.com/embed/' . (explode('v=', parse_url($video['youtube_id'], PHP_URL_QUERY))[1] ?? '') }}"
                                        frameborder="0"
                                        allowfullscreen
                                        loading="lazy">
                                    </iframe>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="flex items-center justify-between mt-6">
                    <button class="swiper-button-prev-custom flex items-center gap-2 px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-100 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                        {{-- Sebelumnya --}}
                    </button>

                    <div class="video-pagination text-gray-600"></div>

                    <button class="swiper-button-next-custom flex items-center gap-2 px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-100 transition-colors">
                        {{-- Selanjutnya --}}
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeri Media -->
    <section id="galeri" class="py-16">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Galeri Edukasi</h2>
                <div class="flex items-center gap-2">
                    <button onclick="copyShareLink('galeri')" class="flex items-center gap-1.5 px-3 py-1.5 text-sm border border-gray-300 rounded-md hover:bg-gray-100 transition-colors">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"></path>
                        </svg>
                        <span class="hidden md:inline">Share</span>
                    </button>
                </div>
            </div>


            <!-- Swiper Gallery -->
            <div class="swiper gallery-swiper">
                <div class="swiper-wrapper">
                    @foreach($galleryItems as $item)
                    <div class="swiper-slide">
                        <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                            <div class="aspect-video bg-gray-200 flex items-center justify-center">
                                <img src="https://via.placeholder.com/400x250/E5E7EB/6B7280?text={{ urlencode($item['title']) }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover">
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold mb-2">{{ $item['title'] }}</h3>
                                <p class="text-sm text-gray-600 mb-3">{{ $item['description'] }}</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-500 capitalize px-2 py-1 bg-gray-100 rounded-full">{{ $item['type'] }}</span>
                                    <button onclick="viewGalleryItem('{{ $item['title'] }}', '{{ $item['image'] }}', '{{ $item['description'] }}')" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                                        Lihat Detail
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Swiper Navigation -->
            <div class="flex items-center justify-between mt-6">
                <button class="swiper-button-prev-gallery flex items-center gap-2 px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-100 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    {{-- Sebelumnya --}}
                </button>

                <div class="gallery-pagination text-gray-600"></div>

                <button class="swiper-button-next-gallery flex items-center gap-2 px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-100 transition-colors">
                    {{-- Selanjutnya --}}
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Tanya Jawab Seputar TBC</h2>
                <button onclick="copyShareLink('faq')" class="flex items-center gap-1.5 px-3 py-1.5 text-sm border border-gray-300 rounded-md hover:bg-gray-100 transition-colors">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"></path>
                    </svg>
                    <span class="hidden md:inline">Share</span>
                </button>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                @foreach($faqData as $faq)
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <button onclick="toggleAccordion('{{ $faq['id'] }}')" class="w-full p-6 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                        <h3 class="font-semibold">{{ $faq['question'] }}</h3>
                        <svg class="w-5 h-5 transition-transform accordion-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="{{ $faq['id'] }}" class="accordion-content hidden px-6 pb-6">
                        <p class="text-gray-600">{{ $faq['answer'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-3 gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <i class="fas fa-stethoscope text-2xl text-red-500"></i>
                        <span class="text-xl font-bold">TBCheck</span>
                    </div>
                    <p class="text-gray-400">
                        Platform edukasi TBC untuk meningkatkan kesadaran masyarakat tentang pencegahan, deteksi dini, dan pengobatan tuberkulosis.
                    </p>
                </div>

                <div>
                    <h3 class="font-semibold mb-4">Kontak Darurat</h3>
                    <div class="space-y-2 text-gray-400">
                        <p>Hotline TBC: 119</p>
                        <p>Kemenkes RI: (021) 5201590</p>
                        <p>Email: info@tbcheck.id</p>
                    </div>
                </div>

                <div>
                    <h3 class="font-semibold mb-4">Sumber Informasi</h3>
                    <div class="space-y-2 text-gray-400">
                        <p>Kementerian Kesehatan RI</p>
                        <p>WHO (World Health Organization)</p>
                        <p>Perhimpunan Dokter Paru Indonesia</p>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 TBCheck. Semua hak cipta dilindungi.</p>
            </div>
        </div>
    </footer>



    <script>
        // Smooth scrolling
        document.querySelectorAll('.smooth-scroll').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Accordion functionality
        function toggleAccordion(id) {
            const content = document.getElementById(id);
            const icon = content.previousElementSibling.querySelector('.accordion-icon');

            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                icon.style.transform = 'rotate(180deg)';
            } else {
                content.classList.add('hidden');
                icon.style.transform = 'rotate(0deg)';
            }
        }

        // Video Swiper
        const videoSwiper = new Swiper('.video-swiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: false,
            lazy: true,
            navigation: {
                nextEl: '.swiper-button-next-custom',
                prevEl: '.swiper-button-prev-custom',
            },
            on: {
                slideChange: function () {
                    updateVideoPagination(this.activeIndex + 1, this.slides.length);
                }
            }
        });

        function updateVideoPagination(current, total) {
            document.querySelector('.video-pagination').textContent = `${current} dari ${total}`;
        }

        // Initialize video pagination
        updateVideoPagination(1, {{ count($videos) }});

        // Gallery filter
        // function filterGallery(category) {
        //     const items = document.querySelectorAll('.gallery-item');
        //     const filters = document.querySelectorAll('.gallery-filter');

        //     // Update active filter
        //     filters.forEach(filter => {
        //         filter.classList.remove('active', 'bg-blue-600', 'text-white');
        //         filter.classList.add('border', 'border-gray-300');
        //     });

        //     event.target.classList.add('active', 'bg-blue-600', 'text-white');
        //     event.target.classList.remove('border', 'border-gray-300');

        //     // Filter items
        //     items.forEach(item => {
        //         if (category === 'semua' || item.dataset.category === category) {
        //             item.style.display = 'block';
        //         } else {
        //             item.style.display = 'none';
        //         }
        //     });
        // }

        // Perbaikan JavaScript untuk Gallery Filter


// Gallery Swiper
const gallerySwiper = new Swiper('.gallery-swiper', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    lazy: true,
    speed: 600,
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    },
    navigation: {
        nextEl: '.swiper-button-next-gallery',
        prevEl: '.swiper-button-prev-gallery',
    },
    on: {
        slideChange: function () {
            updateGalleryPagination(this.realIndex + 1, this.slides.length);
        }
    }
});

function updateGalleryPagination(current, total) {
    const pagination = document.querySelector('.gallery-pagination');
    if (pagination) {
        pagination.style.opacity = '0.5';
        setTimeout(() => {
            pagination.textContent = `${current} dari ${total}`;
            pagination.style.opacity = '1';
        }, 150);
    }
}

// Initialize gallery pagination
updateGalleryPagination(1, 8);

// View gallery item detail
function viewGalleryItem(title, image, description) {
    const modal = document.createElement('div');
    modal.className = 'fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4';
    modal.innerHTML = `
        <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-xl font-bold">${title}</h3>
                    <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="aspect-video bg-gray-200 rounded-lg mb-4 flex items-center justify-center">
                    <img src="https://via.placeholder.com/600x400/E5E7EB/6B7280?text=${encodeURIComponent(title)}" alt="${title}" class="w-full h-full object-cover rounded-lg">
                </div>
                <p class="text-gray-600 leading-relaxed">${description}</p>
            </div>
        </div>
    `;

    document.body.appendChild(modal);

    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeModal();
        }
    });
}

function closeModal() {
    const modal = document.querySelector('.fixed.inset-0');
    if (modal) {
        modal.remove();
    }
}

        // Auto-filter based on URL parameter
        window.addEventListener('load', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const filter = urlParams.get('filter');

            if (filter && (filter === 'infografis' || filter === 'berita')) {
                // Simulate click on filter button
                const filterButton = document.querySelector(`[onclick="filterGallery('${filter}')"]`);
                if (filterButton) {
                    filterButton.click();
                }
            }
        });

        // Copy share link
        function copyShareLink(sectionId) {
            const url = `${window.location.origin}${window.location.pathname}#${sectionId}`;
            navigator.clipboard.writeText(url).then(() => {
                alert('Link berhasil disalin!');
            });
        }

        // Mobile menu toggle
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            // Add mobile menu functionality here if needed
            // console.log('Mobile menu clicked');
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const menuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const menuIcon = document.getElementById('menu-icon');

            menuBtn.addEventListener('click', function () {
                mobileMenu.classList.toggle('hidden');
                // Optional: toggle icon between bars and close
                menuIcon.classList.toggle('fa-bars');
                menuIcon.classList.toggle('fa-times');
            });
        });
    </script>
</body>
</html>
