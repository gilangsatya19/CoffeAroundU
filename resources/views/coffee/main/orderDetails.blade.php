@extends('layouts.main')
 
@section('title', '')
 
@section('navbar')
    @parent

    
@endsection
 
@section('content')
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link href="{{ asset('/css/orderDetails.css') }}" rel="stylesheet"> 
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body ">
                <div class="text-right"> <i class="fa fa-close close" data-dismiss="modal"></i> </div>
                <div class="px-4 py-5">
                    <h5 class="text-uppercase">Sales Details</h5>
                <h4 class="mt-5 theme-color mb-5">Jonathan Alder</h4>

                <span class="theme-color">Payment Summary</span>
                <div class="mb-3">
                    <hr class="new1">
                </div>

                <div class="d-flex justify-content-between">
                    <span class="font-weight-bold">Caramel Latte</span>
                    <span class="text-muted">Rp 25000</span>
                </div>

                <div class="d-flex justify-content-between">
                    <small>Quantity</small>
                    <small>2</small>
                </div>
                <br>
                <div class="d-flex justify-content-between">
                    <span class="font-weight-bold">Americano</span>
                    <span class="text-muted">Rp 15000</span>
                </div>

                <div class="d-flex justify-content-between">
                    <small>Quantity</small>
                    <small>1</small>
                </div>
                
                <div class="d-flex justify-content-between mt-3">
                    <span class="font-weight-bold">Total</span>
                    <span class="font-weight-bold theme-color">Rp 65000</span>
                </div>  
                <div class="text-center mt-5">
                    <button class="btn btn-primary">Ok</button>     
                </div>                   
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @parent
 
    
@endsection