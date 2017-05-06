<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','Sina') - Laravel 优雅的开发</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('layouts._header')
  <div class="container">
      @include('shared.messages')
    @yield('content')
    @include('layouts._footer')
    </div>
</body>
</html>
