<x-layout>
    {{-- Slot Title --}}
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="grid gap-8">
        <article>

            {{-- ====================== --}}
            {{-- Single Blog Detail --}}
            {{-- ====================== --}}
            @isset($blog)
                <div class="lg:mx-50 sm:mx-10 bg-gray-800/50 border-gray-700 rounded-2xl flex flex-col">
                    <div class="p-10 text-gray-300 text-center">

                        {{-- Category & Date --}}
                        <div class="flex justify-between items-center mb-5">
                            <a href="/blogs/category/{{ $blog->category }}"
                                class="text-m font-bold inline-flex items-center px-2.5 py-0.5 rounded bg-{{ $blog->color }}-100 text-{{ $blog->color }}-800 hover:bg-{{ $blog->color }}-200">
                                {{ $blog->category }}
                            </a>
                            <span class="text-sm text-gray-500">{{ $blog->created_at->diffForHumans() }}</span>
                        </div>

                        {{-- Thumbnail --}}
                        <div class="flex justify-center mb-5">
                            <img src="{{ asset('img/Laravel.svg') }}"
                                class="transition-transform duration-600 ease-in-out hover:scale-105 lg:w-15"
                                alt="{{ $blog->title }} thumbnail" />
                        </div>

                        {{-- Title --}}
                        <h2 class="text-2xl text-white font-bold mb-2">{{ $blog->title }}</h2>

                        {{-- Author Info --}}
                        <div class="text-center mb-4">
                            <a href="/blogs/auth/{{ $blog->auth->username }}" class="text-gray-400 hover:text-white">
                                By {{ $blog->auth->name }}
                            </a> |
                            <a href="mailto:{{ $blog->auth->email }}" class="text-gray-400 hover:text-white">
                                {{ $blog->auth->email }}
                            </a>
                        </div>

                        {{-- Content --}}
                        <p class="text-justify pb-4 text-gray-300 flex-grow">{{ $blog->content }}</p>

                        {{-- List Items --}}
                        @foreach ($blog->list as $item)
                            <div class="my-5 text-left">
                                <ul class="space-y-2">
                                    <li
                                        class="text-m font-bold rounded-2xl p-3 bg-{{ $blog->color }}-100 text-{{ $blog->color }}-800 hover:bg-{{ $blog->color }}-200">
                                        {{ $item }}
                                    </li>
                                </ul>
                            </div>
                        @endforeach

                        {{-- Back Button --}}
                        <div class="mt-4">
                            <a href="/blogs"
                                class="inline-block px-4 py-2 rounded-md bg-red-600 hover:bg-red-700 text-white text-sm font-medium">
                                Back To Blogs
                            </a>
                        </div>
                    </div>
                </div>
            @endisset

            {{-- ====================== --}}
            {{-- Blogs by User --}}
            {{-- ====================== --}}
            @isset($user)
                <div class="grid gap-6 grid-cols-[repeat(auto-fit,minmax(300px,1fr))]">
                    @foreach ($user as $blogs)
                        <div
                            class="bg-gray-800/50 border-gray-700 m-5 rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl flex flex-col">
                            <div class="p-10 text-gray-300 text-center">

                                {{-- Category & Date --}}
                                <div class="flex justify-between items-center mb-5">
                                    <a href="/blogs/category/{{ $blogs->category }}"
                                        class="text-m font-bold inline-flex items-center px-2.5 py-0.5 rounded bg-{{ $blogs->color }}-100 text-{{ $blogs->color }}-800 hover:bg-{{ $blogs->color }}-200">
                                        {{ $blogs->category }}
                                    </a>
                                    <span class="text-sm text-gray-500">{{ $blogs->created_at->diffForHumans() }}</span>
                                </div>

                                {{-- Thumbnail --}}
                                <div class="flex justify-center mb-5">
                                    <img src="{{ asset('img/Laravel.svg') }}"
                                        class="transition-transform duration-600 ease-in-out hover:h-full lg:w-15 hover:scale-120"
                                        alt="{{ $blogs->title }} thumbnail" />
                                </div>

                                {{-- Title --}}
                                <h2 class="text-2xl text-white font-bold mb-2">{{ $blogs->title }}</h2>

                                {{-- Author & Meta --}}
                                <p class="text-gray-400 text-sm mb-4">
                                    <a href="mailto:{{ $blogs->auth->email }}"
                                        class="hover:text-white">{{ $blogs->auth->email }}</a>
                                    • <a href="/blogs/category/{{ $blogs->category }}"
                                        class="hover:text-white">{{ $blogs->category }}</a>
                                    • {{ $blogs->created_at->locale('id')->diffForHumans() }}
                                </p>

                                {{-- Excerpt --}}
                                <p class="text-justify pb-4 text-gray-300 flex-grow">{{ Str::limit($blogs->content, 200) }}</p>

                                {{-- List Items --}}
                                @foreach (collect($blogs->list)->take(2) as $item)
                                    <div class="my-5 text-left">
                                        <ul class="space-y-2">
                                            <li
                                                class="text-m font-bold rounded-2xl p-3 bg-{{ $blogs->color }}-100 text-{{ $blogs->color }}-800 hover:bg-{{ $blogs->color }}-200">
                                                {{ $item }}
                                            </li>
                                        </ul>
                                    </div>
                                @endforeach

                                {{-- More Button --}}
                                <div class="mt-4">
                                    <a href="/blogs/{{ $blogs->slug }}"
                                        class="inline-block px-4 py-2 rounded-md bg-red-600 hover:bg-red-700 text-white text-sm font-medium">
                                        More To Blogs
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endisset

            {{-- ====================== --}}
            {{-- Blogs by Category --}}
            {{-- ====================== --}}
            @isset($categorys)
                <div class="grid gap-6 grid-cols-[repeat(auto-fit,minmax(300px,1fr))]">
                    @foreach ($categorys as $category)
                        <div
                            class="bg-gray-800/50 border-gray-700 m-5 rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl flex flex-col">
                            <div class="p-10 text-gray-300 text-center">

                                {{-- Date --}}
                                <div class="flex justify-end items-center mb-5">
                                    <span class="text-sm text-gray-500">{{ $category->created_at->diffForHumans() }}</span>
                                </div>

                                {{-- Thumbnail --}}
                                <div class="flex justify-center mb-5">
                                    <img src="{{ asset('img/Laravel.svg') }}"
                                        class="transition-transform duration-600 ease-in-out hover:h-full lg:w-15 hover:scale-80"
                                        alt="{{ $category->title }} thumbnail" />
                                </div>

                                {{-- Title --}}
                                <h2 class="text-2xl text-white font-bold mb-2">{{ $category->title }}</h2>

                                {{-- Author --}}
                                <p class="text-gray-400 text-sm mb-4">
                                    By <a href="/blogs/auth/{{ $category->auth->username }}"
                                        class="hover:text-white">{{ $category->auth->name }}</a> |
                                    <a href="mailto:{{ $category->auth->email }}"
                                        class="hover:text-white">{{ $category->auth->email }}</a>
                                </p>

                                {{-- Excerpt --}}
                                <p class="text-justify pb-4 text-gray-300 flex-grow">{{ Str::limit($category->content, 200) }}
                                </p>

                                {{-- List Items --}}
                                @foreach ($category->list as $item)
                                    <div class="my-5 text-left">
                                        <ul class="space-y-2">
                                            <li
                                                class="text-m font-bold rounded-2xl p-3 bg-{{ $category->color }}-100 text-{{ $category->color }}-800 hover:bg-{{ $category->color }}-200">
                                                {{ $item }}
                                            </li>
                                        </ul>
                                    </div>
                                @endforeach

                                {{-- More Button --}}
                                <div class="mt-4">
                                    <a href="/blogs/{{ $category->slug }}"
                                        class="inline-block px-4 py-2 rounded-md bg-red-600 hover:bg-red-700 text-white text-sm font-medium">
                                        More To Blogs
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endisset

        </article>
    </div>
</x-layout>
