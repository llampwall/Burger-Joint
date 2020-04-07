@extends('layouts.app')

@section('title')
{{ $settings['general']->site_title }} - {{$category->title}}
@endsection

@section('content')
    <div id="single-menu">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-12">
                <div class="content-box">
                    <div class="row no-gutters">
                        <div class="col-md-12">
                            <h1>{{$category->title}}</h1>
                        </div>

                        @foreach ($items as $item)
                        <div class="col-lg-4">
                            <div class="item">
                                <div class="title">
                                    <h4>{{$item->title}}</h4>
                                    <span class="price"{{$item->price}}</span>
                                </div>
                                <div class="description">
                                    <p>{{$item->description}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="image col-lg-2 align-self-end">
                            <img src="{{$item->image_url}}"/>
                        </div>
                        @endforeach
                    </div>
                    <a href="/menu" class="button-rounded">Back to Full Menu</a>
                </div>
            </div>
        </div>

    </div>
@endsection
