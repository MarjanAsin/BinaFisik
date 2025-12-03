{{-- resources/views/info_pendaftaran.blade.php --}}
@extends('layouts.app')

@section('title', 'Informasi Pendaftaran TNI - BinaFisik')

@section('content')
@php
    $tahapanSeleksi = [
        [
            'tahap' => 'Pendaftaran Online',
            'durasi' => '2-4 minggu',
            'deskripsi' => 'Registrasi online melalui website resmi TNI',
        ],
        [
            'tahap' => 'Seleksi Administrasi',
            'durasi' => '1 minggu',
            'deskripsi' => 'Verifikasi kelengkapan dokumen persyaratan',
        ],
        [
            'tahap' => 'Tes Kesehatan',
            'durasi' => '2-3 hari',
            'deskripsi' => 'Pemeriksaan kesehatan menyeluruh oleh tim medis TNI',
        ],
        [
            'tahap' => 'Tes Fisik',
            'durasi' => '2-3 hari',
            'deskripsi' => 'Tes kemampuan fisik sesuai standar TNI',
        ],
        [
            'tahap' => 'Tes Psikologi',
            'durasi' => '1-2 hari',
            'deskripsi' => 'Tes psikologi dan kepribadian',
        ],
        [
            'tahap' => 'Tes Akademik',
            'durasi' => '1 hari',
            'deskripsi' => 'Tes kemampuan akademik dan pengetahuan umum',
        ],
        [
            'tahap' => 'Wawancara',
            'durasi' => '1-2 hari',
            'deskripsi' => 'Wawancara dengan panel penguji TNI',
        ],
        [
            'tahap' => 'Pengumuman',
            'durasi' => '1-2 minggu',
            'deskripsi' => 'Pengumuman kelulusan dan pemberkasan',
        ],
    ];

    $persyaratanUmum = [
        'Warga Negara Indonesia',
        'Berusia 18-22 tahun (Tamtama/Bintara) atau 18-21 tahun (Taruna)',
        'Belum menikah dan bersedia tidak menikah selama pendidikan',
        'Tinggi badan minimal: Pria 165 cm, Wanita 160 cm',
        'Tidak bertato dan tidak bertindik (khusus pria)',
        'Sehat jasmani dan rohani',
        'Tidak sedang terikat dinas dengan instansi lain',
        'Berkelakuan baik (SKCK)',
    ];

    $jadwalPendaftaran = [
        ['gelombang' => 'Gelombang I',  'periode' => 'Januari - Februari',     'jenis' => 'Tamtama & Bintara'],
        ['gelombang' => 'Gelombang II', 'periode' => 'Maret - April',         'jenis' => 'Taruna Akademi'],
        ['gelombang' => 'Gelombang III','periode' => 'Juli - Agustus',        'jenis' => 'Tamtama & Bintara'],
        ['gelombang' => 'Gelombang IV', 'periode' => 'September - Oktober',   'jenis' => 'Taruna Akademi'],
    ];
@endphp

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <div class="mb-8">
        <h2 class="text-3xl text-gray-900 mb-2">Informasi Pendaftaran TNI</h2>
        <p class="text-gray-600">
            Panduan lengkap proses pendaftaran dan persyaratan masuk TNI
        </p>
    </div>

    {{-- Jadwal Pendaftaran --}}
    <div class="mb-8 bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
        <div class="bg-green-700 text-white px-6 py-4 flex items-center gap-3">
            <div class="w-7 h-7 rounded-full bg-white/20 flex items-center justify-center text-sm">📅</div>
            <h3 class="text-xl">Jadwal Pendaftaran 2025</h3>
        </div>
        <div class="p-6">
            <div class="grid md:grid-cols-2 gap-4">
                @foreach($jadwalPendaftaran as $jadwal)
                    <div class="border border-gray-200 rounded-lg p-4">
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0 text-lg">
                                ⏱
                            </div>
                            <div>
                                <h4 class="text-gray-900 mb-1">{{ $jadwal['gelombang'] }}</h4>
                                <p class="text-green-700 mb-2">{{ $jadwal['periode'] }}</p>
                                <p class="text-sm text-gray-600">{{ $jadwal['jenis'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-6 p-4 bg-blue-50 rounded-lg border border-blue-200">
                <p class="text-blue-800 text-sm">
                    📅 Jadwal dapat berubah sewaktu-waktu. Selalu cek website resmi TNI untuk informasi terkini.
                </p>
            </div>
        </div>
    </div>

    {{-- Tahapan Seleksi --}}
    <div class="mb-8 bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
        <div class="bg-blue-700 text-white px-6 py-4 flex items-center gap-3">
            <div class="w-7 h-7 rounded-full bg-white/20 flex items-center justify-center text-sm">📄</div>
            <h3 class="text-xl">Tahapan Seleksi</h3>
        </div>
        <div class="p-6">
            <div class="space-y-4">
                @foreach($tahapanSeleksi as $index => $tahap)
                    <div class="flex gap-4">
                        <div class="flex flex-col items-center">
                            <div class="w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center flex-shrink-0">
                                {{ $index + 1 }}
                            </div>
                            @if($index < count($tahapanSeleksi) - 1)
                                <div class="w-0.5 bg-blue-200 flex-1 my-2"></div>
                            @endif
                        </div>
                        <div class="pb-8 flex-1">
                            <div class="flex items-start justify-between gap-4 mb-2">
                                <h4 class="text-gray-900">{{ $tahap['tahap'] }}</h4>
                                <span class="text-sm text-blue-600 bg-blue-50 px-3 py-1 rounded-full flex-shrink-0">
                                    {{ $tahap['durasi'] }}
                                </span>
                            </div>
                            <p class="text-gray-600">{{ $tahap['deskripsi'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Persyaratan Umum --}}
    <div class="mb-8 bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
        <div class="bg-purple-700 text-white px-6 py-4 flex items-center gap-3">
            <div class="w-7 h-7 rounded-full bg-white/20 flex items-center justify-center text-sm">✅</div>
            <h3 class="text-xl">Persyaratan Umum</h3>
        </div>
        <div class="p-6">
            <div class="grid md:grid-cols-2 gap-3">
                @foreach($persyaratanUmum as $persyaratan)
                    <div class="flex items-start gap-3">
                        <div class="w-5 h-5 bg-purple-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                            <div class="w-2 h-2 bg-purple-600 rounded-full"></div>
                        </div>
                        <p class="text-gray-700">{{ $persyaratan }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Dokumen yang Diperlukan --}}
    <div class="mb-8 bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
        <div class="bg-orange-600 text-white px-6 py-4 flex items-center gap-3">
            <div class="w-7 h-7 rounded-full bg-white/20 flex items-center justify-center text-sm">📂</div>
            <h3 class="text-xl">Dokumen yang Diperlukan</h3>
        </div>
        <div class="p-6">
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h4 class="text-gray-900 mb-3">Dokumen Wajib</h4>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start gap-2">
                            <span class="text-orange-600">•</span>
                            <span>Fotokopi KTP & Kartu Keluarga</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-orange-600">•</span>
                            <span>Fotokopi Ijazah & Transkrip Nilai</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-orange-600">•</span>
                            <span>Fotokopi Akta Kelahiran</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-orange-600">•</span>
                            <span>Surat Keterangan Catatan Kepolisian (SKCK)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-orange-600">•</span>
                            <span>Surat Keterangan Sehat dari Dokter</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-gray-900 mb-3">Dokumen Pendukung</h4>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start gap-2">
                            <span class="text-orange-600">•</span>
                            <span>Surat Pernyataan tidak pernah terlibat narkoba</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-orange-600">•</span>
                            <span>Surat Persetujuan Orang Tua</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-orange-600">•</span>
                            <span>Pas Foto terbaru (berbagai ukuran)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-orange-600">•</span>
                            <span>Sertifikat prestasi (jika ada)</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- Links Info Resmi --}}
    <div class="bg-gradient-to-r from-green-700 to-green-800 rounded-xl p-8 text-white">
        <div class="flex items-start gap-4">
            <div class="w-12 h-12 rounded-full bg-green-900 flex items-center justify-center text-2xl flex-shrink-0">
                📍
            </div>
            <div class="flex-1">
                <h3 class="text-xl mb-3">Informasi Lebih Lanjut</h3>
                <p class="text-green-100 mb-6">
                    Untuk informasi resmi dan terkini, kunjungi website resmi TNI atau datang langsung ke kantor rekrutmen terdekat.
                </p>
                <div class="grid md:grid-cols-3 gap-4">
                    <a
                        href="https://rekrutmen.tni.mil.id"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="bg-white text-green-800 px-6 py-3 rounded-lg hover:bg-green-50 transition-colors flex items-center justify-center gap-2 text-sm font-medium"
                    >
                        TNI Rekrutmen
                        <span class="text-base">↗</span>
                    </a>
                    <a
                        href="https://tni.mil.id"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="bg-white text-green-800 px-6 py-3 rounded-lg hover:bg-green-50 transition-colors flex items-center justify-center gap-2 text-sm font-medium"
                    >
                        TNI Official
                        <span class="text-base">↗</span>
                    </a>
                    <a
                        href="https://tniad.mil.id"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="bg-white text-green-800 px-6 py-3 rounded-lg hover:bg-green-50 transition-colors flex items-center justify-center gap-2 text-sm font-medium"
                    >
                        TNI AD
                        <span class="text-base">↗</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
