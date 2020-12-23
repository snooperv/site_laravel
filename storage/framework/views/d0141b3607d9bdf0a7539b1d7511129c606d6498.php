<?php $__env->startSection('content'); ?>
    <h1 class="mt-2 mb-3">Ваши желания</h1>
    <?php if(isset($posts) && count($posts)): ?>
        <?php echo $__env->make('parts.bodyposts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo e($posts->links()); ?>

    <?php else: ?>
        <p>Вы еще не добавили список желаний</p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', ['title'=>'Мои желания'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Downloads\Telegram Desktop\OpenServer\domains\site\resources\views/filters/filter.blade.php ENDPATH**/ ?>