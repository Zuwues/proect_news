<?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="content-posts">
        <p class="posts">Название: <?php echo e($post->title); ?> </p>
        <p class="posts2">Текст: <br> <?php echo e($post->description); ?></p>
        <p class="posts3"><?php echo e($post->created_at); ?></p>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\example-app\resources\views/welcome.blade.php ENDPATH**/ ?>