

<?php $__env->startSection('content'); ?>
    <h1>Books</h1>
    <?php if(Auth::check() && Auth::user()->role_id === 2): ?>
        <a href="<?php echo e(route('books.create')); ?>" class="btn btn-primary">Add Book</a>
        
        <a href="<?php echo e(route('books.export')); ?>" class="btn btn-info" style="margin-left: 10px;">Export Books</a>
    <?php endif; ?>
    <br><br>

    <table class="table table-striped">
        <thead>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\practiceBackupExport\practice\resources\views/books/index.blade.php ENDPATH**/ ?>