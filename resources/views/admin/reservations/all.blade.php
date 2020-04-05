@extends('layouts.admin')

@section('content')
    
<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Customer Reservations</h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Customer Reservations</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end pageheader -->
    <!-- ============================================================== -->
   
        <div class="row">
            <!-- ============================================================== -->
            <!-- hoverable table -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Reservations</h5>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">name</th>
                                    <th scope="col">email</th>
                                    <th scope="col">phone</th>
                                    <th scope="col">guests</th>
                                    <th scope="col">date</th>
                                    <th scope="col">time</th>
                                    <th scope="col">edit</th>
                                    <th scope="col">delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reservations as $reservation)
                                <tr>
                                    <th scope="row">{{$reservation->id}}</th>
                                    <td>{{$reservation->name}}</td>
                                    <td>{{$reservation->email}}</td>
                                    <td>{{$reservation->phone_number}}</td>
                                    <td>{{$reservation->guests}}</td>
                                    <td>{{$reservation->time}}</td>
                                    <td>{{date('m/d/y', strtotime($reservation->updated_at))}}</td>
                                    <td><a href="/admin/reservations/{{$reservation->id}}/edit"><i class="far fa-edit"></i></a></td>
                                    <td><a href="/admin/reservations/{{$reservation->id}}/delete" onclick="if (! confirm('Are you sure you want to delete this reservation?')) {return false;}"><i class="far fa-trash-alt"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- pagination --}}
                        {{ $reservations->links() }}
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end hoverable table -->
            <!-- ============================================================== -->
        </div>
   
</div>

@endsection




