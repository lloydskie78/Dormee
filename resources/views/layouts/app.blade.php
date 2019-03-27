<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @yield('custom-css')
    @include('static.head')
</head>
<body>
    @include('static.navbar')
    @yield('header')
    <div id="app">
        <main class="pt-4 main-content">
        	@if((basename($_SERVER['REQUEST_URI']) !== 'dormee'))
        	<div class="container-fluid">
               @endif
               @yield('content')
               @if(basename($_SERVER['REQUEST_URI']) !== 'dormee')
           </div>
           @endif
       </main>
   </div>
   @include('static.footer')
   @include('static.js')

   <script type="text/javascript">

    var images = [
    "url({{asset('public/img/bg/warm_couch.jpg')}})"
    ];

    var i = 0;

    var banner = document.getElementById("banner");


        automatic();


    function automatic() {
        banner.style.backgroundImage = images[i];
        i = (i == images.length) ?  0 : i+1;
        setTimeout(automatic(), 1000);
        
    }

    
</script>

</body>
</html>
