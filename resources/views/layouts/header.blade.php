<head>
    <title>Coffee Around U @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link rel="icon" href="{{asset('coffeeAroundU/assets/logo/coffeebeans.png')}}" type="image/icon type">
    <style>
        .banner{
            height: 50vh;
            background-size: cover;
            background-position: center;
            background: url('https://wallpapercrafter.com/th800/247546-coffee-cafe-table-and-coffee-cup-hd.jpg');
            
        }
        /* Float four columns side by side */
        .column {
        float: left;
        width: 25%;
        padding: 0 10px;
        }

        

        /* Clear floats after the columns */
        .row:after {
        content: "";
        display: table;
        clear: both;
        
        }

        /* Responsive columns */
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
                display: block;
                margin-bottom: 20px;
            }
        }

        /* Style the counter cards */
        .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        
        
        margin-bottom: 2rem;
        background-color: #ffffff;
        }

        .card:hover{
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }
    </style>
</head>