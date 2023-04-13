@extends('layouts.main')
 
@section('title', '')
 
@section('navbar')
    @parent

    
@endsection
 
@section('content')
    <div>
        <div class="container">
            <p class="fw-bold text-dark fs-2">Coffee Detail</p>
            <div class="d-flex justify-content-center" style="height: 50vh">
                <img src="../public/Image/{{$data->foto}}"
                    style="" class="img-fluid rounded" alt="...">
            </div>
            <hr>
        
    
            <div class="d-flex">
                <div>
                    <p class="fw-bold fs-2 text-black FS-3">{{$data->nama}}</p>
                    <div class="d-flex">
                        <p class="font-weight-normal text-dark fs-4 fw-semibold" style="margin-right: 15rem" >{{$toko->nama}}</p>
                        {{-- <a href="#" class="text-decoration-underline" style="">Show Review</a> --}}
                    </div>
                </div>
                <p class="fw-medium text-dark fs-3" style="margin-left:40rem;">Rp. {{$data->harga}}</p>
        </div>
        <p class="fw-regular text-dark fs-5" style="text-align: justify;margin-bottom:5rem;height: 10vh">{{$data->deskripsi_produk}}</p>
        <form method="POST" action="/my_products/{{$data->id}}" onsubmit="return confirm('Yakin hapus?')">
            @csrf
            @method('DELETE')
            <a href="/my_products/{{$data->id}}/edit" value="tambah" class="btn btn-primary text-white fw-bold my-5" style="font-size: 22px;width:10rem;height:50px;background-color: #4A2C2A">Edit</a>
            <button value="Hapus" class="btn btn-light text-white fw-semibold" style="font-size: 22px;width:10rem;height:50px;background-color: rgb(160, 17, 46)">Delete</button>
        </form>
    </div>
    
@endsection

@section('footer')
    @parent
 
    
@endsection



    

