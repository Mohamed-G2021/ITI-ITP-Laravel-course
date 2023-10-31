<?php $__env->startSection('content'); ?>
<div class="container">
        <h1> Edit <?php echo e($product->name); ?></h1>

        <form method="post" action="<?php echo e(route('products.update',$product->id)); ?>" enctype="multipart/form-data">
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
                                <label for="exampleFormControlTextarea1" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image" value="<?php echo e(old('image')); ?>" id="exampleFormControlTextarea1" rows="3"></input>
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
                                <input type="text" name="price" value="<?php echo e($product->price); ?>" class="form-control">
                        </div>
                        <div class="mb-3">
                                <label for="form-labe">Category</label>
                                <select class="form-select" name="category_id" aria-label="Default select example">
                                        <option selected value="<?php echo e($product->category->id?? ''); ?>"><?php echo e($product->category->name?? ""); ?></option>
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($product->category_id == $category->id): ?>
                                        <?php else: ?>
                                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                        <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
        </form>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/B082EAC082EA89E4/ITI ICC/Laravel/Labs/Task3-form-validation-and-using-resource-controller/resources/views/products/edit.blade.php ENDPATH**/ ?>