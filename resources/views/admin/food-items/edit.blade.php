@extends('layouts.admin')

@section('content')

<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Edit Item</h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="/admin/food-categories" class="breadcrumb-link">Food Items</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Item</li>
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
                    <h5 class="card-header">Edit Item</h5>
                    <div class="card-body">
                        <form method="POST" action="/admin/food-items/{{$item->id}}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="inputTitle">Title</label>
                                <input id="inputTitle" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $item->title }}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Description</label>
                                <input id="inputDescription" type="textarea" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ $item->description }}" required autocomplete="description" autofocus>
                        
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputImageUrl">Image URL</label>
                                <input id="inputImageUrl" type="text" class="form-control @error('image_url') is-invalid @enderror" name="image_url" value="{{ $item->image_url }}" required autocomplete="image_url">
                        
                                @error('image_url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputPrice">Price</label>
                                <input id="inputPrice" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $item->price }}" required autocomplete="price">
                        
                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="input-select">Category</label>
                                <select class="form-control" id="inputCategory" name="category_id">
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}"
                                        @if ($category->id == $item->category_id)
                                            selected
                                        @endif
                                        >{{$category->title}}</option>
                                    @endforeach
                                </select>
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





