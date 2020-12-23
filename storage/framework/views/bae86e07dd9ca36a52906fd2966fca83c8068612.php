<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo e(route('blog.index')); ?>"><img src="/img/home.png"/> Главная</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- ссылки слева -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('post.create')); ?>"><img src="/img/new.png"/> Новое желание</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('my')); ?>"><img src="/img/myposts.png"/> Мои желания</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('users')); ?>"><img src="/img/people.png"/> Пользователи</a>
            </li>
        </ul>

        <!-- форма поиска -->
        <form class="form-inline my-2 my-lg-0" action="<?php echo e(route('post.search')); ?>">
            <input class="form-control mr-sm-2" type="search" name="search"
                   placeholder="Поиск желаний..." aria-label="Поиск">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
        </form>

        <!-- ссылки справа -->
        <ul class="navbar-nav ml-auto">
            <?php if(auth()->guard()->guest()): ?>
                <li class="nav-item"> <!-- ссылка для входа -->
                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                </li>
                <?php if(Route::has('register')): ?>
                    <li class="nav-item"> <!-- ссылка для регистрации -->
                        <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                    </li>
                <?php endif; ?>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('logout')); ?>"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <?php echo e(__('Logout')); ?> <!-- ссылка выхода -->
                    </a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                        <?php echo csrf_field(); ?>
                    </form>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
<?php /**PATH D:\Downloads\Telegram Desktop\OpenServer\domains\site\resources\views/layouts/header.blade.php ENDPATH**/ ?>