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
                        {{-- <a href="" class="fw-semibold fs-5 text-black mx-4 mt-1">Show My Menu</a> --}}
                    </div>
                    {{-- <p>{{$users}}</p> --}}
                    
                    
                </div>
                <a href="/my_products/create" value="tambah" class="btn btn-primary text-white fw-semibold mt-5" style="font-size: 22px;margin-left:40rem;width:13rem;height: 50px;background-color: #4A2C2A">Add Coffee</a>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col" class="border-0 bg-light">
                        <div class="p-2 px-3 text-uppercase">Product</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                        <div class="py-2 text-uppercase">Price</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                        <div class="py-2 text-uppercase">Remove</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                        <div class="py-2 text-uppercase">Edit</div>
                    </th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($data))
                    @foreach($data as $c)
                    <tr>
                        <th scope="row">
                            <div class="p-2">
                                <img src="{{$c->foto}}" alt="" width="70" class="img-fluid rounded shadow-sm">
                                <div class="ml-3 d-inline-block align-middle">
                                    <h5 class="mb-0"><a href="#" class="text-dark d-inline-block">{{$c->nama}}</a></h5><span class="text-muted font-weight-normal font-italic">{{$c->deskripsi_produk}}</span>
                                </div>
                            </div>
                        </th>
                        <td class="align-middle"><strong>Rp{{$c->harga}}</strong></td>
                        <td><input class='btn btn-primary btn-sm' type='button' value='Delete'/></td>
                        <td class="align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    
@endsection

@section('footer')
    @parent
 
    
@endsection