<x-layout>
    {{-- Slot Title --}}
    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- Grid Blog --}}
    <div class="mx-10 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($blogs->take(6) as $blog)
            <article>
                <div
                    class="bg-gray-800/50 border border-gray-700 rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition h-full flex flex-col">

                    {{-- Thumbnail --}}
                    <div class="h-40 overflow-hidden rounded-lg shadow-lg flex justify-center items-center">
                        <img src="{{ asset('img/Laravel.svg') }}"
                            class="transition-transform duration-600 ease-in-out hover:h-full w-full hover:scale-80"
                            alt="{{ $blog->title }} thumbnail" />
                    </div>

                    {{-- Blog Content --}}
                    <div class="p-6 flex flex-col flex-grow">

                        {{-- Category & Date --}}
                        <div class="flex justify-between items-center mb-5 text-gray-500">
                            <a href="/blogs/category/{{ $blog->category }}"
                                class="!bg-{{ $blog['color'] }}-100 !text-{{ $blog['color'] }}-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-{{ $blog['color'] }}-200 dark:text-{{ $blog['color'] }}-800">
                                {{ $blog->category }}
                            </a>
                            <span class="text-sm">{{ $blog->created_at->diffForHumans() }}</span>
                        </div>

                        {{-- Blog Title --}}
                        <a href="/blogs/{{ $blog->slug }}">
                            <h2 class="text-xl text-gray-200 hover:text-gray-400 font-bold mb-2">{{ $blog->title }}</h2>
                        </a>

                        {{-- Blog Excerpt --}}
                        <p class="text-gray-500 flex-grow">{{ Str::limit($blog->content, 100) }}</p>

                        {{-- Author Info --}}
                        <div class="flex items-center space-x-4 mt-3">
                            <img class="w-7 h-7 rounded-full" src="{{ asset('img/amel.JPG') }}"
                                alt="{{ $blog->auth->username }} avatar" />
                            <a href="/blogs/auth/{{ $blog->auth->username }}" class="font-medium dark:text-gray-200">
                                {{ $blog->auth->username }}
                            </a>
                        </div>

                        {{-- Read More Button --}}
                        <div class="mt-4 text-center">
                            <a href="/blogs/{{ $blog->slug }}"
                                class="hover:underline inline-block px-4 py-2 rounded-md text-red-600 hover:text-red-700 text-sm font-medium">
                                Read More &raquo;
                            </a>
                        </div>
                    </div>
                </div>
            </article>
        @endforeach
    </div>

    {{-- Tombol Read More Blogs di bawah grid --}}
    <div class="flex justify-center mt-5 mb-14">
        <a href="/blogs/all"
            class="px-6 py-3 rounded-lg bg-red-700 hover:bg-red-800 text-white text-lg font-semibold shadow-md transition">
            Read More Blogs →
        </a>
    </div>
</x-layout>