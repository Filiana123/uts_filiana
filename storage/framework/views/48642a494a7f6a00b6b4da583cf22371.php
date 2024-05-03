
<?php $__env->startSection('content'); ?>
    <div>
        
        <div class ="flex min-h-full items-stretch justify-center text-center md:items-center md:px-2
            lg:px-4">

            <div class="flex w-full transform text-left text-base transition md:my-8 md:max-w-2xl md:px-4 lg:max-w-4xl">
                <div
                    class="relative flex w-full items-center overflow-hidden bg-white px-4 pb-8 pt-14 shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">
                    <a type="button" href="/products"
                        class="absolute right-4 top-4 text-gray-400 hover:text-gray-500 sm:right-6 sm:top-8 md:right-6 md:top-6 lg:right-8 lg:top-8">
                        <span class="sr-only">Close</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </a>

                    <div class="grid w-full grid-cols-1 items-start gap-x-6 gap-y-8 sm:grid-cols-12 lg:gap-x-8">
                        <div
                            class="aspect-h-3 aspect-w-2 overflow-hidden rounded-lg bg-gray-100 sm:col-span-4 lg:col-span-5">
                            <img src="<?php echo e(asset('storage/products/' . $product->image)); ?>"
                                alt="storage/products/<?php echo e($product->image); ?>" class="object-cover object-center">
                        </div>
                        <div class="sm:col-span-8 lg:col-span-7">
                            <h2 class="text-2xl font-bold text-gray-900 sm:pr-12"><?php echo e($product->name); ?></h2>

                            <section aria-labelledby="information-heading" class="mt-2">

                                <p class="text-2xl text-gray-900">
                                    <?php echo e('Rp ' . number_format($product->price, 2, ',', '.')); ?></p>
                                <p style=" margin-top:10pt"><?php echo e($product->description); ?></p>
                                
                                <!-- Reviews -->

                            </section>
                            <section aria-labelledby="options-heading" class="mt-10">

                                <form>
                                    <!-- Colors -->


                                    <!-- Sizes -->
                                    <div class="mt-10">
                                        <div class="flex items-center justify-between">
                                            <h4 class="text-sm font-medium text-gray-900">Stock</h4>
                                            <a class="text-sm font-medium text-indigo-600 hover:text-indigo-500"
                                                style="text-decoration:none"><?php echo e($product->stock); ?> <?php echo e($product->satuan); ?>

                                            </a>

                                        </div>
                                    </div>

                                    <a href="<?php echo e(route('products.edit', $product->id)); ?>" style="text-decoration:none"
                                        class="mt-6 flex w-full items-center justify-center rounded-md border border-transparent bg-yellow-400 px-8 py-3 text-base font-medium text-black hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2">EDIT</a>

                                </form>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MIG12998\Herd\uts_filiana\resources\views/products/show.blade.php ENDPATH**/ ?>