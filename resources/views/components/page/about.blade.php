<x-layout>
    {{-- Slot Title --}}
    <x-slot:title>{{ $title }}</x-slot:title>

    <div>
        {{-- Container --}}
        <div class="container mx-auto px-6 text-center">

            {{-- Header --}}
            <h1 class="text-4xl font-bold text-white mb-5 hover:text-red-500">
                About Laravel 12
            </h1>

            {{-- Description --}}
            <p class="text-gray-200 max-w-3xl mx-auto leading-relaxed mb-10 text-justify">
                <b>Laravel 12</b> adalah versi terbaru dari framework PHP yang populer untuk membangun
                aplikasi web modern dengan arsitektur yang elegan dan efisien. Laravel menyediakan sintaks
                yang ekspresif dan bersih sehingga proses pengembangan menjadi lebih cepat, aman, dan menyenangkan.
            </p>

            {{-- Features Grid --}}
            <div class="grid md:grid-cols-3 gap-8">
                {{-- Feature 1 --}}
                <div
                    class="rounded-2xl p-6 bg-white hover:bg-white/80 text-gray-600 hover:text-gray-900 border border-gray-100 hover:shadow-xl transition">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">⚡ Modern Architecture</h3>
                    <p class="text-sm text-left font-semibold">
                        Laravel 12 mengusung arsitektur MVC yang memisahkan logika bisnis, tampilan, dan data,
                        membuat kode mudah dikelola dan scalable.
                    </p>
                </div>

                {{-- Feature 2 --}}
                <div
                    class="rounded-2xl p-6 bg-white hover:bg-white/80 text-gray-600 hover:text-gray-900 border border-gray-100 hover:shadow-xl transition">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">🔐 Built-in Security</h3>
                    <p class="text-sm text-left font-semibold">
                        Dengan fitur CSRF Protection, hashing password, dan validasi input yang kuat, Laravel 12 menjaga
                        aplikasi tetap aman dari serangan umum.
                    </p>
                </div>

                {{-- Feature 3 --}}
                <div
                    class="p-6 bg-white hover:bg-white/80 text-gray-600 hover:text-gray-900 rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition">
                    <h3 class="text-xl font-semibold mb-2">🚀 Powerful Tools</h3>
                    <p class="text-sm text-left font-semibold">
                        Laravel dilengkapi dengan Eloquent ORM, Blade Template Engine, Artisan CLI, dan dukungan API
                        modern untuk meningkatkan produktivitas developer.
                    </p>
                </div>
            </div>

            {{-- Call-to-Action --}}
            <div class="mt-12">
                <a href="https://laravel.com" target="_blank"
                    class="inline-block px-6 py-3 bg-red-500 text-white rounded-full font-medium hover:bg-red-400 transition">
                    Pelajari Lebih Lanjut di Laravel.com
                </a>
            </div>

        </div>
    </div>
</x-layout>