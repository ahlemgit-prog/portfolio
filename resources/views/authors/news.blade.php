{{--
  ./resources/views/authors/index.blade.php
  Variables disponibles:
    $authors ARRAY(OBJ(id, image, nom, prenom)
--}}

@extends('template')

@section('content')

  @include('authors.projets')

@endsection
