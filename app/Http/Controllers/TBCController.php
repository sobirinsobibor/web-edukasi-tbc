<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TBCController extends Controller
{
    public function index()
    {
        $educationSections = [
            [
                'id' => 'apa-itu-tbc',
                'title' => 'Apa itu TBC?',
                'content' => 'TBC (Tuberkulosis) adalah penyakit infeksi yang disebabkan oleh bakteri Mycobacterium tuberculosis. Bakteri ini menyerang paru-paru dan dapat menyebar ke bagian tubuh lainnya seperti tulang belakang, ginjal, dan otak.'
            ],
            [
                'id' => 'cara-penyerangan',
                'title' => 'Bagaimana TBC Menyerang Tubuh?',
                'content' => 'Bakteri TBC masuk melalui saluran pernapasan dan mengendap di paru-paru. Sistem kekebalan tubuh akan berusaha melawan, namun jika lemah, bakteri dapat berkembang biak dan merusak jaringan paru-paru.'
            ],
            [
                'id' => 'cara-penularan',
                'title' => 'Cara Penularan',
                'content' => 'TBC menular melalui droplet (percikan dahak) saat penderita batuk, bersin, atau berbicara. TIDAK menular melalui sentuhan, piring, atau peralatan makan bersama.'
            ],
            [
                'id' => 'pencegahan',
                'title' => 'Pencegahan',
                'content' => 'Menjaga sirkulasi udara yang baik, vaksinasi BCG, menggunakan masker di area berisiko tinggi, menjaga daya tahan tubuh dengan pola hidup sehat.'
            ],
            [
                'id' => 'pengobatan',
                'title' => 'Pengobatan',
                'content' => 'Pengobatan TBC harus tuntas minimal 6 bulan dengan minum obat anti tuberkulosis (OAT) secara teratur. Pengobatan yang tidak tuntas dapat menyebabkan resistensi obat.'
            ]
        ];

        $symptoms = [
            'Batuk Berdarah',
            'Sesak Nafas',
            'Demam',
            'Nafsu Makan Menurun',
            'Berat Badan Turun',
            'Keringat Malam',
            'Nyeri Dada',
            'Mudah Lelah'
        ];

        $videos = [
            [
                'title' => 'Pengenalan TBC',
                'description' => 'Video pengenalan dasar tentang penyakit TBC',
                'youtube_id' => 'https://www.youtube.com/watch?v=LCKNA68iDxI'
            ],
            [
                'title' => 'Cara Penularan TBC',
                'description' => 'Memahami bagaimana TBC dapat menular',
                'youtube_id' => 'https://www.youtube.com/watch?v=LCKNA68iDxI'
            ],
            [
                'title' => 'Gejala TBC',
                'description' => 'Mengenali gejala-gejala penyakit TBC',
                'youtube_id' => 'https://www.youtube.com/watch?v=LCKNA68iDxI'
            ],
            [
                'title' => 'Pengobatan TBC',
                'description' => 'Proses pengobatan dan pentingnya kepatuhan',
                'youtube_id' => 'https://www.youtube.com/watch?v=LCKNA68iDxI'
            ],
            [
                'title' => 'Pencegahan TBC',
                'description' => 'Langkah-langkah mencegah penularan TBC',
                'youtube_id' => 'https://www.youtube.com/watch?v=LCKNA68iDxI'
            ]
        ];

        $galleryItems = [
            [
                'type' => 'infografis',
                'title' => 'Infografis Gejala TBC',
                'category' => 'infografis',
                'image' => null,
                'description' => 'Mengenal gejala-gejala TBC yang perlu diwaspadai'
            ],
            [
                'type' => 'berita',
                'title' => 'Berita: Kasus TBC Menurun di Indonesia',
                'category' => 'berita',
                // 'image' => 'images/gallery/berita1.jpg',
                'image' => null,
                'description' => 'Update terbaru tentang penurunan kasus TBC'
            ],
            [
                'type' => 'infografis',
                'title' => 'Cara Penularan TBC',
                'category' => 'infografis',
                'image' => null,
                'description' => 'Memahami bagaimana TBC dapat menular'
            ],
            [
                'type' => 'berita',
                'title' => 'Berita: Program Vaksinasi BCG Diperluas',
                'category' => 'berita',
                'image' => null,
                'description' => 'Pemerintah perluas program vaksinasi BCG'
            ],
            [
                'type' => 'infografis',
                'title' => 'Pencegahan TBC di Rumah',
                'category' => 'infografis',
                'image' => null,
                'description' => 'Tips mencegah penularan TBC di lingkungan rumah'
            ],
            [
                'type' => 'berita',
                'title' => 'Berita: Obat TBC Gratis untuk Seluruh Rakyat',
                'category' => 'berita',
                'image' => null,
                'description' => 'Pemerintah sediakan obat TBC gratis'
            ],
            [
                'type' => 'infografis',
                'title' => 'Pengobatan TBC yang Tepat',
                'category' => 'infografis',
                'image' => null,
                'description' => 'Panduan lengkap pengobatan TBC'
            ],
            [
                'type' => 'berita',
                'title' => 'Berita: Teknologi Baru Deteksi TBC',
                'category' => 'berita',
                'image' => null,
                'description' => 'Inovasi teknologi untuk deteksi dini TBC'
            ]
        ];

        $faqData = [
            [
                'id' => 'faq-1',
                'question' => 'Apa itu TBC?',
                'answer' => 'TBC adalah penyakit infeksi yang disebabkan oleh bakteri Mycobacterium tuberculosis yang menyerang paru-paru dan organ tubuh lainnya.'
            ],
            [
                'id' => 'faq-2',
                'question' => 'Apakah TBC menular lewat makanan?',
                'answer' => 'Tidak, TBC tidak menular melalui makanan, minuman, atau peralatan makan. TBC hanya menular melalui droplet udara.'
            ],
            [
                'id' => 'faq-3',
                'question' => 'Apakah TBC bisa sembuh total?',
                'answer' => 'Ya, TBC dapat sembuh total jika pengobatan dilakukan secara tuntas dan teratur minimal 6 bulan sesuai anjuran dokter.'
            ],
            [
                'id' => 'faq-4',
                'question' => 'Berapa lama pengobatan TBC?',
                'answer' => 'Pengobatan TBC membutuhkan waktu minimal 6 bulan dan harus dilakukan secara konsisten tanpa putus.'
            ],
            [
                'id' => 'faq-5',
                'question' => 'Apakah vaksin BCG efektif?',
                'answer' => 'Vaksin BCG dapat memberikan perlindungan, terutama pada anak-anak, namun tidak 100% mencegah TBC.'
            ],
            [
                'id' => 'faq-6',
                'question' => 'Bagaimana cara mencegah TBC?',
                'answer' => 'Menjaga daya tahan tubuh, sirkulasi udara yang baik, menggunakan masker, dan menghindari kontak dengan penderita TBC aktif.'
            ]
        ];

        return view('index', compact('educationSections', 'symptoms', 'videos', 'galleryItems', 'faqData'));
    }
}
