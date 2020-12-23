<?php $__env->startSection('content'); ?>
    <h1 class="mt-2 mb-3">Список желаний всех пользователей</h1>
    <?php echo $__env->make('parts.bodyposts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo e($posts->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Downloads\Telegram Desktop\OpenServer\domains\site\resources\views/posts/index.blade.php ENDPATH**/ ?>