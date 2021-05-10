<div class="cinema-wrap">
    <div class="row">
        <?php $__currentLoopData = $dsphim; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $phim): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-xs-6 col-sm-3 cinema-item">
            <div class="cinema">
                <a href="<?php echo e(URL::to('/singlePhim',$phim->idPhim)); ?>" class="movies__images HOVER">
                    <img alt='' src="data:image/png;base64,<?php echo e(chunk_split(base64_encode($phim->imgPhim))); ?>"
                        class="img-fluid image" style="width:265px; height:350px">
                </a>
                <a href="<?php echo e(URL::to('/singlePhim',$phim->idPhim)); ?>"
                    class="cinema-title page-heading"><?php echo e($phim->tenPhim); ?></a>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>


<div class="pagination paginatioon--full">
    <?php echo e($dsphim->links('KH.paginationKH')); ?>

</div><?php /**PATH O:\wamp64\www\tttn-tonghop\tttn-web_ban_ve_xem_phim\tttn\resources\views/KH/dsPhimcon.blade.php ENDPATH**/ ?>