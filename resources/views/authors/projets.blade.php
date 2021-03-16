{{--
  ./resources/views/authors/_show.blade.php
  Variables disponibles
    $author OBJ(id, image, lien, nom, prenom)
--}}


<div class="blog-author">
  <div class="media align-items-center">
    @foreach ($authors as $author)
      {{-- image --}}
       <img src="{{$author->image}}" alt="{{$author->lien}}">
       <div class="media-body">
         {{-- lien --}}
          <a href="{{$author->lien}}">
            {{-- nom et prenom --}}
             <h4>{{$author->nom}} {{$author->prenom}}</h4>
          </a>
       </div>
    @endforeach
  </div>
</div>
