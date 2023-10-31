<?php $__env->startSection('content'); ?>

<div class="container">
        <h1><?php echo e($category->name); ?> details</h1>

        <div class="card" style="width: 18rem; ">
                <div class="card-body">
                        <h5 class="card-title">Name: <?php echo e($category->name); ?></h5>
                        <h5 class="card-title">Description: <?php echo e($category->description); ?></h5>
                        <h5 class="card-title">Created at: <?php echo e($category->created_at); ?></h5>
                        <h5 class="card-title">Updated at: <?php echo e($category->updated_at); ?></h5>
                        <a href="<?php echo e(route('categories.edit',$category->id)); ?>" class="btn btn-primary">Edit</a>

                        <br><br>
                        <form action="<?php echo e(route('categories.destroy',$category->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                                <input type="submit" value="Delete" onclick="return confirm('Are you sure you want to delete this category?')" class="btn btn-danger">
                        </form>

                </div>
        </div>
        <br>
        <a href="<?php echo e(route('categories.index')); ?>" class="btn btn-primary">back to all categories</a>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/B082EAC082EA89E4/ITI ICC/Laravel/Labs/Task3-validation-and-using-resource/resources/views/categories/show.blade.php ENDPATH**/ ?>