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
                        <a href="/login" class="btn btn-primary bg-light border-dark text-black fw-semibold px-5">Register Your Cafe</a>
                    </div>
                
            </div>
        </div>
    </div>
    
    

    <div class="container">
        <p class="fw-bold text-dark fs-2 "style="padding-top:25px">Welcome To Coffee Around-U</p>
        <p class="text-justify "></p>
            <div class="row" style="padding-bottom:25px;">
                <div class="col-lg-12">
                  <div class="card" style="border-color:#4A2C2A">
                    <div class="card-body">
                      <h5 class="card-title">Start Your Online Cafe Now</h5>
                      <p class="card-text"style="text-align: justify">We started Coffee Around-U (A UNIT OF COFFEE REALM PRIVATE LIMITED) with a vision to build a community which connects coffee for mutual growth. It's where passion goes and the happiness flows." That's what makes us happy as the founding team. It's just about our passion and how we want to deliver our best ideas to our customers whether it is about the coffee, the food we make or how we connect people through events and community-building activities. Every cup has a budding story. We feel delighted when people come and tell us their success stories which started with their happy place-The Book Cafe.
                        We choose our own roast, grinds and blend love to experiment on the recipes and brewing processes while keeping the basics and principles intact.
                        Everything that we deliver has our values, and that makes us different. As we always say that we made a culture over the customer base, and we are a fan-driven café.
                        We take pleasure in stating that we also collaborate with many artists and artisans to showcase their talent</p>
                      <a href="/home/create" style="border-radius: 3px; background-color:#4A2C2A ;"class="btn btn-primary" >Register Now</a>
                    </div>
                  </div>
                </div>
                




    </div>
@endsection


@section('footer')
    @parent
 
    
@endsection