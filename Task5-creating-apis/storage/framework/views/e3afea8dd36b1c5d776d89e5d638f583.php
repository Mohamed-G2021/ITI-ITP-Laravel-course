<?php $__env->startSection('content'); ?>
<div class="container">

        <h1>Categories</h1>
        <br>
        <a href="<?php echo e(route('categories.create')); ?>" class="btn btn-primary">Add new category</a>
        <br><br>
        <table class="table">
                <thead>
                        <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Show</th>
                                <th>Edit</th>
                                <th>Delete</th>
                        </tr>
                </thead>

                <tbody>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr>
                                <td><?php echo e($category->id); ?></td>
                                <td><?php echo e($category->name); ?></td>
                                <td><a href="<?php echo e(route('categories.show',$category->id)); ?>" class="btn btn-primary">show</a></td>
                                <td><a href="<?php echo e(route('categories.edit',$category->id)); ?>" class="btn btn-warning">edit</a></td>
                                <form action="<?php echo e(route('categories.destroy',$category->id)); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                        <td> <input type="submit" value="Delete" onclick="return confirm('Are you sure you want to delete this category?')" class="btn btn-danger"></td>
                                </form>

                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
        </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/B082EAC082EA89E4/ITI ICC/Laravel/Labs/Task3-validation-and-using-resource/resources/views/categories/index.blade.php ENDPATH**/ ?>