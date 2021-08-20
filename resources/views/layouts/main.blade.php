<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The Experts || Responsive HTML 5 Template</title> 

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/responsive.css')}}">

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('asset/images/fav-icon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('asset/images/fav-icon/favicon-32x32.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{asset('asset/images/fav-icon/favicon-16x16.png')}}" sizes="16x16">

</head>
<body>
    <div class="boxed_wrapper">
        @include('homepage.header')
        @yield('content')
        @include('homepage.footer')
    

           <!-- Scroll Top Button -->
           <button class="scroll-top tran3s color2_bg">
            <span class="fa fa-angle-up"></span>
        </button>
        <!-- pre loader  -->
        <div class="preloader"></div>
 <!-- jQuery js -->
 <script src="{{asset('asset/js/jquery.js')}}"></script>
 <!-- bootstrap js -->
 <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
 <!-- jQuery ui js -->
 <script src="{{asset('asset/js/jquery-ui.js')}}"></script>
 <!-- owl carousel js -->
 <script src="{{asset('asset/js/owl.carousel.min.js')}}"></script>
 <!-- jQuery validation -->
 <script src="{{asset('asset/js/jquery.validate.min.js')}}"></script>

 <!-- mixit up -->
 <script src="{{asset('asset/js/wow.js')}}"></script>
 <script src="{{asset('asset/js/jquery.mixitup.min.js')}}"></script>
 <script src="{{asset('asset/js/jquery.fitvids.js')}}"></script>
 <script src="{{asset('asset/js/bootstrap-select.min.js')}}"></script>
 <script src="{{asset('asset/js/menuzord.js')}}"></script>

 <!-- revolution slider js -->
 <script src="{{asset('asset/js/jquery.themepunch.tools.min.js')}}"></script>
 <script src="{{asset('asset/js/jquery.themepunch.revolution.min.js')}}"></script>
 <script src="{{asset('asset/js/revolution.extension.actions.min.js')}}"></script>
 <script src="{{asset('asset/js/revolution.extension.carousel.min.js')}}"></script>
 <script src="{{asset('asset/js/revolution.extension.kenburn.min.js')}}"></script>
 <script src="{{asset('asset/js/revolution.extension.layeranimation.min.js')}}"></script>
 <script src="{{asset('asset/js/revolution.extension.migration.min.js')}}"></script>
 <script src="{{asset('asset/js/revolution.extension.navigation.min.js')}}"></script>
 <script src="{{asset('asset/js/revolution.extension.parallax.min.js')}}"></script>
 <script src="{{asset('asset/js/revolution.extension.slideanims.min.js')}}"></script>
 <script src="{{asset('asset/js/revolution.extension.video.min.js')}}"></script>

 <!-- fancy box -->
 <script src="{{asset('asset/js/jquery.fancybox.pack.js')}}"></script>
 <script src="{{asset('asset/js/jquery.polyglot.language.switcher.js')}}"></script>
 <script src="{{asset('asset/js/nouislider.js')}}"></script>
 <script src="{{asset('asset/js/jquery.bootstrap-touchspin.js')}}"></script>
 <script src="{{asset('asset/js/SmoothScroll.js')}}"></script>
 <script src="{{asset('asset/js/jquery.appear.js')}}"></script>
 <script src="{{asset('asset/js/jquery.countTo.js')}}"></script>
 <script src="{{asset('asset/js/jquery.flexslider.js')}}"></script>
 <script src="{{asset('asset/js/imagezoom.js')}}"></script> 
 <script id="map-script" src="{{asset('asset/js/default-map.js')}}"></script>
 <script src="{{asset('asset/js/custom.js')}}"></script>

</div>
 
</body>
</html>