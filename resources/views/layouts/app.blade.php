<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.header')
</head>


  @yield ('content')

  
</html>
