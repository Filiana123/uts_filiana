<div class="bg-white" x-data="{ isOpen: false, title: '', price: 0, stock: 0 }">


    <div class="relative z-10" role="dialog" aria-modal="true">
        <!--
    Background backdrop, show/hide based on modal state.

    Entering: "ease-out duration-300"
      From: "opacity-0"
      To: "opacity-100"
    Leaving: "ease-in duration-200"
      From: "opacity-100"
      To: "opacity-0"
  -->

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
            <?php if (isset($component)) { $__componentOriginal68054e91e1514468b3917c112b06fa61 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal68054e91e1514468b3917c112b06fa61 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.product-item','data' => ['@click' => 'isOpen = !isOpen; title=\'Black T-Shirt\'; price=200000; stock=20']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('product-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['@click' => 'isOpen = !isOpen; title=\'Black T-Shirt\'; price=200000; stock=20']); ?>
                Black T-Shirt
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
            <?php if (isset($component)) { $__componentOriginal68054e91e1514468b3917c112b06fa61 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal68054e91e1514468b3917c112b06fa61 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.product-item','data' => ['@click' => 'isOpen = !isOpen; title=\'White T-Shirt\'; price=300000; stock=10']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('product-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['@click' => 'isOpen = !isOpen; title=\'White T-Shirt\'; price=300000; stock=10']); ?>
                White T-Shirt
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
            <?php if (isset($component)) { $__componentOriginal68054e91e1514468b3917c112b06fa61 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal68054e91e1514468b3917c112b06fa61 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.product-item','data' => ['@click' => 'isOpen = !isOpen; title=\'Yellow T-Shirt\'; price=400000; stock=30']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('product-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['@click' => 'isOpen = !isOpen; title=\'Yellow T-Shirt\'; price=400000; stock=30']); ?>
                Yellow T-Shirt
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


            <!-- More products... -->

        </div>
    </div>

</div>
<?php /**PATH C:\Users\MIG12998\Herd\uts_filiana\resources\views/components/product.blade.php ENDPATH**/ ?>