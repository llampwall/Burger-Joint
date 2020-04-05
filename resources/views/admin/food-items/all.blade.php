@extends('layouts.admin')

@section('content')
    
<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Food Items</h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Food Items</li>
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
                    <h5 class="card-header">Food Items</h5>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">title</th>
                                    <th scope="col">description</th>
                                    <th scope="col">image_url</th>
                                    <th scope="col">price</th>
                                    <th scope="col">category_id</th>
                                    <th scope="col">date created</th>
                                    <th scope="col">edit</th>
                                    <th scope="col">delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                <tr>
                                    <th scope="row">{{$item->id}}</th>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->description}}</td>
                                    <td>{{$item->image_url}}</td>
                                    <td>{{$item->price}}</td>
                                    <td>{{$item->category_id}}</td>
                                    <td>{{date('m/d/y', strtotime($item->updated_at))}}</td>
                                    <td><a href="/admin/food-items/{{$item->id}}/edit"><i class="far fa-edit"></i></a></td>
                                    <td><a href="/admin/food-items/{{$item->id}}/delete" onclick="if (! confirm('Are you sure you want to delete this item?')) {return false;}"><i class="far fa-trash-alt"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- pagination --}}
                        {{ $items->links() }}
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end hoverable table -->
            <!-- ============================================================== -->
        </div>
   
</div>

@endsection




