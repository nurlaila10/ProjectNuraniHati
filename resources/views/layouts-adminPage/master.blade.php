<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/sales-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Jan 2023 07:44:26 GMT -->

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>KB TK | Nurani Hati</title>


    <link rel="stylesheet" href="{{asset('adminPage/assets/css/bootstrap1.min.css')}}" />

    <link rel="stylesheet" href="{{asset('adminPage/assets/vendors/themefy_icon/themify-icons.css')}}" />

    <link rel="stylesheet" href="{{asset('adminPage/assets/vendors/niceselect/css/nice-select.css')}}" />

    <link rel="stylesheet" href="{{asset('adminPage/assets/vendors/owl_carousel/css/owl.carousel.css')}}" />

    <link rel="stylesheet" href="{{asset('adminPage/assets/vendors/gijgo/gijgo.min.css')}}" />

    <link rel="stylesheet" href="{{asset('adminPage/assets/vendors/font_awesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('adminPage/assets/vendors/tagsinput/tagsinput.css')}}" />

    <link rel="stylesheet" href="{{asset('adminPage/assets/vendors/datepicker/date-picker.css')}}" />
    <link rel="stylesheet" href="{{asset('adminPage/assets/vendors/vectormap-home/vectormap-2.0.2.css')}}" />

    <link rel="stylesheet" href="{{asset('adminPage/assets/vendors/scroll/scrollable.css')}}" />

    <link rel="stylesheet" href="{{asset('adminPage/assets/vendors/datatable/css/jquery.dataTables.min.css')}}" />
    <link rel="stylesheet" href="{{asset('adminPage/assets/vendors/datatable/css/responsive.dataTables.min.css')}}" />
    <link rel="stylesheet" href="{{asset('adminPage/assets/vendors/datatable/css/buttons.dataTables.min.css')}}" />

    <link rel="stylesheet" href="{{asset('admminPage/assets/vendors/text_editor/summernote-bs4.css')}}" />

    <link rel="stylesheet" href="{{asset('adminPage/assets/vendors/morris/morris.css')}}">

    <link rel="stylesheet" href="{{asset('adminPage/assets/vendors/material_icon/material-icons.css')}}" />

    <link rel="stylesheet" href="{{asset('adminPage/assets/css/metisMenu.css')}}">

    <link rel="stylesheet" href="{{asset('adminPage/assets/css/style1.css')}}" />
    <link rel="stylesheet" href="{{asset('adminPage/assets/css/colors/default.css" id="colorSkinCSS')}}">
</head>

<body class="crm_body_bg">


    <nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
        @include('layouts-adminPage.partial.sidebar')
    </nav>

    <section class="main_content dashboard_part large_header_bg">

        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        @include('layouts-adminPage.partial.navbar')
                    </div>
                </div>
            </div>
        </div>

        <div class="main_content_iner overly_inner ">
            <div class="container-fluid p-0 ">
                @yield('content')
            </div>
        </div>
    </section>
    <div id="back-top" style="display: none;">
        <a title="Go to Top" href="#">
            <i class="ti-angle-up"></i>
        </a>
    </div>

    <script src="{{asset('adminPage/assets/js/jquery1-3.4.1.min.js')}}"></script>

    <script src="{{asset('adminPage/assets/js/popper1.min.js')}}"></script>

    <script src="{{asset('adminPage/assets/js/bootstrap.min.html')}}"></script>

    <script src="{{asset('adminPage/assets/js/metisMenu.js')}}"></script>

    <script src="{{asset('adminPage/assets/vendors/count_up/jquery.waypoints.min.js')}}"></script>

    <script src="{{asset('adminPage/assets/vendors/chartlist/Chart.min.js')}}"></script>

    <script src="{{asset('adminPage/assets/vendors/count_up/jquery.counterup.min.js')}}"></script>

    <script src="{{asset('adminPage/assets/vendors/niceselect/js/jquery.nice-select.min.js')}}"></script>

    <script src="{{asset('adminPage/assets/vendors/owl_carousel/js/owl.carousel.min.js')}}"></script>

    <script src="{{asset('adminPage/assets/vendors/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('adminPage/assets/vendors/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('adminPage/assets/vendors/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('adminPage/assets/vendors/datatable/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('adminPage/assets/vendors/datatable/js/jszip.min.js')}}"></script>
    <script src="{{asset('adminPage/assets/vendors/datatable/js/pdfmake.min.js')}}"></script>
    <script src="{{asset('adminPage/assets/vendors/datatable/js/vfs_fonts.js')}}"></script>
    <script src="{{asset('adminPage/assets/vendors/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('adminPage/assets/vendors/datatable/js/buttons.print.min.js')}}"></script>

    <script src="{{asset('adminPage/assets/vendors/datepicker/datepicker.js')}}"></script>
    <script src="{{asset('adminPage/assets/vendors/datepicker/datepicker.en.js')}}"></script>
    <script src="{{asset('adminPage/assets/vendors/datepicker/datepicker.custom.js')}}"></script>
    <script src="{{asset('adminPage/assets/js/chart.min.js')}}"></script>
    <script src="{{asset('adminPage/assets/vendors/chartjs/roundedBar.min.js')}}"></script>

    <script src="{{asset('adminPage/assets/vendors/progressbar/jquery.barfiller.js')}}"></script>

    <script src="{{asset('adminPage/assets/vendors/tagsinput/tagsinput.js')}}"></script>

    <script src="{{asset('adminPage/assets/vendors/text_editor/summernote-bs4.js')}}"></script>
    <script src="{{asset('adminPage/assets/vendors/am_chart/amcharts.js')}}"></script>

    <script src="{{asset('adminPage/assets/vendors/scroll/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('adminPage/assets/vendors/scroll/scrollable-custom.js')}}"></script>

    <script src="{{asset('adminPage/assets/vendors/vectormap-home/vectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('adminPage/assets/vendors/vectormap-home/vectormap-world-mill-en.js')}}"></script>

    <script src="{{asset('adminPage/assets/vendors/apex_chart/apex-chart2.js')}}"></script>
    <script src="{{asset('adminPage/assets/vendors/apex_chart/apex_dashboard.js')}}"></script>
    <script src="{{asset('adminPage/assets/vendors/echart/echarts.min.js')}}"></script>
    <script src="{{asset('adminPage/assets/vendors/chart_am/core.js')}}"></script>
    <script src="{{asset('adminPage/assets/vendors/chart_am/charts.js')}}"></script>
    <script src="{{asset('adminPage/assets/vendors/chart_am/animated.js')}}"></script>
    <script src="{{asset('adminPage/assets/vendors/chart_am/kelly.js')}}"></script>
    <script src="{{asset('adminPage/assets/vendors/chart_am/chart-custom.js')}}"></script>

    <script src="{{asset('adminPage/assets/js/dashboard_init.js')}}"></script>
    <script src="{{asset('adminPage/assets/js/custom.js')}}"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/sales-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Jan 2023 07:44:26 GMT -->

</html>
