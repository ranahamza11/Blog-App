<x-dropdown>

    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">
            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}
            <x-icon class="pointer-events-none" name="down-arrow" style="right: 12px;"/>
        </button>
    </x-slot>

    <x-dropdown-link
        href="/?{{ http_build_query(request()->except('category', 'page')) }}"
        :active="request('category') === null"
        >
        All
    </x-dropdown-link>

    @foreach ($categories as $category)
        <x-dropdown-link
                href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}"
            :active="request('category') === $category->slug" >

            {{ ucwords($category->name) }}
        </x-dropdown-link>
    @endforeach
</x-dropdown>
