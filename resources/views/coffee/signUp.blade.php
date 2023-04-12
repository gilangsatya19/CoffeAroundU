@extends('layouts.main')
 
@section('title', '| Sign Up')
 
@section('navbar')
    @parent

    
@endsection
 
@section('content')
    <form action="/{{$action}}" method="POST">
        @csrf
        <div class="container-fluid ">
            <div class="container d-flex justify-content-center my-5">
                <div class="my-3">
                    <p class="fw-bold mb-5 text-center" style="font-size: 50px">Sign Up</p>
                    <div class="mb-5 border border-2 border-black" style="height:50rem;width:60rem;align-items:center">
                        <div class="mx-5 my-5 ">
                            
                            <div class="form-group mb-3">
                                <label for="name">Name</label>
                                <input type="text" class="form-control border-black rounded-0 @error('name') is-invalid @enderror" id="name" placeholder="Enter First Name" name="name" value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="exampleInputEmail" class="form-label">Email</label>
                                <input type="email" class="form-control border-black rounded-0 @error('email') is-invalid @enderror"  placeholder="Enter Email" name="email" required value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPhone" class="form-label">Phone Number</label>
                                <input type="number" class="form-control border-black rounded-0 @error('phone_number') is-invalid @enderror" placeholder="Enter Phone Number" name="phone_number" required value="{{ old('phone_number') }}">
                                @error('phone_number')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputAddres" class="form-label">Address</label>
                                <input type="text" class="form-control border-black rounded-0 @error('address') is-invalid @enderror"  placeholder="Enter Address" name="address" required value="{{ old('address') }}">
                                @error('address')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword" class="form-label">Password</label>
                                <input type="password" class="form-control border-black rounded-0 @error('password') is-invalid @enderror" placeholder="Enter Password" name="password" required>
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword2" class="form-label">Re-enter Password</label>
                                <input type="password" class="form-control border-black rounded-0" placeholder="Enter Password" name="password2" required >
                            </div>
                            <label class="me-5 mt-4" for="">Role</label>
                            <select class="text-center" name="role" style="width: 11rem;height: 2rem">
                                <option value="pedagang">Pedagang</option>
                                <option value="pembeli">Pembeli</option>
                            </select>
                            
                            
                            <div>
                                <button class="btn btn-primary fw-semibold px-4 mt-5" style="background-color: #4A2C2A" type="submit">Sign Up</button>
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