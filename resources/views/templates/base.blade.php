<!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('assets/vendor/fonts/circular-std/style.css" rel="stylesheet')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/charts/chartist-bundle/chartist.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/charts/morris-bundle/morris.css')}}">
    <link rel="stylesheet"
          href="{{asset('assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/charts/c3charts/c3.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/flag-icon-css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    @yield('style')
</head>

<body>
<div class="dashboard-main-wrapper">
    <div class="dashboard-header">
        @include('bases.header')
    </div>
    <div class="nav-left-sidebar sidebar-dark">
        @include('bases.left-sidebar')
    </div>
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                @if(session('danger'))
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="alert alert-danger" role="alert">
                                <h4 class="alert-heading">失敗...</h4>
                                <p>処理に失敗しました</p>
                            </div>
                        </div>
                    </div>
                @elseif(session('success'))
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="alert alert-success" role="alert">
                                <h4 class="alert-heading">成功!</h4>
                                <p>正常に処理されました！</p>
                            </div>
                        </div>
                    </div>
                @endif

                @yield('main')
            </div>
        </div>
    </div>
</div>
<script src="{{asset('assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
<script src="{{asset('assets/libs/js/main-js.js')}}"></script>
{{--<script src="{{asset('assets/vendor/charts/chartist-bundle/chartist.min.js')}}"></script>--}}
<script src="{{asset('assets/vendor/charts/sparkline/jquery.sparkline.js')}}"></script>
<script src="{{asset('assets/vendor/charts/morris-bundle/raphael.min.js')}}"></script>
<script src="{{asset('assets/vendor/charts/morris-bundle/morris.js')}}"></script>
<script src="{{asset('assets/vendor/charts/c3charts/c3.min.js')}}"></script>
<script src="{{asset('assets/vendor/charts/c3charts/d3-5.4.0.min.js')}}"></script>
<script src="{{asset('assets/vendor/charts/c3charts/C3chartjs.js')}}"></script>
{{--<script src="{{asset('assets/libs/js/dashboard-ecommerce.js')}}"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script>
@yield('script')
</body>
</html>
