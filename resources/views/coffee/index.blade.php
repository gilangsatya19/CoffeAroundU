@extends('layouts.main')
 
@section('title', '')
 
@section('navbar')
    @parent

    
@endsection
 
@section('content')
    
    
    <div class="container">
        <div class="container-fluid banner">
            <div class="fs-1 container col-lg-10 d-flex justify-content-end" style="height:100%;align-items:center">
                
                    <div class="text-center">
                        <p class="text-white fw-semibold">Join the Coffee World <br></p>
                        <a href="/login/create" class="btn btn-primary bg-light border-dark text-black fw-semibold px-5">Register Your Cafe</a>
                    </div>
                
            </div>
        </div>
    </div>
    
    
    
    
    
@endsection

@section('footer')
    @parent
 
    
@endsection