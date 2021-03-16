{{--
  ./resources/views/commentaires/index.blade.php
  Variables disponibles:
    $commentaires ARRAY(OBJ(id, image, texte, nom, datePublication))
--}}



  @foreach ($commentaires as $commentaire)
    @include('commentaires.show')
  @endforeach
@include('template.partials._form')
