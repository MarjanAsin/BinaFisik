{{-- resources/views/lokasi.blade.php --}}
@extends('layouts.app')

@section('title', 'Lokasi Tempat Pelatihan - BinaFisik')

@section('content')
@php
    $kotaList = [
        'Jakarta',
        'Bandung',
        'Surabaya',
        'Yogyakarta',
        'Semarang',
        'Medan',
        'Makassar',
        'Palembang',
    ];

    $tempatPelatihan = [
        [
            'nama' => 'BinaFisik Training Center Jakarta',
            'kota' => 'Jakarta',
            'alamat' => 'Jl. Sudirman No. 123, Jakarta Pusat',
            'telp' => '021-1234567',
            'rating' => 4.8,
            'fasilitas' => ['Lapangan outdoor', 'Gym lengkap', 'Track lari', 'Pull up bar', 'Shower & locker'],
            'jamBuka' => 'Senin - Minggu: 05:00 - 21:00',
            'trainer' => '8 trainer bersertifikat',
            'harga' => 'Rp 500.000/bulan',
            'image' => 'https://images.unsplash.com/photo-1620188467120-5042ed1eb5da?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1080',
        ],
        [
            'nama' => 'Lapangan Latihan TNI Senayan',
            'kota' => 'Jakarta',
            'alamat' => 'Komplek Gelora Bung Karno, Jakarta Pusat',
            'telp' => '021-9876543',
            'rating' => 4.9,
            'fasilitas' => ['Lapangan outdoor luas', 'Track lari standar', 'Area pull up', 'Parkir luas', 'Kantin'],
            'jamBuka' => 'Senin - Sabtu: 06:00 - 18:00',
            'trainer' => '12 trainer eks TNI',
            'harga' => 'Rp 400.000/bulan',
            'image' => 'https://images.unsplash.com/photo-1762828841207-44b4c70f96a2?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1080',
        ],
        [
            'nama' => 'BinaFisik Fitness Hub Bandung',
            'kota' => 'Bandung',
            'alamat' => 'Jl. Dago No. 45, Bandung',
            'telp' => '022-5551234',
            'rating' => 4.7,
            'fasilitas' => ['Gym modern', 'Outdoor training area', 'Shuttle run track', 'Sauna', 'Cafe protein'],
            'jamBuka' => 'Senin - Minggu: 05:30 - 22:00',
            'trainer' => '6 trainer profesional',
            'harga' => 'Rp 450.000/bulan',
            'image' => 'https://images.unsplash.com/photo-1763656444799-e8abf3dcb5cb?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1080',
        ],
        [
            'nama' => 'TNI Prep Center Bandung',
            'kota' => 'Bandung',
            'alamat' => 'Jl. Cihampelas No. 88, Bandung',
            'telp' => '022-7778899',
            'rating' => 4.9,
            'fasilitas' => ['Lapangan simulasi TNI', 'Track 400m', 'Obstacle course', 'Pull up station', 'Locker room'],
            'jamBuka' => 'Senin - Sabtu: 06:00 - 19:00',
            'trainer' => '10 trainer eks TNI AD',
            'harga' => 'Rp 550.000/bulan',
            'image' => 'https://images.unsplash.com/photo-1759722144322-ba0a6cc41069?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1080',
        ],
        [
            'nama' => 'Surabaya Military Fitness',
            'kota' => 'Surabaya',
            'alamat' => 'Jl. Pemuda No. 77, Surabaya',
            'telp' => '031-8889999',
            'rating' => 4.6,
            'fasilitas' => ['Outdoor field', 'Indoor gym', 'Running track', 'Boxing area', 'Recovery room'],
            'jamBuka' => 'Senin - Minggu: 05:00 - 20:00',
            'trainer' => '7 trainer bersertifikat',
            'harga' => 'Rp 425.000/bulan',
            'image' => 'https://images.unsplash.com/photo-1758274525923-c012bbd8bfbe?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1080',
        ],
        [
            'nama' => 'BinaFisik Training Ground Yogyakarta',
            'kota' => 'Yogyakarta',
            'alamat' => 'Jl. Solo KM 7, Yogyakarta',
            'telp' => '0274-445566',
            'rating' => 4.8,
            'fasilitas' => ['Lapangan luas', 'Natural terrain', 'Pull up bars', 'Free parking', 'Musala'],
            'jamBuka' => 'Senin - Sabtu: 06:00 - 18:00',
            'trainer' => '5 trainer eks TNI AU',
            'harga' => 'Rp 350.000/bulan',
            'image' => 'https://images.unsplash.com/photo-1620188467120-5042ed1eb5da?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1080',
        ],
    ];
@endphp

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <div class="mb-8">
        <h2 class="text-3xl text-gray-900 mb-2">Lokasi Tempat Pelatihan</h2>
        <p class="text-gray-600">
            Temukan tempat pelatihan BinaFisik terdekat di kota Anda
        </p>
    </div>

    {{-- Filter Section --}}
    <div class="mb-8 bg-white rounded-xl p-6 shadow-sm border border-gray-200">
        <div class="grid md:grid-cols-2 gap-4">
            <div>
                <label class="block text-gray-700 mb-2">
                    <span class="inline-flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="w-4 h-4">
                            <path d="M21 10c0 6-9 12-9
                                    12s-9-6-9-12a9 9 0 1 1
                                    18 0Z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <span>Pilih Kota</span>
                    </span>
                </label>
                <select
                    id="kotaFilter"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                >
                    <option value="">Semua Kota</option>
                    @foreach($kotaList as $kota)
                        <option value="{{ $kota }}">{{ $kota }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block text-gray-700 mb-2">
                    <span class="inline-flex items-center gap-1">
                         <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="w-4 h-4">
                            <path d="m21 21-4.34-4.34"></path>
                            <circle cx="11" cy="11" r="8"></circle>
                        </svg>
                        <span>Cari Tempat Latihan</span>
                    </span>
                </label>
                <input
                    type="text"
                    id="lokasiSearch"
                    placeholder="Cari nama atau alamat..."
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                />
            </div>
        </div>

        <div class="mt-4 flex items-center gap-2 text-sm text-gray-600">
            <span>Ditemukan </span>
            <span id="lokasiCount" class="font-semibold">{{ count($tempatPelatihan) }}</span>
            <span>tempat latihan</span>
        </div>
    </div>

    {{-- Results --}}
    <div id="lokasiEmptyState" class="hidden text-center py-12 bg-white rounded-xl border border-gray-200">
        <div class="w-16 h-16 rounded-full bg-gray-100 flex items-center justify-center mx-auto mb-4 text-2xl">
            📍
        </div>
        <p class="text-gray-500">Tidak ada tempat latihan ditemukan</p>
        <p class="text-gray-400 text-sm mt-2">Coba ubah filter pencarian Anda</p>
    </div>

    <div id="lokasiGrid" class="grid md:grid-cols-2 gap-6">
        @foreach($tempatPelatihan as $index => $tempat)
            <div
                class="lokasi-card bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden"
                data-kota="{{ strtolower($tempat['kota']) }}"
                data-nama="{{ strtolower($tempat['nama']) }}"
                data-alamat="{{ strtolower($tempat['alamat']) }}"
            >
                {{-- Image --}}
                <div class="h-48 overflow-hidden bg-gray-200">
                    <img
                        src="{{ $tempat['image'] }}"
                        alt="{{ $tempat['nama'] }}"
                        class="w-full h-full object-cover"
                        onerror="this.style.display='none'; this.parentElement.classList.add('bg-gray-300');"
                    />
                </div>

                {{-- Content --}}
                <div class="p-6">
                    <div class="flex items-start justify-between mb-3">
                        <h3 class="text-xl text-gray-900">{{ $tempat['nama'] }}</h3>
                        <div class="flex items-center gap-1 bg-yellow-50 px-2 py-1 rounded">
                            <span class="text-yellow-500 text-sm">★</span>
                            <span class="text-sm text-gray-900">{{ $tempat['rating'] }}</span>
                        </div>
                    </div>

                    <div class="space-y-2 mb-4">
                        <div class="flex items-start gap-2 text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="w-4 h-4">
                                <path d="M21 10c0 6-9 12-9
                                        12s-9-6-9-12a9 9 0 1 1
                                        18 0Z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            <span class="text-sm">{{ $tempat['alamat'] }}</span>
                        </div>
                        <div class="flex items-center gap-2 text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="w-4 h-4">
                                <path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"></path>
                            </svg>
                            <span class="text-sm">{{ $tempat['telp'] }}</span>
                        </div>
                        <div class="flex items-center gap-2 text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="w-4 h-4">
                            <path d="M12 6v6l4 2"></path>
                            <circle cx="12" cy="12" r="10"></circle>
                        </svg>
                            <span class="text-sm">{{ $tempat['jamBuka'] }}</span>
                        </div>
                    </div>

                    <div class="mb-4">
                        <h4 class="text-sm text-gray-700 mb-2">Fasilitas:</h4>
                        <div class="flex flex-wrap gap-2">
                            @foreach($tempat['fasilitas'] as $fasilitas)
                                <span class="px-2 py-1 bg-green-50 text-green-700 text-xs rounded-full">
                                    {{ $fasilitas }}
                                </span>
                            @endforeach
                        </div>
                    </div>

                    <div class="flex items-center justify-between py-3 border-t border-gray-200">
                        <div>
                            <div class="text-sm text-gray-600">{{ $tempat['trainer'] }}</div>
                            <div class="text-green-700 font-semibold">{{ $tempat['harga'] }}</div>
                        </div>
                        <a
    href="https://wa.me/6281234567890"
    target="_blank"
    class="flex items-center gap-2 px-4 py-2 bg-green-700 text-white rounded-lg hover:bg-green-800 transition-colors text-sm font-semibold"
>
    <!-- WhatsApp icon -->
    <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 32 32"
        class="w-5 h-5"
    >
        <!-- Lingkaran putih (diperkecil) -->
        <circle cx="16" cy="16" r="14" fill="white"/>

        <!-- Logo WhatsApp (dibesarkan) -->
        <path
            fill="#25D366"
            d="M16 6.8a9.2 9.2 0 0 0-7.9 14l-.9 4.4 4.5-1.2A9.2 9.2 0 1 0 16 6.8zm4.7 12.7c-.2.6-1.2 1.1-1.7 1.2-.4.1-1 .1-1.6-.1-.3-.1-.9-.3-1.5-.6-2.5-1.1-4.2-3.7-4.3-3.9-.1-.2-1.1-1.4-1.1-2.7s.7-2 .9-2.2c.2-.2.4-.3.7-.3h.5c.2 0 .4.1.5.4.2.4.7 1.6.8 1.7.1.1.1.3 0 .5-.1.1-.2.2-.3.4l-.3.4c-.1.2-.2.3-.1.5.1.3.6 1.1 1.4 1.7.9.8 1.8 1.1 2.1 1 .3-.1.7-.6.9-.9.2-.3.4-.2.7-.1l1.6.7c.2.1.3.2.3.3 0 .1 0 .7-.2 1.1z"
        />
    </svg>

    <span>Hubungi Trainer</span>
</a>



                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Info Banner --}}
    <div class="mt-8 bg-gradient-to-r from-green-700 to-green-800 rounded-xl p-8 text-white">
        <h3 class="text-2xl mb-4">Ingin Membuka Cabang BinaFisik di Kota Anda?</h3>
        <p class="text-green-100 mb-6">
            Kami terus berkembang untuk melayani lebih banyak calon prajurit TNI di seluruh Indonesia.
            Jika Anda tertarik untuk menjadi mitra atau membuka cabang BinaFisik, hubungi kami.
        </p>
        <button
            type="button"
            class="px-6 py-3 bg-yellow-400 text-green-900 rounded-lg hover:bg-yellow-300 transition-colors text-sm font-medium"
        >
            Hubungi Tim Partnership
        </button>
    </div>
</div>

{{-- Script filter sederhana (tanpa React) --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const kotaSelect = document.getElementById('kotaFilter');
        const searchInput = document.getElementById('lokasiSearch');
        const cards = Array.from(document.querySelectorAll('.lokasi-card'));
        const countSpan = document.getElementById('lokasiCount');
        const emptyState = document.getElementById('lokasiEmptyState');
        const grid = document.getElementById('lokasiGrid');

        function applyFilter() {
            const kota = (kotaSelect.value || '').toLowerCase();
            const query = (searchInput.value || '').toLowerCase();

            let visibleCount = 0;

            cards.forEach(card => {
                const cardKota = card.getAttribute('data-kota') || '';
                const nama = card.getAttribute('data-nama') || '';
                const alamat = card.getAttribute('data-alamat') || '';

                const matchKota = !kota || cardKota === kota;
                const matchSearch =
                    !query ||
                    nama.includes(query) ||
                    alamat.includes(query);

                if (matchKota && matchSearch) {
                    card.classList.remove('hidden');
                    visibleCount++;
                } else {
                    card.classList.add('hidden');
                }
            });

            countSpan.textContent = visibleCount;

            if (visibleCount === 0) {
                emptyState.classList.remove('hidden');
                grid.classList.add('hidden');
            } else {
                emptyState.classList.add('hidden');
                grid.classList.remove('hidden');
            }
        }

        if (kotaSelect && searchInput) {
            kotaSelect.addEventListener('change', applyFilter);
            searchInput.addEventListener('input', applyFilter);
        }

        applyFilter();
    });
</script>
@endsection
