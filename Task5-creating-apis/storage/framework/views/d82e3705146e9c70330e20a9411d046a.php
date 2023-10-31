<?php $__env->startSection('content'); ?>
<div class="container">
        <h1> Edit <?php echo e($product->name); ?></h1>

        <form method="post" action="<?php echo e(route('products.update',$product->id)); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="mb-3">
                        <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" value="<?php echo e($product->name); ?>" class="form-control">
                        </div>
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <input class="form-control" name="description" value="<?php echo e($product->description); ?>" id="exampleFormControlTextarea1" rows="3"></input>
                        <br>
                        <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="text" name="image" value="<?php echo e($product->image); ?>" class="form-control">
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Price</label>
                                <input type="text" name="price" value="<?php echo e($product->price); ?>" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
        </form>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/B082EAC082EA89E4/ITI ICC/Laravel/Labs/Task2-using-DB-with-CRUD-operations/resources/views/products/edit.blade.php ENDPATH**/ ?>