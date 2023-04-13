@extends('layouts.main')
 
@section('title', '')
 
@section('navbar')
    @parent

    
@endsection
 
@section('content')
    
    <div class="container">
        <div class="container-fluid banner">
            <div class="fs-1 container col-lg-10 d-flex justify-content-end" style="height:100%;align-items:center">
                <form action="" method="GET">
                    <div class="text-center">
                    </div>
                </form>
            </div>
        </div>
        <div class="d-flex">
                <div>
                    <p class="fw-bold fs-2 text-black my-3 text-center">Start Your Coffee Journey</p>
                    
                    <div class="d-flex">
                        <p class="fw-semibold fs-4">Your Coffee</p>
                    </div>
                    
                    
                    
                </div>
                <a href="/my_products/create" value="tambah" class="btn btn-primary text-white fw-semibold mt-5" style="font-size: 22px;margin-left:40rem;width:13rem;height: 50px;background-color: #4A2C2A">Add Coffee</a>
        </div>
        @if (isset($data))
            
        <div class="row">
                @foreach ($data as $item)
                <div class="column">
                        <a href="/my_products/{{$item->id}}" class="link-offset-2 link-underline link-underline-opacity-0 text-black">
                        <div class="card">
                            <div class="d-flex  mb-4" style="">
                                <img src="public/Image/{{$item->foto}}" class="logo rounded-top" style="width: 100%;height: 20vh; object-fit: cover; object-position: center;">
                            </div>
                            <p class="fs-5 fw-semibold mx-2">{{$item->nama}}</p>
                            <p class="fs-6 fw-semibold mx-2">RP. {{$item->harga}}</p>
                            <p class="fs-6 fw-semibold mx-2">{{$item->deskripsi_produk}}</p>
                            
                        </div>
                    </a>
                </div>
                
                
                @endforeach
            </div>
            
        @endif        
    </div>
    
@endsection

@section('footer')
    @parent
 
    
@endsection