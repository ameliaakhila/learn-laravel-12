<footer class="bg-gray-950 text-gray-300 py-10">
    <div class="container mx-auto px-6 md:px-12 lg:px-24">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            {{-- ! Tentang Laravel 12 --}}
            <div>
                <h3 class="text-white text-xl font-bold mb-4">Tentang Laravel 12</h3>
                <p class="text-gray-400 text-justify text-sm">
                    Laravel 12 adalah framework PHP modern yang memudahkan pengembangan aplikasi web.
                    Laravel menyediakan fitur seperti routing yang fleksibel, Eloquent ORM untuk manajemen database,
                    Blade templating engine untuk tampilan yang bersih, dan integrasi tools seperti queues, jobs, dan
                    events.
                    Dengan Laravel, pengembang dapat membangun aplikasi yang cepat, aman, dan scalable.
                </p>
            </div>

            {{-- ! Dashboard --}}
            <div>
                <h3 class="text-white text-xl font-bold mb-4">Dashboard</h3>
                <ul class="space-y-2 text-gray-400 text-sm">
                    <li><a href="/" class="hover:text-white">Home</a></li>
                    <li><a href="/blogs" class="hover:text-white">Blogs</a></li>
                    <li><a href="/about" class="hover:text-white">About</a></li>
                    <li><a href="/contact" class="hover:text-white">Contact</a></li>
                </ul>
            </div>

            {{-- ! Kontak & Sosial Media --}}
            <div>
                <h3 class="text-white text-xl font-bold mb-4">Kontak</h3>
                <p class="text-gray-400 text-sm mb-2">
                    <a href="mailto:ameliaakhila29@gmail.com" class="hover:text-white">ameliaakhila29@gmail.com</a>
                </p>
                <p class="text-gray-400 text-sm mb-4">
                    <a href="https://wa.me/6288291375357?text=Halo%20Yang%20Mulia%20Ratu" class="hover:text-green-600"
                        target="_blank">
                        +62 882-9137-5357</a>
                </p>
                <div class="flex space-x-4">
                    <a href="#"><i class="fab fa-instagram text-gray-400 hover:text-white"></i></a>
                    <a href="https://www.linkedin.com/in/amelia-akhila-05339622a/" target="_blank"><i
                            class="fab fa-linkedin text-gray-400 hover:text-white"></i></a>
                    <a href="#"><i class="fab fa-github text-gray-400 hover:text-white"></i></a>
                </div>
            </div>

        </div>

        {{-- ! Copyright --}}
        <div class="mt-10 text-center text-gray-500 text-sm">
            &copy; {{ date('Y') }} annezetya. All rights reserved.
        </div>

    </div>
</footer>