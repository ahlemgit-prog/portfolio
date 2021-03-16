{{--
  ./resources/views/categories/show.blade.php
  Variables disponibles :
    $categorie OBJ(id, nom, datePublication)
--}}

<!-- Categories-->
<aside class="single_sidebar_widget post_category_widget">
  <h4 class="widget_title">Categories</h4>
  <ul class="list cat-list">
    {{-- nom --}}
    @foreach ($categories as $categorie)
      <li>
          <a href="{{$categorie->lien }}" class="d-flex">
              <p>{{ $categorie->nom }}</p>
              <p>({{$categorie->nombrePosts}})</p>
              {{--datePublication--}}
              <p>{{-- Je peux placer la date ici si nécessaire --}}</p>
          </a>
      </li>
    @endforeach
  </ul>
</aside>
