
<?php $__env->startSection('layout_KH'); ?>
<section class="container">
    <section class="mananh">
        <div class="mananh__name">
            <hr />
            <h3>MÀN ẢNH</h3>
            <hr />
        </div>
    </section>
    <section class="ghengoi">

        <h3>Chọn ghế </h3>

        <div class="ghengoi__nor row ">

            <?php $__currentLoopData = $dsghe; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ghe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($dsve!='[]'): ?>

                    <?php $__currentLoopData = $dsve; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ve): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($ghe->idGhe==$ve->idGhe): ?>
                            <a class="btn btn-danger btn__item" disabled><?php echo e($ghe->vitrighe); ?></a>
                        <?php else: ?>
                            <a class="border border-info btn btn-outline-info btn-block btn__item"
                            href="<?php echo e(URL::to('/ve',[Session::get('idKH'),Session::get('idLC'),$ghe->idGhe,-1])); ?>"><?php echo e($ghe->vitrighe); ?></a>
            
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <a class="border border-info btn btn-outline-info btn-block btn__item"
                href="<?php echo e(URL::to('/ve',[Session::get('idKH'),Session::get('idLC'),$ghe->idGhe,-1])); ?>"><?php echo e($ghe->vitrighe); ?></a>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </section>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout_KH', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH O:\wamp64\www\tttn-tonghop\tttn\resources\views/KH/dsghe.blade.php ENDPATH**/ ?>