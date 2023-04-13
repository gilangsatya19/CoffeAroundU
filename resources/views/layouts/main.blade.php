<html>
    @include('layouts.header')
    <body>
        @section('navbar')
            @include('layouts.navbar')
            
        @show
 
        <div class="">
            @yield('content')
        </div>

        @section('footer')
            @include('layouts.footer')
        @show

    </body>
</html>