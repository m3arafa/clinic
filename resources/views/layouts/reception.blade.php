<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') </title>

    <!-- Styles -->
    @yield('style')
    <link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet">
    @if(app()->getLocale() == 'ar')
        <link href="{{asset('public/css/bootstrap-rtl.min.css')}}" rel="stylesheet">
    @endif
<!-- font-awesome -->
    <link href="{{asset('public/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    {{--    <link href="{{asset('public/css/plugins/slick/slick.css')}}" rel="stylesheet">--}}
    {{--    <link href="{{asset('public/css/plugins/slick/slick-theme.css')}}" rel="stylesheet">--}}
    <link href="{{asset('public/css/animate.css')}}" rel="stylesheet">

    @if(app()->getLocale() == 'ar')
        <link href="{{asset('public/css/style-rtl.css')}}" rel="stylesheet">
    @else
        <link href="{{asset('public/css/style.css')}}" rel="stylesheet">
    @endif

    {{--bootstrap select--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

</head>
<body>

<!-- Wrapper-->
<div id="wrapper">

    <!-- Navigation -->
@include('layouts.navigation-reception')

<!-- Page wraper -->
    <div id="page-wrapper" class="gray-bg">

        <!-- Page wrapper -->
    @include('layouts.topnavbar')

    <!-- Main view  -->
        <div class="wrapper wrapper-content animated fadeInRight">
            @yield('content')
        </div>
        <!-- Footer -->
        @include('layouts.footer')

    </div>
    <!-- End page wrapper-->

</div>
<!-- End wrapper-->
<!-- Scripts -->
<!-- Mainly scripts -->
<script src="{{asset('public/js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('public/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('public/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<!-- Flot -->
{{--<script src="{{asset('public/js/plugins/flot/jquery.flot.js')}}"></script>--}}
{{--<script src="{{asset('public/js/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>--}}
{{--<script src="{{asset('public/js/plugins/flot/jquery.flot.spline.js')}}"></script>--}}
{{--<script src="{{asset('public/js/plugins/flot/jquery.flot.resize.js')}}"></script>--}}
{{--<script src="{{asset('public/js/plugins/flot/jquery.flot.pie.js')}}"></script>--}}

<!-- Peity -->
{{--<script src="{{asset('public/js/plugins/peity/jquery.peity.min.js')}}"></script>--}}
{{--<script src="{{asset('public/js/demo/peity-demo.js')}}"></script>--}}

<!-- Custom and plugin javascript -->
<script src="{{asset('public/js/inspinia.js')}}"></script>
<script src="{{asset('public/js/plugins/pace/pace.min.js')}}"></script>

{{-- Bootstrap select--}}

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>

<!-- jQuery UI -->
{{--<script src="{{asset('public/js/plugins/jquery-ui/jquery-ui.min.js')}}"></script>--}}

<!-- GITTER -->
{{--<script src="{{asset('public/js/plugins/gritter/jquery.gritter.min.js')}}"></script>--}}

<!-- Sparkline -->
{{--<script src="{{asset('public/js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>--}}

<!-- Sparkline demo data  -->
{{--<script src="{{asset('public/js/demo/sparkline-demo.js')}}"></script>--}}

<!-- ChartJS-->
{{--<script src="{{asset('public/js/plugins/chartJs/Chart.min.js')}}"></script>--}}

<!-- Toastr -->
{{--<script src="{{asset('public/js/plugins/toastr/toastr.min.js')}}"></script>--}}





@yield('scripts')

</body>
</html>
