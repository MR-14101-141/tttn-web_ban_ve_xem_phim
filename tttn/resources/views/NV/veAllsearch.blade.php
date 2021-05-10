@extends('layout_NV')
@section('dscuanv')
<div class="container-fluid">   
<br>
        <div class="input-group mb-3">
            <input type="text" name="search" id="search" class="form-control" placeholder="Search Ticket" />
        </div>
        <br>
        <div class="card">
        <div class="card-body">
        <table class="table table-hover ">
        @include('NV.veAll')
        </table>
        <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
        <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="idVe" />
        <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />
        </div>
        </div>
    </div>

    <script>
    function printExternal(url) {
        var printWindow = window.open(url, 'Print', 'left=200, top=200, width=950, height=500, toolbar=0, resizable=0');

        printWindow.addEventListener('load', function() {
            if (Boolean(printWindow.chrome)) {
                printWindow.print();
                setTimeout(function() {
                    printWindow.close();
                }, 500);
            } else {
                printWindow.focus();
                printWindow.print();
                printWindow.close();
            }
        }, true);
    }
    </script>

    <!--AJAX live search-->
    <script>
    $(document).ready(function() {

        function fetch_data(page, sort_type, sort_by, query) {
            $.ajax({
                type: 'get',
                url: '{{URL::to('/dsve/liveSearchdsve') }}',
                data: {
                    'page': page,
                    'sortby': sort_by,
                    'sorttype': sort_type,
                    'query': query
                },
                success: function(dsve) {
                    $('table').html('');
                    $('table').html(dsve);
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
@endsection