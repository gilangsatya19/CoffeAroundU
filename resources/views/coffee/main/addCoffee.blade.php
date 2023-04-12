@extends('layouts.mainHome')
 
@section('title', '')
 
@section('navbar')
    @parent

    
@endsection
 
@section('content')
    <div class="banner" style="height: 60rem;width:100%;background: url('{{asset('coffeeAroundU/assets/register/banner_register_cafe.png')}}')">
        <div class="container col-lg-10 d-flex justify-content-center" style="height:100%;width:70%">
            
                <form action="/{{$action}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="">
                        <p class="text-black fw-bold mt-5 fs-1" style="">{{$title}} Coffee <br></p>
                        <div class="border border-2 border-black bg-white" style="height: 85%;width:50rem"> 
                            <div >
                                <div class="border border-1 border-black d-flex mt-5 mx-5" style="width: 70%">
                                    <div>
                                        <img class="mx-4" src="{{isset($data->foto)?'../../public/Image/'.$data->foto:asset('coffeeAroundU/assets/register/img_cafe.png')}}" width="250px" height="250px" alt="">
                                        <input type="hidden" name="_method" value="{{ $method }}" />
                                        <div class="mb-3 mx-5">
                                            <label class="form-label" for="">Upload Gambar</label>
                                            <input type="file" class="form-control" {{(isset($data->foto)?'':'required')}} name="foto" />
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="my-3 mx-5">
                                    <label for="name" class="form-label">Coffee Name</label>
                                    <input type="text" class="form-control border-black rounded-0"  value="{{isset($data)?$data->nama:''}}" name="nama" required>
                                </div>
                                <div class="mb-3 mx-5">
                                    <label for="exampleInputPhone" class="form-label">Price</label>
                                    <input type="number" class="form-control border-black rounded-0" value="{{isset($data)?$data->harga:''}}" name="harga" required>
                                </div>
                                <div class="mb-3 mx-5">
                                    <label for="exampleInputAddres" class="form-label">Description</label>
                                    <input type="text" class="form-control border-black rounded-0" value="{{isset($data)?$data->deskripsi_produk:''}}" name="deskripsi_produk" required>
                                </div>
                                <div class="mb-3 mx-5">
                                    <input type="radio" id="available" name="available" value="1">
                                    <label class="me-5" for="available">Available</label>
                                    <input type="radio" id="unavailable" name="available" value="0">
                                    <label for="unavailable">Unavailable</label>
                                </div>
                                
                                
                                <div class="mx-5 my-5">
                                    <div>
                                        <button class="btn btn-primary text-white fw-semibold me-5" style="background-color: #4A2C2A">Submit</button>
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