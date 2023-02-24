

<?php $__env->startSection('content'); ?>


<center><h1>Books</h1>
    <?php if(Auth::check() && Auth::user()->role_id === 2): ?>
        <a href="<?php echo e(route('books.create')); ?>" class="btn btn-primary">Add Book</a>
        
        <a href="<?php echo e(route('books.export')); ?>" class="btn btn-info" style="margin-left: 10px;">Export Books</a>
    <?php endif; ?></center>
    <br><br>
    <p></p>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($book->title); ?></td>
                    <td><?php echo e($book->author->name); ?></td>
                    <td>
                        <a href="<?php echo e(route('books.show', $book->id)); ?>" class="btn btn-primary">View</a>
                        <?php if(Auth::check() && Auth::user()->role_id === 2): ?>
                            <a href="<?php echo e(route('books.edit', $book->id)); ?>" class="btn btn-success" style="margin-left: 10px;">Edit</a>
                        
                            <button type="button" class="btn btn-danger" style="margin-left: 10px;" data-toggle="modal" data-target="#deleteModal<?php echo e($book->id); ?>">
                                Delete
                            </button>
                        <!-- Delete Modal -->
                        <div class="modal fade" id="deleteModal<?php echo e($book->id); ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel<?php echo e($book->id); ?>" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel<?php echo e($book->id); ?>">Confirm Delete</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete this book?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <form action="<?php echo e(route('books.destroy', $book->id)); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\practice\resources\views/books/index.blade.php ENDPATH**/ ?>