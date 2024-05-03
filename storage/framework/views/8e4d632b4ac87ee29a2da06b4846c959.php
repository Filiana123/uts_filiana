<div>
    <div
        class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
        <img src="storage/products/<?php echo e($image); ?>" alt="Product Image"
            class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        
    </div>
    <div class="mt-4 flex justify-between">
        <div>
            <h3 class="text-sm text-gray-700">
                <a>
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    <?php echo e($name); ?>

                </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500"><?php echo e($price); ?></p>

        </div>

        <p class="text-sm font-medium text-gray-900"><?php echo e($stock); ?> <?php echo e($satuan); ?></p>
        <?php echo e($slot); ?>


    </div>


</div>
<?php /**PATH C:\Users\MIG12998\Herd\uts_filiana\resources\views/components/product-item.blade.php ENDPATH**/ ?>