<?php $__env->startSection('content'); ?>
    <h1 class="mt-2 mb-3">Желания пользователя <?php echo e($name); ?></h1>
    <?php if(isset($posts) && count($posts)): ?>
        <?php echo $__env->make('parts.bodyposts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo e($posts->links()); ?>

    <?php else: ?>
        <p>Пользователь <?php echo e($name); ?> еще не добавил список желаний</p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', ['title'=>'Желания пользователя ' . $name], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Downloads\Telegram Desktop\OpenServer\domains\site\resources\views/filters/userposts.blade.php ENDPATH**/ ?>