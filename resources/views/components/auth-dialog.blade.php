<div
    id="authDialog"
    class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50 p-4"
>
    <div class="bg-white rounded-2xl max-w-md w-full max-h-[90vh] overflow-y-auto custom-scroll">

        {{-- Header --}}
        <div class="bg-gradient-to-r from-green-700 to-green-800 p-6 relative rounded-t-2xl">
            <button
                onclick="closeAuthDialog()"
                class="absolute top-4 right-4 text-white hover:bg-white/20 rounded-full p-2"
            >
                ✕
            </button>

            <div class="flex items-center gap-3 mb-2">
                <x-icon name="target" class="w-8 h-8 text-yellow-400" />
                <span class="text-white text-2xl font-semibold">BinaFisik</span>
            </div>

            <p id="authSubtitle" class="text-green-100">
                Masuk ke akun Anda
            </p>
        </div>

        {{-- Form --}}
        <div class="p-6">
            <form
                id="authForm"
                method="POST"
                action="{{ route('login') }}"
                class="space-y-4"
            >
                @csrf

                {{-- Nama (Register) --}}
                <div id="nameField" class="hidden">
                    <label class="block text-gray-700 mb-2">Nama Lengkap</label>
                    <div class="relative">
                        {{-- User Icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400">
                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>

                        <input
                            type="text"
                            name="name"
                            placeholder="Masukkan nama lengkap"
                            class="w-full pl-11 pr-4 py-3 border border-gray-300 rounded-lg
                                focus:ring-2 focus:ring-green-500 focus:outline-none"
                        >
                    </div>
                </div>


                {{-- Email --}}
                <div>
                    <label class="block text-gray-700 mb-2">Email</label>
                    <div class="relative">
                        {{-- Mail Icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400">
                            <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path>
                            <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                        </svg>

                        <input
                            type="email"
                            name="email"
                            required
                            placeholder="nama@email.com"
                            class="w-full pl-11 pr-4 py-3 border border-gray-300 rounded-lg
                                focus:ring-2 focus:ring-green-500 focus:outline-none"
                        >
                    </div>
                </div>


                {{-- Password --}}
                <div>
                    <label class="block text-gray-700 mb-2">Password</label>
                    <div class="relative">
                        {{-- Lock Icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400">
                            <rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                        </svg>

                        <input
                            id="passwordInput"
                            type="password"
                            name="password"
                            required
                            placeholder="Masukkan password"
                            oninput="validatePasswordMatch()"
                            class="w-full pl-11 pr-11 py-3 border border-gray-300 rounded-lg
                                focus:ring-2 focus:ring-green-500 focus:outline-none"
                        >

                        {{-- Toggle Eye --}}
                        <button
                            type="button"
                            onclick="togglePassword()"
                            class="absolute right-3 top-1/2 -translate-y-1/2
                                text-gray-400 hover:text-green-600 transition cursor-pointer"
                        >
                            {{-- Eye Open --}}
                            <svg id="eyeOpen" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="w-5 h-5">
                                <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>

                            {{-- Eye Closed --}}
                            <svg id="eyeClosed" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="w-5 h-5 hidden">
                                <path d="M10.733 5.076a10.744 10.744 0 0 1 11.205 6.575"></path>
                                <path d="M14.084 14.158a3 3 0 0 1-4.242-4.242"></path>
                                <path d="M17.479 17.499a10.75 10.75 0 0 1-15.417-5.151"></path>
                                <path d="m2 2 20 20"></path>
                            </svg>
                        </button>
                    </div>
                </div>


                {{-- Confirm Password --}}
                <div id="confirmPasswordField" class="hidden">
                    <label class="block text-gray-700 mb-2">Konfirmasi Password</label>
                    <div class="relative">
                        {{-- Lock Icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400">
                            <rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                        </svg>

                        <input
                            id="confirmPasswordInput"
                            type="password"
                            name="password_confirmation"
                            placeholder="Konfirmasi password"
                            class="w-full pl-11 pr-11 py-3 border border-gray-300 rounded-lg
                                focus:ring-2 focus:ring-green-500 focus:outline-none"
                            oninput="validatePasswordMatch()"
                        />


                        {{-- Toggle Eye --}}
                        <button
                            type="button"
                            onclick="toggleConfirmPassword()"
                            class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-green-600 cursor-pointer"
                        >
                            {{-- Eye --}}
                            <svg id="confirmEyeOpen" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="w-5 h-5">
                                <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>

                            {{-- Eye Off --}}
                            <svg id="confirmEyeClosed" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="w-5 h-5 hidden">
                                <path d="M10.733 5.076a10.744 10.744 0 0 1 11.205 6.575"></path>
                                <path d="M14.084 14.158a3 3 0 0 1-4.242-4.242"></path>
                                <path d="M17.479 17.499a10.75 10.75 0 0 1-15.417-5.151"></path>
                                <path d="m2 2 20 20"></path>
                            </svg>
                        </button>
                    </div>

                    {{-- Error --}}
                    <p id="passwordError" class="hidden text-sm text-red-600 mt-2">
                        Password tidak sama
                    </p>
                </div>


                <button
                    id="authSubmit"
                    class="w-full bg-green-700 text-white py-3 rounded-lg hover:bg-green-800 cursor-pointer"
                >
                    Masuk
                </button>
            </form>

            {{-- Toggle --}}
            <div class="mt-6 text-center">
                <p class="text-gray-600 text-center">
                    <span id="authToggleText">Belum punya akun?</span>
                    <button
                        id="authToggleButton"
                        type="button"
                        onclick="toggleAuthMode()"
                        class="text-green-700 hover:text-green-800 ml-1 cursor-pointer font-medium"
                    >
                        Daftar di sini
                    </button>
                </p>

            </div>

            {{-- Info Register --}}
            <div
                id="registerInfo"
                class="hidden mt-6 p-4 bg-blue-50 rounded-lg border border-blue-200"
            >
                <p class="text-blue-800 text-sm">
                    Dengan mendaftar, Anda menyetujui syarat dan ketentuan BinaFisik
                </p>
            </div>
        </div>
    </div>
</div>
