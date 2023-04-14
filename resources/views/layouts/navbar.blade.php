    @auth

    <nav class="navbar navbar-expand-lg bg-white ">
        <div class="container-fluid">
            <a class="navbar-brand mx-4" href="/"><img src="{{asset('coffeeAroundU/assets/logo/coffeebeans.png')}}"
                    width="80px" height="80px" alt="logo-coffeAroungU"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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
                </ul>
                <img src="{{asset('coffeeAroundU/assets/navbar/icon_account.png')}}" class="user-pic mx-4"
                    onclick="toggleMenu()">
                <div class="sub-menu-wrap" id="subMenu">
                    <div class="sub-menu">
                        <a href="/home/{{auth()->user()->id}}/edit" class="sub-menu-link">
                            <img src="{{asset('coffeeAroundU/assets/navbar/icon_account.png')}}">
                            <p class="fw-semibold text-dark">{{auth()->user()->name}} </p>
                            <span class="text-decoration-underline ">Edit</span>
                        </a>
                        <hr>
                        <a href="/my_toko/{{session('toko_id')}}/edit" class="sub-menu-link">
                            <img src="{{asset('coffeeAroundU/assets/navbar/icon_account.png')}}">
                            <p class="fw-semibold text-dark">{{session('toko_nama')}}</p>
                            <span class="text-decoration-underline ">Edit</span>
                        </a>
                        <hr>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit"
                                class="sub-menu-link ms-auto btn-primary bg-dark text-white border-0 fw-semibold">Logout</button>


                        </form>
                        {{-- <a href="/logout" class="sub-menu-link">
                        <img src="{{asset('coffeeAroundU/assets/navbar/icon_account.png')}}">
                        <p class="fw-semibold text-dark">Logout</p>
                        <span></span>
                        </a> --}}
                    </div>

                </div>
            </div>
        </div>
    </nav>
    @endauth
    @guest
    <nav class="navbar navbar-expand-lg bg-white ">
        <div class="container-fluid">
            <a class="navbar-brand mx-4" href="/"><img src="{{asset('coffeeAroundU/assets/logo/coffeebeans.png')}}"
                    width="80px" height="80px" alt="logo-coffeAroungU"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-5">
                        <a class="nav-link fw-bold" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item mx-5">
                        <a class="nav-link fw-bold" aria-current="page" href="/about">About Us</a>
                    </li>
                    <li class="ms-auto">
                        <a href="/login" type="button" class="btn rounded-3 mx-3 fw-semibold"
                            style="background-color: white;font-size:16px;height:35px">Sign In</a>
                        <a href="/home/create" type="button" class="btn rounded-3 mx-4 fw-semibold text-white"
                            style="background-color: #4A2C2A;font-size:16px;height:35px">Sign Up</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    @endguest
    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }

    </script>
