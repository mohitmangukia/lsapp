

<?php $__env->startSection('content'); ?>
    <div class='form-group'>
    <h1>Create Post</h1>
    <?php echo e(Form::open(['route' => 'posts.store'])); ?>

        <div class='form-group'>
        <?php echo e(Form::label('title', 'Title')); ?>

        <?php echo e(Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Enter Title'])); ?>

        </div>
        <div class='form-group'>
        <?php echo e(Form::label('body', 'Body')); ?>

        <?php echo e(Form::textarea('body', '', ['class' => 'ckeditor form-control', 'placeholder' => 'Enter Body', 'required'])); ?>

        </div>
        <?php echo e(Form::submit('Submit', ['class' => 'btn btn-primary'])); ?>

    <?php echo e(Form::close()); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lsapp\resources\views/posts/create.blade.php ENDPATH**/ ?>