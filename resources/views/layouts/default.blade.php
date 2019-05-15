<!DOCTYPE html>
<html>
<head>
  <title>@yield('title','Weibo App') - laravel 新手入门</title>
  <link rel="stylesheet" type="text/css" href="{{mix('/css/app.css')}}">
</head>
  <body>
    @include('layouts._header')

    <div class="container">
      <div>
        @yield('content')
        @include('layouts._footer')
      </div>
    </div>
  </body>
</html>
