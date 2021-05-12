
<?php $__env->startSection('layout_KH'); ?>
        <section class="container">
            <div class="col-sm-12">
                <div class="movie">
                    <h2 class="page-heading"><?php echo e($phim->tenPhim); ?></h2>
                    
                    <div class="movie__info">
                        <div class="col-sm-8 col-md-4 movie-mobile">
                            <div class="movie__images">
                                <img style="width:450px; height:350px" src="data:image/png;base64,<?php echo e(chunk_split(base64_encode($phim->imgPhim))); ?>">
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-8">

                            <p class="movie__option"><strong>Thể loại: </strong><a href="#"><?php echo e($phim->tenLPhim); ?></p>
                            <p class="movie__option"><strong>Đạo diễn: </strong><?php echo e($phim->daodienPhim); ?></p>
                            <p class="movie__option"><strong>Diễn viên: </strong><?php echo e($phim->dienvien); ?></p>
                            <?php if(Session::has('idKH')): ?>
                            <div class="movie__btns movie__btns--full">
                                <a href="<?php echo e(URL::to('/dsLC',$phim->idPhim)); ?>" class="btn btn-md btn--warning">Đặt vé</a>
                            </div>
                            <?php else: ?>
                            <div class="movie__btns movie__btns--full">
                            <a  class="btn btn-md btn--warning btn--book btn-control--home login-window">Đặt vé</a>
                            </div>
                            <?php endif; ?>

                        
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    
                    <h2 class="page-heading">Tóm tắt</h2>

                    <p class="movie__describe"><?php echo e($phim->mieutaPhim); ?></p>
                    
                </div>
            </div>

        </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout_KH', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH O:\wamp64\www\tttn-tonghop\tttn\resources\views/KH/singlePhim.blade.php ENDPATH**/ ?>