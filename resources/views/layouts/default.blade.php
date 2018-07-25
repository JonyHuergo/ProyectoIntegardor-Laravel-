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

    <p class="text-center">¡Ya somos {{DB::table('users')->count()}} usuarios!</p>

    {{-- Agrego scripts de bootstrap para el slider --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </html>
