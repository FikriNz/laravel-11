<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="mx-auto max-w-7xl grid grid-cols-1 lg:grid-cols-3 gap-x-8">
        <!-- Single Post -->
        <div class="lg:col-span-2">
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
                        <p class="text-gray-500">{{ $post['author'] }} | <time datetime="{{ $post->created_at }}"
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
            <!--
Install the "flowbite-typography" NPM package to apply styles and format the article content:

URL: https://flowbite.com/docs/components/typography/
-->

            <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
                <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
                    <article
                        class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                        <header class="mb-4 lg:mb-6 not-format">
                            <address class="flex items-center mb-6 not-italic">
                                <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                                    <img class="mr-4 w-16 h-16 rounded-full"
                                        src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                        alt="Jese Leos">
                                    <div>
                                        <a href="#" rel="author"
                                            class="text-xl font-bold text-gray-900 dark:text-white">Jese Leos</a>
                                        <p class="text-base text-gray-500 dark:text-gray-400">Graphic Designer, educator
                                            & CEO Flowbite</p>
                                        <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate
                                                datetime="2022-02-08" title="February 8th, 2022">Feb. 8, 2022</time></p>
                                    </div>
                                </div>
                            </address>
                            <h1
                                class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                                Best practices for successful prototypes</h1>
                        </header>
                        <p>Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This
                            way,
                            you can think things through before committing to an actual design project.</p>
                    </article>
                </div>
            </main>

            <aside aria-label="Related articles" class="py-8 lg:py-24 bg-gray-50 dark:bg-gray-800">
                <div class="px-4 mx-auto max-w-screen-xl">
                    <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white">Related articles</h2>
                    <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4">
                        <article class="max-w-xs">
                            <a href="#">
                                <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png"
                                    class="mb-5 rounded-lg" alt="Image 1">
                            </a>
                            <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                                <a href="#">Our first office</a>
                            </h2>
                            <p class="mb-4 text-gray-500 dark:text-gray-400">Over the past year, Volosoft has undergone
                                many changes! After months of preparation.</p>
                            <a href="#"
                                class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                                Read in 2 minutes
                            </a>
                        </article>
                        <article class="max-w-xs">
                            <a href="#">
                                <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-2.png"
                                    class="mb-5 rounded-lg" alt="Image 2">
                            </a>
                            <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                                <a href="#">Enterprise design tips</a>
                            </h2>
                            <p class="mb-4  text-gray-500 dark:text-gray-400">Over the past year, Volosoft has
                                undergone many changes! After months of preparation.</p>
                            <a href="#"
                                class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                                Read in 12 minutes
                            </a>
                        </article>
                        <article class="max-w-xs">
                            <a href="#">
                                <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-3.png"
                                    class="mb-5 rounded-lg" alt="Image 3">
                            </a>
                            <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                                <a href="#">We partnered with Google</a>
                            </h2>
                            <p class="mb-4  text-gray-500 dark:text-gray-400">Over the past year, Volosoft has
                                undergone many changes! After months of preparation.</p>
                            <a href="#"
                                class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                                Read in 8 minutes
                            </a>
                        </article>
                        <article class="max-w-xs">
                            <a href="#">
                                <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-4.png"
                                    class="mb-5 rounded-lg" alt="Image 4">
                            </a>
                            <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                                <a href="#">Our first project with React</a>
                            </h2>
                            <p class="mb-4  text-gray-500 dark:text-gray-400">Over the past year, Volosoft has
                                undergone many changes! After months of preparation.</p>
                            <a href="#"
                                class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                                Read in 4 minutes
                            </a>
                        </article>
                    </div>
                </div>
            </aside>

            <section class="bg-white dark:bg-gray-900">
                <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                    <div class="mx-auto max-w-screen-md sm:text-center">
                        <h2
                            class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                            Sign up for our newsletter</h2>
                        <p class="mx-auto mb-8 max-w-2xl  text-gray-500 md:mb-12 sm:text-xl dark:text-gray-400">Stay up
                            to date with the roadmap progress, announcements and exclusive discounts feel free to sign
                            up with your email.</p>
                        <form action="#">
                            <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
                                <div class="relative w-full">
                                    <label for="email"
                                        class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email
                                        address</label>
                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                            <path
                                                d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                            <path
                                                d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                                        </svg>
                                    </div>
                                    <input
                                        class="block p-3 pl-9 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Enter your email" type="email" id="email" required="">
                                </div>
                                <div>
                                    <button type="submit"
                                        class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border cursor-pointer bg-primary-700 border-primary-600 sm:rounded-none sm:rounded-r-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Subscribe</button>
                                </div>
                            </div>
                            <div
                                class="mx-auto max-w-screen-sm text-sm text-left text-gray-500 newsletter-form-footer dark:text-gray-300">
                                We care about the protection of your data. <a href="#"
                                    class="font-medium text-primary-600 dark:text-primary-500 hover:underline">Read our
                                    Privacy Policy</a>.</div>
                        </form>
                    </div>
                </div>
            </section>

        </div>

        <!-- Rekomendasi Artikel -->
        <div class="lg:col-span-1">
            <div class="space-y-8">
                <article
                    class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <a href="">
                            <span
                                class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                Tutorial
                            </span>
                        </a>
                        <span class="text-sm">{{ $post->created_at->diffForHumans() }}</span>
                    </div>
                    <h3 class="mb-2 text-lg font-semibold leading-6 tracking-tight text-gray-900 dark:text-white"><a
                            href="/posts/{{ $post['slug'] }}">{{ $post['title'] }}</a></h3>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ Str::limit($post['body'], 200) }}
                    </p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-3">
                            <img class="w-7 h-7 rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                alt="Jese Leos avatar" />
                            <span class="font-medium dark:text-white text-sm">
                                {{ $post['author'] }}
                            </span>
                        </div>
                        <a href="/posts/{{ $post['slug'] }}"
                            class="inline-flex items-center text-sm font-medium text-primary-600 dark:text-primary-500 hover:underline">
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
            </div>
        </div>
    </div>
</x-layout>
