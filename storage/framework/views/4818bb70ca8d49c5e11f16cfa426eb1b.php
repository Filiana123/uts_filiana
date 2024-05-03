<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> <?php echo e($title); ?> <?php $__env->endSlot(); ?>
    
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
    <?php if (isset($component)) { $__componentOriginal4912e54b47cc540c8c40bfbaaa4ad898 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4912e54b47cc540c8c40bfbaaa4ad898 = $attributes; } ?>
<?php $component = App\View\Components\Product::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('product'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Product::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4912e54b47cc540c8c40bfbaaa4ad898)): ?>
<?php $attributes = $__attributesOriginal4912e54b47cc540c8c40bfbaaa4ad898; ?>
<?php unset($__attributesOriginal4912e54b47cc540c8c40bfbaaa4ad898); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4912e54b47cc540c8c40bfbaaa4ad898)): ?>
<?php $component = $__componentOriginal4912e54b47cc540c8c40bfbaaa4ad898; ?>
<?php unset($__componentOriginal4912e54b47cc540c8c40bfbaaa4ad898); ?>
<?php endif; ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php /**PATH C:\Users\MIG12998\Herd\uts_filiana\resources\views/barang.blade.php ENDPATH**/ ?>