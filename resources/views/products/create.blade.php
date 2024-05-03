@extends('layout')
@section('content')
    <div class="relative z-10" role="dialog" aria-modal="true">
        <div class="fixed inset-0 hidden bg-gray-500 bg-opacity-75 transition-opacity md:block">
        </div>
        <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
            <div
                class ="flex min-h-full items-stretch justify-center text-center md:items-center md:px-2
            lg:px-4">
                <div class="flex w-full transform text-left text-base transition md:my-8 md:max-w-2xl md:px-4 lg:max-w-4xl">
                    <div
                        class="relative flex w-full items-center overflow-hidden bg-white px-4 pb-8 pt-14 shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">
                        <a type="button" href="{{ route('products.index') }}" style="text-decoration:none"
                            class="absolute right-4 top-4 text-gray-400 hover:text-gray-500 sm:right-6 sm:top-8 md:right-6 md:top-6 lg:right-8 lg:top-8">
                            <span class="sr-only">Close</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </a>
                        <div class="card border-0 shadow-sm rounded" x-data="{ selectedSatuanId: 0 }">
                            <div class="card-body">

                                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">

                                    @csrf

                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">IMAGE</label>
                                        <input type="file" class="form-control @error('image') is-invalid @enderror"
                                            name="image">

                                        <!-- error message untuk image -->
                                        @error('image')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Nama</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" value="{{ old('name') }}" placeholder="Masukkan Nama Product">

                                        <!-- error message untuk name -->
                                        @error('name')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Description</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="5"
                                            placeholder="Masukkan Description Product">{{ old('description') }}</textarea>

                                        <!-- error message untuk description -->
                                        @error('description')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label class="font-weight-bold">PRICE</label>
                                                <input type="number"
                                                    class="form-control @error('price') is-invalid @enderror" name="price"
                                                    value="{{ old('price') }}" placeholder="Masukkan Harga Product">

                                                <!-- error message untuk price -->
                                                @error('price')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label class="font-weight-bold">STOCK</label>
                                                <input type="number"
                                                    class="form-control @error('stock') is-invalid @enderror" name="stock"
                                                    value="{{ old('stock') }}" placeholder="Masukkan Stock Product">

                                                <!-- error message untuk stock -->
                                                @error('stock')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label class="font-weight-bold">ID Satuan</label>


                                                {{-- <p>{{ $kode }}</p> --}}
                                                {{-- <p x-text="kode"></p> --}}
                                                <select name="kode_satuan" id="kode_satuan" x-model="selectedSatuanId"
                                                    class="h-10 w-40 origin-top-right rounded-md bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                                                    <option value="">Select</option>
                                                    @forelse ($satuans as $item)
                                                        <option value="{{ $item->id }}">

                                                            {{ $item->satuan }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <p x-text="selectedSatuanId"></p>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit"
                                        class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                        SAVE</button>
                                    <button type="reset"
                                        class="inline-flex items-center rounded-md bg-yellow-300 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-yellow-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-300">RESET</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
@endsection