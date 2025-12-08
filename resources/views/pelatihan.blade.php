{{-- resources/views/pelatihan.blade.php --}}
@extends('layouts.app')

@section('title', 'Program Pelatihan - BinaFisik')

@section('content')
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    @php
        $programPemula = [
            ['hari' => 'Senin',  'fokus' => 'Kardio Dasar',               'detail' => 'Lari 1.5km, Jalan cepat 15 menit'],
            ['hari' => 'Selasa', 'fokus' => 'Kekuatan Tubuh Bagian Atas', 'detail' => 'Push up 3x10, Plank 3x30 detik'],
            ['hari' => 'Rabu',   'fokus' => 'Istirahat Aktif',            'detail' => 'Stretching ringan, Yoga 20 menit'],
            ['hari' => 'Kamis',  'fokus' => 'Kardio & Kelincahan',        'detail' => 'Shuttle run 5x, Jumping jacks 3x20'],
            ['hari' => 'Jumat',  'fokus' => 'Kekuatan Core',              'detail' => 'Sit up 3x15, Leg raises 3x10'],
            ['hari' => 'Sabtu',  'fokus' => 'Kombinasi',                  'detail' => 'Circuit training ringan 20 menit'],
            ['hari' => 'Minggu', 'fokus' => 'Istirahat Total',            'detail' => 'Recovery penuh'],
        ];

        $programMenengah = [
            ['hari' => 'Senin',  'fokus' => 'Kardio Intensif',    'detail' => 'Lari 3km, Sprint interval 200m x 5'],
            ['hari' => 'Selasa', 'fokus' => 'Kekuatan Maksimal',  'detail' => 'Push up 4x20, Pull up 4x8, Dips 3x12'],
            ['hari' => 'Rabu',   'fokus' => 'Kelincahan & Core',  'detail' => 'Shuttle run 8x, Sit up 4x25, Plank 4x45 detik'],
            ['hari' => 'Kamis',  'fokus' => 'Endurance',          'detail' => 'Lari 5km tempo sedang'],
            ['hari' => 'Jumat',  'fokus' => 'Circuit Training',   'detail' => 'Kombinasi semua gerakan, 5 putaran'],
            ['hari' => 'Sabtu',  'fokus' => 'Tes Simulasi',       'detail' => 'Lari 12 menit, Push up 1 menit, Sit up 1 menit'],
            ['hari' => 'Minggu', 'fokus' => 'Istirahat Aktif',    'detail' => 'Stretching, Jogging ringan 2km'],
        ];

        $programLanjutan = [
            ['hari' => 'Senin',  'fokus' => 'Kardio Maksimal',    'detail' => 'Lari 5km, HIIT sprint 400m x 6'],
            ['hari' => 'Selasa', 'fokus' => 'Strength Training',  'detail' => 'Push up 5x30, Pull up 5x15, Muscle up 3x5'],
            ['hari' => 'Rabu',   'fokus' => 'Core & Explosive Power','detail' => 'Sit up 5x40, Box jumps 4x15, Burpees 4x20'],
            ['hari' => 'Kamis',  'fokus' => 'Long Distance Run',  'detail' => 'Lari 8-10km steady pace'],
            ['hari' => 'Jumat',  'fokus' => 'Advanced Circuit',   'detail' => 'Full body circuit 7 putaran, istirahat minimal'],
            ['hari' => 'Sabtu',  'fokus' => 'Tes Standar TNI',    'detail' => 'Lari 12 menit maksimal, semua tes 1 menit'],
            ['hari' => 'Minggu', 'fokus' => 'Active Recovery',    'detail' => 'Swimming 30 menit atau Cycling 45 menit'],
        ];
    @endphp

    <div>
        <div class="mb-8">
            <h2 class="text-3xl text-gray-900 mb-2">Program Pelatihan</h2>
            <p class="text-gray-600">
                Pilih program pelatihan yang sesuai dengan tingkat kemampuan Anda
            </p>
        </div>

        {{-- Tips Umum --}}
        <div class="mb-8 bg-blue-50 border border-blue-200 rounded-xl p-6">
            <div class="flex gap-3">
                <svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="w-7 h-7 text-blue-600">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <circle cx="12" cy="12" r="6"></circle>
                                    <circle cx="12" cy="12" r="2"></circle>
                                </svg>
                <div>
                    <h3 class="text-blue-900 mb-2">Tips Penting Sebelum Memulai</h3>
                    <ul class="text-blue-800 text-sm space-y-2">
                        <li>• Lakukan pemanasan minimal 10 menit sebelum latihan</li>
                        <li>• Perhatikan teknik yang benar untuk menghindari cedera</li>
                        <li>• Jaga asupan nutrisi dan hidrasi yang cukup</li>
                        <li>• Dengarkan tubuh Anda dan jangan memaksakan diri jika sakit</li>
                        <li>• Tidur minimal 7-8 jam untuk pemulihan optimal</li>
                        <li>• Konsisten adalah kunci - ikuti program secara teratur</li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Program Pemula --}}
        <div class="mb-8 bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
            <div class="bg-green-600 text-white px-6 py-4 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="w-6 h-6">
                        <path d="M17.596 12.768a2 2 0 1 0 2.829-2.829l-1.768-1.767a2 2 0 0 0 2.828-2.829l-2.828-2.828a2 2 0 0 0-2.829 2.828l-1.767-1.768a2 2 0 1 0-2.829 2.829z"></path>
                        <path d="m2.5 21.5 1.4-1.4"></path>
                        <path d="m20.1 3.9 1.4-1.4"></path>
                        <path d="M5.343 21.485a2 2 0 1 0 2.829-2.828l1.767 1.768a2 2 0 1 0 2.829-2.829l-6.364-6.364a2 2 0 1 0-2.829 2.829l1.768 1.767a2 2 0 0 0-2.828 2.829z"></path>
                        <path d="m9.6 14.4 4.8-4.8"></path>
                    </svg>
                    <h3 class="text-xl">Program Pemula</h3>
                </div>
                <span class="bg-white/20 px-3 py-1 rounded-full text-sm">4-8 Minggu</span>
            </div>
            <div class="p-6">
                <div class="mb-6">
                    <h4 class="text-gray-900 mb-3">Target Program:</h4>
                    <div class="grid md:grid-cols-3 gap-4">
                        <div class="flex items-start gap-2">
                            <span class="w-6 h-6 flex items-center justify-center text-green-600">
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
                            <span class="text-gray-700 text-sm">Membangun fondasi kekuatan dasar</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <span class="w-6 h-6 flex items-center justify-center text-green-600">
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
                            <span class="text-gray-700 text-sm">Meningkatkan stamina kardiovaskular</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <span class="w-6 h-6 flex items-center justify-center text-green-600">
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
                            <span class="text-gray-700 text-sm">Menyesuaikan tubuh dengan rutinitas latihan</span>
                        </div>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                        <tr class="border-b border-gray-200">
                            <th class="text-left py-3 px-4 text-gray-700">Hari</th>
                            <th class="text-left py-3 px-4 text-gray-700">Fokus Latihan</th>
                            <th class="text-left py-3 px-4 text-gray-700">Detail</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($programPemula as $item)
                            <tr class="border-b border-gray-100">
                                <td class="py-3 px-4 text-gray-900">{{ $item['hari'] }}</td>
                                <td class="py-3 px-4 text-green-700">{{ $item['fokus'] }}</td>
                                <td class="py-3 px-4 text-gray-600">{{ $item['detail'] }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="mt-6 p-4 bg-yellow-50 border border-yellow-200 rounded-lg">
                    <div class="flex items-start gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="w-5 h-5 text-orange-500">
                            <path d="M12 6v6l4 2"></path>
                            <circle cx="12" cy="12" r="10"></circle>
                        </svg>
                        <p class="text-yellow-800 text-sm">
                            <strong>Durasi:</strong> Setiap sesi latihan 30-45 menit. Fokus pada penguasaan teknik daripada kecepatan atau jumlah repetisi.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Program Menengah --}}
        <div class="mb-8 bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
            <div class="bg-blue-600 text-white px-6 py-4 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="w-6 h-6">
                                <path d="M16 7h6v6"></path>
                                <path d="m22 7-8.5 8.5-5-5L2 17"></path>
                            </svg>
                    <h3 class="text-xl">Program Menengah</h3>
                </div>
                <span class="bg-white/20 px-3 py-1 rounded-full text-sm">8-12 Minggu</span>
            </div>
            <div class="p-6">
                <div class="mb-6">
                    <h4 class="text-gray-900 mb-3">Target Program:</h4>
                    <div class="grid md:grid-cols-3 gap-4">
                        <div class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="w-5 h-5 text-blue-600">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>
                            <span class="text-gray-700 text-sm">Meningkatkan kekuatan dan endurance</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="w-5 h-5 text-blue-600">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>
                            <span class="text-gray-700 text-sm">Mendekati standar minimum TNI</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="w-5 h-5 text-blue-600">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>
                            <span class="text-gray-700 text-sm">Meningkatkan kecepatan dan kelincahan</span>
                        </div>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                        <tr class="border-b border-gray-200">
                            <th class="text-left py-3 px-4 text-gray-700">Hari</th>
                            <th class="text-left py-3 px-4 text-gray-700">Fokus Latihan</th>
                            <th class="text-left py-3 px-4 text-gray-700">Detail</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($programMenengah as $item)
                            <tr class="border-b border-gray-100">
                                <td class="py-3 px-4 text-gray-900">{{ $item['hari'] }}</td>
                                <td class="py-3 px-4 text-blue-700">{{ $item['fokus'] }}</td>
                                <td class="py-3 px-4 text-gray-600">{{ $item['detail'] }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="mt-6 p-4 bg-yellow-50 border border-yellow-200 rounded-lg">
                    <div class="flex items-start gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="w-5 h-5 text-orange-500">
                            <path d="M12 6v6l4 2"></path>
                            <circle cx="12" cy="12" r="10"></circle>
                        </svg>
                        <p class="text-yellow-800 text-sm">
                            <strong>Durasi:</strong> Setiap sesi latihan 45-60 menit. Tingkatkan intensitas secara bertahap dan ukur progress setiap minggu.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Program Lanjutan --}}
        <div class="mb-8 bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
            <div class="bg-purple-600 text-white px-6 py-4 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="w-6 h-6">
                            <path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"></path>
                            <circle cx="12" cy="8" r="6"></circle>
                        </svg>
                    <h3 class="text-xl">Program Lanjutan</h3>
                </div>
                <span class="bg-white/20 px-3 py-1 rounded-full text-sm">12+ Minggu</span>
            </div>
            <div class="p-6">
                <div class="mb-6">
                    <h4 class="text-gray-900 mb-3">Target Program:</h4>
                    <div class="grid md:grid-cols-3 gap-4">
                        <div class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="w-5 h-5 text-purple-600">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>
                            <span class="text-gray-700 text-sm">Mencapai dan melampaui standar TNI</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="w-5 h-5 text-purple-600">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>
                            <span class="text-gray-700 text-sm">Performa maksimal di semua tes</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="w-5 h-5 text-purple-600">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>
                            <span class="text-gray-700 text-sm">Siap menghadapi seleksi fisik</span>
                        </div>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                        <tr class="border-b border-gray-200">
                            <th class="text-left py-3 px-4 text-gray-700">Hari</th>
                            <th class="text-left py-3 px-4 text-gray-700">Fokus Latihan</th>
                            <th class="text-left py-3 px-4 text-gray-700">Detail</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($programLanjutan as $item)
                            <tr class="border-b border-gray-100">
                                <td class="py-3 px-4 text-gray-900">{{ $item['hari'] }}</td>
                                <td class="py-3 px-4 text-purple-700">{{ $item['fokus'] }}</td>
                                <td class="py-3 px-4 text-gray-600">{{ $item['detail'] }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="mt-6 p-4 bg-yellow-50 border border-yellow-200 rounded-lg">
                    <div class="flex items-start gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="w-5 h-5 text-orange-500">
                            <path d="M12 6v6l4 2"></path>
                            <circle cx="12" cy="12" r="10"></circle>
                        </svg>
                        <p class="text-yellow-800 text-sm">
                            <strong>Durasi:</strong> Setiap sesi latihan 60-90 menit. Program ini untuk atlet yang sudah memiliki dasar kuat dan siap untuk intensitas tinggi.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Nutrition Tips --}}
        <div class="bg-gradient-to-r from-green-700 to-green-800 rounded-xl p-8 text-white mb-10">
            <h3 class="text-2xl mb-4">Tips Nutrisi untuk Meningkatkan Performa</h3>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h4 class="text-xl mb-3">Sebelum Latihan</h4>
                    <ul class="space-y-2 text-green-100">
                        <li>• Makan 2-3 jam sebelum latihan</li>
                        <li>• Karbohidrat kompleks (nasi merah, oatmeal)</li>
                        <li>• Protein sedang (telur, ayam)</li>
                        <li>• Hidrasi yang cukup (minum 500ml air)</li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xl mb-3">Setelah Latihan</h4>
                    <ul class="space-y-2 text-green-100">
                        <li>• Makan dalam 30-60 menit setelah latihan</li>
                        <li>• Protein tinggi untuk pemulihan otot</li>
                        <li>• Karbohidrat untuk mengisi energi</li>
                        <li>• Hidrasi dengan air atau minuman elektrolit</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
