<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vietpro Mobile Shop</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/datepicker3.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">

        <!--Icons-->
        <script src="js/lumino.glyphs.js"></script>

        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><span>VIETPROSHOP</span>Admin</a>
                    <ul class="user-menu">
                        <li class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg><span style="color: white;">Xin chào, </span> Thành viên <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Thông tin thành viên</a></li>
                                <li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Cài đặt</a></li>
                                <li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Đăng xuất</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div><!-- /.container-fluid -->
        </nav>

        <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
            <form role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Tìm kiếm">
                </div>
            </form>
            <ul class="nav menu">
                <li><a href="index.html"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Trang chủ quản trị</a></li>
                <li class="parent" >
                    <a href="#">
                        <span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Quản lý thành viên
                    </a>
                    <ul class="children collapse" id="sub-item-1">
                        <li>
                            <a href="#">
                                <svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg>
                                Thêm mới
                            </a>
                        </li>
                    </ul>			
                </li>
                <li class="parent active">
                    <a href="#">
                        <span data-toggle="collapse" href="#sub-item-2"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Quản lý danh mục
                    </a>
                    <ul class="children collapse" id="sub-item-2">
                        <li>
                            <a href="#">
                                <svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg>
                                Thêm mới
                            </a>
                        </li>

                    </ul>		
                </li>
                <li class="parent ">
                    <a href="#">
                        <span data-toggle="collapse" href="#sub-item-3"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Quản lý sản phẩm
                    </a>
                    <ul class="children collapse" id="sub-item-3">
                        <li>
                            <a href="#">
                                <svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg>
                                Thêm mới
                            </a>
                        </li>

                    </ul>				
                </li>
                <li class="parent ">
                    <a href="#">
                        <span data-toggle="collapse" href="#sub-item-4"><svg class="glyph stroked two messages"><use xlink:href="#stroked-two-messages"/></svg></span> Quản lý bình luận
                    </a>	
                </li>
                <li class="parent ">
                    <a href="#">
                        <span data-toggle="collapse" href="#sub-item-5"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Quản lý quảng cáo
                    </a>
                    <ul class="children collapse" id="sub-item-5">
                        <li>
                            <a class="" href="#">
                                <svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Thêm mới
                            </a>
                        </li>

                    </ul>			
                </li>

                <li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"/></svg> Cấu hình</a></li>

                <li role="presentation" class="divider"></li>
                <li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Đăng xuất</a></li>
            </ul>

        </div><!--/.sidebar-->

        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
            <div class="row">
                <ol class="breadcrumb">
                    <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                    <li class="active"></li>
                </ol>
            </div><!--/.row-->

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Thêm mới danh mục</h1>
                </div>
            </div><!--/.row-->


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Thêm mới danh mục</div>
                        <div class="panel-body">
                            <div class="col-md-12">
                                <form role="form" method="post">

                                    <div class="form-group">
                                        <label>Tên danh mục</label>
                                        <input class="form-control" type="text" required="" name="ten_dm">
                                    </div>																					
                                    <button type="submit" class="btn btn-primary" name="submit">Thêm mới</button>
                                    <button type="reset" class="btn btn-default">Làm mới</button>

                            </div>
                            </form>
                        </div>
                    </div>
                </div><!-- /.col-->
            </div><!-- /.row -->

        </div><!--/.main-->

        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/chart.min.js"></script>
        <script src="js/chart-data.js"></script>
        <script src="js/easypiechart.js"></script>
        <script src="js/easypiechart-data.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script>
            !function ($) {
                $(document).on("click", "ul.nav li.parent > a > span.icon", function () {
                    $(this).find('em:first').toggleClass("glyphicon-minus");
                });
                $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
            }(window.jQuery);

            $(window).on('resize', function () {
                if ($(window).width() > 768)
                    $('#sidebar-collapse').collapse('show')
            })
            $(window).on('resize', function () {
                if ($(window).width() <= 767)
                    $('#sidebar-collapse').collapse('hide')
            })
        </script>	
    </body>

</html>
