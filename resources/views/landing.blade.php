{{-- resources/views/landing.blade.php --}}
@include('components.auth-dialog')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>BinaFisik - Landing</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
<div class="min-h-screen bg-gradient-to-br from-green-900 via-green-800 to-green-950">

    {{-- Header --}}
    <header class="px-6 py-6">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-full bg-yellow-400 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="w-7 h-7 text-green-700">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <circle cx="12" cy="12" r="6"></circle>
                                    <circle cx="12" cy="12" r="2"></circle>
                                </svg>
                </div>

                <span class="text-white text-xl">BinaFisik</span>
            </div>
            <button
                type="button"
                onclick="openLoginDialog()"
                class="px-6 py-2 bg-yellow-400 text-green-900 rounded-lg hover:bg-yellow-300 cursor-pointer"
            >
                Masuk
            </button>


        </div>
    </header>

    {{-- Hero Section --}}
    <section class="px-6 py-20">
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h1 class="text-white text-5xl mb-6 leading-tight">
                    Wujudkan Impian Menjadi Prajurit TNI
                </h1>
                <p class="text-green-100 text-xl mb-8">
                    Platform pelatihan fisik digital yang membantu calon pendaftar TNI mencapai standar tes fisik dengan bimbingan trainer profesional.
                </p>
                <button
                    type="button"
                    onclick="openLoginDialog()"
                    class="px-8 py-4 bg-yellow-400 text-green-900 rounded-lg hover:bg-yellow-300 transition-colors inline-flex items-center gap-2"
                >
                    Mulai Sekarang
                    <span class="w-5 h-5 rounded-full border border-green-900 flex items-center justify-center text-xs font-extrabold">
                        ✓
                    </span>


                </button>
            </div>
            <div class="hidden md:block">
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="text-center">
                            <div class="text-yellow-400 text-4xl mb-2">500+</div>
                            <div class="text-green-100">Siswa Aktif</div>
                        </div>
                        <div class="text-center">
                            <div class="text-yellow-400 text-4xl mb-2">50+</div>
                            <div class="text-green-100">Trainer Ahli</div>
                        </div>
                        <div class="text-center">
                            <div class="text-yellow-400 text-4xl mb-2">85%</div>
                            <div class="text-green-100">Tingkat Kelulusan</div>
                        </div>
                        <div class="text-center">
                            <div class="text-yellow-400 text-4xl mb-2">24/7</div>
                            <div class="text-green-100">Tracking Progress</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Features Section --}}
    <section class="px-6 py-20 bg-white">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-center text-4xl text-gray-900 mb-4">
                Fitur Unggulan
            </h2>
            <p class="text-center text-gray-600 mb-12 text-lg">
                Semua yang Anda butuhkan untuk mempersiapkan diri menghadapi seleksi TNI
            </p>
            <div class="grid md:grid-cols-4 gap-8">
                {{-- 1. Program Terarah --}}
                <div class="text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        {{-- icon bulat sebagai pengganti Target --}}
                        <div class="w-10 h-10 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="w-8 h-8 text-green-700">
                                <circle cx="12" cy="12" r="10"></circle>
                                <circle cx="12" cy="12" r="6"></circle>
                                <circle cx="12" cy="12" r="2"></circle>
                            </svg>
                        </div>

                    </div>
                    <h3 class="text-gray-900 mb-2">Program Terarah</h3>
                    <p class="text-gray-600">
                        Latihan disesuaikan dengan standar seleksi TNI
                    </p>
                </div>

                {{-- 2. Tracking Digital --}}
                <div class="text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <div class="w-10 h-10 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="w-8 h-8 text-green-700">
                                <path d="M16 7h6v6"></path>
                                <path d="m22 7-8.5 8.5-5-5L2 17"></path>
                            </svg>
                        </div>

                    </div>
                    <h3 class="text-gray-900 mb-2">Tracking Digital</h3>
                    <p class="text-gray-600">
                        Pantau progress latihan Anda setiap minggu
                    </p>
                </div>

                {{-- 3. Bimbingan Trainer --}}
                <div class="text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <div class="w-10 h-10 rounded-ful flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="w-8 h-8 text-green-700">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                <path d="M16 3.128a4 4 0 0 1 0 7.744"></path>
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                            </svg>
                        </div>

                    </div>
                    <h3 class="text-gray-900 mb-2">Bimbingan Trainer</h3>
                    <p class="text-gray-600">
                        Dapatkan arahan dari trainer berpengalaman
                    </p>
                </div>

                {{-- 4. Info Terkini --}}
                <div class="text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <div class="w-10 h-10 rounded-ful flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="w-8 h-8 text-green-700">
                                <path d="M12 7v14"></path>
                                <path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"></path>
                            </svg>
                        </div>

                    </div>
                    <h3 class="text-gray-900 mb-2">Info Terkini</h3>
                    <p class="text-gray-600">
                        Informasi pendaftaran dan tips lolos seleksi
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="px-6 py-20 bg-gradient-to-r from-green-800 to-green-900">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-white text-4xl mb-4">
                Siap Memulai Perjalanan Anda?
            </h2>
            <p class="text-green-100 text-xl mb-8">
                Bergabunglah dengan ratusan calon prajurit yang telah mempersiapkan diri bersama kami
            </p>
            <button
                type="button"
                onclick="openRegisterDialog()"
                class="px-8 py-4 bg-yellow-400 text-green-900 rounded-lg hover:bg-yellow-300 transition-colors cursor-pointer"
            >
                Daftar Sekarang – Gratis
            </button>

        </div>
    </section>

    {{-- Footer --}}
    <footer class="px-6 py-8 bg-green-950">
        <div class="max-w-7xl mx-auto text-center text-green-300">
            <p>&copy; 2025 BinaFisik. Platform pelatihan calon prajurit TNI.</p>
        </div>
    </footer>

    <script>
    let isLogin = true;

    function openAuthDialog() {
        const modal = document.getElementById('authDialog');
        if (!modal) return;

        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }

    function closeAuthDialog() {
        const modal = document.getElementById('authDialog');
        if (!modal) return;

        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }

    function toggleAuthMode() {
        isLogin = !isLogin;

        document.getElementById('nameField')?.classList.toggle('hidden', isLogin);
        document.getElementById('confirmPasswordField')?.classList.toggle('hidden', isLogin);
        document.getElementById('registerInfo')?.classList.toggle('hidden', isLogin);

        document.getElementById('authSubmit').innerText = isLogin ? 'Masuk' : 'Daftar';
        document.getElementById('authSubtitle').innerText =
            isLogin ? 'Masuk ke akun Anda' : 'Daftar akun baru';

        // ⬇️ INI YANG PENTING
        document.getElementById('authToggleText').innerText =
            isLogin ? 'Belum punya akun?' : 'Sudah punya akun?';

        document.getElementById('authToggleButton').innerText =
            isLogin ? 'Daftar di sini' : 'Masuk di sini';

        document.getElementById('authForm').action =
            isLogin ? "{{ route('login') }}" : "{{ route('register') }}";
    }


    function togglePassword() {
        const input = document.getElementById('passwordInput');
        const eyeOpen = document.getElementById('eyeOpen');
        const eyeClosed = document.getElementById('eyeClosed');

        if (!input) return;

        const isPassword = input.type === 'password';

        input.type = isPassword ? 'text' : 'password';

        // Toggle icon
        eyeOpen.classList.toggle('hidden', !isPassword);
        eyeClosed.classList.toggle('hidden', isPassword);
    }

    function toggleConfirmPassword() {
        const input = document.getElementById('confirmPasswordInput');
        const eyeOpen = document.getElementById('confirmEyeOpen');
        const eyeClosed = document.getElementById('confirmEyeClosed');

        if (!input) return;

        const isPassword = input.type === 'password';
        input.type = isPassword ? 'text' : 'password';

        eyeOpen.classList.toggle('hidden', !isPassword);
        eyeClosed.classList.toggle('hidden', isPassword);
    }

    function validatePasswordMatch() {
        const password = document.getElementById('passwordInput')?.value;
        const confirm = document.getElementById('confirmPasswordInput')?.value;
        const error = document.getElementById('passwordError');

        if (!password || !confirm) {
            error.classList.add('hidden');
            return;
        }

        if (password !== confirm) {
            error.classList.remove('hidden');
        } else {
            error.classList.add('hidden');
        }
    }


    function openLoginDialog() {
        openAuthDialog();

        // Paksa ke LOGIN
        if (!isLogin) {
            toggleAuthMode();
        }
    }

    function openRegisterDialog() {
        openAuthDialog();

        // Paksa ke REGISTER
        if (isLogin) {
            toggleAuthMode();
        }
    }

</script>
</div>
</body>
</html>
