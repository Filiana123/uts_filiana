<a {{ $attributes }}
    class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white block' }}
    block rounded-md px-3 py-2 text-base font-medium"
    style="text-decoration:none" aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
