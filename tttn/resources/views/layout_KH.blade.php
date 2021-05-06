<!doctype html>
<html>

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Web đặt vé xem phim</title>
    <!-- Mobile Specific Metas-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="telephone=no" name="format-detection">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Fonts -->
    <!-- Font awesome - icon font -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!-- Roboto -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>

    <!-- Stylesheets -->

    <!-- Mobile menu -->
    <link href="{{asset('KH/css/gozha-nav.css')}}" rel="stylesheet" />
    <!-- Select -->
    <link href="{{asset('KH/css/external/jquery.selectbox.css')}}" rel="stylesheet" />
    <!-- Swiper slider -->
    <link href="{{asset('KH/css/external/idangerous.swiper.css')}}" rel="stylesheet" />
    <!-- Magnific-popup -->
    <link href="{{asset('KH/css/external/magnific-popup.css')}}" rel="stylesheet" />


    <!-- Custom -->
    <link href="{{asset('KH/css/style.css?v=1')}}" rel="stylesheet" />

    <!-- Modernizr -->
    <script src="{{asset('KH/js/external/modernizr.custom.js')}}"></script>
    <style>
    .HOVER:hover .image {
        border-radius: 25px;
        border: 10px solid transparent;
        opacity:0.9 ;
    }
    </style>
    <style>
    .container {
        width: 70%;
        margin-left: 15%
    }

    .mananh__name {
        text-align: center;
        background-color: black;
        color: white;
        font-weight: bold
    }

    .ghengoi__vip,
    .ghengoi__nor {
        width: 100%;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .btn__item {
        width: 6.8%;
        margin-left: 1rem;
        margin-top: 0.5rem;
    }

    .ghengoi__vip--item {
        margin-top: 1rem;
        width: 15%;
        height: 4rem;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: red;

        font-weight: bold;
        font-size: 20px;
    }

    .ghengoi__vip--item2 {
        margin-top: 1rem;
        width: 15%;
        height: 4rem;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: red;

        font-weight: bold;
        font-size: 20px;
    }

    .ghengoi__nor--item {
        margin-top: 1rem;
        width: 15%;
        height: 4rem;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: blue;
        color: white;
        font-weight: bold;
        font-size: 20px;
    }

    .ghengoi__vip--item2 a,
    .ghengoi__nor--item a {
        text-decoration: none;
        color: white;
    }
    </style>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    	<script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
    <![endif]-->
</head>


<body>
    <div class="wrapper">

        <!-- Header section -->
        <header class="header-wrapper">
            <div class="container">
                <!-- Logo link-->
                <a href="{{URL::to('/home')}}" class="logo">
                    <img alt='logo' src="{{asset('KH/images/logo.png')}}">
                </a>

                <!-- Main website navigation-->
                <nav id="navigation-box">
                </nav>

                <!-- Additional header buttons / Auth and direct link to booking-->
                @if(Session::has('idKH'))
                <div class="control-panel">
                <div class="dropdown">
                <button class="btn btn-md btn--warning btn--book dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                {{DB::table('tbl_khachhang')->where('idKH',Session::get('idKH'))->value('tenKH')}}
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="{{URL::to('/profile',Session::get('idKH'))}}">Profile</a></li>
                    <li><a class="dropdown-item" href="{{URL::to('/logout')}}">Logout</a></li>
                </ul>
                </div>
                </div>
                @else
                <div class="control-panel">
                    <a class="btn btn-md btn--warning btn--book login-window">Login</a>
                </div>
                @endif
            </div>
        </header>

        <!-- Search bar -->
        <div class="search-wrapper d-flex align-items-center">
            <div class="container">
                <form id='search-form' action="{{URL::to('/phimSearch')}}" method='post' class="search">
                    {{csrf_field()}}
                    <input type="text" name="search_item" class="search__field" placeholder="Search">
                    <select name="sorting_item" id="search-sort" class="search__sort" tabindex="0">
                        <option value="tenPhim" selected='selected'>Theo tên phim</option>
                        <option value="2">Theo năm</option>
                        <option value="3">Theo nsx</option>
                    </select>
                    <button type='submit' name="crud" value="search"
                        class="btn btn-md btn--danger search__button">search a movie</button>
                </form>
            </div>
        </div>
        
        <div class="clearfix"></div>

        <!-- Main content -->
        @yield('layout_KH')

    </div>




        <footer class="footer-wrapper">
            <section class="container">
                <div class="col-xl-12 col-md-12">
                    <div class="footer-info">
                        <p class="copy">&copy; WEB ĐẶT VÉ XEM PHIM ONLINE</p>
                    </div>
                </div>
            </section>
        </footer>

    <!-- open/close -->
    <div class="overlay overlay-hugeinc">

        <section class="container-fluid">
            <div class="d-flex justify-content-center">
                <div class="col-sm-6">
                    <button type="button" class="overlay-close">Close</button>
                    <form id="login-form" class="login" 
                    action="{{URL::to('/actionlogin')}}" method='post' novalidate=''>
                        {{csrf_field()}}
                        <p class="login__title">Login <br><span class="login-edition">A.Movie</span></p>

                        <div class="social social--colored">
                            <a href='#' class="social__variant fa fa-facebook"></a>
                            <a href='#' class="social__variant fa fa-twitter"></a>
                            <a href='#' class="social__variant fa fa-tumblr"></a>
                        </div>

                        <p class="login__tracker">or</p>

                        <div class="field-wrap">
                            <input type='email' placeholder='Email' name='email' class="login__input">
                            <input type='password' placeholder='Password' name='password' class="login__input">

                            <input type='checkbox' id='#informed' class='login__check styled'>
                            <label for='#informed' class='login__check-info'>remember me</label>
                        </div>

                        <div class="login__control">
                            <button type='submit' name="crud" value="login"
                                class="btn btn-md btn--warning btn--wider">Login</button>           
                                <a href="{{URL::to('/getsignup')}}" class="login__tracker form__tracker">Sign Up</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

    <!-- JavaScript-->
    <!-- jQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </script>
    <!-- Migrate -->
    <script src="{{asset('KH/js/external/jquery-migrate-1.2.1.min.js')}}"></script>
    <!-- jQuery UI -->
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <!-- Bootstrap 3-->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

    <!-- Mobile menu -->
    <script src="{{asset('KH/js/jquery.mobile.menu.js')}}"></script>
    <!-- Select -->
    <script src="{{asset('KH/js/external/jquery.selectbox-0.2.min.js')}}"></script>

    <!-- Share buttons -->
    <script type="text/javascript">
    var addthis_config = {
        "data_track_addressbar": true
    };
    </script>

    <!-- Mobile menu -->
    <script src="{{asset('KH/js/jquery.mobile.menu.js')}}"></script>
    <!-- Select -->
    <script src="{{asset('KH/js/external/jquery.selectbox-0.2.min.js')}}"></script>

    <!-- Form element -->
    <script src="{{asset('KH/js/external/form-element.js')}}"></script>
    <!-- Form validation -->
    <!--<script src="{{asset('KH/js/form.js')}}"></script>-->
    <script>
    Modernizr.load({
        test: Modernizr.touch,
        yep: ['{{asset('KH/css/touch.css?v=1')}}'],
        nope: []
    });
    </script>
    <!-- Custom -->
    <script src="{{asset('KH/js/custom.js')}}"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        init_CinemaList();
    });
    </script>

    <script type="text/javascript">
    function SelectOption(url) {
        window.location.href = url.value;
    }
    </script>

    <script>
    $(document).on('change', '#select_item', function() {
        $.ajax({
            type: 'get',
            url: $("#select_item").val(),
            success: function(dsphim) {
                $('div.changepage').html('');
                $('div.changepage').html(dsphim);
            }
        })
    });
    </script>
    <script>
    $(document).on('click', '.pagination a', function(event) {
        event.preventDefault();
        var page = $(this).attr('href').split('page=')[1];

        $.ajax({
            type: 'get',
            url: $("#select_item").val(),
            data: {
                'page': page,
            },
            success: function(dsphim) {
                $('div.changepage').html('');
                $('div.changepage').html(dsphim);
            }
        })
    });
    </script>
    <script>
    $(document).on('click', '#btndatve', function(event) {
        event.preventDefault();
        swal("Bạn có muốn đặt vé ?", {
                buttons: {
                    no: "No",
                    yes: {
                        text: "Yes",
                        value: "Yes",
                    }
                },
            })
            .then((value) => {
                switch (value) {
                    case "Yes":
                        $('#frmdatve').submit();
                        swal("Đặt vé thành công!! Vui lòng kiểm tra email");
                        break;

                    default:
                }
            });
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if(Session::has('alert'))
    <script>
    swal("Alert!", "{{Session::get('alert')}}", "error")
    </script>
    @endif
    
</body>

</html>