
<?php $__env->startSection('dscuanv'); ?>
<div class="container-fluid">
    <h1>Edit Phim</h1>
    <hr>
    <div class="card">
        <div class="card-body">
            <form action="<?php echo e(URL::to('lichchieu/' . $lichchieu->idLC . '/update')); ?>" method="post">
                <input type="hidden" name="_method" value="PUT">
                <?php echo e(csrf_field()); ?>


                <div class="form-group">
                    <label>Phim</label>
                    <select class="border border-black" name="idPhim">
                        <?php $__currentLoopData = App\Models\tbl_phim::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Phim): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($Phim->idPhim==$lichchieu->idPhim): ?>
                        <option value="<?php echo e($Phim->idPhim); ?>" selected><?php echo e($Phim->tenPhim); ?></option>
                        <?php else: ?>
                        <option value="<?php echo e($Phim->idPhim); ?>"><?php echo e($Phim->tenPhim); ?></option>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Phòng</label>
                    <select class="border border-black" name="idPhong">
                        <?php $__currentLoopData = DB::table('tbl_phong')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Phong): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($Phong->idPhong==$lichchieu->idPhong): ?>
                        <option value="<?php echo e($Phong->idPhong); ?>" selected><?php echo e($Phong->vitriphong); ?></option>
                        <?php else: ?>
                        <option value="<?php echo e($Phong->idPhong); ?>"><?php echo e($Phong->vitriphong); ?></option>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Giờ chiếu</label>
                    <input type="datetime-local" class="form-control" id="giochieu_" name="giochieu">
                </div>
                <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <?php endif; ?>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout_NV', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH O:\wamp64\www\tttn-tonghop\tttn\resources\views/NV/frmLCedit.blade.php ENDPATH**/ ?>