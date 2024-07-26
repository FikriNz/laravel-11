<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section class="py-16 lg:pt-20 md:pt-10">
        <div class="mx-auto max-w-7xl grid grid-cols-1 lg:grid-cols-3 gap-x-8">
            <!-- Single Post -->
            <div class="lg:col-span-2">
                <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white">{{ $title }}</h2>
                {{-- <article
                class="py-8 flex flex-col items-start justify-between p-6 bg-white rounded-lg border border-gray-200 shadow-md">
                <div class="group relative">
                    <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                        <a href="/posts/{{ $post['id'] }}">
                            <span class="absolute inset-0"></span>
                            {{ $post['title'] }}
                        </a>
                    </h3>
                    <div class="flex items-center gap-x-2 text-xs justify-between">
                        <p class="text-gray-500">{{ $post->author->name }} | <time datetime="{{ $post->created_at }}"
                                class="text-gray-500">{{ $post->created_at->format('d F Y') }}</time></p>
                        <a href="#"
                            class="relative z-10 rounded-full bg-blue-300 px-3 py-1.5 font-medium text-gray-200 hover:bg-blue-500">Marketing</a>
                    </div>
                    <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">{{ $post['body'] }}
                    </p>
                </div>
                <a href="/posts" class="pt-3 text-xs font-medium text-blue-500 hover:underline">&laquo; Back to
                    posts</a>
            </article> --}}
                <main class="pt-8 pb-8 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
                    <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
                        <article
                            class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                            <header class="mb-4 lg:mb-6 not-format">
                                <a href="/posts" class="pt-3 text-xs font-medium text-blue-500 hover:underline">&laquo;
                                    Back
                                    to all posts</a>
                                <address class="flex items-center my-6 not-italic">
                                    <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                                        <img class="mr-4 w-16 h-16 rounded-full"
                                            src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                            alt="{{ $post->author->name }}">
                                        <div>
                                            <a href="/posts?author={{ $post->author->username }}" rel="author"
                                                class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->author->name }}</a>
                                            <p class="text-base text-gray-500 dark:text-gray-400 mb-1">
                                                {{ $post->created_at->diffForHumans() }}</p>
                                            <a href="/posts?category={{ $post->category->slug }}">
                                                <span
                                                    class="bg-{{ $post->category->color }}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                                    {{ $post->category->name }}
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </address>
                                <h1
                                    class="mb-4 text-lg font-bold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                                    {{ $post['title'] }}</h1>
                            </header>
                            <p>{{ $post['body'] }}</p>
                        </article>
                    </div>
                </main>

            </div>

            <!-- Rekomendasi Artikel -->
            <div class="lg:col-span-1">
                <div class="space-y-8">
                    <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white">Related articles</h2>
                    @foreach ($related as $r)
                        <article
                            class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                            <div class="flex justify-between items-center mb-5 text-gray-500">
                                <a href="/posts?category={{ $r->category->slug }}">
                                    <span
                                        class="bg-{{ $r->category->color }}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                        {{ $r->category->name }}
                                    </span>
                                </a>
                                <span class="text-sm">{{ $r->created_at->diffForHumans() }}</span>
                            </div>
                            <h3
                                class="mb-2 text-lg font-semibold leading-6 tracking-tight text-gray-900 dark:text-white">
                                <a href="/posts/{{ $r->slug }}">{{ $r->title }}</a>
                            </h3>
                            <p class="mb-5 font-medium text-sm text-gray-500 dark:text-gray-400">
                                {{ Str::limit($r->body, 60) }}
                            </p>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center space-x-3">
                                    <img class="w-7 h-7 rounded-full"
                                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                        alt="Jese Leos avatar" />
                                    <span class="font-medium dark:text-white text-xs">
                                        <a
                                            href="/posts?author={{ $post->author->username }}">{{ $r->author->name }}</a>
                                    </span>
                                </div>
                                <a href="/posts/{{ $r->slug }}"
                                    class="inline-flex items-center text-xs font-medium text-primary-600 dark:text-primary-500 hover:underline">
                                    Read more
                                    <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</x-layout>
