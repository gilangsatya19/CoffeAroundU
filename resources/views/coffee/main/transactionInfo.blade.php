@extends('layouts.main')
 
@section('title', '')
 
@section('navbar')
    @parent

    
@endsection
 
@section('content')

    <div class="container" style="height: 70%">
        {{-- <h2>{{$data}}</h2> --}}
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4">
						<h2>All <b>Transaction</b></h2>
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
						<th>Order Date</th>										
						<th>Total Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            

                            <td> <a href="/details" class="text-black">{{$item->id}}</a></td>
                            <td> <a href="/details" class="text-black">{{$item->created_at}}</a></td>
                            

                            <td> <a href="/details" class="text-black">Rp.{{$item->harga_total}}</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>     


@endsection

@section('footer')
    @parent
 
    
@endsection