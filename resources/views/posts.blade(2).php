<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
        @foreach ($posts as $post)
            <article
                class="py-8 max-screen-md border-b border-grey-300 flex max-w-xl flex-col items-start justify-between">
                <div class="group relative">
                    <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                        <a href="/posts/{{ $post['slug'] }}">
                            <span class="absolute inset-0"></span>
                            {{ $post['title'] }}
                        </a>
                    </h3>
                    <div class="flex items-center gap-x-2 text-xs justify-between">
                        {{-- <p class="text-gray-500">{{ $post['author'] }} | <time datetime="2020-03-16"
                                class="text-gray-500">{{ $post->created_at->diffForHumans() }}</time></p> --}}
                        <p class="text-gray-500">{{ $post['author'] }} | <time datetime="{{ $post->created_at }}"
                                class="text-gray-500">{{ $post->created_at->format('d F Y') }}</time></p>
                        <a href="#"
                            class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
                    </div>
                    <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">{{ Str::limit($post['body'], 350) }}
                    </p>
                </div>

                <a href="/posts/{{ $post['slug'] }}" class="pt-3 text-xs font-medium text-blue-500 hover:underline">Read
                    more
                    &raquo;</a>
                {{-- <div class="relative mt-8 flex items-center gap-x-4">
                    <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="" class="h-10 w-10 rounded-full bg-gray-50">
                    <div class="text-sm leading-6">
                        <p class="font-semibold text-gray-900">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                {{ $post['author'] }}
                            </a>
                        </p>
                        <p class="text-gray-600">Co-Founder / CTO</p>
                    </div>
                </div> --}}
            </article>
        @endforeach
    </div>

</x-layout>
