<?php $__env->startSection('content'); ?>
    <h1 class="mb-10 text-2xl">Books</h1>

    <form method="GET" action="<?php echo e(route('books.index')); ?>" class="mb-4 flex items-center space-x-2">
        <input type="text" name="title" placeholder="Search by title" value="<?php echo e(request('title')); ?>" class="input h-10" />
        <button type="submit" class="btn h-10">Search</button>
        <a href="<?php echo e(route('books.index')); ?>" class="btn h-10">Clear</a>
    </form>

    <ul>
        <?php $__empty_1 = true; $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <li class="mb-4">
                <div class="book-item">
                    <div class="flex flex-wrap items-center justify-between">
                        <div class="w-full flex-grow sm:w-auto">
                            <a href="<?php echo e(route('books.show', $book)); ?>" class="book-title"><?php echo e($book->title); ?></a>
                            <span class="book-author">by <?php echo e($book->author); ?></span>
                        </div>
                        <div>
                            <div class="book-rating">
                                <?php echo e(number_format($book->reviews_avg_rating, 1)); ?>

                            </div>
                            <div class="book-review-count">
                                out of <?php echo e($book->reviews_count); ?> <?php echo e(Str::plural('review', $book->reviews_count)); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <li class="mb-4">
                <div class="empty-book-item">
                    <p class="empty-text">No books found</p>
                    <a href="<?php echo e(route('books.index')); ?>" class="reset-link">Reset criteria</a>
                </div>
            </li>
        <?php endif; ?>
    </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\leonw\Desktop\book-review\resources\views/books/index.blade.php ENDPATH**/ ?>