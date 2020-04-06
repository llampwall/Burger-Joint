@extends('layouts.admin')

@section('content')
    

<div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">
                                    @if (Auth::user()->isAdmin()) 
                                        Admin Dashboard
                                    @else
                                        Employee Dashboard
                                    @endif
                                </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">
                                            @if (Auth::user()->isAdmin()) 
                                                Last 30 Days
                                            @else
                                                Employee Dashboard
                                            @endif</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    @if (Auth::user()->isAdmin())
                    <div class="ecommerce-widget">

                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Estimated Revenue - Last 30 Days</h5>
                                        <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">${{$revenue}}</h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span>
                                        </div>
                                    </div>
                                    {{-- <div id="sparkline-revenue"></div> --}}
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Customers - Last 30 Days</h5>
                                        <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">{{$customers}}</h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span>
                                        </div>
                                    </div>
                                    {{-- <div id="sparkline-revenue2"></div> --}}
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Reservations - Last 30 Days</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">{{$reservations}}</h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-primary font-weight-bold">
                                            <span>N/A</span>
                                        </div>
                                    </div>
                                    {{-- <div id="sparkline-revenue3"></div> --}}
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Employees - Last 30 Days</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">{{$employees}}</h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-secondary font-weight-bold">
                                            <span>-2.00%</span>
                                        </div>
                                    </div>
                                    {{-- <div id="sparkline-revenue4"></div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <!-- TOTAL REVENUE FROM DATA -->

                            <div class="col-12">
                                <div class="card">
                                    <h5 class="card-header"> Daily Revenue - Last 30 Days</h5>
                                    <div class="card-body">
                                        <div id="morris_totalrevenue"></div>
                                    </div>
                                    <div class="card-footer">
                                        <p class="display-7 font-weight-bold"><span class="text-primary d-inline-block">Estimated Total: ${{$revenue}}</span><span class="text-success float-right">+9.45%</span></p>
                                    </div>
                                </div>
                            </div>
                        @endif
                            <!-- ============================================================== -->
                      
                            <!-- ============================================================== -->

                                          <!-- recent orders  -->
                            <!-- ============================================================== -->
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Latest Reservations</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">#</th>
                                                        <th class="border-0">Name</th>
                                                        <th class="border-0">Email</th>
                                                        <th class="border-0">Phone Number</th>
                                                        <th class="border-0">Guests</th>
                                                        <th class="border-0">Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($latestReservations as $res)
                                                    <tr>
                                                        <td>{{$res->id}}</td>
                                                        <td>{{$res->name}}</td>
                                                        <td>{{$res->email}}</td>
                                                        <td>{{$res->phone_number}}</td>
                                                        <td>{{$res->guests}}</td>
                                                        <td>{{$res->created_at}}</td>
                                                        <td>
                                                            @if ($res->guests > 2)
                                                                <span class="badge-dot badge-success mr-1"></span>Booth
                                                            @else
                                                                <span class="badge-dot badge-brand mr-1"></span>Bar
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                    <tr>
                                                        <td colspan="12"><a href="/admin/reservations" class="btn btn-outline-light float-right">View Details</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>


@endsection




