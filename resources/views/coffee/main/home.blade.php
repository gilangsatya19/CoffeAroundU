@extends('layouts.mainHome')
 
@section('title', 'Home')
 
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
                    <div class="card">
                        <div class="d-flex justify-content-center mb-4">
                            <img src="public/Image/{{$item->foto}}" class="logo">
                        </div>
                        <p class="fs-5 fw-semibold">{{$item->nama}}</p>
                        <p class="fs-6 fw-semibold">RP. {{$item->harga}}</p>
                        <div>
                            <a href="/my_products/{{$item->id}}/edit" value="tambah" class="btn btn-primary border-0 my-3 fw-semibold" style="width: 5rem;background-color: #4f73c0">Edit</a>
                            <form method="POST" action="/my_products/{{$item->id}}" onsubmit="return confirm('Yakin hapus?')">
                                @csrf
                                @method('DELETE')
                                <button value="Hapus" class="btn btn-light text-white fw-semibold" style="width: 5rem;background-color: rgb(160, 17, 46)">Delete</button>
                            </form>
                        </div>
                        
                        
                    </div>
                </div>
                
                @endforeach
            </div>
            
        @endif        
    </div>
    
@endsection

@section('footer')
    @parent
 
    
@endsection