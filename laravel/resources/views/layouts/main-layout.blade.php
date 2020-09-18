<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>La Molisana</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">

      <header>
        @include('partials.header')
      </header>

      <main>
        @yield('content')
      </main>

      <footer>
        @include('partials.footer')
      </footer>

    </div>
  </body>
</html>
