<?php $__env->startSection('content'); ?>

<div class="container">
        <h1> Add new product</h1>

        <form method="post" action="<?php echo e(route('products.store')); ?>">
                <?php echo csrf_field(); ?>
                <div class="mb-3">

                        <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" value="<?php echo e(old('name')); ?>" class="form-control">
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class=" text-danger fw-bold"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                <input class="form-control" name="description" value="<?php echo e(old('description')); ?>" id="exampleFormControlTextarea1" rows="3"></input>
                                <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class=" text-danger fw-bold"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="text" name="image" value="<?php echo e(old('image')); ?>" class="form-control">
                                <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class=" text-danger fw-bold"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Price</label>
                                <input type="text" name="price" value="<?php echo e(old('price')); ?>" class="form-control">
                                <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class=" text-danger fw-bold"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/B082EAC082EA89E4/ITI ICC/Laravel/Labs/Task3-validation-and-using-resource/resources/views/products/create.blade.php ENDPATH**/ ?>