@extends('layouts.app')

@section('title')
{{ $settings['general']->site_title }} - Menu
@endsection

@section('content')
    <div id="menu-index">
      <section id="food-preview">

        <h2>We have everything you need to kill your hunger</h2>

        @include('/includes/menu-slider')

      </section>

    </div>
@endsection
