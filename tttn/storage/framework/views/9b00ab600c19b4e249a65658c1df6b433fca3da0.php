
<?php $__env->startSection('layout_KH'); ?>
<section class="container-fluid">
    <div class="col-sm-12">
        <h2 class="page-heading">Phim</h2>

        <div>
            <form method='get' style="background-color:white">
                <label for="select_item">Loại Phim : </label>
                <select id="select_item" name="select_item" class="search__sort" tabindex="0">
                    <option value="<?php echo e(URL::to('/dsphim','all')); ?>">All</option>
                    <?php $__currentLoopData = $dsLphim; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Lphim): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e(URL::to('/dsphim',$Lphim->idLPhim)); ?>"><?php echo e($Lphim->tenLPhim); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </form>
        </div>

        <div class="changepage">
        <?php echo $__env->make('KH.dsPhimcon', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout_KH', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH O:\wamp64\www\tttn\resources\views/KH/dsPhim.blade.php ENDPATH**/ ?>