{{--
  ./resources/views/tags/show.blade.php
  Variables disponibles
    $tag OBJ TAG(id, nom, lien)
--}}

<aside class="single_sidebar_widget tag_cloud_widget">
    <h4 class="widget_title">Tags</h4>
    <ul class="list">
       @foreach ($tags as $tag)
         <li>
           {{--{{$tag-> lien}} --}} {{--{{$tag-> nom}} --}}
             <a href="{{$tag->lien}}">{{$tag->nom}}</a>
         </li>
       @endforeach
    </ul>
</aside>
