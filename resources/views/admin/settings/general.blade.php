@extends('layouts.admin')

@section('content')

<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">General Settings</h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">General Settings</li>
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
                    <h5 class="card-header">Edit Settings</h5>
                    <div class="card-body">
                        <form method="POST" action="/admin/settings/general">
                            @csrf
                            <div class="form-group">
                                <label for="inputTitle">Site Title</label>
                                <input id="inputTitle" type="text" class="form-control @error('site_title') is-invalid @enderror" name="site_title" value="{{ $generalsetting->site_title }}" required autocomplete="site_title" autofocus>

                                @error('site_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputImageURL">Logo Image URL</label>
                                <input id="inputImageURL" type="text" class="form-control @error('logo_image_url') is-invalid @enderror" name="logo_image_url" value="{{ $generalsetting->logo_image_url }}"required autocomplete="logo_image_url" autofocus>
                        
                                @error('logo_image_url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputAddress1">Address 1</label>
                                <input id="inputAddress1" type="text" class="form-control @error('address1') is-invalid @enderror" name="address1" value="{{ $generalsetting->address1 }}"required autocomplete="address1">
                        
                                @error('address1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Address 2</label>
                                <input id="inputAddress2" type="text" class="form-control @error('address2') is-invalid @enderror" name="address2" value="{{ $generalsetting->address2 }}"autocomplete="address2">
                        
                                @error('address1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputCity">City</label>
                                <input id="inputCity" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ $generalsetting->city }}" required autocomplete="city">
                        
                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputState">State</label>
                                <input id="inputState" type="text" class="form-control @error('state') is-invalid @enderror" name="state" value="{{ $generalsetting->state }}"required autocomplete="state">
                        
                                @error('state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputZip">Zip Code</label>
                                <input id="inputZip" type="text" class="form-control @error('zip') is-invalid @enderror" name="zip" value="{{ $generalsetting->zip }}"required autocomplete="zip">
                        
                                @error('zip')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            <div class="form-group">
                                <label for="inputPhone">Phone Number</label>
                                <input id="inputPhone" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ $generalsetting->phone_number }}" required autocomplete="phone_number">
                        
                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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





