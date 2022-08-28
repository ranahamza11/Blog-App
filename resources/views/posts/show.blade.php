<x-layout>

    <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
        <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
            <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="" class="rounded-xl">

                <p class="mt-4 block text-gray-400 text-xs">
                    Published <time>{{ $post->created_at->diffForHumans() }}</time>
                </p>

                <div class="flex items-center lg:justify-center text-sm mt-4">
                    <img src="/images/lary-avatar.svg" alt="Lary avatar">
                    <div class="ml-3 text-left">
                        <h5 class="font-bold">
                            <a href="/?author={{ $post->author->username }}">
                                {{ $post->author->name }}
                            </a>
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-span-8">
                <div class="hidden lg:flex justify-between mb-6">
                    <a href="/"
                        class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                        <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                            <g fill="none" fill-rule="evenodd">
                                <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                </path>
                                <path class="fill-current"
                                    d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                </path>
                            </g>
                        </svg>

                        Back to Posts
                    </a>

                    <div class="space-x-2">
                        <a href="/categories/{{ $post->category->slug }}"
                            class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                            style="font-size: 10px">{{ $post->category->name }}</a>
                    </div>
                </div>

                <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                    {{ $post->title }}
                </h1>

                <div class="space-y-4 lg:text-lg leading-loose">
                    {!! $post->body !!}
                </div>
            </div>

            <section class="col-span-8 col-start-5 mt-8 space-y-4">

                @auth
                    <form method="POST" action="/posts/{{ $post->slug }}/comments" class="border border-gray-200 p-6 rounded-xl">
                        @csrf

                        <header class="flex items-center space-x-4">
                            <img src="https://i.pravatar.cc/60?u=2" alt="random img" width="40" height="40" class="rounded-full">
                            <h2>Wanna Participate?</h2>
                        </header>

                        <div class="mt-4">
                            <textarea name="body" id="" rows="5" class="w-full text-sm focus:outline-none focus:ring" placeholder="Want to say somenthing?" required></textarea>
                            @error('body')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex border-t mt-6 pt-6 border-gray-200 justify-end">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-8 py-2 rounded-2xl text-sm uppercase font-semibold">Post</button>
                        </div>


                    </form>
                @else
                    <p class="">
                        <a href="/register" class="hover:underline font-semibold">Register</a> or <a href="/login" class="hover:underline font-semibold">Log In</a> to leave a comment.
                    </p>
                @endauth


                @foreach ($post->comments as $comment)
                    <x-post-comment :comment="$comment"/>
                @endforeach

            </section>
        </article>
    </main>


    {{-- <article>
        <h1>
            {{ $post->title }}
        </h1>

        <p>
            By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }} </a>
        </p>

        <div>
            {!! $post->body !!}
        </div>
    </article>

    <a href="/">Go Back</a> --}}
</x-layout>
