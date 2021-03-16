{{--
./ressources/views/blogs/_index.blade.php
  Variables disponibles:
$blogs ARRAY(OBJ(id, titre, image, video, datePublication, sousTitre, texte, lien, nombreCommentaire))
--}}


  <!doctype html>
  <html class="no-js" lang="fr">

  <head>
      @include('template.partials._head')
  </head>

  <body id="body" class="darkmode">

      @include('template.partials._header')

      @include('blogs.news.show')

      @include('template.partials._footer')

      @include('template.partials._scripts')
  </body>
  </html>
