<html>
    <head>
        <title>Coffee Around U | @yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
        <style>
            .banner{
                height: 50vh;
                background-size: cover;
                background-position: center;
                background: url('{{asset('coffeeAroundU/assets/halaman_awal/register.png')}}');
                
            }
           
        </style>
    </head>
    <body>
        @section('navbar')
            <nav class="navbar navbar-expand-lg bg-white ">
                <div class="container-fluid">
                    <a class="navbar-brand mx-4" href="/"><img src="https://cdn.icon-icons.com/icons2/2620/PNG/512/among_us_player_red_icon_156942.png" width="90px" height="90px" alt="logo-coffeAroungU"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item mx-5">
                                <a class="nav-link fw-bold" aria-current="page" href="/home">Home</a>
                            </li>
                            <li class="nav-item mx-5">
                                <a class="nav-link fw-bold" aria-current="page" href="/about">About Us</a>
                            </li>
                            <li class="nav-item mx-5">
                                <a class="nav-link fw-bold" href="/contact">Contact Us</a>
                            </li>
                        </ul>
                        <div>
                            <a href="/home/sign-in" type="button" class="btn rounded-3 mx-3 fw-semibold" style="background-color: white;font-size:16px;height:35px" >Sign In</a>
                            <a href="{{route('create.user')}}" type="button" class="btn rounded-3 mx-4 fw-semibold text-white" style="background-color: #4A2C2A;font-size:16px;height:35px">Sign Up</a>
                        </div>
                        
                        <div>
                            <img class="style-scope mx-3" src="{{asset('coffeeAroundU/assets/navbar/icon_account.png')}}" height="40" width="40" alt="">
                        </div>
                        
                    </div>
                </div>
            </nav>
            
        @show
 
        <div class="">
            @yield('content')
        </div>

        @section('footer')
            <div class="position-absolute bottom-auto" style="background-color: #4A2C2A;width:100%">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                            <ul class="navbar-nav me-auto mb-0 mb-lg-0 ">
                                <li class="nav-item mx-5">
                                    <p class="fw-bold" style="color:white">Reach Us</p>
                                    <a style="color:white" href="">coffeearoundu@gmail.co.id</a>
                                    <p style="color:white">(+62) 3271901247</p>
                                </li>
                                <li class="nav-item" style="margin-left: 15rem">
                                    <p class="fw-bold" style="color:white">Social Media</p>
                                    <a style="color:white" href="">Coffee Around-U</a><br>
                                    <a style="color:white" href="">@coffeearoundu</a><br>
                                    <a style="color:white" href="">@coffeearound</a><br>
                                    <a style="color:white" href="">coffeearound</a><br>
                                    
                                </li>
                            </ul>
                            <div>
                                <img class="mx-5" src="https://cdn.icon-icons.com/icons2/2620/PNG/512/among_us_player_red_icon_156942.png" style="object-position: bot right;" width="150px" height="150px" alt="">
                            </div>
                            
                            
                        </div>
                    </div>
                </nav>
                
                
                
                

            </div>
        @show

    </body>
</html>