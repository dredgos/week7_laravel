<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Pets Vets Site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
  </head>
  <body>
    <div class="container">
        @include("_partials/nav")<br>
        @if (!Auth::check())
        @endif
        @if (Auth::check())
        <p>Logged in as {{Auth::user()->name}}</p>
        @endif
        
        <main class="mt-4">
          @yield("title")<br>
          @yield("content")<br>
        </main>
        <aside>
          @yield("aside")
        </aside>
        
        @include("_partials/logout")
        <br>
      
      @include("_partials/footer")
      
    </div>
  </body>
</html>
