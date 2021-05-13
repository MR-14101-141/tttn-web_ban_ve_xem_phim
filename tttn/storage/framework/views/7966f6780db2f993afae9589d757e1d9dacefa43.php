
<?php $__env->startSection('dscuanv'); ?>
<div class="container-fluid">
    <h1>Edit Phim</h1>
    <hr>

    <div class="card">
        <div class="card-body">
            <form action="<?php echo e(URL::to('phim/' . $phim->idPhim . '/update')); ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                    <label for="tenPhim">Tên Phim</label>
                    <input type="text" value="<?php echo e($phim->tenPhim); ?>" class="form-control" id="ten_phim" name="tenPhim">
                </div>
                <div class="form-group">
                    <label for="imgPhim">Poster Phim</label>
                    <input type="file" class="form-control" name="imgPhim" accept="image/*"
                        onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                    <img id="output" src="data:image/png;base64,<?php echo e(chunk_split(base64_encode($phim->imgPhim))); ?>" 
                    width="100" height="150">
                </div>
                <div class="form-group">
                    <label for="trangthai">Trạng thái</label>
                    <?php if($phim->trangthai==1): ?>
                    <select class="border border-black" name="trangthai">
                    <option value="1">Còn chiếu</option>
                    <option value="0">Hết chiếu</option>
                    </select>
                    <?php else: ?>
                    <select class="border border-black" name="trangthai">
                    <option value="0">Hết chiếu</option>
                    <option value="1">Còn chiếu</option>
                    </select>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label>Loại Phim</label>
                    <select class="border border-black" name="LPhim">
                        <?php $__currentLoopData = App\Models\tbl_loaiphim::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $LoaiPhim): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($LoaiPhim->idLPhim == $phim->idLPhim): ?>
                        <option selected="selected" value="<?php echo e($LoaiPhim->idLPhim); ?>"><?php echo e($LoaiPhim->tenLPhim); ?></option>
                        <?php else: ?>
                        <option value="<?php echo e($LoaiPhim->idLPhim); ?>"><?php echo e($LoaiPhim->tenLPhim); ?></option>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tóm tắt</label>
                    <textarea class="form-control" name="mieutaPhim"><?php echo e($phim->mieutaPhim); ?></textarea>
                </div>
                <div class="form-group">
                    <label>Đạo diễn</label>
                    <input type="text" value="<?php echo e($phim->daodienPhim); ?>" class="form-control" name="daodienPhim">
                </div>
                <div class="form-group">
                    <label>Diễn viên</label>
                    <input type="text" value="<?php echo e($phim->dienvien); ?>" class="form-control" name="dienvien">
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
                <button type="submit" class="btn btn-primary">Sửa</button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout_NV', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH O:\wamp64\www\tttn-tonghop\tttn\resources\views/NV/frmphimedit.blade.php ENDPATH**/ ?>