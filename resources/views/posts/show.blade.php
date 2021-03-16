{{--
  ./resources/views/posts.projets.blade.php
  Variables disponibles :
    $post OBJ(id, image, lien, titre, datePublication)
--}}

<!-- Posts  -->

<aside class="single_sidebar_widget popular_post_widget">
    <h3 class="widget_title">Posts récents</h3>
    @foreach ($posts as $post)
      <div class="media post_item">
          <img src="{{$post->image}}" alt="post">
          <div class="media-body">
              <a href="{{$post->lien}}">
                  <h3>{{$post->titre}}</h3>
              </a>
              <p>{{$post->datePublication}}</p>
          </div>
      </div>
    @endforeach
</aside>
