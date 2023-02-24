

<?php $__env->startSection('content'); ?>
<body>
    <div class="container">
        <center><h1>Create Book</h1></center>
        <form action="<?php echo e(route('books.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="title"><h3>Title</h3></label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <p></p>
            <div class="form-group">
                <label for="author_id"><h3>Author</h3></label>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2">
                        <h5>Choose or create an author:</h5>
                    </label>
                    <div>
                        <input type="radio" id="existing_author" name="author_choice" value="existing_author" checked>
                        <label class="inline-block font-bold" for="existing_author">-Choose existing author:</label>
                        <select name="author_id" id="author_id" class="border rounded py-2 px-3 ml-2">
                            <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($author->id); ?>">
                                    <?php echo e($author->name); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="mt-2">
                        <input type="radio" id="new_author" name="author_choice" value="new_author">
                        <label class="inline-block font-bold" for="new_author">-Create new author:</label>
                        <input class="border rounded py-2 px-3 ml-2" type="text" name="new_author_name" id="new_author_name">
                    </div>
                </div>
            </div>
            <p></p>
            <div class="form-group">
                <label for="genre_choice"><h3>Genre</h3></label>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2">
                    <h5>Choose or create a genre:</h5>
                    </label>
                    <div>
                        <input type="radio" id="existing_genre" name="genre_choice" value="existing_genre" checked>
                        <label class="inline-block font-bold" for="existing_genre">-Choose existing genre:</label>
                        <select name="genre_id" id="genre_id" class="border rounded py-2 px-3 ml-2">
                            <?php $__currentLoopData = $genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($genre->id); ?>">
                                    <?php echo e($genre->name); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="mt-2">
                        <input type="radio" id="new_genre" name="genre_choice" value="new_genre">
                        <label class="inline-block font-bold" for="new_genre">-Create new genre:</label>
                        <input class="border rounded py-2 px-3 ml-2" type="text" name="new_genre_name" id="new_genre_name">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="publication_date"><h3>Publication Date:</h3></label>
                <input class="border rounded py-2 px-3" type="date" name="publication_date" id="publication_date" required>
            </div>
            
            <p></p>
            <button type="submit" class="btn btn-success">Create Book</button>
        </form>
    </div>
</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\practice\resources\views/books/create.blade.php ENDPATH**/ ?>