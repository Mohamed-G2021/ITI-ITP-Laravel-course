<?php $__env->startSection('content'); ?>

<div class="container">
        <h1><?php echo e($product->name); ?> details</h1>

        <div class="card" style="width: 18rem; ">
                <img src="<?php echo e(asset("/images/$product->image")); ?>" class="card-img-top" height="250" style="object-fit: contain;">
                <div class="card-body">
                        <h5 class="card-title">name: <?php echo e($product->name); ?></h5>
                        <h5 class="card-title">description: <?php echo e($product->description); ?></h5>
                        <h5 class="card-title">price: <?php echo e($product->price); ?></h5>
                        <a href="<?php echo e(route('products.edit',$product->id)); ?>" class="btn btn-primary">Edit</a>
                        <a href="<?php echo e(route('products.destroy',$product->id)); ?>" onclick="return confirm('Are you sure you want to delete this product?')" class="btn btn-danger">Delete</a>
                </div>
        </div>
        <br>
        <a href="<?php echo e(route('products.index')); ?>" class="btn btn-primary">back to all products</a>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/B082EAC082EA89E4/ITI ICC/Laravel/Labs/Task2-using-DB-with-CRUD-operations/resources/views/products/show.blade.php ENDPATH**/ ?>