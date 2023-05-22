@extends('layouts.main')

@section('title', '')

@section('navbar')
@parent


@endsection

@section('content')

{{-- <div class="container"> --}}
<div class="d-flex justify-content-center">
    {{-- <div
        style=" background: url('{{'../../public/Image/'.$toko->icon_url}}'); background-size: cover; background-repeat: no-repeat; background-position: center;">
    </div> --}}
    <div>
        <img class="" src="{{asset('public/Image/'.$toko->icon_url)}}" alt="" width="500px" height="400px" style="margin-bottom: 6rem;margin-top:2rem;background-size:cover">
    </div>
</div>
<div class="container">
    <div class="d-flex">
        <div>
            <p class="fw-bold fs-2 text-black my-3 text-center">Start Your Coffee Journey</p>
            <div class="d-flex">
                <p class="fw-semibold fs-4">Your Coffee</p>
            </div>
        </div>
        <a href="/transaction" value="tambah" class="btn btn-primary text-white fw-semibold mt-5"
            style="font-size: 22px;margin-left:25rem;width:15rem;height: 50px;background-color: #4A2C2A">Transaksi Penjualan</a>
        <a href="/my_products/create" value="tambah" class="btn btn-primary text-white fw-semibold mt-5"
            style="font-size: 22px;margin-left:3rem;width:13rem;height: 50px;background-color: #4A2C2A">Add Coffee</a>    
        
    </div>
    @if (isset($data))

    <div class="row">
        @foreach ($data as $item)
        <div class="column">
            <a href="/my_products/{{$item->id}}"
                class="link-offset-2 link-underline link-underline-opacity-0 text-black">
                <div class="card">
                    <div class="d-flex  mb-4" style="">
                        <img src="public/Image/{{$item->foto}}" class="logo rounded-top"
                            style="width: 100%;height: 20vh; object-fit: cover; object-position: center;">
                    </div>
                    <p class="fs-5 fw-semibold mx-2">{{$item->nama}}</p>
                    <p class="fs-6 fw-semibold mx-2">{{$item->formatRupiah('harga')}}</p>
                    <p class="fs-6 fw-semibold mx-2">{{$item->deskripsi_produk}}</p>

                </div>
            </a>
        </div>


        @endforeach
    </div>
</div>

@endif
{{-- </div> --}}

@endsection

@section('footer')
@parent


@endsection
