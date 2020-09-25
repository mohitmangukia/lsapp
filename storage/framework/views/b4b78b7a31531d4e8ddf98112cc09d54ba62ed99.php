

<?php $__env->startSection('content'); ?>

    <small><a href="/posts"class="btn btn-default btn-md" role="button">Go back</a></small>
    <h1><?php echo e($posts->title); ?></h1>
    <div>
        <?php echo $posts->body; ?>

    </div>
    <hr>
        <small><?php echo e($posts->created_at); ?></small>
      <?php echo e(Form::model($posts, ['route' => ['posts.destroy', $posts->id, 'class' => 'pull-right'], 'method'=> 'POST'])); ?>

        <small><a href="/posts/<?php echo e($posts->id); ?>/edit" class="btn btn-primary" role="button">Edit</a></small>
        <?php echo e(Form::hidden('_method', 'delete')); ?>

        <?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger'])); ?>

    <?php echo e(Form::close()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lsapp\resources\views/posts/show.blade.php ENDPATH**/ ?>