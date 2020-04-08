@extends('layouts.app')

@section('title')
{{ $settings['general']->site_title }} - {{$category->title}}
@endsection

@section('content')
    <div id="single-menu">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-md-12">
                <div class="content-box">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>{{$category->title}}</h1>
                        </div>

                        @foreach ($items as $item)
                        <div class="col-lg-6">
                            <div class="item">
                                <div class="title">
                                    <h4>{{$item->title}}</h4>
                                    <span class="price">{{$item->price}}</span>
                                </div>
                                <div class="description">
                                    <p>{{$item->description}}</p>
                                </div>
                            </div>
                            <div class="image">
                                <img src="{{$item->image_url}}"/>
                            </div>
                        </div>
                        
                        @endforeach
                    </div>
                    <a href="/menu" class="button-rounded">Back to Full Menu</a>
                </div>
            </div>
        </div>

    </div>
@endsection
