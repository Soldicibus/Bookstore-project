<?php $__env->startSection('title', 'Bookstore'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid px-0">
        <div class="row align-items-center justify-content-center mx-0" style="height: 100vh; position: relative;">
            <img src="<?php echo e(asset('images/books-background.jpg')); ?>" alt="Books Background" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; object-position: center;">
            <div class="col-lg-6 text-center" style="color: #FFFFFF; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); ">
                <h1 style="font-weight: bold">Welcome to the Bookstore</h1>
                <p></p>
                <p class="lead" style="font-weight: bold">Browse our selection of books and find your next read.</p>
                <a href="<?php echo e(route('books.index')); ?>" class="btn btn-primary btn-lg mt-3" style="color: #fff; border: 2px solid #fff;">Explore Books</a>
                <?php if(Auth::check()): ?>
                    <p></p>
                    <p class="lead" style="font-weight: bold">Or you can read your personal favorite books.</p>
                    <a href="<?php echo e(route('favorites.index')); ?>" class="btn btn-warning  btn-lg mt-3" style="color: #fff; border: 2px solid #fff;">Go to "My Favorites"</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\practice\resources\views/home.blade.php ENDPATH**/ ?>