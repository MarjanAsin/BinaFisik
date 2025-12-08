{{-- resources/views/beranda.blade.php --}}
@extends('layouts.app')

@section('title', 'Beranda - BinaFisik')

@section('content')
@php
    // Kalau nanti mau diisi dari database / session, tinggal override dari controller.
    $totalTes = $totalTes ?? 0;
@endphp

<div class="max-w-7xl mx-auto">
    <div class="mb-8">
        <h2 class="text-3xl text-gray-900 mb-2">Selamat Datang di BinaFisik</h2>
        <p class="text-gray-600">
            Platform terlengkap untuk mempersiapkan diri menghadapi seleksi TNI
        </p>
    </div>

    {{-- Hero Banner --}}
    <div class="mb-8 bg-gradient-to-r from-green-700 to-green-800 rounded-xl p-8 md:p-12 text-white">
        <div class="grid md:grid-cols-2 gap-8 items-center">
            <div>
                <h3 class="text-3xl mb-4">Wujudkan Impian Menjadi Prajurit TNI</h3>
                <p class="text-green-100 mb-6">
                    Dengan sistem tracking digital, kalkulator nilai jasmani, dan bimbingan dari trainer profesional,
                    kami membantu Anda mencapai standar fisik TNI dengan lebih efektif dan terukur.
                </p>
                <div class="flex gap-4">
                    <div class="bg-white/20 backdrop-blur-sm rounded-lg px-6 py-3">
                        <div class="text-2xl mb-1">500+</div>
                        <div class="text-green-100 text-sm">Siswa Aktif</div>
                    </div>
                    <div class="bg-white/20 backdrop-blur-sm rounded-lg px-6 py-3">
                        <div class="text-2xl mb-1">85%</div>
                        <div class="text-green-100 text-sm">Tingkat Kelulusan</div>
                    </div>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                    <h4 class="text-xl mb-4">Statistik Anda</h4>
                    <div class="space-y-3">
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-green-100">Total Tes</span>
                                <span>{{ $totalTes }} kali</span>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-green-100">Progress</span>
                                <span>Terus Meningkat</span>
                            </div>
                        </div>
                        {{-- Nanti bisa ditambah detail grafik kecil kalau sudah ada data riil --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Features Grid --}}
    <div class="mb-8">
        <h3 class="text-2xl text-gray-900 mb-6">Fitur Unggulan</h3>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-200">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4 text-xl">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="w-6 h-6 text-blue-700">
                        <path d="M3 3v16a2 2 0 0 0 2 2h16"></path>
                        <path d="M18 17V9"></path>
                        <path d="M13 17V5"></path>
                        <path d="M8 17v-3"></path>
                    </svg>
                </div>
                <h4 class="text-gray-900 mb-2">Kalkulator Nilai Jasmani</h4>
                <p class="text-gray-600 text-sm">
                    Hitung nilai tes fisik Anda secara otomatis dengan standar penilaian TNI yang akurat
                </p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-200">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4 text-xl">
                    <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="w-6 h-6 text-green-700">
                                <path d="M16 7h6v6"></path>
                                <path d="m22 7-8.5 8.5-5-5L2 17"></path>
                            </svg>
                </div>
                <h4 class="text-gray-900 mb-2">Tracking Progress</h4>
                <p class="text-gray-600 text-sm">
                    Pantau perkembangan latihan Anda dengan visualisasi yang mudah dipahami
                </p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-200">
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4 text-xl">
                    <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="w-6 h-6 text-purple-700">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                <path d="M16 3.128a4 4 0 0 1 0 7.744"></path>
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                            </svg>
                </div>
                <h4 class="text-gray-900 mb-2">Bimbingan Trainer</h4>
                <p class="text-gray-600 text-sm">
                    Dapatkan bimbingan dari trainer profesional yang berpengalaman di TNI
                </p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-200">
                <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mb-4 text-xl">
                    <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="w-6 h-6 text-orange-700">
                                <path d="M12 7v14"></path>
                                <path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"></path>
                            </svg>
                </div>
                <h4 class="text-gray-900 mb-2">Informasi Lengkap</h4>
                <p class="text-gray-600 text-sm">
                    Akses informasi terkini tentang pendaftaran dan standar tes TNI
                </p>
            </div>
        </div>
    </div>

    {{-- Benefits --}}
    <div class="mb-8 bg-white rounded-xl p-8 shadow-sm border border-gray-200">
        <h3 class="text-2xl text-gray-900 mb-6">Keuntungan Menggunakan BinaFisik</h3>
        <div class="grid md:grid-cols-2 gap-4">
            <div class="flex gap-3">
                <span class="w-6 h-6 flex items-center justify-center text-green-600 mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="w-5 h-5">
                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                        <path d="m9 11 3 3L22 4"></path>
                    </svg>
                </span>

                <div>
                    <h4 class="text-gray-900 mb-1">Standar Penilaian Akurat</h4>
                    <p class="text-gray-600 text-sm">
                        Sistem penilaian sesuai dengan standar resmi TNI yang dibedakan berdasarkan jenis kelamin
                    </p>
                </div>
            </div>

            <div class="flex gap-3">
                <span class="w-6 h-6 flex items-center justify-center text-green-600 mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="w-5 h-5">
                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                        <path d="m9 11 3 3L22 4"></path>
                    </svg>
                </span>

                <div>
                    <h4 class="text-gray-900 mb-1">Progress Tracking Real-time</h4>
                    <p class="text-gray-600 text-sm">
                        Lihat perkembangan Anda dari waktu ke waktu dengan tampilan yang mudah dipahami
                    </p>
                </div>
            </div>

            <div class="flex gap-3">
                <span class="w-6 h-6 flex items-center justify-center text-green-600 mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="w-5 h-5">
                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                        <path d="m9 11 3 3L22 4"></path>
                    </svg>
                </span>

                <div>
                    <h4 class="text-gray-900 mb-1">Trainer Berpengalaman</h4>
                    <p class="text-gray-600 text-sm">
                        Konsultasi dengan trainer yang memiliki pengalaman langsung di TNI
                    </p>
                </div>
            </div>

            <div class="flex gap-3">
                <span class="w-6 h-6 flex items-center justify-center text-green-600 mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="w-5 h-5">
                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                        <path d="m9 11 3 3L22 4"></path>
                    </svg>
                </span>

                <div>
                    <h4 class="text-gray-900 mb-1">Informasi Terkini</h4>
                    <p class="text-gray-600 text-sm">
                        Dapatkan update terbaru tentang pendaftaran dan persyaratan TNI
                    </p>
                </div>
            </div>

            <div class="flex gap-3">
                <span class="w-6 h-6 flex items-center justify-center text-green-600 mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="w-5 h-5">
                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                        <path d="m9 11 3 3L22 4"></path>
                    </svg>
                </span>

                <div>
                    <h4 class="text-gray-900 mb-1">Fleksibel dan Mudah</h4>
                    <p class="text-gray-600 text-sm">
                        Akses platform kapan saja dan di mana saja dari perangkat Anda
                    </p>
                </div>
            </div>

            <div class="flex gap-3">
                <span class="w-6 h-6 flex items-center justify-center text-green-600 mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="w-5 h-5">
                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                        <path d="m9 11 3 3L22 4"></path>
                    </svg>
                </span>

                <div>
                    <h4 class="text-gray-900 mb-1">Program Terstruktur</h4>
                    <p class="text-gray-600 text-sm">
                        Dapatkan program latihan yang terstruktur dan disesuaikan dengan kebutuhan Anda
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- CTA Section --}}
    <div class="bg-gradient-to-r from-green-700 to-green-800 rounded-xl p-8 text-white">
        <div class="flex items-start gap-4">
            <div class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center flex-shrink-0">
                <span class="text-green-900">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="w-7 h-7">
                        <path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"></path>
                        <circle cx="12" cy="8" r="6"></circle>
                    </svg>
                </span>

            </div>
            <div>
                <h3 class="text-2xl mb-3">Siap Memulai Perjalanan Anda?</h3>
                <p class="text-green-100 mb-6">
                    Mulai gunakan kalkulator nilai jasmani kami untuk mengetahui seberapa siap Anda menghadapi
                    seleksi TNI. Dapatkan hasil penilaian instan dan rekomendasi untuk meningkatkan performa Anda.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a
                        href="{{ route('kalkulator.show') }}"
                        class="px-6 py-3 bg-yellow-400 text-green-900 rounded-lg hover:bg-yellow-300 transition-colors text-sm font-medium"
                    >
                        Coba Kalkulator Nilai
                    </a>
                    <a
                        href="{{ route('pelatihan') }}"
                        class="px-6 py-3 bg-white/20 backdrop-blur-sm text-white border border-white/30 rounded-lg hover:bg-white/30 transition-colors text-sm font-medium"
                    >
                        Hubungi Trainer
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
