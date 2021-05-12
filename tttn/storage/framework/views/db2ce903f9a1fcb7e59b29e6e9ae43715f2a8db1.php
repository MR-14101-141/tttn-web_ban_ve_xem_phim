
<?php $__env->startSection('layout_KH'); ?>
<section class="container">
    <h2 class="d-flex justify-content-center">LỊCH CHIẾU:</h2>
    <div class="time-select">
        <?php $__currentLoopData = $dsNC; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $NC): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="time-select__group">
            <div class="col-sm-4">
                <p class="time-select__place"><?php echo e($NC); ?>:</p>
            </div>
            <ul class="col-sm-8 items-wrap">
                <?php $__currentLoopData = $dsLC; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $LC): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(Carbon\Carbon::parse($LC->giochieu)->format('d/m/Y')==$NC): ?>
                <a style="color:black" href="<?php echo e(URL::to('/dsghe',[$LC->idPhong,$LC->idLC])); ?>" class="time-select__item">
                    <?php echo e(Carbon\Carbon::parse($LC->giochieu)->format('H:i')); ?></a>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout_KH', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH O:\wamp64\www\tttn-tonghop\tttn\resources\views/KH/dsLC.blade.php ENDPATH**/ ?>