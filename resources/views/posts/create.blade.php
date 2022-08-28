<x-layout>

    <section class="max-w-md mx-auto py-8">
        <h1 class="text-xl font-bold mb-4 uppercase">Publish New Post</h1>
        <main class="bg-gray-100 border border-gray-300 p-6 rounded-xl">
            <form method="POST" action="/admin/posts" enctype="multipart/form-data">
                @csrf

                <x-form.input name="title"/>
                <x-form.input name="slug"/>
                <x-form.input name="thumbnail" type="file"/>


                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="excerpt">Excerpt</label>
                    <textarea class="border border-gray-400 p-2 w-full" name="excerpt" id="excerpt" required>{{ old('excerpt') }}</textarea>
                    @error('excerpt')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>


                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="body">Body</label>
                    <textarea class="border border-gray-400 p-2 w-full" name="body" id="body" required>{{ old('body') }}</textarea>

                    @error('body')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="category_id">Category</label>
                    <select name="category_id" id="category_id">

                        @foreach (\App\Models\Category::all() as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ ucwords($category->name) }}</option>
                        @endforeach

                    </select>

                    @error('category_id')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button type="submit"
                    class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                    >
                        Publish
                    </button>
                </div>

            </form>


        </main>
    </section>
</x-layout>
