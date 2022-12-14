@props(['posts'])

<x-post-main-container :post="$posts[0]" />

@if($posts->count() > 1)
    <div class="lg:grid lg:grid-cols-6">
        @foreach ($posts->skip(1) as $post)
            <x-post-container
            :post="$post"
            class="{{ $loop->index < 2 ? 'col-span-3' : 'col-span-2'  }}" />
        @endforeach
    </div>
@endif
