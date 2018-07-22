<!DOCTYPE html>
  <html>

    <head>
      @include('includes.head')
    </head>

    <body>
      @include('includes.header')
      <header class="sticky-top">
        @include('includes.nav')
      </header>
      <main>
        @yield('content')
      </main>
      <footer class="footer-general">
        @include('includes.footer')
      </footer>
    </body>

  </html>
