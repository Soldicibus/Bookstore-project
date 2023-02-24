

<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
            <h1><?php echo e($book->title); ?></h1>
            <hr>
            <p><strong>Author:</strong> <?php echo e($book->author->name); ?></p>
            <p><strong>Genre:</strong> <?php echo e($book->genre->name); ?></p>
            <p><strong>Publication Date:</strong> <?php echo e($book->publication_date); ?></p>

            <div class="d-flex justify-content-center align-items-center mt-5">
                <a href="<?php echo e(route('books.index')); ?>" class="btn btn-primary me-3" style="margin-left: 10px;">Back to Books</a>

                <?php if(Auth::check()): ?>
                    <a href="<?php echo e(route('favorites.index')); ?>" class="btn btn-success" style="margin-left: 10px;">To My Favorites</a>
                <?php endif; ?>
                <?php if(Auth::check() && auth()->user()->favorites->contains($book)): ?>
                    <p class="mt-3"><span class="btn btn-warning disabled" style="margin-left: 10px;">Already in Favorites</span></p>
                <?php elseif(Auth::check()): ?>
                    <form action="<?php echo e(route('favorites.store', $book->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="book_id" value="<?php echo e($book->id); ?>">
                        <button type="submit" class="btn btn-warning" style="margin-left: 10px;">Add to Favorites</button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<style>
    hr {
        border: none;
        border-top: 1px solid #ccc;
        margin: 30px 0;
    }
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\practice\resources\views/books/show.blade.php ENDPATH**/ ?>