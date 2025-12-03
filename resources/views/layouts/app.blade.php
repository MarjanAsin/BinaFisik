{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'BinaFisik')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gray-50 flex flex-col">

    {{-- Top Navigation --}}
    <nav class="bg-green-800 text-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                {{-- Logo & Brand --}}
                <a href="{{ route('landing') }}" class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-full bg-yellow-400 flex items-center justify-center text-green-900 font-bold">
                        T
                    </div>
                    <span class="text-xl">BinaFisik</span>
                </a>

                @php
                    $menus = [
                        ['route' => 'beranda',         'label' => 'Beranda',          'icon' => '🏠'],
                        ['route' => 'kalkulator.show', 'label' => 'Kalkulator Nilai', 'icon' => '🧮'],
                        ['route' => 'pelatihan',       'label' => 'Pelatihan',        'icon' => '🏋️'],
                        ['route' => 'info_pendaftaran','label' => 'Info Pendaftaran', 'icon' => 'ℹ️'],
                        ['route' => 'lokasi',          'label' => 'Lokasi',           'icon' => '📍'],
                    ];
                @endphp

                {{-- Navigation Links - Desktop --}}
                <div class="hidden md:flex items-center gap-2">
                    @foreach($menus as $menu)
                        @php
                            $active = request()->routeIs($menu['route']);
                        @endphp
                        <a
                            href="{{ route($menu['route']) }}"
                            class="flex items-center gap-2 px-4 py-2 rounded-lg transition-colors
                                   {{ $active ? 'bg-green-700 text-white' : 'text-green-100 hover:bg-green-700/50' }}"
                        >
                            <span class="text-lg">{{ $menu['icon'] }}</span>
                            <span>{{ $menu['label'] }}</span>
                        </a>
                    @endforeach
                </div>

                {{-- Mobile select --}}
                <div class="md:hidden">
                    <select
                        onchange="if(this.value){ window.location = this.value; }"
                        class="bg-green-700 text-white border border-green-600 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                    >
                        @foreach($menus as $menu)
                            <option
                                value="{{ route($menu['route']) }}"
                                {{ request()->routeIs($menu['route']) ? 'selected' : '' }}
                            >
                                {{ $menu['label'] }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            {{-- Navigation Links - Mobile (ikon kecil) --}}
            <div class="md:hidden pb-3 grid grid-cols-5 gap-1">
                @foreach($menus as $menu)
                    @php
                        $active = request()->routeIs($menu['route']);
                    @endphp
                    <a
                        href="{{ route($menu['route']) }}"
                        class="flex flex-col items-center gap-1 px-2 py-2 rounded-lg transition-colors
                               {{ $active ? 'bg-green-700 text-white' : 'text-green-100 hover:bg-green-700/50' }}"
                    >
                        <span class="text-lg">{{ $menu['icon'] }}</span>
                        <span class="text-xs text-center">{{ $menu['label'] }}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </nav>

    {{-- Main Content --}}
    <main class="flex-1 max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8 py-8">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-green-900 text-white mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="text-center">
                <p class="text-green-300">&copy; 2025 BinaFisik. Platform pelatihan jasmani calon prajurit TNI.</p>
            </div>
        </div>
    </footer>
</body>
</html>
