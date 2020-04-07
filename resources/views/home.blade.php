@extends('layouts.landing')

@section('title')
{{ $settings['general']->site_title }} - America's Favorite Burger Joint
@endsection

@section('content')
  <section id="information">

    <div class="restaurant-image">
      <img src="/img/cafe2.jpg">
    </div>

    <div class="info">

      <h2>We started with two cows and a dream in 1989.</h2>

      <div class="paragraphs">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
          aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
          aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>

      <a href="#" class="about-link">
        <span>Learn more about our restaurant</span>
        <div class="circle-right"><i class="fa fa-chevron-right"></i></div>
      </a>

  </div>

    </div>

  </section>

  <section id="food-preview">

    <h2>We have everything you need to kill your hunger</h2>

    <a href="/menu" class="button-rounded">View Our Menu</a>

    @include('/includes/menu-slider')

    </div>

  </section>
@endsection
