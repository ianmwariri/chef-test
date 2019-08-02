<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.theme.head')
    <body>
  <!-- navbar -->



  @include('layouts.theme.nav')
<!-- header -->


<!-- about section -->
@yield('body_content')



@include('layouts.theme.footer')


<!-- add Javasscript file from js file -->
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

</body>
</html>