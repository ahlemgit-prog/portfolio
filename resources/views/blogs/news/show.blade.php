{{--
  ./resources/views/blogs/show.blade.php
  Variables disponibles :
    $blog OBJ(id, titre, image, video, jourPublication, moisPublication, lienArticle, sousTitre, titreTexte, texte, nombreCommentaire, lienTag, lienCommentaire, tags ARRAY(OBJ) tags, categories ARRAY(OBJ) categories)
--}}
<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
              @foreach ($blogs as $blog)
                <div class="bradcam_text text-center">
                  {{-- titre --}}
                    <h3>{{$blog->titre}}</h3>
                </div>
              @endforeach
            </div>
        </div>
    </div>
</div>
<!-- /bradcam_area  -->


<!--================Blog Area =================-->
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                  @foreach ($blogs as $blog)
                    <article class="blog_item">
                        <div class="blog_item_img">
                          {{-- image --}}
                            <img class="card-img rounded-0" src="{{$blog->image}}" alt="">
                            {{-- lienDate --}}
                            <a href="{{$blog->lienDate}}" class="blog_item_date">
                              {{-- jourPublication + moisPublication --}}
                                <h3>{{$blog->jourPublication}}</h3>
                                <p>{{$blog->moisPublication}}</p>
                            </a>
                        </div>

                        <div class="blog_details">
                          {{-- lienArticle --}}
                            <a class="d-inline-block" href="{{$blog->lienArticle}}">
                              {{-- sousTitre --}}
                                <h2>{{$blog->sousTitre}}</h2>
                            </a>
                            {{-- titreTexte + texte --}}
                            <p><i>{{$blog->titreTexte}}</i> <br>
                              {{$blog->texte}}
                            </p>
                            <ul class="blog-info-link">
                              {{--lienTag--}} {{--tag--}}
                                <li><a href="{{$blog->lienTag}}"><i class="fa fa-user"></i>{{$blog->tag}}</a></li>
                              {{--lienCommentaire--}} {{-- nombreCommentaire --}}
                                <li><a href="{{$blog->lienCommentaire}}"><i class="fa fa-comments"></i> {{$blog->nombreCommentaire}} Commentaires</a></li>
                            </ul>
                        </div>
                    </article>
                    @endforeach

                    @include('template.partials._news-pagination')

                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">

                  @include('template.partials._search')

                  @include('categories._index')

                  @include('tags._index')

                  @include('template.partials._instagram')

                  @include('newsletters._index')

                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->
