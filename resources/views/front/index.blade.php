<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
         <title>Hotwear</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="image/favicon.png">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" media="screen" />
        <script src="{{asset('javascript/jquery-2.1.1.min.js')}}" type="text/javascript"></script>
        
        <!-- <script type="text/javascript" src="javascript/template_js/template.js"></script>
         -->
        <link href="{{asset('javascript/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css" />
        <link href='https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,700,900' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
        
        <link href="{{asset('css/stylesheet.css')}}" rel="stylesheet">
        <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
        <link href="{{asset('javascript/owl-carousel/owl.carousel.css')}}" type="text/css" rel="stylesheet" media="screen" />
        <link href="{{asset('javascript/owl-carousel/owl.transitions.css')}}" type="text/css" rel="stylesheet" media="screen" />
        <script src="{{asset('javascript/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script type="{{asset('text/javascript" src="javascript/template_js/jstree.min.js')}}"></script>
      
        <script src="{{asset('javascript/common.js')}}" type="text/javascript"></script>
        <!-- <script src="javascript/global.js" type="text/javascript"></script> -->
        <script src="{{asset('javascript/owl-carousel/owl.carousel.min.js')}}" type="text/javascript"></script>
       
        
    
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div id="app">
            
            </router-view><router-view>
            <myfooter></myfooter>        
            </div>
        </div>
<script src="{{asset('js/app.js')}}"></script>
 <script src="{{asset('javascript/parally.js')}}"></script>


<script>
   

$('.parallax').parally({offset: -60});

</script>
<script>
    $('.footer-top-cms').parally({offset: -200});
</script>
</body>
    
</html>
