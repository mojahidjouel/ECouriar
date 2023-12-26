@extends('backend.layout.app')

@section('content')

<!-- Sale & Revenue Start -->
 <style>
    .tam{
        background-color:#caf0f8!important;
        box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3)!important; /* Add a simple shadow */
    }
    .tamy{
        background-color:#ab3428!important;
        box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3)!important; /* Add a simple shadow */
    }
    .tama{
        background-color:#e9e3e6!important;
        box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3)!important; /* Add a simple shadow */
    }
 </style>

                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary tamy rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2 fs-4 fw-bolder text-white">Today Shipment</p>
                                <h6 class="mb-0"><span class="fs-1">{{$shipment}} </span><br>is completed</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded tamy d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2 fs-4 fw-bolder text-white">Total Shipment</p>
                                <h6 class="mb-0">{{$shipment}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded tamy d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2 fs-4 fw-bolder text-white">Today Revenue</p>
                                <h6 class="mb-0">{{$shipment}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded tamy d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2 fs-4 fw-bolder text-white">Total Revenue</p>
                                <h6 class="mb-0">{{$shipment}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->

            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="tam text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0 text-danger">Recent Salse</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead class="bg-primary">
                                <tr class="text-white ">
                                    <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                    <th scope="col">Invoice No</th>
                                    <th scope="col">Invoice Date</th>
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">Delivery Man</th>
                                    <th scope="col">Total Amount</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($todayshipment as $ts)
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>{{$ts->invoice_no}}</td>
                                    <td>{{ $ts->created_at->format('Y-m-d') }}</td>
                                    <td>{{$ts->customer?->name}}</td>
                                    <td>{{$ts->deliveryman?->name}}</td>
                                    <td>{{$ts->total_cost}}</td>
                                    <td>@if($ts->status == 0) {{__('Pending') }} @elseif($ts->status == 1) {{__('Picked Up') }} @else {{__('Delivered') }} @endif</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                               </tr>                              
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->


            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">   
                    <div class="col-12 col-sm-12 col-md-12 col-xl-12">
                        <div class="h-100 bg-secondary tama rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0 text-danger">Calender</h6>
                                <a class="text-danger" href="">Show All</a>
                            </div>
                            <div id="calender"></div>
                        </div>
                    </div>
                </div>
            
            <!-- Widgets End -->
            @endsection



            @push('scripts')

            <!-- JavaScript -->



            @endpush