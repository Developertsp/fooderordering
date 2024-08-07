@extends('layout.app')
@section('title', 'Orders | FO - Food Ordering System')

@section('content')
<style>
    .content-wrapper {
           margin-right: 0;
       }
   
       .main-header {
           margin-right: 0;
       }
</style>

    <!-- Content Header (Page header) -->	  
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h4 class="page-title">Orders List</h4>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Order</li>
                            <li class="breadcrumb-item active" aria-current="page">Orders List</li>
                        </ol>
                    </nav>
                </div>
            </div>
            
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-body">
                        <div class="table-responsive rounded card-table">
                            <table class="table border-no" id="example1">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Date</th>
                                        <th>Customer Name</th>
                                        <th>Location</th>
                                        <th>Amount</th>
                                        {{-- <th>Status Order</th> --}}
                                        {{-- <th></th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr class="hover-primary">
                                            <td>#{{$order->id}}</td>
                                            {{-- <td>14 April 2021,<span class="fs-12"> 03:13 AM</span></td> --}}
                                            <td>{{ $order->created_at }}</td>
                                            <td>{{ $order->name }}</td>
                                            <td>{{ $order->address ?? NULL}}</td>
                                            <td>${{ $order->total}}</td>
                                            {{-- <td>												
                                                <span class="badge badge-pill badge-primary-light">Delivery</span>
                                            </td> --}}
                                            {{-- <td>												
                                                <div class="btn-group">
                                                <a class="hover-primary dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Accept Order</a>
                                                    <a class="dropdown-item" href="#">Reject Order</a>
                                                </div>
                                                </div>
                                            </td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->

@endsection