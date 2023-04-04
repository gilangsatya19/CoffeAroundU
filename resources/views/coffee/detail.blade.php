<html>

<head>
    <title>Coffee Around U | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
    <style>
        /* rating */
        .rating-css div {
            color: #ffe400;
            font-size: 30px;
            font-family: sans-serif;
            font-weight: 800;
            text-align: center;
            text-transform: uppercase;
            padding: 20px 0;
        }

        .rating-css input {
            display: none;
        }

        .rating-css input+label {
            font-size: 60px;
            text-shadow: 1px 1px 0 #8f8420;
            cursor: pointer;
        }

        .rating-css input:checked+label~label {
            color: #b4afaf;
        }

        .rating-css label:active {
            transform: scale(0.8);
            transition: 0.3s ease;
        }

        .banner {
            height: 50vh;
            background-size: cover;
            background-position: center;
            background: url('{{asset('coffeeAroundU/assets/halaman_awal/register.png')}}');
        }

        .nav-atas {
            background: #fff;
            width: 100%;
            padding: 10px 10%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: relative;
        }

        .logo {
            width: 90px;
        }

        .user-pic {
            width: 40px;
            border-radius: 50px;
            cursor: pointer;
            margin-left: 30px;
        }

        nav ul {
            width: 100%;
            text-align: left;
        }

        .nav-atas ul li {
            display: inline-block;
            list-style: none;
            margin: 10px 20px;
        }

        .nav-atas ul li a {
            color: #000000;
            text-decoration: none;
        }

        .sub-menu-wrap {
            position: absolute;
            top: 100%;
            right: 10%;
            width: 500px;
            max-height: 0px;
            overflow: hidden;
            transition: max-height: 0.5s;
        }

        .sub-menu-wrap.open-menu {
            max-height: 400px;
        }

        .sub-menu {
            border: 2px solid #898686;
            border-radius: 25px;
            background: #ffffff;
            padding: 20px;
            margin: 10px;
        }

        .user-info {
            display: flex;
            align-items: center;
        }

        .user-info h3 {
            font-weight: 500;
        }

        .user-info img {
            width: 60px;
            border-radius: 50%;
            margin-right: 15px;
        }

        .sub-menu hr {
            border: 0;
            height: 1px;
            width: 100%;
            background: #ccc;
            margin: 15px 0 10px;
        }

        .sub-menu-link {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #525252;
            margin: 12px 0;
        }

        .sub-menu-link p {
            width: 100%;
        }

        .sub-menu-link img {
            width: 40px;
            background: #e5e5e5;
            border-radius: 50%;
            padding: 8px;
            margin-right: 15px;
        }

        .sub-menu-link span {
            font-size: 22px;
        }

        .sub-menu-link span {
            font-size: 16px;
        }

        a:visited {
            color: #4A2C2A;
            background-color: transparent;
            text-decoration: none;
        }


    </style>
</head>

<body>
    <nav class="nav-atas">
        <img src="https://cdn.icon-icons.com/icons2/2620/PNG/512/among_us_player_red_icon_156942.png" class="logo">
        <ul>
            <li><a href="#" class="fw-semibold">Home</a></li>
            <li><a href="#" class="fw-semibold">About Us</a></li>
            <li><a href="#" class="fw-semibold">Menu in Area</a></li>
            <li><a href="#" class="fw-semibold">Show My Menu</a></li>
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
    
    <div class="container">
        <p class="fw-bold text-dark fs-2">Coffee Detail</p>
        <div class="d-flex justify-content-center">
            <img src="https://whatsnewindonesia.com/sites/default/files/styles/1280x800/public/2022-11/Benedict_PacificPlace_jakarta_coffee_places-1.jpg?itok=pDz8YvwB"
                style=" width:650px;height:500px;" class="img-fluid" alt="...">
        </div>
        <hr>
    

        <div class="d-flex">
            <div>
                <p class="fw-bold fs-2 text-black FS-3">Vanilla Latte</p>
                <div class="d-flex">
                    <p class="font-weight-normal text-dark fs-5" >Tel-u Coffee</p>
                    <a href="#" class="text-decoration-underline" style="margin-left:10rem">Show Review</a>
                </div>
            </div>
            <p class="fw-medium text-dark fs-3" style="margin-left:40rem;">Rp.15.000</p>
    </div>
    <p class="fw-regular text-dark fs-5" style="margin-bottom:10rem;">Vanilla Latte is a coffee that filled with  Vanilla Cream which bla bla bla</p>
    <a class="btn btn-primary text-white fw-bold mt-5" style="font-size: 22px;width:10rem;height:50px;background-color: #4A2C2A; ">Edit</a>

    </div>


    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }

    </script>


</body>

</html>
