@extends('layouts.admin')

@section('content')

<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Create Category</h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="/admin/food-categories" class="breadcrumb-link">Food Categories</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create Category</li>
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
            <!-- basic form -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">New Category</h5>
                    <div class="card-body">
                        <form action="#" id="basicform" data-parsley-validate="" novalidate="">
                            <div class="form-group">
                                <label for="inputCategory">Category Name</label>
                                <input id="inputCategory" type="text" name="category" data-parsley-trigger="change" required="" placeholder="Enter name" autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputImage">Image URL</label>
                                <input id="inputImage" type="text" name="image" data-parsley-trigger="change" required="" placeholder="Enter image url" autocomplete="off" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-sm-12 pl-0">
                                    <p class="text-right">
                                        <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                        <button class="btn btn-space btn-secondary">Cancel</button>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end basic form -->
            <!-- ============================================================== -->

</div>

@endsection





