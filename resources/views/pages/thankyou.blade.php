@extends('layouts.app')

@section('title')
{{ $settings['general']->site_title }} - Thank You
@endsection

@section('content')
  
<div id="thankyou">
  <div class="content-box">
    <h1>Awesome!</h1>
    <h2>You're signed up to receive future offers at Jordan Burger!<h2>
  </div>
</div>

@endsection
