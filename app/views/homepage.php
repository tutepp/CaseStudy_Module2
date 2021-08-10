
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quantum Able Bootstrap 4 Admin Dashboard Template</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="../assets/icon/themify-icons/themify-icons.css">

    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="../assets/icon/icofont/css/icofont.css">

    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css" href="../assets/icon/simple-line-icons/css/simple-line-icons.css">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Chartlist chart css -->
    <link rel="stylesheet" href="../assets/plugins/chartist/dist/chartist.css" type="text/css" media="all">

    <!-- Weather css -->
    <link href="../assets/css/svg-weather.css" rel="stylesheet">


    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">

</head>

<body class="sidebar-mini fixed">
<div class="loader-bg">
    <div class="loader-bar">
    </div>
</div>
<div class="wrapper">
    <!-- Navbar-->
    <header class="main-header-top hidden-print">
        <a href="index.html" class="logo"><img class="img-fluid able-logo" src="../assets/images/logo.png" alt="Theme-logo"></a>
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <ul class="top-nav lft-nav">
                <li>
                    <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image"><span> Sim Tu Quy</span>
                    </a>
                </li>
                <li>
                    <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image"><span>Sim Phat Loc</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                        <span>Diem gan ban</span><i class=" icofont icofont-simple-down"></i>
                    </a>
                    <ul class="dropdown-menu settings-menu">
                        <li><a href="#">Ha Noi</a></li>
                        <li><a href="#">Hai Phong</a></li>
                        <li><a href="#">TP HCM</a></li>

                    </ul>
                </li>
            </ul>
            <!-- Navbar Right Menu-->
            <div class="navbar-custom-menu f-right">
                <form method="post" action="http://localhost/Module2/Case/run/public/?url=SimController/searchSim">
                    <table>
                        <tr>
                            <th>
                                <input type="text" name="value" placeholder="Nhập từ khóa..." class="form-control" style="color: black ;  background-color: white">
                            </th>
                            <th>
                                <select name="option" class="form-control pro-edt-select form-control-primary">
                                    <option name="PhoneNumber" value="PhoneNumber">Số Điện Thoại</option>
                                    <option name="Center" value="Center">Thành Phố</option>
                                    <option name="Type" value="Type">Loại SIM </option>
                                    <option name="Network" value="Network">Mạng</option>
                                </select>
                            </th>


                            <th>
                                <div class="upgrade-button">
                                    <a href="#" class="icon-circle txt-white btn btn-sm btn-primary upgrade-button">
                                        <span>Tim kiem</span>
                                    </a>
                                </div>
                            </th>
                        </tr>
                    </table>
                </form>


                <!-- search -->
                <div id="morphsearch" class="morphsearch">
                    <form class="morphsearch-form">

                        <input class="morphsearch-input" type="search" placeholder="Search..." />

                        <button class="morphsearch-submit" type="submit">Search</button>

                    </form>
                    <div class="morphsearch-content">
                        <div class="dummy-column">
                            <h2>People</h2>
                            <a class="dummy-media-object" href="#!">
                                <img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&d=identicon&r=G" alt="Sara Soueidan" />
                                <h3>Sara Soueidan</h3>
                            </a>

                            <a class="dummy-media-object" href="#!">
                                <img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&d=identicon&r=G" alt="Shaun Dona" />
                                <h3>Shaun Dona</h3>
                            </a>
                        </div>
                        <div class="dummy-column">
                            <h2>Popular</h2>
                            <a class="dummy-media-object" href="#!">
                                <img src="../lassets/images/avatar-1.png" alt="PagePreloadingEffect" />
                                <h3>Page Preloading Effect</h3>
                            </a>

                            <a class="dummy-media-object" href="#!">
                                <img src="../assets/images/avatar-1.png" alt="DraggableDualViewSlideshow" />
                                <h3>Draggable Dual-View Slideshow</h3>
                            </a>
                        </div>
                        <div class="dummy-column">
                            <h2>Recent</h2>
                            <a class="dummy-media-object" href="#!">
                                <img src="../assets/images/avatar-1.png" alt="TooltipStylesInspiration" />
                                <h3>Tooltip Styles Inspiration</h3>
                            </a>
                            <a class="dummy-media-object" href="#!">
                                <img src="../assets/images/avatar-1.png" alt="NotificationStyles" />
                                <h3>Notification Styles Inspiration</h3>
                            </a>
                        </div>
                    </div>
                    <!-- /morphsearch-content -->
                    <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
                </div>
                <!-- search end -->
            </div>
        </nav>
    </header>

    <!-- Sidebar chat start -->

    <!-- Sidebar chat end-->

    <div class="container-fluid">
        <!-- Container-fluid starts -->
        <!-- Main content starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="main-header">
                    <h4>Dashboard</h4>
                </div>
            </div>
            <!-- 4-blocks row start -->
            <!-- 1-3-block row start -->
            <div class="card">
                <div class="d-flex justify-content-center">
                    <div style="min-width: 250px; height: 330px; margin: 0 auto">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block" src="../assets/images/sim1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block " src="../assets/images/sim2.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block " src="../assets/images/sim3.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 1-3-block row end -->
            <!--table-->
            <div class="card">
                <div class="card-header">
                    <h5 class="card-header-text">SIM So Dep HOT</h5>
                    <!--                  <p>For Make row Contextual add Contextual class like <code>.table-success</code> in <code> tr tag</code> and For cell add Contextual class in <code> td or th tag</code> . </p>-->
                </div>
                <div class="card-block">
                    <div class="row">
                        <div class="col-sm-12 table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>So Dien Thoai</th>
                                    <th>Mang Di Dong</th>
                                    <th>Gia Sim</th>
                                    <th>Chi Nhanh</th>
                                    <th>Loai Sim</th>
                                    <th>Tuy Chon</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($sim as $key=>$sim): ?>
                                <tr class="table-active">

                                    <td><?php echo ++$key ?></td>
                                    <td><?php echo $sim['PhoneNumber'] ?></td>
                                    <td><?php echo $sim['Network'] ?></td>
                                    <td><?php echo $sim['Price'] ?></td>
                                    <td><?php echo $sim['Center'] ?></td>
                                    <td><?php echo $sim['Type'] ?></td>
                                    <td>
                                        <a href="http://localhost/Module2/Case/run/public/?url=SimController/deleteSim/">
                                            <span class="label label-primary">Them</span>
                                        </a>
                                        <a href="http://localhost/Module2/Case/run/public/?url=SimController/deleteSim/">
                                            <span class="label label-primary">Sua</span>
                                        </a>
                                        <a href="http://localhost/Module2/Case/run/public/?url=SimController/deleteSim/" onclick= "return confirm('Bạn chắc chắn muốn xoá?')">
                                            <span class="label label-success">Xoa</span>
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 2-1 block start -->

            <div class="col-xl-4 col-lg-12">
                <div class="card">
                    <div class="card-block">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <div style="min-width: 250px; height: 330px; margin: 0 auto">
                                    <div id="carouselExampleIndicator" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w" src="../assets/images/l2.jpg" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block " src="../assets/images/l3.jpg" alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block " src="../assets/images/l1.jpg" alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-12">
                <div class="card">

                    <div class="card">
                        <div id="" style="min-width: 250px; height: 400px; margin: 0 auto">
                            <img class="d-block " src="../assets/images/r.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 2-1 block end -->
    </div>
    <!-- Main content ends -->
    <!-- Container-fluid ends -->

</div>


<!-- Warning Section Ends -->

<!-- Required Jqurey -->
<script src="../assets/plugins/Jquery/dist/jquery.min.js"></script>
<script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="../assets/plugins/tether/dist/js/tether.min.js"></script>

<!-- Required Fremwork -->
<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Scrollbar JS-->
<script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
<script src="../assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

<!--classic JS-->
<script src="../assets/plugins/classie/classie.js"></script>

<!-- notification -->
<script src="../assets/plugins/notification/js/bootstrap-growl.min.js"></script>

<!-- Sparkline charts -->
<script src="../assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>

<!-- Counter js  -->
<script src="../assets/plugins/waypoints/jquery.waypoints.min.js"></script>
<script src="../assets/plugins/countdown/js/jquery.counterup.js"></script>

<!-- Echart js -->
<script src="../assets/plugins/charts/echarts/js/echarts-all.js"></script>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>

<!-- custom js -->
<script type="text/javascript" src="../assets/js/main.min.js"></script>
<script type="text/javascript" src="../assets/pages/dashboard.js"></script>
<script type="text/javascript" src="../assets/pages/elements.js"></script>
<script src="assets/js/menu.min.js"></script>
<script>
    var $window = $(window);
    var nav = $('.fixed-button');
    $window.scroll(function(){
        if ($window.scrollTop() >= 200) {
            nav.addClass('active');
        }
        else {
            nav.removeClass('active');
        }
    });
</script>

</body>

</html>
