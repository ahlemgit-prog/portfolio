{{--
  ./resources/views/pages._index.blade.php
  Variables disponibles:
    $pages ARRAY(OBJ(id, ...))
--}}

  <!doctype html>
  <html class="no-js" lang="fr">

  <head>
      @include('template.partials._head')
  </head>

  <body id="body" class="darkmode">

      @include('template.partials._header')

      @include('pages.projets.show1')

      @include('template.partials._footer')

      @include('template.partials._scripts')
  </body>
  </html>
