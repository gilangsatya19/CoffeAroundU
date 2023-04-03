@extends('layouts.main')
 
@section('title', 'Coffe Aroung U')
 
@section('navbar')
    @parent

    
@endsection
 
@section('content')
    <div class="container-fluid ">
        <div class="container d-flex justify-content-center my-5">
            <div class="my-3">
                <p class="fw-bold mb-5 text-center" style="font-size: 50px">Sign Up</p>
                <div class="mb-5 border border-2 border-black" style="height:50rem;width:60rem;align-items:center">
                    <div class="mx-5 my-5 ">
                        <div class="form-inline">
                            <div class="form-group mb-3">
                                <label for="email">First Name</label>
                                <input type="email" class="form-control border-black rounded-0" id="email" placeholder="Enter First Name" name="first_name">
                              </div>
                              <div class="form-group mb-3">
                                <label for="pwd">Last Name</label>
                                <input type="password" class="form-control border-black rounded-0" id="pwd" placeholder="Enter Last Name" name="pwd">
                              </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail" class="form-label">Email</label>
                            <input type="text" class="form-control border-black rounded-0"  placeholder="Enter Email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPhone" class="form-label">Phone Number</label>
                            <input type="password" class="form-control border-black rounded-0" placeholder="Enter Phone Number" name="phone_number" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputAddres" class="form-label">Address</label>
                            <input type="text" class="form-control border-black rounded-0"  placeholder="Enter Address" name="address" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword" class="form-label">Password</label>
                            <input type="password" class="form-control border-black rounded-0" placeholder="Enter Password" name="password" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword2" class="form-label">Re-enter Password</label>
                            <input type="password" class="form-control border-black rounded-0" placeholder="Enter Password" name="password2" required>
                        </div>
                        
                        <p class="mb-5 text-end fw-semibold">Forgot your password? <a href="" style="color: black">Click here</a></p>
                        <div>
                            <button class="btn btn-primary fw-semibold px-4" style="background-color: #4A2C2A" type="submit">Spign Up</button>
                        </div>

                    </div>
                    
                </div>
            </div>
            
            
        </div>
    </div>
    
@endsection

@section('footer')
    @parent
 
    
@endsection