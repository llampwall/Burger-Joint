<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $settings['general']->site_title }}</title>
        <meta name="description" content="{{ $settings['seo']->description }}">
        <meta name="robots" content="follow,index,max-snippet:-1,max-video-preview:-1,max-image-preview:large">
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ $settings['general']->site_title }}">
      <meta property="og:description" content="{{ $settings['seo']->description }}">
        <meta property="og:url" content="https://codingphase.com/">
        <meta property="og:site_name" content="{{ $settings['general']->site_title }}>
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $settings['general']->site_title }}">
        <meta name="twitter:description" content="{{ $settings['seo']->description }}">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    </head>
    <body>

  <section id="app-layout">
    @include('includes.sidebar')

    <div class="welcome-jumbo">
      <div class="status animated bounceInUp">
        new
      </div>
      <h1 class="animated bounceInUp">Double Down Burger</h1>
      <img src="/img/burger.png" class="burger-fries animated bounceInUp">
    </div>
  </section>

  @yield('content')

</body>

</html>
