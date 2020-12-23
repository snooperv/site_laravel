<?php $__env->startSection('content'); ?>
    <h1 class="mt-2 mb-3">Результаты поиска</h1>
    <?php if(isset($posts) && count($posts)): ?>
        <?php echo $__env->make('parts.bodyposts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo e($posts->links()); ?>

    <?php else: ?>
        <p>По вашему запросу ничего не найдено</p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', ['title'=>'Поиск'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Downloads\Telegram Desktop\OpenServer\domains\site\resources\views/posts/search.blade.php ENDPATH**/ ?>