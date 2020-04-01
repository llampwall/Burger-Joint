<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/animate.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    </head>
    <body>

  <section id="welcome">
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



  <div>

  </div>

</body>

</html>
