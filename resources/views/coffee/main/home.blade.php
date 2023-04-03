@extends('layouts.mainHome')
 
@section('title', 'Home')
 
@section('navbar')
    @parent

    
@endsection
 
@section('content')
    
    
    <div class="container">
        <div class="container-fluid banner">
            <div class="fs-1 container col-lg-10 d-flex justify-content-end" style="height:100%;align-items:center">
                <form action="" method="GET">
                    <div class="text-center">
                    </div>
                </form>
            </div>
        </div>
        <div class="d-flex">
                <div>
                    <p class="fw-bold fs-2 text-black my-3 text-center">Start Your Coffee Journey</p>
                    <div class="d-flex">
                        <p class="fw-semibold fs-4">Your Coffee (3)</p>
                        <a href="" class="fw-semibold fs-5 text-black mx-4 mt-1">Show My Menu</a>
                    </div>
                    
                </div>
                
                
                
                <a class="btn btn-primary text-white fw-semibold mt-5" style="font-size: 22px;margin-left:40rem;width:13rem;height: 50px;background-color: #4A2C2A">Add Coffee</a>
                
            
            
                 
            
        </div>
    </div>
    
    
    
    
    
@endsection

@section('footer')
    @parent
 
    
@endsection