@if(session()->has('success'))
    <div x-data="{ show: true }"
        x-init="setTimeout(() => show = false, 4000)"
        x-show="show"
        class="fixed bg-blue-500 rounded-xl py-2 px-4 text-white bottom-2 right-2 text-sm">
        <p>{{ session('success') }}</p>
    </div>
@endif
