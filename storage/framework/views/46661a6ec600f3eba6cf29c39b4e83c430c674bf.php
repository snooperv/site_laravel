<?php $__env->startSection('content'); ?>
    <h1 class="mt-2 mb-3">Ваши желания</h1>
    <?php if(isset($posts) && count($posts)): ?>
        <div class="row">
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-header"><h3><?php echo e($post->title); ?></h3></div>
                        <div class="card-body">
                            <img src="<?php echo e($post->image ?? asset('img/default.jpg')); ?>" alt="" class="img-fluid">
                            <p class="mt-3 mb-0"><?php echo e($post->excerpt); ?></p>
                        </div>
                        <div class="card-footer">
                            <div class="clearfix">
                                <span class="float-left">
                                    Автор: <?php echo e($post->author); ?>

                                    <br>
                                    Дата: <?php echo e(date_format($post->created_at, 'd.m.Y H:i')); ?>

                                </span>
                                <a href="<?php echo e(route('post.show', ['id' => $post->post_id])); ?>" class="btn btn-dark float-right">Читать дальше</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php echo e($posts->links()); ?>

    <?php else: ?>
        <p>Вы еще не добавили список желаний</p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', ['title'=>'Мои желания'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Downloads\Telegram Desktop\OpenServer\domains\site\resources\views/posts/filter.blade.php ENDPATH**/ ?>