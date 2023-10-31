<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col">
            <div class="card col" style="width: 18rem; ">
                <img src="<?php echo e(asset($product['image'])); ?>" class="card-img-top" height="250" style="object-fit: contain;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($product['name']); ?></h5>
                    <a href="/products/<?php echo e($product['id']); ?>" class="btn btn-primary">details</a>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/B082EAC082EA89E4/ITI ICC/Laravel/Labs/lab1/resources/views/home.blade.php ENDPATH**/ ?>