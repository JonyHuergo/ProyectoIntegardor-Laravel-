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

    <p class="text-center">¡Ya somos <span id="cant-usuarios">{{DB::table('users')->count()}}</span> usuarios!</p>
    <script>
      setInterval(function()
      { 

        var xmlhttp = new XMLHttpRequest();
         xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById('cant-usuarios').innerHTML = xmlhttp.responseText;
        }
        };
        xmlhttp.open("GET", "{{url('cantUsuarios')}}", true);
        xmlhttp.send();

        /*$.ajax({
        'type': "GET",
        'url': "{{url('cantUsuarios')}}",
        'success': function (data) {
            document.getElementById('cant-usuarios').innerHTML = data;
          }
        });*/
        
      }, 30000);
      
    </script>

    {{-- Agrego scripts de bootstrap para el slider --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </html>
