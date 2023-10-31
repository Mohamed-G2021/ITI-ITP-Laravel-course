<?php $__env->startSection('content'); ?>
<div class="container">
        <h1> Add new product</h1>

        <form method="post" action="<?php echo e(route('products.store')); ?>">
                <?php echo csrf_field(); ?>
                <div class="mb-3">

                        <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control">
                        </div>
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <input class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></input>
                        <br>
                        <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="text" name="image" class="form-control">
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Price</label>
                                <input type="text" name="price" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/B082EAC082EA89E4/ITI ICC/Laravel/Labs/Task2-using-DB-with-CRUD-operations/resources/views/products/create.blade.php ENDPATH**/ ?>