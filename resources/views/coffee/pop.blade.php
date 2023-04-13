@extends('layouts.main')
 
@section('title', 'Sign In')
 
@section('navbar')
    @parent

    
@endsection
 
@section('content')
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Launch static backdrop modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="https://whatsnewindonesia.com/sites/default/files/styles/1280x800/public/2022-11/Benedict_PacificPlace_jakarta_coffee_places-1.jpg?itok=pDz8YvwB" class="img-thumbnail">

                </div>
                <div class="modal-body">
                    <p class="fw-semibold d-flex justify-content-center">Do you want to remove Vanilla Latte from your Menu?</p>
                </div>
                <div class="modal-footer.d-none" >
                    <div class="d-flex  justify-content-center my-4"><button type="button" class="btn btn-primary text-white px-4 py-2 mx-4" data-bs-dismiss="modal" style="border-radius: 3px; background-color:#4A2C2A ">Yes</button>
                    
                    <button type="button" class="btn btn-primary text-black border-black px-4 py-2 mx-4" data-bs-dismiss="modal" style="border-radius: 3px; background-color: #ffffff ">No</button>
                </div>
                    
                </div>
            </div>
        </div>
    </div>
    
@endsection

@section('footer')
    @parent
 
    
@endsection