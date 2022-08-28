@props(['trigger'])
<div class="relative lg:inline-flex bg-gray-100 rounded-xl">

    <div x-data="{show: false}" @click.away="show=false">

        <div @click="show=!show">
            {{ $trigger }}
        </div>


        <div x-show="show" class="py-2 absolute bg-gray-100 w-full mt-2 rounded-xl z-50 max-h-48 overflow-auto" style="display: none">
            {{ $slot  }}
        </div>
    </div>
</div>
