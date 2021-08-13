<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posty</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
      <ul class="flex items-center">
        <li>
          <a href="{{ route('posts') }}" class="p-3">Home</a>
        </li>
        <li>
          <a href="{{ route('dashboard') }}" class="p-3">Dashboard</a>
        </li>
        <li>
          <a href="{{ route('posts') }}" class="p-3">Post</a>
        </li>
      </ul>

      <ul class="flex items-center">

        @if (auth()->user())
          <li>
            <a href="#" class="p-3">Alberto Martínez</a>
          </li>
          <li>
            <a href="#" class="p-3">Logout</a>
          </li>
        @else
          <li>
            <a href="#" class="p-3">Login</a>
          </li>
          <li>
            <a href="{{ route('register') }}" class="p-3">Register</a>
          </li>
        @endif
      </ul>
    </nav>
      @yield('content')
  </body>
</html>
