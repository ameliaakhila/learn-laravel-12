<x-layout>
    {{-- Slot Title untuk layout --}}
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="text-gray-200">
        {{-- Header --}}
        <div class="text-center">
            <h1 class="text-3xl font-extrabold tracking-tight">
                <img src="{{ asset('img/Laravel.svg') }}" alt="logo" class="inline px-5 h-10">
                Laravel 12
            </h1>
            <p class="mt-1 text-sm text-gray-400">
                Modern, expressive, and delightful — built for developer joy
            </p>
        </div>

        {{-- Main Content --}}
        <main
            class="bg-gradient-to-br from-gray-850/60 to-gray-900/60 border border-gray-800 rounded-2xl p-8 my-7 mx-15 shadow-2xl">
            <section class="prose prose-invert max-w-none">
                {{-- Kenapa memilih Laravel 12 --}}
                <h2 class="text-2xl text-red-500 font-semibold">Kenapa memilih Laravel 12?</h2>
                <p class="mt-2 text-gray-300">
                    Laravel selalu menjaga keseimbangan antara <strong>kecepatan pengembangan</strong> dan
                    <strong>struktur aplikasi</strong>. Laravel 12 membawa penyempurnaan performa, pengalaman
                    developer yang lebih halus, serta fitur-fitur modern yang membuat membangun aplikasi web menjadi
                    cepat dan menyenangkan.
                </p>

                {{-- Quote --}}
                <blockquote class="border-l-4 border-red-500 pl-4 text-gray-200 mt-4">
                    "Code less, build more. Dengan eloquent yang ekspresif dan utilities yang rapi, kamu akan bisa fokus
                    ke bisnis logikamu — bukan boilerplate."
                </blockquote>

                {{-- Prasyarat --}}
                <h3 class="mt-6 text-xl font-semibold">Prasyarat singkat</h3>
                <ul class="list-disc list-inside text-gray-300">
                    <li>PHP (versi yang kompatibel — cek dokumentasi resmi)</li>
                    <li>Composer</li>
                    <li>Database (MySQL, PostgreSQL, SQLite, dll.)</li>
                    <li>Node.js & npm/yarn (untuk asset build dengan Vite)</li>
                </ul>

                {{-- Langkah Instalasi --}}
                <h3 class="mt-6 text-xl font-semibold">Langkah instalasi cepat</h3>
                <div class="mt-4 grid gap-4">
                    {{-- Step 1 --}}
                    <p class="text-red-400">1. Buat project baru</p>
                    <code class="rounded-lg px-7 py-3 bg-gray-800/60 border border-gray-700 overflow-x-auto text-sm">
                        composer create-project laravel/laravel:^12.0 nama-project
                    </code>

                    {{-- Step 2 --}}
                    <p class="text-red-400">2. Masuk ke folder project</p>
                    <code class="rounded-lg px-7 py-3 bg-gray-800/60 border border-gray-700 overflow-x-auto text-sm">
                        cd nama-project
                    </code>

                    {{-- Step 3 --}}
                    <p class="text-red-400">3. Jalankan server development</p>
                    <code class="rounded-lg px-7 py-3 bg-gray-800/60 border border-gray-700 overflow-x-auto text-sm">
                        php artisan serve
                    </code>

                    {{-- Step 4 --}}
                    <p class="text-red-400">4. Jalankan asset builder (jika menggunakan Vite)</p>
                    <code class="rounded-lg px-7 py-3 bg-gray-800/60 border border-gray-700 overflow-x-auto text-sm">
                        npm install<br>
                        npm run dev
                    </code>

                    {{-- Note --}}
                    <p class="text-gray-300">
                        <span class="font-bold block text-white">Note!</span>
                        Ganti <code>nama-project</code> sesuai nama folder yang ingin digunakan.<br>
                        Untuk konfigurasi database, buka file <code>.env</code> lalu atur koneksi:
                    <pre class="rounded-lg bg-gray-800/60 border border-gray-700 overflow-x-auto text-sm">
    <code>
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=database_name
    DB_USERNAME=root
    DB_PASSWORD=
    </code> </pre>
                    </p>
                </div>

                {{-- Tips Pasca Instalasi --}}
                <h3 class="text-xl font-semibold">Tips singkat setelah instalasi</h3>
                <ol class="list-decimal list-inside text-gray-300">
                    <li>Jalankan <code>php artisan key:generate</code> jika belum otomatis tersetting.</li>
                    <li>Gunakan migration untuk struktur database: <code>php artisan migrate</code>.</li>
                    <li>Aktifkan environment aman untuk produksi: <code>APP_DEBUG=false</code>.</li>
                    <li>Pertimbangkan <em>queues</em> untuk background jobs dan <em>caching</em> untuk performa.</li>
                </ol>

                {{-- Rangkuman --}}
                <div class="mt-6 p-4 rounded-xl bg-gray-800/50 border border-gray-700">
                    <h4 class="text-lg text-red-500 font-semibold">Rangkuman</h4>
                    <p class="text-gray-300 mt-2">
                        Laravel 12 tetap menjunjung developer experience: routing jelas, Eloquent powerful, Blade
                        templates rapi, dan ekosistem kaya (Breeze, Jetstream, Sanctum, Telescope, dll). Mulai cepat,
                        scale aman — dan enjoy the code.
                    </p>
                </div>
            </section>

            {{-- CTA --}}
            <div class="mt-6 flex items-center justify-between">
                <a href="https://laravel.com/docs/12.x"
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-md bg-red-800 border border-gray-700 text-sm font-medium hover:bg-red-800/60">
                    Mulai Membangun
                </a>
            </div>
        </main>
    </div>
</x-layout>
