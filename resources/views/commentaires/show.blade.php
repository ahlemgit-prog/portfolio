{{--
  ./resources/views/commentaires/_show.blade.php
  Variables disponibles
    $commentaire OBJ(id, nombreCommentaire, image, texte, prenom, nom, datePublication)
--}}


  <div class="comments-area">
    {{-- nombreCommentaire --}}
    @foreach ($commentaires as $commentaire)
      <h4>{{$commentaire->nombreCommentaire}}</h4> Commentaire
    @endforeach

    @foreach ($commentaires as $commentaire)
    <div class="comment-list">
       <div class="single-comment justify-content-between d-flex">
          <div class="user justify-content-between d-flex">
             <div class="thumb">
               {{-- image --}}
                <img src="{{$commentaire->image}}" alt="">
             </div>
             <div class="desc">
               {{-- texte --}}
                <p class="comment">
                  {{$commentaire->texte}}
                </p>
                <div class="d-flex justify-content-between">
                   <div class="d-flex align-items-center">
                     {{-- prenom et nom --}}
                      <h5>
                         <a href="#">{{$commentaire->prenom}}{{$commentaire->nom}}</a>
                      </h5>
                      {{-- datePublication --}}
                      <p class="date">{{$commentaire->datePublication}}</p>
                   </div>
                   {{-- <div class="reply-btn">
                      <a href="#" class="btn-reply text-uppercase">Répondre</a>
                   </div> --}}
                </div>
             </div>
          </div>
       </div>
    </div>
  </div>
  @endforeach
