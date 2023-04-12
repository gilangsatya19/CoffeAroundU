@extends('layouts.main')
 
@section('title', '')
 
@section('navbar')
    @parent

    
@endsection
 
@section('content')
    <p class="text-black fw-semibold mt-5 fs-1" style="">Your Coffee <br></p>
    <div class="pb-5">
        <div class="container">
        <div class="row">
            <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

            <!-- Shopping cart table -->
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
                        <div class="py-2 text-uppercase">Quantity</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                        <div class="py-2 text-uppercase">Remove</div>
                    </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row" class="border-0">
                        <div class="p-2">
                        <img src="https://images-prod.healthline.com/hlcmsresource/images/AN_images/coffee-worlds-biggest-source-of-antioxidants-1296x728-feature.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                        <div class="ml-3 d-inline-block align-middle">
                            <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">Vanilla Latte</a></h5><span class="text-muted font-weight-normal font-italic d-block">Telyu Coffee</span>
                        </div>
                        </div>
                    </th>
                    <td class="border-0 align-middle"><strong>Rp15.000,00</strong></td>
                    <td class="border-0 align-middle"><strong>3</strong></td>
                    <td><input class='btn btn-primary btn-sm' type='button' value='Delete'/></td>
                    <td class="border-0 align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="p-2">
                                <img src="https://images-prod.healthline.com/hlcmsresource/images/AN_images/coffee-worlds-biggest-source-of-antioxidants-1296x728-feature.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                                <div class="ml-3 d-inline-block align-middle">
                                    <h5 class="mb-0"><a href="#" class="text-dark d-inline-block">Caramel Latte</a></h5><span class="text-muted font-weight-normal font-italic">Telyu Coffee</span>
                                </div>
                            </div>
                        </th>
                        <td class="align-middle"><strong>Rp15.000,00</strong></td>
                        <td class="align-middle"><strong>3</strong></td>
                        <td><input class='btn btn-primary btn-sm' type='button' value='Delete'/></td>
                        <td class="align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    <tr>
                    <th scope="row">
                        <div class="p-2">
                        <img src="https://images-prod.healthline.com/hlcmsresource/images/AN_images/coffee-worlds-biggest-source-of-antioxidants-1296x728-feature.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                        <div class="ml-3 d-inline-block align-middle">
                            <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block">Americano</a></h5><span class="text-muted font-weight-normal font-italic">Telyu Coffee</span>
                        </div>
                        </div>
                        <td class="align-middle"><strong>Rp15.000,00</strong></td>
                        <td class="align-middle"><strong>3</strong></td>
                        <td><input class='btn btn-primary btn-sm' type='button' value='Delete'/></td>
                        <td class="align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
                </table>
            </div>
            <!-- End -->
            </div>
        </div>
    </div>
    </div>
@endsection

@section('footer')
    @parent
 
    
@endsection