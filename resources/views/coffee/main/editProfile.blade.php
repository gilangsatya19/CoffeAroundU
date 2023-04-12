@extends('layouts.mainHome')
 
@section('title', '')
 
@section('navbar')
    @parent

    
@endsection
 
@section('content')
    <div class="banner" style="height: 100%;width:100%;background: url('{{asset('coffeeAroundU/assets/register/banner_register_cafe.png')}}')">
        <div class="container col-lg-10 d-flex justify-content-center" style="height:100%;width:70%">
            
                <form action="/" method="POST">
                    <div class="">
                        <p class="text-black fw-bold mt-5 fs-1" style="">Edit Profile <br></p>
                        <div class="border border-2 border-black bg-white" style="height: 65%;width:50rem"> 
                            <div >
                                <div class="mt-5 mb-3 mx-5">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control border-black rounded-0"  value="{{isset($data)?$data->name:''}}" name="name" required>
                                </div>
                                <div class="mb-3 mx-5">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control border-black rounded-0" value="{{isset($data)?$data->email:''}}" name="email" required>
                                </div>
                                <div class="mb-3 mx-5">
                                    <label for="phone_number" class="form-label">Phone Number</label>
                                    <input type="number" class="form-control border-black rounded-0"  value="{{isset($data)?$data->phone_number:''}}" name="phone_number" required>
                                </div>
                                <div class="mb-3 mx-5">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control border-black rounded-0" value="{{isset($data)?$data->address:''}}" name="address" required>
                                </div>
                                
                                
                                <div class="mx-5 my-5">
                                    <div>
                                        <button type="submit" class="btn btn-primary text-white fw-semibold me-5" style="background-color: #4A2C2A">Save Changes</button>
                                        <button type="reset" class="btn btn-ligth border-1 border-black">Reset</button>
                                    </div>
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