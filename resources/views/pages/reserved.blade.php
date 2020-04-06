@extends('layouts.app')

@section('title')
{{ $settings['general']->site_title }} - Thank You
@endsection

@section('content')
  
<div id="reserved">
  <div class="content-box">
    <h1>See you soon!</h1>
    <h2>Please notify the host when you arrive at Jordan Burger!<h2>
  </div>
</div>

@endsection
