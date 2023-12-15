<?php if($rating): ?>
    <?php for($i = 1; $i <= 5; $i++): ?>
        <?php echo e($i <= round($rating) ? '★' : '☆'); ?>

    <?php endfor; ?>
<?php else: ?>
    No rating yet
<?php endif; ?>
<?php /**PATH C:\Users\leonw\Desktop\book-review\resources\views/components/star-rating.blade.php ENDPATH**/ ?>