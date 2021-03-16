{{--
  ./resources/views/blogs/show.blade.php
  Variables disponibles :
    $blog OBJ(id, titre, image, video, datePublication, sousTitre, texte, nombreCommentaire, users, authors_id, author OBJ, tags ARRAY(OBJ) tags)
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

                        <article class="blog_item">
                            <div class="blog_item_img">
                                <!-- <img class="card-img rounded-0" src="img/blog/single_blog_12.png" alt=""> -->
                                <video class="card-img rounded-0" controls playcount="3">
                                  <source src="img/blog/single_blog_12.mp4" type="video/mp4">
                                </video>
                                <a href="icons-animees" class="blog_item_date">
                                    <h3>17</h3>
                                    <p>Sep</p>
                                </a>
                            </div>
                            <div class="blog_details">
                                <a class="d-inline-block" href="icons-animees">
                                    <h2>Icônes animées</h2>
                                </a>
                                <p><i>L'animation reflète l'action effectuée par une icône d'une manière qui ajoute du raffinement et du plaisir.</i> <br>
                                      L'animation de chaque icône est alignée à la fois sur la conception visuelle et l'action qu'elles exécutent.
                                  Mais comment, d'un point de vue pratique, le besoin de bien-être général et de relations saines avec les produits numériques est-il intégré dans le système de conception matérielle ?</p>
                                <ul class="blog-info-link">
                                    <li><a href="https://material.io/design/iconography/animated-icons.html#usage"><i class="fa fa-user"></i> Icons, Material Design</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 0 Commentaires</a></li>
                                </ul>
                            </div>
                        </article>
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
