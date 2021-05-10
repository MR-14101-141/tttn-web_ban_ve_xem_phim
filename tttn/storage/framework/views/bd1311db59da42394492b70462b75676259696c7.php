
<?php $__env->startSection('dscuanv'); ?>
<div class="container-fluid">
<br>
<div class="input-group mb-3">
            <input type="text" name="search" id="search" class="form-control" placeholder="Search KM" />
        </div>
        <br>
        <div class="card">
        <div class="card-body">
        <a href="<?php echo e(url('/frmthemKM')); ?>" title="Thêm mới" 
        style="margin:20px; color:black;text-decoration: none;" class="d-flex justify-content-end">
        <i class="fas fa-plus-square" style="font-size: 24px;"></i></a>
        <table class="table table-hover ">
        <?php echo $__env->make('NV.kmAll', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </table>
    <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
    <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="idKM" />
    <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />
    </div>
        </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
<script>
function openurl(url) {
    window.location.href = url;
}
</script>

<!--AJAX live search-->
<script>
$(document).ready(function() {

    function fetch_data(page, sort_type, sort_by, query) {
        $.ajax({
            type: 'get',
            url: '<?php echo e(URL::to('/dskm/liveSearchdskm')); ?>',
            data: {
                'page': page,
                'sortby': sort_by,
                'sorttype': sort_type,
                'query': query
            },
            success: function(dskm) {
                $('table').html('');
                $('table').html(dskm);
            }
        })
    }

    $(document).on('keyup', '#search', function() {
        var query = $('#search').val();
        var column_name = $('#hidden_column_name').val();
        var sort_type = $('#hidden_sort_type').val();
        var page = $('#hidden_page').val();
        fetch_data(page, sort_type, column_name, query);
    });
    $(document).on('click', '.pagination a', function(event) {
        event.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        $('#hidden_page').val(page);
        var column_name = $('#hidden_column_name').val();
        var sort_type = $('#hidden_sort_type').val();

        var query = $('#search').val();

        $('li').removeClass('active');
        $(this).parent().addClass('active');
        fetch_data(page, sort_type, column_name, query);
    });

});
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout_NV', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH O:\wamp64\www\tttn-tonghop\tttn-web_ban_ve_xem_phim\tttn\resources\views/NV/kmAllsearch.blade.php ENDPATH**/ ?>