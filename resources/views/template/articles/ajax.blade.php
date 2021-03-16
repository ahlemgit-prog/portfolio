<!DOCTYPE html>
<html class="no-js" lang="fr">

<head>
   @include('template.partials._head')
</head>

<body id="body" class="darkmode">

    @include('template.partials._header')

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                         {{-- titre --}}
                        <h3>Vanilla JS</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bradcam_area  -->

   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">

              <div class="single-post">
                {{-- Image --}}
                 <div class="feature-img">
                    <img class="img-fluid" src="img/projets/js.gif" alt="">
                 </div>
                 <div class="blog_details">
                   {{-- sousTitre --}}
                    <h2>Vanilla JS | AJAX</h2>
                    <ul class="blog-info-link mt-3 mb-4">
                      {{-- Tag --}}
                       <li><a href="#"><i class="fa fa-user"></i> JS, Design</a></li>
                       {{-- nombreCommentaires --}}
                       <li><a href="#"><i class="fa fa-comments"></i> 0 Commentaires</a></li>
                    </ul>
                    <p class="excert">
                      Le script vanilla est l'un des frameworks les plus légers jamais créés. Il est très simple et simple à apprendre et à utiliser. <br>
                      Vous pouvez créer des applications importantes et influentes ainsi que des sites Web à l'aide du script vanilla. <br>

                      L'équipe de développeurs qui a créé le JavaScript vanilla travaille continuellement dessus pour l'améliorer et le rendre plus utile pour les développeurs Web.</p>

                    </p>

                    <div class="quote-wrapper">
                       <div class="quotes">
                         <p>
                           <i>A quoi sert AJAX ?</i> <br>
                           <br>
                           AJAX signifie Asynchronous JavaScript and XML. <br>
                           L’AJAX n’est pas un langage de programmation mais correspond plutôt à un ensemble de techniques utilisant des technologies diverses pour envoyer et récupérer des données vers et depuis un serveur de façon asynchrone, c’est-à-dire sans avoir à recharger la page. <br>
                           <br>
                           L'AJAX utilise les technologies tel JavaScript pour afficher les données de manière dynamique et permettre à l’utilisateur d’interagir avec les nouvelles informations, le HTML et le CSS pour la présentation des données.
                         <p>
                       </div>
                    </div>
                      <p>
                      Voici un aperçu d'un site pour afficher les commentaires avec AJAX<br>
                      <br>
                      {{-- image --}}
                      <div class="feature-img">
                       <img   class="img-fluid" src="img/projets/ajax.png" alt="" width="730" height="300" text-center> <br>
                      </div>
                    </p>
                 </div>
              </div>
              <div class="navigation-top">
                 <div class="d-sm-flex justify-content-between text-center">
                    <!-- <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                       people like this</p> -->
                    <div class="col-sm-4 text-center my-2 my-sm-0">
                       <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                    </div>
                    <!-- <ul class="social-icons">
                       <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                       <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                       <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                       <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul> -->
                 </div>
                 <div class="navigation-area">
                    <div class="row">
                       <div
                          class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                          {{-- BeforeImage --}}
                          <div class="thumb">
                            {{-- BeforeLien --}}
                             <a href="framework_css">
                                <img class="img-fluid" src="img/post/button_framework.png" alt="">
                             </a>
                          </div>
                          <div class="arrow">
                             <a href="framework_css">
                                <span class="lnr text-white ti-arrow-left"></span>
                             </a>
                          </div>
                          <div class="detials">
                             <p>Précédent</p>
                             <a href="framework_css">
                               {{-- BeforeTitre --}}
                                <h4>Framework CSS</h4>
                             </a>
                          </div>
                       </div>
                         {{-- boutonNext --}}
                       <!-- <div
                          class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                          <div class="detials">
                             <p>Suivant</p>
                             <a href="ajax.html">
                                <h4>Xabia</h4>
                             </a>
                          </div>
                          <div class="arrow">
                             <a href="ajax.html">
                                <span class="lnr text-white ti-arrow-right"></span>
                             </a>
                          </div>
                          <div class="thumb">
                             <a href="ajax.html">
                                <img class="img-fluid" src="img/post/button_xabia.png" alt="">
                             </a>
                          </div>
                       </div> -->
                    </div>
                 </div>
              </div>

               @include('authors.projets')

               @include('commentaires._index')

            </div>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">

                 @include('template.partials._search')

                 @include('categories._index')

                 @include('posts._index')

                 @include('tags._index')

                 @include('template.partials._instagram')

                 @include('newsletters._index')

               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->


   @include('template.partials._footer')

   @include('template.partials._scripts')

</body>

</html>
