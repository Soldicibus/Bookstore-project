<?php $__env->startSection('content'); ?>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h1>Welcome to the Bookstore</h1>
                <p></p>
                <p class="lead">Browse our selection of books and find your next read.</p>
                <a href="<?php echo e(route('books.index')); ?>" class="btn btn-primary btn-lg mt-3">Explore Books</a>
                <?php if(Auth::check()): ?>
                    <p></p>
                    <p class="lead">Or you can read your personal favorite books.</p>
                    <a href="<?php echo e(route('favorites.index')); ?>" class="btn btn-warning ">Go to "My Favorites"</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\practiceBackupExport\practice\resources\views/home.blade.php ENDPATH**/ ?>