@extends('layouts.main')
 
@section('title', 'Coffe Aroung U')
 
@section('navbar')
    @parent

    
@endsection
 
@section('content')
    <div class="banner" style="height: 100%;width:100%;background: url('{{asset('coffeeAroundU/assets/register/banner_register_cafe.png')}}')">
        <div class="container col-lg-10 d-flex justify-content-center" style="height:100%;border:solid">
            <form action="" method="GET">
                <div class="text-center">
                    <p class="text-black fw-semibold mt-5 fs-1" style="">Register Cafe <br></p>
                    <div class="border border-2 border-black bg-white" style="height: 80%;width:50rem"> 
                        <div>
                            <div class="mb-3 mx-5">
                                <label for="exampleInputEmail" class="form-label">Cafe Name</label>
                                <input type="text" class="form-control border-black rounded-0"  placeholder="Enter Email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPhone" class="form-label">Address</label>
                                <input type="password" class="form-control border-black rounded-0" placeholder="Enter Address" name="address" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputAddres" class="form-label">Phone Number</label>
                                <input type="text" class="form-control border-black rounded-0"  placeholder="Enter Phone Number" name="phone_number" required>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('footer')
    @parent
 
    
@endsection