<?php $__env->startSection('content'); ?>
    <h1 class="mt-2 mb-3">Редактировать пост</h1>
    <form method="post" action="<?php echo e(route('post.update', ['id' => $post->post_id])); ?>"
          enctype="multipart/form-data">
        <?php echo method_field('PATCH'); ?>
        <?php echo $__env->make('parts.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', ['title' => 'Редактировать пост'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Downloads\Telegram Desktop\OpenServer\domains\site\resources\views/posts/edit.blade.php ENDPATH**/ ?>