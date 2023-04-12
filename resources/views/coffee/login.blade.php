@extends('layouts.main')
 
@section('title', '| Sign In')
 
@section('navbar')
    @parent

    
@endsection
 
@section('content')

    
    <div class="container-fluid ">
        <div class="container d-flex justify-content-center my-5">
            <div class="my-3">
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                @endif
                @if(session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                @endif
                <form action="/login" method="post">
                    @csrf
                    <p class="fw-bold mb-5 text-center" style="font-size: 50px">Sign In</p>
                    <div class="mb-5 border border-2 border-black" style="height:24rem;width:60rem;align-items:center">
                        <div class="mx-5 my-5 ">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control border-black rounded-0 @error('email') is-invalid @enderror"  
                                placeholder="Enter Email" name="email" id="email" autofocus required value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control border-black rounded-0" placeholder="Enter Password" name="password" id="password" required>
                            </div>
                            {{-- <p class="mb-5 text-end fw-semibold">Forgot your password? <a href="/login/show" style="color: black">Click here</a></p> --}}
                            <div>
                                <button class="btn btn-primary fw-semibold px-4" style="background-color: #4A2C2A" type="submit">Login</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
@endsection

@section('footer')
    @parent
 
    
@endsection