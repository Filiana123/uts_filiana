<div>
    <div
        class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
        <img src="storage/products/{{ $image }}" alt="Product Image"
            class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        {{-- <img src=""> --}}
    </div>
    <div class="mt-4 flex justify-between">
        <div>
            <h3 class="text-sm text-gray-700">
                <a>
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    {{ $name }}
                </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">{{ $price }}</p>

        </div>

        <p class="text-sm font-medium text-gray-900">{{ $stock }} {{ $satuan }}</p>
        {{ $slot }}

    </div>


</div>
