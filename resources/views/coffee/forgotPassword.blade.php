@extends('layouts.main')
 
@section('title', 'Forgot Password')
 
@section('navbar')
    @parent

    
@endsection
 
@section('content')
    <form action="">
        <div class="container-fluid ">
            <div class="container d-flex justify-content-center my-5">
                <div class="my-3">
                    <p class="fw-bold mb-5 text-center" style="font-size: 50px">Forgot Password</p>
                    <div class="mb-5 border border-2 border-black" style="height:24rem;width:60rem;align-items:center">
                        <div class="mx-5 my-5 ">
                            <div class="mb-3">
                                <label for="exampleInputEmail" class="form-label">Phone Number</label>
                                <input type="number" class="form-control border-black rounded-0"  placeholder="Enter Phone Number" name="phone_number" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Email</label>
                                <input type="email" class="form-control border-black rounded-0" placeholder="Enter Email" name="email" required>
                            </div>
                            <div>
                                <button class="btn btn-primary fw-semibold px-4" style="background-color: #4A2C2A" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </form>
    
    
@endsection

@section('footer')
    @parent
 
    
@endsection