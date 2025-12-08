{{-- resources/views/dashboard/input-latihan.blade.php --}}
@extends('layouts.app')

@section('title', 'Kalkulator Nilai Jasmani TNI - BinaFisik')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <div class="mb-8">
        <h2 class="text-3xl text-gray-900 mb-2">Kalkulator Nilai Jasmani TNI</h2>
        <p class="text-gray-600">
            Hitung nilai tes fisik Anda berdasarkan standar penilaian TNI
        </p>
    </div>

    {{-- Alert sukses --}}
    @if(!empty($success))
        <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded-lg">
            {{ $success }}
        </div>
    @endif

    <div class="grid lg:grid-cols-3 gap-6 mb-8">
        {{-- Form Input --}}
        <div class="lg:col-span-2">
            <div class="bg-white rounded-xl p-8 shadow-sm border border-gray-200">
                <form action="{{ route('kalkulator.hitung') }}" method="POST">
                    @csrf
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-gray-700 mb-2">Tanggal Tes</label>
                            <input
                                type="date"
                                name="tanggal"
                                value="{{ old('tanggal', now()->toDateString()) }}"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                                required
                            />
                            @error('tanggal')
                                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-gray-700 mb-2">Jenis Kelamin</label>
                            <select
                                name="gender"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                                required
                            >
                                <option value="laki-laki" {{ old('gender', 'laki-laki') === 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="perempuan" {{ old('gender') === 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                            @error('gender')
                                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    @php
                        $gender = old('gender', 'laki-laki');
                    @endphp

                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        {{-- Lari 12 Menit --}}
                        <div>
                            <label class="block text-gray-700 mb-2">Lari 12 Menit (meter)</label>
                            <input
                                type="number"
                                step="1"
                                name="lari12menit"
                                value="{{ old('lari12menit') }}"
                                placeholder="{{ $gender === 'laki-laki' ? 'Contoh: 3444' : 'Contoh: 3095' }}"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                                required
                            />
                            <p class="text-sm text-gray-500 mt-1">
                                {{ $gender === 'laki-laki' ? 'Standar: 3.444 meter' : 'Standar: 3.095 meter' }}
                            </p>
                            @error('lari12menit')
                                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Push Up --}}
                        <div>
                            <label class="block text-gray-700 mb-2">Push Up 1 Menit (repetisi)</label>
                            <input
                                type="number"
                                name="pushUp"
                                value="{{ old('pushUp') }}"
                                placeholder="Contoh: 45"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                                required
                            />
                            <p class="text-sm text-gray-500 mt-1">
                                @if($gender === 'laki-laki')
                                    ≥50 = Sangat Baik, 40-49 = Baik, &lt;30 = Rendah
                                @else
                                    ≥30 = Sangat Baik, 20-25 = Baik, &lt;10 = Rendah
                                @endif
                            </p>
                            @error('pushUp')
                                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Sit Up --}}
                        <div>
                            <label class="block text-gray-700 mb-2">Sit Up 1 Menit (repetisi)</label>
                            <input
                                type="number"
                                name="sitUp"
                                value="{{ old('sitUp') }}"
                                placeholder="Contoh: 42"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                                required
                            />
                            <p class="text-sm text-gray-500 mt-1">
                                {{ $gender === 'laki-laki' ? 'Standar: 45 repetisi' : 'Standar: 43 repetisi' }}
                            </p>
                            @error('sitUp')
                                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Pull Up --}}
                        <div>
                            <label class="block text-gray-700 mb-2">Pull Up 1 Menit (repetisi)</label>
                            <input
                                type="number"
                                name="pullUp"
                                value="{{ old('pullUp') }}"
                                placeholder="Contoh: 18"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                                required
                            />
                            <p class="text-sm text-gray-500 mt-1">
                                {{ $gender === 'laki-laki' ? 'Standar: ≥18 = Sangat Baik' : 'Standar: 63 repetisi' }}
                            </p>
                            @error('pullUp')
                                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Shuttle Run --}}
                        <div>
                            <label class="block text-gray-700 mb-2">Shuttle Run (detik)</label>
                            <input
                                type="number"
                                step="0.1"
                                name="shuttleRun"
                                value="{{ old('shuttleRun') }}"
                                placeholder="Contoh: 16.5"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                                required
                            />
                            <p class="text-sm text-gray-500 mt-1">
                                {{ $gender === 'laki-laki' ? 'Standar: 16,2 detik' : 'Standar: 17,6 detik' }}
                            </p>
                            @error('shuttleRun')
                                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <button
                            type="submit"
                            class="flex-1 bg-green-700 text-white py-4 rounded-lg hover:bg-green-800 transition-colors flex items-center justify-center gap-2"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="w-5 h-5 text-white-300">
                                <rect width="16" height="20" x="4" y="2" rx="2"></rect>
                                <line x1="8" x2="16" y1="6" y2="6"></line>
                                <line x1="16" x2="16" y1="14" y2="18"></line>
                                <path d="M16 10h.01"></path>
                                <path d="M12 10h.01"></path>
                                <path d="M8 10h.01"></path>
                                <path d="M12 14h.01"></path>
                                <path d="M8 14h.01"></path>
                                <path d="M12 18h.01"></path>
                                <path d="M8 18h.01"></path>
                            </svg>
                            Hitung Nilai
                        </button>
                        <a
                            href="{{ route('kalkulator.show') }}"
                            class="px-8 bg-gray-200 text-gray-700 py-4 rounded-lg hover:bg-gray-300 transition-colors text-center"
                        >
                            Reset
                        </a>
                    </div>
                </form>

                <div class="mt-8 p-6 bg-blue-50 rounded-lg border border-blue-200">
                    <div class="flex gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="w-5 h-5 text-blue-600">
                            <path d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2"></path>
                        </svg>
                        <div>
                            <h4 class="text-blue-900 mb-2">Cara Menggunakan Kalkulator</h4>
                            <ul class="text-blue-800 text-sm space-y-1">
                                <li>• Pilih jenis kelamin terlebih dahulu</li>
                                <li>• Masukkan hasil tes fisik Anda pada setiap kolom</li>
                                <li>• Lari 12 menit: jarak dalam METER yang dapat ditempuh dalam 12 menit</li>
                                <li>• Push Up, Sit Up, Pull Up: repetisi maksimal dalam 1 menit</li>
                                <li>• Klik "Hitung Nilai" untuk melihat hasil penilaian</li>
                                <li>• Nilai akhir minimal 70 dari 100 untuk dinyatakan LULUS</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Hasil Perhitungan --}}
        <div class="lg:col-span-1">
            <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-200 sticky top-6">
                <div class="flex items-center gap-3 mb-6">
                    <span class="text-green-600">
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

                    <h3 class="text-xl text-gray-900">Hasil Penilaian</h3>
                </div>

                @if(!empty($scoreResult))
                    {{-- Status Badge --}}
                    <div class="mb-6 p-4 rounded-lg text-center
                        {{ $scoreResult['status'] === 'lulus' ? 'bg-green-100 border-2 border-green-500' : 'bg-red-100 border-2 border-red-500' }}">
                        <div class="flex items-center justify-center gap-2 mb-2">
                            <span class="text-2xl">
                                {{ $scoreResult['status'] === 'lulus' ? '✅' : '❌' }}
                            </span>
                            <span class="text-2xl {{ $scoreResult['status'] === 'lulus' ? 'text-green-900' : 'text-red-900' }}">
                                {{ strtoupper($scoreResult['status'] === 'lulus' ? 'LULUS' : 'TIDAK LULUS') }}
                            </span>
                        </div>
                        <p class="text-sm {{ $scoreResult['status'] === 'lulus' ? 'text-green-700' : 'text-red-700' }}">
                            {{ $scoreResult['status'] === 'lulus'
                                ? 'Selamat! Nilai Anda memenuhi standar'
                                : 'Tingkatkan latihan untuk mencapai standar' }}
                        </p>
                    </div>

                    {{-- Nilai Akhir --}}
                    <div class="mb-6 p-4 bg-gradient-to-r from-green-600 to-green-700 rounded-lg text-white text-center">
                        <div class="text-sm mb-1">Nilai Akhir</div>
                        <div class="text-5xl mb-1">{{ $scoreResult['nilaiAkhir'] }}</div>
                        <div class="text-sm text-green-100">dari {{ $scoreResult['maxTotal'] }}</div>
                    </div>

                    {{-- Detail per tes --}}
                    <div class="space-y-3 mb-6">
                        @php
                            $detail = [
                                ['label' => 'Lari 12 Menit', 'field' => 'lari12menit', 'color' => 'bg-blue-600'],
                                ['label' => 'Push Up 1 Menit', 'field' => 'pushUp', 'color' => 'bg-green-600'],
                                ['label' => 'Sit Up 1 Menit', 'field' => 'sitUp', 'color' => 'bg-purple-600'],
                                ['label' => 'Pull Up 1 Menit', 'field' => 'pullUp', 'color' => 'bg-orange-600'],
                                ['label' => 'Shuttle Run', 'field' => 'shuttleRun', 'color' => 'bg-yellow-600'],
                            ];
                        @endphp

                        @foreach($detail as $item)
                            <div class="border-b border-gray-200 pb-2">
                                <div class="flex justify-between items-center mb-1">
                                    <span class="text-gray-700">{{ $item['label'] }}</span>
                                    <span class="text-green-700">{{ $scoreResult[$item['field']] }}/100</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="{{ $item['color'] }} h-2 rounded-full transition-all"
                                         style="width: {{ $scoreResult[$item['field']] }}%">
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="text-xs text-gray-500">
                            Kategori Push Up: {{ $scoreResult['kategoriPushUp'] }}<br>
                            @if(!empty($scoreResult['kategoriPullUp']))
                                Kategori Pull Up: {{ $scoreResult['kategoriPullUp'] }}
                            @endif
                        </div>
                    </div>

                    {{-- Rekomendasi --}}
                    <div class="p-4 bg-yellow-50 border border-yellow-200 rounded-lg">
                        <h4 class="text-yellow-900 mb-2">Rekomendasi</h4>
                        <p class="text-yellow-800 text-sm">
                            {{ $scoreResult['status'] === 'lulus'
                                ? 'Pertahankan performa Anda dan tingkatkan pada tes dengan nilai di bawah 80 untuk hasil optimal!'
                                : 'Fokus pada tes dengan nilai terendah. Konsultasikan dengan trainer untuk program latihan yang lebih efektif.' }}
                        </p>
                    </div>
                @else
                    <div class="text-center py-12">
                        <div class="w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="w-15 h-15 text-gray-300">
                                <rect width="16" height="20" x="4" y="2" rx="2"></rect>
                                <line x1="8" x2="16" y1="6" y2="6"></line>
                                <line x1="16" x2="16" y1="14" y2="18"></line>
                                <path d="M16 10h.01"></path>
                                <path d="M12 10h.01"></path>
                                <path d="M8 10h.01"></path>
                                <path d="M12 14h.01"></path>
                                <path d="M8 14h.01"></path>
                                <path d="M12 18h.01"></path>
                                <path d="M8 18h.01"></path>
                            </svg>
                        </div>

                        <p class="text-gray-500">
                            Masukkan data hasil tes fisik Anda dan klik "Hitung Nilai" untuk melihat hasil penilaian
                        </p>
                    </div>
                @endif
            </div>
        </div>
    </div>

    {{-- Progress Latihan Section --}}
@if(!empty($records))
    @php
        $labels = collect($records)->map(function ($r) {
            return \Carbon\Carbon::parse($r['tanggal'])->format('d M');
        });

        $dataLari   = collect($records)->pluck('lari12menit');
        $dataPushUp = collect($records)->pluck('pushUp');
        $dataSitUp  = collect($records)->pluck('sitUp');
        $dataPullUp = collect($records)->pluck('pullUp');
    @endphp

    <div class="mt-12">
        <div class="mb-6">
            <h3 class="text-2xl text-gray-900">Progress Latihan</h3>
            <p class="text-gray-600">Pantau perkembangan hasil tes Anda dari waktu ke waktu</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-200">
                <h4 class="text-gray-900 mb-4">Progress Lari 12 Menit (meter)</h4>
                <canvas id="chartLari"></canvas>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-200">
                <h4 class="text-gray-900 mb-4">Progress Push Up (repetisi)</h4>
                <canvas id="chartPushUp"></canvas>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-200">
                <h4 class="text-gray-900 mb-4">Progress Sit Up (repetisi)</h4>
                <canvas id="chartSitUp"></canvas>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-200">
                <h4 class="text-gray-900 mb-4">Progress Pull Up (repetisi)</h4>
                <canvas id="chartPullUp"></canvas>
            </div>
        </div>
    </div>

    {{-- Chart.js --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const labels   = @json($labels->values());
            const lari     = @json($dataLari->values());
            const pushUp   = @json($dataPushUp->values());
            const sitUp    = @json($dataSitUp->values());
            const pullUp   = @json($dataPullUp->values());

            function makeLineChart(canvasId, data, label, unit) {
                const ctx = document.getElementById(canvasId);
                if (!ctx) return;

                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: label,
                            data: data,
                            borderWidth: 2,
                            tension: 0.3,
                            fill: false,
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            tooltip: {
                                callbacks: {
                                    label: function (context) {
                                        return context.parsed.y + ' ' + unit;
                                    }
                                }
                            },
                            legend: {
                                display: false
                            }
                        },
                        scales: {
                            x: {
                                ticks: { color: '#6b7280' },
                                grid: { display: false }
                            },
                            y: {
                                ticks: { color: '#6b7280' },
                                grid: { color: '#e5e7eb' },
                            }
                        }
                    }
                });
            }

            makeLineChart('chartLari',   lari,   'Lari 12 Menit', 'meter');
            makeLineChart('chartPushUp', pushUp, 'Push Up',       'repetisi');
            makeLineChart('chartSitUp',  sitUp,  'Sit Up',        'repetisi');
            makeLineChart('chartPullUp', pullUp, 'Pull Up',       'repetisi');
        });
    </script>
@endif

</div>
@endsection
