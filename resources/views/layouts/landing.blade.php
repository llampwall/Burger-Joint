<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.meta')
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
