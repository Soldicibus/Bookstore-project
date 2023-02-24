

<?php $__env->startSection('title', 'User Info'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h1>User Info</h1>
                <hr>
                <p><strong>Name:</strong> <?php echo e(Auth::user()->name); ?></p>
                <p><strong>Email:</strong> <?php echo e(Auth::user()->email); ?></p>
                <p><strong>Created at:</strong> <?php echo e(Auth::user()->created_at->format('M d, Y')); ?></p>
                <a href="<?php echo e(route('home')); ?>" class="btn btn-primary">Back to Home</a>
                <a href="<?php echo e(route('favorites.index')); ?>" class="btn btn-warning" style="color: #fff; border: 2px solid #fff;">Go to "My Favorites"</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\practice\resources\views/userinfo.blade.php ENDPATH**/ ?>