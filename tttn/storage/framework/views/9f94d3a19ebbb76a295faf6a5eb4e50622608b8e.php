<?php if($paginator->hasPages()): ?>
<?php if($paginator->onFirstPage()): ?>
<a style="opacity: 0.3;cursor: default;pointer-events: none;" class="pagination__prev">trở về</a>
<?php else: ?>
<a class="pagination__prev" href="<?php echo e($paginator->previousPageUrl()); ?>">trở về</a>
<?php endif; ?>


<?php if($paginator->hasMorePages()): ?>
<a class="pagination__next" href="<?php echo e($paginator->nextPageUrl()); ?>">tiếp theo</a>
<?php else: ?>
<a style="opacity: 0.3;cursor: default;pointer-events: none;" class="pagination__next">tiếp theo</a>
<?php endif; ?>

<?php endif; ?><?php /**PATH O:\wamp64\www\tttn-tonghop\tttn\resources\views/KH/paginationKH.blade.php ENDPATH**/ ?>