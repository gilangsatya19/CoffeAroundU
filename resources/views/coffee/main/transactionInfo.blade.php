@extends('layouts.main')
 
@section('title', '')
 
@section('navbar')
    @parent

    
@endsection
 
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
<title>Bootstrap Order Details Table with Search Filter</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="{{ asset('/css/transactionInfo.css') }}" rel="stylesheet"> 
</head>
<body>
    <div class="container">
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
                        <td>1</td>
                        <td>April 15, 2023</td>                        
						<td><span class="status text-success">&bull;</span> Delivered</td>
						<td>Rp25.000</td>
                    </tr>
					<tr>
                        <td>2</td>                     
						<td>April 15, 2023</td>
						<td><span class="status text-info">&bull;</span> Shipped</td>
						<td>Rp15.000</td>
                    </tr>
					<tr>
                        <td>3</td>
                        <td>April 15, 2023</td>
                        <td><span class="status text-danger">&bull;</span> Cancelled</td>
						<td>Rp25.000</td>                      
                    </tr>
					<tr>
                        <td>4</td>
                        <td>April 15, 2023</td>						
						<td><span class="status text-warning">&bull;</span> Pending</td>
						<td>Rp30.000</td>
                    </tr>
					<tr>
                        <td>5</td>
                        <td>April 15, 2023</td>
						<td><span class="status text-success">&bull;</span> Delivered</td>
						<td>Rp25.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>     
</body>
</html> 

@endsection

@section('footer')
    @parent
 
    
@endsection