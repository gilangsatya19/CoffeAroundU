@extends('layouts.main')
 
@section('title', '')
 
@section('navbar')
    @parent

    
@endsection
 
@section('content')
    <div class="banner" style="height: 100%;width:100%; background-size: cover;">
        <div class="container col-lg-10 d-flex justify-content-center" style="height:100%;width:70%">
            
                <form action="/{{$action}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="">
                        <p class="text-black fw-bold mt-5 fs-1" style="">{{$title}} Cafe <br></p>
                        <div class="border border-2 border-black bg-white" style="height: 85%;width:50rem"> 
                            <div >
                                <div class="border border-1 border-black d-flex mt-5 mx-5" style="width: 70%">
                                    <div>
                                        <img class="mx-4" src="{{isset($data->icon_url)?'../../public/Image/'.$data->icon_url:asset('coffeeAroundU/assets/register/img_cafe.png')}}" width="250px" height="250px" alt="">
                                        <input type="hidden" name="_method" value="{{ $method }}" />
                                        <div class="mb-3 mx-5">
                                            <label class="form-label" for="">Upload Gambar</label>
                                            <input type="file" class="form-control" {{(isset($data->icon_url)?'':'required')}} name="icon_url" />
                                        </div>
                                    </div>
                                </div>
                                <div class="my-3 mx-5">
                                    <label for="exampleInputEmail" class="form-label">Cafe Name</label>
                                    <input type="text" class="form-control border-black rounded-0" value="{{isset($data)?$data->nama:''}}" placeholder="Enter Name" name="nama" required>
                                </div>
                                <div class="mb-3 mx-5">
                                    <h4>Map</h4>
                                    {{-- <label for="latitude" class="form-label">Latitude</label>
                                    <input type="number" step="0.01" class="form-control border-black rounded-0 mb-2" value="{{isset($data)?$data->latitude:''}}" placeholder="Enter Latitude" name="latitude" required>
                                    <label for="longitude" class="form-label">Longitude</label>
                                    <input type="number" step="0.01" class="form-control border-black rounded-0" value="{{isset($data)?$data->longitude:''}}" placeholder="Enter Longitude" name="longitude" required>
                                     --}}
                                     <label for="latitude" class="form-label">Latitude</label>
                                    <input type="text" class="form-control border-black rounded-0 mb-2" value="{{isset($data)?$data->latitude:''}}" placeholder="Enter Latitude" name="latitude" required>
                                    <label for="longitude" class="form-label">Longitude</label>
                                    <input type="text" class="form-control border-black rounded-0" value="{{isset($data)?$data->longitude:''}}" placeholder="Enter Longitude" name="longitude" required>
                                </div>
                                
                                <div class="mx-5 my-5">
                                    <div>
                                        <button class="btn btn-primary text-white fw-semibold me-5" style="background-color: #4A2C2A">Register</button>
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