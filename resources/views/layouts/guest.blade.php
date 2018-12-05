<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>{{$title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('network.png') }}" />
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
  <body>
  @include('inc.guestnav')

      <div class="poistion">
          <main class="cv">
            @yield('cv')
          </main>
      </div>
      
      <main class="poistioning">
        @yield('blog')
      </main>

  <main class="work">
        @yield('works')
  </main>
    <br>
    <main class="poistioning">
      <div class="col-md-6">
      @include('inc.message')
      @yield('content')
    </div>

    <div class="questions" style="min-width:250px; width:110%;">
      @yield('questions')
    </div>
    </main>
  </body>
</html>
