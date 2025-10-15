<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>

    <div class="mx-10 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($blogs as $blog)
            <article class="h-full flex flex-col">
                <div
                    class="bg-gray-800/50 border border-gray-700 rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl flex flex-col h-full">
                    <div class="h-40 overflow-hidden rounded-t-lg flex justify-center items-center">
                        <img src="{{ asset('img/Laravel.svg') }}"
                            class="w-full h-full object-cover transition-transform duration-600 ease-in-out hover:scale-105" />
                    </div>
                    <div class="p-6 flex flex-col flex-grow justify-between">
                        <div>
                            <div class="flex justify-between items-center mb-4 text-gray-500">
                                <a href="/blogs/category/{{$blog->category}}"
                                    class="!bg-{{ $blog['color'] }}-100 !text-{{$blog['color']}}-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-{{$blog['color']}}-200 dark:text-{{$blog->color}}-800">
                                    {{$blog->category}}
                                </a>
                                <span class="text-sm">{{ $blog->created_at->diffForHumans() }}</span>
                            </div>
                            <a href="/blogs/{{$blog['slug']}}">
                                <h2 class="text-xl text-gray-200 hover:text-gray-400 font-bold mb-2">{{$blog['title']}}</h2>
                            </a>
                            <p class="text-gray-500">{{ Str::limit($blog['content'], 100) }}</p>
                        </div>
                        <div class="flex items-center mt-4 space-x-3">
                            <img class="w-7 h-7 rounded-full" src="{{ asset('img/amel.JPG') }}" alt="Avatar" />
                            <a href="/blogs/auth/{{$blog->auth->username}}"
                                class="font-medium dark:text-gray-200">{{$blog->auth->username}}</a>
                        </div>
                        <div class="mt-4 text-center">
                            <a href="/blogs/{{$blog['slug']}}"
                                class="hover:underline inline-block px-4 py-2 rounded-md text-red-600 hover:text-red-700 text-sm font-medium">Read
                                More &raquo;
                            </a>
                        </div>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
</x-layout>