@extends('layouts.main')
 
@section('title', '')
 
@section('navbar')
    @parent

    
@endsection
 
@section('content')

    <div class="container" style="height: 70%">
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
                        <th>Status</th>						
						<th>Total Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        

                        <td> <a href="/details" class="text-black">1</a></td>
                        <td> <a href="/details" class="text-black">April 15, 2023</a></td>
                        <td> <a href="/details" class="text-black"><span class="text-success">&bull;</span> Delivered</a></td>
                        <td> <a href="/details" class="text-black">Rp25.000</a></td>
                            
                        
                    </tr>
					<tr>
                        <td> <a href="/" class="text-black">2</a></td>
                        <td> <a href="/" class="text-black">April 15, 2023</a></td>
                        <td> <a href="/" class="text-black"><span class="text-info">&bull;</span> Shipped</a></td>
                        <td> <a href="/" class="text-black">Rp15.000</a></td>
                        
                    </tr>
					<tr>
                        <td> <a href="/" class="text-black">2</a></td>
                        <td> <a href="/" class="text-black">April 15, 2023</a></td>
                        <td> <a href="/" class="text-black"><span class="text-danger">&bull;</span> Cancelled</a></td>
                        <td> <a href="/" class="text-black">Rp15.000</a></td>                   
                    </tr>
					<tr>
                        <td>4</td>
                        <td>April 15, 2023</td>						
						<td><span class="text-warning">&bull;</span> Pending</td>
						<td>Rp30.000</td>
                    </tr>
					<tr>
                        <td>5</td>
                        <td>April 15, 2023</td>
						<td><span class="text-success">&bull;</span> Delivered</td>
						<td>Rp25.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>     


@endsection

@section('footer')
    @parent
 
    
@endsection