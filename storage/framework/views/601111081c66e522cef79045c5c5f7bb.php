
<?php $__env->startSection('content'); ?>
    <div class="bg-white" x-data="{ isOpen: false, idProduct: 0, title: 'Hello', price: '', stock: 0, satuan: '', image: 'helg', description: '' }">
        <?php if (isset($component)) { $__componentOriginald10cc4ae8fb44ca782e1d1cc5a480275 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald10cc4ae8fb44ca782e1d1cc5a480275 = $attributes; } ?>
<?php $component = App\View\Components\ProductHeader::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('product-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ProductHeader::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald10cc4ae8fb44ca782e1d1cc5a480275)): ?>
<?php $attributes = $__attributesOriginald10cc4ae8fb44ca782e1d1cc5a480275; ?>
<?php unset($__attributesOriginald10cc4ae8fb44ca782e1d1cc5a480275); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald10cc4ae8fb44ca782e1d1cc5a480275)): ?>
<?php $component = $__componentOriginald10cc4ae8fb44ca782e1d1cc5a480275; ?>
<?php unset($__componentOriginald10cc4ae8fb44ca782e1d1cc5a480275); ?>
<?php endif; ?>

        <div class="relative z-10" role="dialog" aria-modal="true">
            <div x-show="isOpen" class="fixed inset-0 hidden bg-gray-500 bg-opacity-75 transition-opacity md:block"></div>

            <div x-show="isOpen" class="fixed inset-0 z-10 w-screen overflow-y-auto">
                <?php if (isset($component)) { $__componentOriginal7f846b29cd5f30aaa269a9c9cff86b89 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7f846b29cd5f30aaa269a9c9cff86b89 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.product-detail','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('product-detail'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7f846b29cd5f30aaa269a9c9cff86b89)): ?>
<?php $attributes = $__attributesOriginal7f846b29cd5f30aaa269a9c9cff86b89; ?>
<?php unset($__attributesOriginal7f846b29cd5f30aaa269a9c9cff86b89); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7f846b29cd5f30aaa269a9c9cff86b89)): ?>
<?php $component = $__componentOriginal7f846b29cd5f30aaa269a9c9cff86b89; ?>
<?php unset($__componentOriginal7f846b29cd5f30aaa269a9c9cff86b89); ?>
<?php endif; ?>
            </div>

        </div>

        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">



                <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="gap-4">

                        <div class="group relative">
                            <?php if (isset($component)) { $__componentOriginal68054e91e1514468b3917c112b06fa61 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal68054e91e1514468b3917c112b06fa61 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.product-item','data' => ['name' => $product->name,'satuan' => $product->satuan,'stock' => $product->stock,'image' => $product->image,'price' => 'Rp ' . number_format($product->price, 2, ',', '.')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('product-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product->name),'satuan' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product->satuan),'stock' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product->stock),'image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product->image),'price' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Rp ' . number_format($product->price, 2, ',', '.'))]); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal68054e91e1514468b3917c112b06fa61)): ?>
<?php $attributes = $__attributesOriginal68054e91e1514468b3917c112b06fa61; ?>
<?php unset($__attributesOriginal68054e91e1514468b3917c112b06fa61); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal68054e91e1514468b3917c112b06fa61)): ?>
<?php $component = $__componentOriginal68054e91e1514468b3917c112b06fa61; ?>
<?php unset($__componentOriginal68054e91e1514468b3917c112b06fa61); ?>
<?php endif; ?>
                        </div>

                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" class="mt-2"
                            action="<?php echo e(route('products.destroy', $product->id)); ?>" method="POST">
                            <a style="text-decoration:none"
                                @click="isOpen = !isOpen; idProduct=<?php echo e($product->id); ?>; title= '<?php echo e($product->name); ?>';
                            price= '<?php echo e('Rp ' . number_format($product->price, 2, ',', '.')); ?>'; stock=<?php echo e($product->stock); ?>;
                            satuan='<?php echo e($product->satuan); ?>'; image= '<?php echo e($product->image); ?>';
                            description= '<?php echo e($product->description); ?>';"
                                class="d-inline-flex gap-1 rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>

                                View
                            </a>
                            <a type="button" href="<?php echo e(route('products.edit', $product->id)); ?>" style="text-decoration:none"
                                class="inline-flex gap-1 items-center rounded-md bg-yellow-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-yellow-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                </svg>

                                Edit
                            </a>

                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" style="text-decoration:none"
                                class="inline-flex gap-1 items-center rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>

                                Delete
                            </button>
                        </form>
                    </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="alert alert-danger">
                        Data Products belum Tersedia.
                    </div>
                <?php endif; ?>

                <?php echo e($products->links()); ?>

            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        //message with sweetalert
        <?php if(session('success')): ?>
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "<?php echo e(session('success')); ?>",
                showConfirmButton: false,
                timer: 2000
            });
        <?php elseif(session('error')): ?>
            Swal.fire({
                icon: "error",
                title: "GAGAL!",
                text: "<?php echo e(session('error')); ?>",
                showConfirmButton: false,
                timer: 2000
            });
        <?php endif; ?>
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MIG12998\Herd\uts_filiana\resources\views/products/index.blade.php ENDPATH**/ ?>