@extends('layouts.main')
 
@section('title', '| About Us')
 
@section('navbar')
    @parent

    
@endsection
 
@section('content')
    
    
    <div class="container">
        <div class="container-fluid banner">
            <div class="fs-1 container col-lg-10 d-flex justify-content-end" style="height:100%;align-items:center">
            </div>
        </div>
        <div class="my-4">
            <p class="fs-1 fw-semibold">About Us</p>
            <p>Coffee Around-U was  founded in 2015, our mission is to connect every coffee lovers people in around Telkom University, Bandung. 
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
                culpa qui officia deserunt mollit anim id est laborum</p>
        </div>
        
    </div>
    
    
    
    
    
@endsection

@section('footer')
    @parent
 
    
@endsection