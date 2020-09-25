

<?php $__env->startSection('content'); ?>
    <div>
        <h1><?php echo e($title); ?></h1>
        <p>this is laravel application</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">login</a> <a class="btn btn-primary btn-lg" href="/register" role="button">register</a></p>
    </div>
<?php $__env->stopSection(); ?>   
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lsapp\resources\views/pages/index.blade.php ENDPATH**/ ?>