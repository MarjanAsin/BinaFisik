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
                    📊
                </div>
                <h4 class="text-gray-900 mb-2">Kalkulator Nilai Jasmani</h4>
                <p class="text-gray-600 text-sm">
                    Hitung nilai tes fisik Anda secara otomatis dengan standar penilaian TNI yang akurat
                </p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-200">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4 text-xl">
                    📈
                </div>
                <h4 class="text-gray-900 mb-2">Tracking Progress</h4>
                <p class="text-gray-600 text-sm">
                    Pantau perkembangan latihan Anda dengan visualisasi yang mudah dipahami
                </p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-200">
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4 text-xl">
                    👥
                </div>
                <h4 class="text-gray-900 mb-2">Bimbingan Trainer</h4>
                <p class="text-gray-600 text-sm">
                    Dapatkan bimbingan dari trainer profesional yang berpengalaman di TNI
                </p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-200">
                <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mb-4 text-xl">
                    📚
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
                <span class="w-6 h-6 flex items-center justify-center text-green-600 mt-1">✔</span>
                <div>
                    <h4 class="text-gray-900 mb-1">Standar Penilaian Akurat</h4>
                    <p class="text-gray-600 text-sm">
                        Sistem penilaian sesuai dengan standar resmi TNI yang dibedakan berdasarkan jenis kelamin
                    </p>
                </div>
            </div>

            <div class="flex gap-3">
                <span class="w-6 h-6 flex items-center justify-center text-green-600 mt-1">✔</span>
                <div>
                    <h4 class="text-gray-900 mb-1">Progress Tracking Real-time</h4>
                    <p class="text-gray-600 text-sm">
                        Lihat perkembangan Anda dari waktu ke waktu dengan tampilan yang mudah dipahami
                    </p>
                </div>
            </div>

            <div class="flex gap-3">
                <span class="w-6 h-6 flex items-center justify-center text-green-600 mt-1">✔</span>
                <div>
                    <h4 class="text-gray-900 mb-1">Trainer Berpengalaman</h4>
                    <p class="text-gray-600 text-sm">
                        Konsultasi dengan trainer yang memiliki pengalaman langsung di TNI
                    </p>
                </div>
            </div>

            <div class="flex gap-3">
                <span class="w-6 h-6 flex items-center justify-center text-green-600 mt-1">✔</span>
                <div>
                    <h4 class="text-gray-900 mb-1">Informasi Terkini</h4>
                    <p class="text-gray-600 text-sm">
                        Dapatkan update terbaru tentang pendaftaran dan persyaratan TNI
                    </p>
                </div>
            </div>

            <div class="flex gap-3">
                <span class="w-6 h-6 flex items-center justify-center text-green-600 mt-1">✔</span>
                <div>
                    <h4 class="text-gray-900 mb-1">Fleksibel dan Mudah</h4>
                    <p class="text-gray-600 text-sm">
                        Akses platform kapan saja dan di mana saja dari perangkat Anda
                    </p>
                </div>
            </div>

            <div class="flex gap-3">
                <span class="w-6 h-6 flex items-center justify-center text-green-600 mt-1">✔</span>
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
                <span class="text-2xl text-green-900">🏅</span>
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
                        Lihat Program Pelatihan
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
