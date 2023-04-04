<html>
    <head>
        <title>Coffee Around U | @yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
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
            <nav class="nav-atas">
                <img src="https://cdn.icon-icons.com/icons2/2620/PNG/512/among_us_player_red_icon_156942.png" class="logo">
                <ul>
                    <li><a href="/home/main/home" class="fw-semibold">Home</a></li>
                    <li><a href="/home/main/about" class="fw-semibold">About Us</a></li>
                    <li><a href="/home/main/menu-in-area" class="fw-semibold">Menu in Area</a></li>
                    <li><a href="/home/main/my-menu" class="fw-semibold">Show My Menu</a></li>
                </ul>
                <img src="{{asset('coffeeAroundU/assets/navbar/icon_account.png')}}" class="user-pic" onclick="toggleMenu()">
                <div class="sub-menu-wrap" id="subMenu">
                    <div class="sub-menu">
                    <a href="#" class="sub-menu-link">
                        <img src="{{asset('coffeeAroundU/assets/navbar/icon_account.png')}}">
                        <p class="fw-semibold text-dark">Muhammad Goblin</p>
                        <span class="text-decoration-underline ">Edit</span>
                    </a>
                    <hr>
                    <a href="#" class="sub-menu-link">
                        <img src="{{asset('coffeeAroundU/assets/navbar/icon_account.png')}}">
                        <p class="fw-semibold text-dark">Your Cafe</p>
                        <span class="text-decoration-underline ">Edit</span>
                    </a>
                    <hr>
                    <a href="#" class="sub-menu-link">
                        <img src="{{asset('coffeeAroundU/assets/navbar/icon_account.png')}}">
                        <p class="fw-semibold text-dark">Logout</p>
                        <span></span>
                    </a>
                    </div>
                </div>
            </nav>
        <script>
            let subMenu = document.getElementById("subMenu");
             function toggleMenu(){
                subMenu.classList.toggle("open-menu");
             }
        </script>
            
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