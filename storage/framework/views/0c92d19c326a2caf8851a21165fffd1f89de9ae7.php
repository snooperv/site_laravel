<?php $__env->startSection('content'); ?>
    <h1 class="mt-2 mb-3">Список пользователей сайта</h1>
    <?php if(isset($users) && count($users)): ?>
        <div class="row">

            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-4 mb-2">
                    <a href=""><h3><?php echo e($user->id); ?>. <?php echo e($user->name); ?></h3></a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php echo e($users->links()); ?>

    <?php else: ?>
        <p>На сайте еще нет ни одного пользователя</p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', ['title'=>'Пользователи'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Downloads\Telegram Desktop\OpenServer\domains\site\resources\views/posts/users.blade.php ENDPATH**/ ?>