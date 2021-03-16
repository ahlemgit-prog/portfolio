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
                         <h3>Legos & Gestalt</h3>
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
                  <div class="feature-img">
                     <img class="img-fluid" src="img/blog/single_blog_16.gif" alt="">
                  </div>
                  <div class="blog_details">
                     <h2>La représentation mentale des legos</h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="fa fa-user"></i> Legos, Gestalt</a></li>
                        <li><a href="#"><i class="fa fa-comments"></i> 0 Commentaires</a></li>
                     </ul>
                     <p class="excert">
                       <i>Pourquoi les legos nous attirent-ils ?</i><br>
                       <br>
                       Les legos sont un ensemble de briques en plastique qui offre, de manière spontanée et aux joueurs de tout âge, la possibilité d'améliorer sa propre créativité. </i> <br>
                       Cela est dans notre nature en tant qu'être humain de construire une fondation, d'être curieux, de persévérer face aux défis. <br>
                       L'assemblage de ces briques engage le joueur à acheminer sa construction. Cela lui permet de persévérer afin d'obtenir un ensemble de formes, ensuite reproduire une image en tête grâce à cette assemblage. <br>
                       Cette assemblage de construction du joueur est une représentation, la définition même du terme Gestalt.
                       <br>
                     </p>
                     <div class="quote-wrapper">
                        <div class="quotes">
                          <p>
                            <i>Qu'est-ce la Gestalt ? </i> <br>
                            Le terme Gestalt est une théorie psychologique et philosophique de la forme. <br>
                            La perception et la représentation mentale de chacun leur est propre. Les humains sont des êtres capables de construire schématiquement leur structure de perception.<br>
                            <br>
                            Cette schématisation mène ceux-ci à traiter des phénomènes comme des formes globales grâce aux sens, ici en l'occurence la vue  à travers une juxtaposition d'élements simples. <br>
                            D'autres sens peuvent être mis à l'épreuve comme l'audition, le toucher. Citons l'exemple d'une sonnerie connue qui relie à une publicité ciblée ou une sonnerie à notre smartphone. <br>
                            Un autre exemple comme le braye guident les malvoyants à lire grâce au toucher, une notice de médicament.
                          <p>

                        </div>
                        <br>
                        <p>
                          <i>Pourquoi les legos est une représentation de la Gestalt ? </i> <br>
                          Les logos permettent aux joueurs de toutes les tranches d'âge d'accéder à une créativité hors pair. Le joueur peut dès lors construire selon sa perspection et son envie. <br>
                          Ce jeu à pour objectif d'une part, aux enfants, de développer leur créativité dès leur jeune âge grâce au toucher et à la vue. <br>
                          <br>
                          D'autre part, ce jeu permet aux joueurs plus agés de construire plus en détails leur persception. <br>
                          Il suffit simplement d'associer les formes et les couleurs pour représenter une image de nos souvenirs d'enfance ou associer l'ensemble pour représenter une forme qui nous est familier. <br>
                          La famille Simpson est-elle au grand complet ?
                        </p>
                        <img src="img/blog/simpsons.png" alt="#">
                     </div>
                  </div>
               </div>
               <div class="navigation-top">
                  <div class="d-sm-flex justify-content-between text-center">
                     {{-- <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                        people like this</p> --}}
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
                           <div class="thumb">
                              <a href="duolingo">
                                 <img class="img-fluid" src="img/post/duolingo.png" alt="">
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="duolingo">
                                 <span class="lnr text-white ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                              <p>Précédent</p>
                              <a href="duolingo">
                                 <h4>Duolingo</h4>
                              </a>
                           </div>
                        </div>
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <div class="detials">
                              <p>Suivant</p>
                              <a href="jeux-video">
                                 <h4>Jeux videos</h4>
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="jeux-video">
                                 <span class="lnr text-white ti-arrow-right"></span>
                              </a>
                           </div>
                           <div class="thumb">
                              <a href="jeux-video">
                                 <img class="img-fluid" src="img/post/mario.png" alt="">
                              </a>
                           </div>
                        </div>
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
