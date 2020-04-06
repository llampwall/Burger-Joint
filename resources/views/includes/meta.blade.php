<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>@yield('title')</title>

<!-- seo tags -->
<meta name="description" content="{{ $settings['seo']->description }}">
<meta name="robots" content="follow,index,max-snippet:-1,max-video-preview:-1,max-image-preview:large">
<meta property="og:locale" content="en_US">
<meta property="og:type" content="website">
<meta property="og:title" content="@yield('title')">
<meta property="og:description" content="{{ $settings['seo']->description }}">
<meta property="og:url" content="https://codingphase.com/">
<meta property="og:site_name" content="@yield('title')">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="@yield('title')">
<meta name="twitter:description" content="{{ $settings['seo']->description }}">

<!-- font awesome -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<link rel="stylesheet" href="/css/app.css">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">