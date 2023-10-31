<?php $__env->startSection('content'); ?>
<div class="container">
        <h1>Products</h1>
        <br>
        <a href="<?php echo e(route('products.create')); ?>" class="btn btn-primary">Add new product</a>
        <br><br>
        <div class="row row-cols-1 row-cols-md-4 g-4">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col">
                        <div class="card col" style="width: 18rem; ">
                                <img src="<?php echo e(asset("/images/$product->image")); ?>" class="card-img-top" height="250" style="object-fit: contain;">
                                <div class="card-body">
                                        <h5 class="card-title"><?php echo e($product->name); ?></h5>
                                        <a href="<?php echo e(route('products.show',$product->id)); ?>" class="btn btn-primary">Details</a>
                                        <a href="<?php echo e(route('products.edit',$product->id)); ?>" class="btn btn-primary">Edit</a>
                                        <a href="<?php echo e(route('products.destroy',$product->id)); ?>" onclick="return confirm('Are you sure you want to delete this product?')" class="btn btn-danger">Delete</a>
                                </div>
                        </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
        <br>
        <div class="d-flex justify-content-end me-3"><?php echo e($products->links("pagination::bootstrap-5")); ?></div>


</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/B082EAC082EA89E4/ITI ICC/Laravel/Labs/Task3-form-validation-and-using-resource-controller/resources/views/products/index.blade.php ENDPATH**/ ?>