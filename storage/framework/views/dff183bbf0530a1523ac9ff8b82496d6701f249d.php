<?php echo csrf_field(); ?>
<div class="form-group">
    <input type="text" class="form-control" name="title" maxlength="100"
           placeholder="Заголовок" required value="<?php echo e(old('title') ?? $post->title ?? ''); ?>">
</div>
<div class="form-group">
    <textarea class="form-control" name="excerpt" placeholder="Анонс поста"
              maxlength="200" required><?php echo e(old('excerpt') ?? $post->excerpt ?? ''); ?></textarea>
</div>
<div class="form-group">
    <textarea class="form-control" name="body" placeholder="Текст поста" rows="7"
              required><?php echo e(old('body') ?? $post->body ?? ''); ?></textarea>
</div>
<div class="form-group">
    <input type="file" class="form-control-file" name="image" accept="image/png, image/jpeg">
</div>
<?php if(isset($post->image)): ?>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" name="remove" id="remove">
        <label class="form-check-label" for="remove">
            Удалить загруженное <a href="<?php echo e($post->image); ?>" target="_blank">изображение</a>
        </label>
    </div>
<?php endif; ?>
<div class="form-group">
    <button type="submit" class="btn btn-primary">Сохранить</button>
</div>
<?php /**PATH D:\Downloads\Telegram Desktop\OpenServer\domains\site\resources\views/parts/form.blade.php ENDPATH**/ ?>