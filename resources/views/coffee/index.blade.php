@extends('layouts.main')
 
@section('title', 'Coffe Aroung U')
 
@section('navbar')
    @parent

    
@endsection
 
@section('content')
    
    
    
    <div class="container-fluid banner">
        <div class="fs-1 container col-lg-10 d-flex justify-content-end" style="height:100%;align-items:center">
            <form action="" method="GET">
                <div class="text-center">
                    <p class="text-white fw-semibold">Get Your Coffee <br></p>
                    <button class="btn btn-primary bg-light border-dark text-black fw-semibold px-5">Explore</button>
                </div>
            </form>
            

            
        </div>
        

    </div>
    
    
    
    
@endsection

@section('footer')
    @parent
 
    
@endsection