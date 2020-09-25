

<?php $__env->startSection('content'); ?>
    <div class='form-group'>
    <h1>Edit Post</h1>
    <?php echo e(Form::model($post, ['route' => ['posts.update', $post->id], 'method'=> 'POST' ])); ?>

        <div class='form-group'>
        <?php echo e(Form::label('title', 'Title')); ?>

        <?php echo e(Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Enter Title', 'required'])); ?>

        </div>
        <div class='form-group'>
        <?php echo e(Form::label('body', 'Body')); ?>

        <?php echo e(Form::textarea('body', $post->body, ['class' => 'ckeditor form-control', 'placeholder' => 'Enter Body', 'required'])); ?>

        </div>
        <?php echo e(Form::hidden('_method', 'PUT')); ?>

        <small><a href="/posts/<?php echo e($post->id); ?>" class="btn btn-primary" role="button">Go back</a></small>
        <?php echo e(Form::submit('Update', ['class' => 'btn btn-primary'])); ?>

    <?php echo e(Form::close()); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lsapp\resources\views/posts/edit.blade.php ENDPATH**/ ?>