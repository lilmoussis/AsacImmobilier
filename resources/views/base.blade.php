<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Immobilier</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{URL::asset('assets/images/favicon.png')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/vendor/chartist/css/chartist.min.css')}}">
    <link href="{{URL::asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
	<link href="{{URL::asset('assets/vendor/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet">
    <!-- CSS only -->
</head>
<body>
    @yield('login')
    @yield('content')

    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{URL::asset('assets/vendor/global/global.min.js')}}"></script>
	<script src="{{URL::asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
	<script src="{{URL::asset('assets/vendor/chart.js/Chart.bundle.min.js')}}"></script>
	
	<!-- Chart piety plugin files -->
    <script src="{{URL::asset('assets/vendor/peity/jquery.peity.min.js')}}"></script>
	
	<!-- Apex Chart -->
	<script src="{{URL::asset('assets/vendor/apexchart/apexchart.js')}}"></script>
	
	<!-- Dashboard 1 -->
	<script src="{{URL::asset('assets/js/dashboard/dashboard-1.js')}}"></script>
	
	<script src="{{URL::asset('assets/vendor/owl-carousel/owl.carousel.js')}}"></script>
    <script src="{{URL::asset('assets/js/custom.min.js')}}"></script>
	<script src="js/deznav-init.js"></script>
    <script src="{{URL::asset('assets/js/demo.js')}}"></script>
    <script src="{{URL::asset('assets/js/styleSwitcher.js')}}"></script>
</body>
</html>