

<?php $__env->startSection('container'); ?>

<h1 class="mb-5"><?php echo e($title); ?></h1>

<div class="container">
    <div class="row">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>      
            <div class="col-md-4">
                <a href="/?category=<?php echo e($category->slug); ?>">
                    <div class="card bg-dark text-white">
                        <img src="https://source.unsplash.com/500x450?<?php echo e($category->name); ?>" class="card-img" alt="<?php echo e($category->name); ?>">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color:rgba(0, 0, 0, 0.5)"><?php echo e($category->name); ?></h5>
                    </div>
                </div>
                </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<small class="d-block mt-5 text-muted text-center">&copy; 2021 | Akatara Outdoor</small>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Akatara-Outdoor\resources\views/categories.blade.php ENDPATH**/ ?>