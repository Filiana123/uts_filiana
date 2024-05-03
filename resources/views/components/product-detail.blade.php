<div class ="flex min-h-full items-stretch justify-center text-center md:items-center md:px-2
            lg:px-4">
    <!--
          Modal panel, show/hide based on modal state.
  
          Entering: "ease-out duration-300"
            From: "opacity-0 translate-y-4 md:translate-y-0 md:scale-95"
            To: "opacity-100 translate-y-0 md:scale-100"
          Leaving: "ease-in duration-200"
            From: "opacity-100 translate-y-0 md:scale-100"
            To: "opacity-0 translate-y-4 md:translate-y-0 md:scale-95"
        -->
    <div class="flex w-full transform text-left text-base transition md:my-8 md:max-w-2xl md:px-4 lg:max-w-4xl">
        <div
            class="relative flex w-full items-center overflow-hidden bg-white px-4 pb-8 pt-14 shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">


            <button type="button" @click="isOpen = !isOpen"
                class="absolute right-4 top-4 text-gray-400 hover:text-gray-500 sm:right-6 sm:top-8 md:right-6 md:top-6 lg:right-8 lg:top-8">
                <span class="sr-only">Close</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <div class="grid w-full grid-cols-1 items-start gap-x-6 gap-y-8 sm:grid-cols-12 lg:gap-x-8">
                <div class="aspect-h-3 aspect-w-2 overflow-hidden rounded-lg bg-gray-100 sm:col-span-4 lg:col-span-5">
                    <img :src="'storage/products/' + image" alt="image" class="object-cover object-center">
                </div>
                <div class="sm:col-span-8 lg:col-span-7" x-data="{ productId: idProduct }" x-init="$watch('idProduct', value => {
                    // Update childData when parentData changes
                    productId = value;
                })">
                    <h2 class="text-2xl font-bold text-gray-900 sm:pr-12" x-text="title"></h2>

                    <section aria-labelledby="information-heading" class="mt-2">

                        <p class="text-2xl text-gray-900" x-text="price"></p>
                        <p style=" margin-top:10pt" x-text="description"></p>
                        <p style=" margin-top:10pt" x-text="idProduct"></p>
                        <!-- Reviews -->

                    </section>
                    <section aria-labelledby="options-heading" class="mt-10">
                        <h3 id="options-heading" class="sr-only">Product options</h3>

                        <form>
                            <!-- Colors -->


                            <!-- Sizes -->
                            <div class="mt-10">
                                <div class="flex items-center justify-between">
                                    <h4 class="text-sm font-medium text-gray-900">Stock</h4>
                                    <a class="text-sm font-medium text-indigo-600 hover:text-indigo-500"
                                        style="text-decoration:none" x-text="stock+ ' '+satuan">
                                    </a>
                                </div>
                            </div>
                            <a type="button" :href="'/products/' + productId + '/edit'" style="text-decoration:none"
                                class="mt-6 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Edit
                            </a>


                            <!-- <form method="POST" type="button" class="btn btn-danger p-0">
                                {{-- @csrf --}}
                                {{-- @method('DELETE') --}}
                                <button :href="'{{ route('products.edit', '') }}/' + productId" type="submit"
                                    style="text-decoration:none"
                                    class="absolute left-10 top-12 rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>

                                </button>
                            </form> -->


                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
