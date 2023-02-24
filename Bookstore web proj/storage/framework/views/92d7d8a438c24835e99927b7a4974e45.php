

<?php $__env->startSection('content'); ?>
    <h1>Favorites</h1>
    <?php if($books->isNotEmpty()): ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Genre</th>
                <th>Publication Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($book->title); ?></td>
                    <td><?php echo e($book->author->name); ?></td>
                    <td><?php echo e($book->genre->name); ?></td>
                    <td><?php echo e($book->publication_date); ?></td>
                    <td>
                        <a href="<?php echo e(route('books.show', $book->id)); ?>" class="btn btn-primary">View</a>
                        <form action="<?php echo e(route('favorites.destroy', $book->id)); ?>" method="POST" style="display: inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php else: ?>
    <p>No favorite books found.</p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\practice\resources\views/favorites.blade.php ENDPATH**/ ?>