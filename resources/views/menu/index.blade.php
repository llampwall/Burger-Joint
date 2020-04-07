@extends('layouts.app')

@section('title')
{{ $settings['general']->site_title }} - Menu
@endsection

@section('content')
    <div id="menu-index">
      <section id="food-preview">

        <h2>We have everything you need to kill your hunger</h2>

        <div class="food-slider">
          @foreach ($categories as $category)
          <a href="/menu/{{$category->title}}" class="slide">
            <div class="background"></div>
            <div class="content">
              <div class="food-title">
                {{$category->title}}
              </div>
              <p class="description">
                {{$category->description}}
              </p>
              <img src="{{$category->image_url}}">
            </div>

          </a>
          @endforeach

        </div>

        </div>

      </section>

    </div>
@endsection
