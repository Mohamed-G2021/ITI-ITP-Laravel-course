<?php $__env->startSection('content'); ?>
<table class="table container">
        <th>ID</th>
        <th>Name</th>
        <th>Image</th>
        <th>Price</th>
        <tr>
                <td><?php echo e($product['id']); ?></td>
                <td><?php echo e($product['name']); ?></td>
                <td><img src="<?php echo e(asset($product['image'])); ?>" alt="" srcset=""></td>
                <td><?php echo e($product['price']); ?></td>

        </tr>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/B082EAC082EA89E4/ITI ICC/Laravel/Labs/lab1/resources/views/product.blade.php ENDPATH**/ ?>