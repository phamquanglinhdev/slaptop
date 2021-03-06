<!DOCTYPE html>
<html lang="vi">
<head>
    <title>{{isset($title) ? $title : 'SLaptop'}}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/app.css')}}">
    <script type="text/javascript" src="{{asset('asset/js/fontawesome.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/js/poper.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/js/bootstrap.min.js')}}"></script>
</head>
<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0"
        nonce="T8surPrS"></script>
<div class="container-fluid">
    <header class="bg-primary">
        <div class="py-2 bg-primary text-white">
            <div class="row m-0 text-center px-5">
                <div class="col-md-3 col-sm-6 col-12">
                    <i class="fas fa-mail-bulk"></i> Slaptopvietnam@gmail.com
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <i class="fas fa-phone"></i> 0904 800 240
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <i class="fab fa-facebook"></i> SLaptopVietNam
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <i class="fas fa-mail-bulk"></i> Slaptopvietnam@gmail.com
                </div>
            </div>
        </div>
        <div class="py-2 bg-white">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md">
                        <a class="link-style-none text-center text-lg-left" href="{{route('index')}}">
                            <img src="{{asset('asset/logo/logo.png')}}" class="w-100">
                        </a>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <form action="{{route('search')}}" method="get">
                                @csrf
                                <div class="input-group">
                                    <input class="form-control rounded-0" name="search"
                                           placeholder="T??m ki???m m???i th??? t???i ????y..">
                                    <button class="btn btn-primary rounded-0 input-group-append"><i
                                            class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <form action="#" method="get">
                                <div class="bg-primary h4 text-white rounded p-2 text-center">
                                    Ng??y: {{date('d')}}-{{date('m')}}-{{date("Y")}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg h5 m-0 navbar-dark sticky-top bg-primary">
        <div class="container">
            <a class="navbar-brand d-block d-md-none" href="{{route('index')}}">SLaptop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('index')}}">Trang ch???</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('frontend.about')}}">Gi???i thi???u</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            S???n ph???m
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{route('tag',['slug'=>'san-pham-noi-bat.aspx','page'=>1])}}">S???n ph???m n???i b???t</a></li>
                            <li><a class="dropdown-item" href="{{route('tag',['slug'=>'san-pham-ban-chay.aspx','page'=>1])}}">S???n ph???m b??n ch???y</a></li>
                            <li><a class="dropdown-item" href="{{route('tag',['slug'=>'san-pham-cao-cap.aspx','page'=>1])}}">S???n ph???m cao c???p</a></li>
                            <li><a class="dropdown-item" href="{{route('tag',['slug'=>'san-pham-giam-gia.aspx','page'=>1])}}">S???n ph???m ??ang gi???m gi??</a></li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle dropright  " href="#">Danh m???c</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('category',['slug'=>'laptop.aspx','page'=>1])}}">Laptop</a></li>
                                    <li><a class="dropdown-item" href="{{route('category',['slug'=>'dien-thoai.aspx','page'=>1])}}">??i???n tho???i</a></li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="{{route('category',['slug'=>'phu-kien.aspx','page'=>1])}}">Ph??? ki???n</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{route('category',['slug'=>'sac.aspx','page'=>1])}}">S???c</a></li>
                                            <li><a class="dropdown-item" href="{{route('category',['slug'=>'tai-nghe.aspx','page'=>1])}}">Tai nghe</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('frontend.contact')}}">Li??n h???</a>
                    </li>
                </ul>
                <div class="text-white">
                    @if(backpack_auth()->check())
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="user" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{backpack_user()->name}}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="user">
                                    <a class="dropdown-item" href="{{route('frontend.profile')}}">H??? s??</a>
                                    @if(backpack_user()->role <= 1)
                                        <a class="dropdown-item" href="{{route('backpack.dashboard')}}">Qu???n tr???</a>
                                    @endif
                                    <a href="{{route('cart.show')}}" class="dropdown-item">Gi??? h??ng</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{route('backpack.auth.logout')}}">????ng xu???t</a>
                                </div>
                            </li>
                        </ul>
                    @else
                        <a class="text-white px-1" href="{{route('backpack.auth.login')}}">
                            <i class="fas fa-sign-in-alt"></i> ????ng nh???p </a>
                        <a class="text-white px-1 btn btn-success py-1" href="{{route('backpack.auth.register')}}">
                            <i class="fas fa-plus-square"></i> ????ng k?? </a>
                    @endif
                </div>
            </div>
        </div>
    </nav>
@yield('slider')
@yield('content')
<!-- Site footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>SLAPTOP</h6>
                    <p class="text-justify">
                        SLaptop.com l?? doanh nghi???p chuy??n kinh doanh m??y t??nh, ??i???n tho???i, ph??? ki???n T???t nh???t,
                        ?????m b???o v??? c??? ch???t l?????ng, m???u m??.S???n ph???m ??a d???ng c??ng nhi???u ch????ng tr??nh khuy???n m???i h???p d???n.
                    </p>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Xu h?????ng</h6>
                    <ul class="footer-links">
                        <li><a  href="{{route('tag',['slug'=>'san-pham-noi-bat.aspx','page'=>1])}}">S???n ph???m n???i b???t</a></li>
                        <li><a  href="{{route('tag',['slug'=>'san-pham-ban-chay.aspx','page'=>1])}}">S???n ph???m b??n ch???y</a></li>
                        <li><a  href="{{route('tag',['slug'=>'san-pham-cao-cap.aspx','page'=>1])}}">S???n ph???m cao c???p</a></li>
                        <li><a  href="{{route('tag',['slug'=>'san-pham-giam-gia.aspx','page'=>1])}}">S???n ph???m ??ang gi???m gi??</a></li>
                    </ul>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Li??n k???t</h6>
                    <ul class="footer-links">
                        <li><a href="{{route('frontend.about')}}">Gi???i thi???u</a></li>
                        <li><a href="{{route('frontend.contact')}}">Li??n h???</a></li>
                        <li><a href="{{route('frontend.page',['key'=>'be_client'])}}">????ng k?? l??m ?????i l??</a></li>
                        <li><a href="{{route('frontend.page',['key'=>'privacy'])}}">Ch??nh s??ch b???o m???t</a></li>
                        <li><a href="{{route('frontend.page',['key'=>'be_staff'])}}">Ch??nh s??ch tuy???n d???ng</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by
                        <a href="#">SLaptopTeam</a>.
                    </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a class="dribbble" href="#"><i class="fab fa-dribbble"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function () {
            FB.init({
                xfbml: true,
                version: 'v10.0'
            });
        };

        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Your Plugin chat code -->
    <div class="fb-customerchat"
         attribution="setup_tool"
         page_id="108501291338942">
    </div>
    <script>
        $('.dropdown-menu a.dropdown-toggle').on('click', function (e) {
            if (!$(this).next().hasClass('show')) {
                $(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
            }
            var $subMenu = $(this).next('.dropdown-menu');
            $subMenu.toggleClass('show');


            $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
                $('.dropdown-submenu .show').removeClass('show');
            });


            return false;
        });
    </script>
</div>
</body>
</html>
