{{--
  ./resources/views/template/index.blade.php
--}}

<!DOCTYPE html>
<html class="no-js" lang="fr">

  <head>
    @include('template.partials._head')
  </head>

  <body id="body" class="darkmode">
    @include('template.partials._header')
    @include('template.partials._slider')
    @include('template.partials._service')
    @include('template.partials._portfolio')
    @include('template.partials._portfolio_image')
    @include('template.partials._about')
    @include('template.partials._counter')
    @include('template.partials._testimonial')
    @include('template.partials._discuss')
    @include('template.partials._footer')
    @include('template.partials._scripts')
  </body>
</html>
