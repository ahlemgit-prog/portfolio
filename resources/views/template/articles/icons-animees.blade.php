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
                         <h3>Icons Animées</h3>
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
                    <video class="card-img rounded-0" controls playcount="3">
                      <source src="img/blog/single_blog_12.mp4" type="video/mp4">
                    </video>
                  </div>
                  <div class="blog_details">
                     <h2>Les icons animées</h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="https://material.io/design/iconography/animated-icons.html#usage"><i class="fa fa-user"></i>Icons, Material Design</a></li>
                        <li><a href="#"><i class="fa fa-comments"></i> 0 Commentaires</a></li>
                     </ul>
                     <p class="excert">
                       <i>Les transitions</i> <br>

                       Les transitions connectent des icônes animées entre deux états visuels. La transition entre deux icônes signifie qu'elles sont liées et que le fait d'appuyer sur une icône rend l'autre icône disponible. <br>
                       <br>
                       <i>Accentuation</i> <br>

                       Les transitions d'icônes animées peuvent utiliser un mouvement simple ou complexe en fonction du niveau d'accentuation préféré. <br>
                       Les transitions d'icônes animées peuvent utiliser un mouvement simple ou complexe en fonction du niveau d'accentuation préféré. <br>
                       Les icônes qui ne sont pas visibles utilisent un simple mouvement partagé. <br>
                       Les icônes qui sont une partie importante d'une application peuvent être mises en valeur avec un mouvement complexe <br>
                       <br>
                       <i>Durée</i> <br>

                       Plus une animation d'icône est complexe, plus elle doit durer longtemps pour éviter de se sentir pressé. Pour maintenir la cohérence dans une application, utilisez ... <br>

                       Plus une animation d'icône est complexe, plus elle doit durer longtemps pour éviter de se sentir pressé. Pour maintenir la cohérence dans une application, utilisez la même durée pour les icônes qui ont des niveaux de complexité similaires. La plupart des icônes s'intégreront dans ces trois groupes de durées recommandées: <br>

                       Animations d'icônes simples: 100 ms <br>
                       Animations d'icônes moyennes: 200 ms <br>
                       Animations d'icônes complexes: 500 ms <br>
                       <i>Échelonner</i> <br>
                       Les ensembles d'icônes peuvent utiliser une synchronisation échelonnée pour effectuer des entrées de manière fluide. Ils s'animent de gauche à droite pour donner une impression de progression. <br>
                       <br>
                       <i>États</i> <br>
                       Des animations d'icônes peuvent être utilisées pour renforcer un changement d'état. <br>
                       <br>
                       <i>Thème</i> <br>
                       Les animations doivent refléter le style d'une marque. <br>
                       Ces animations d'icônes sont inspirées du logo de la marque et des animations d'état de chargement. <br>
                       1. Animations d'icônes <br>
                       2. Animation de logo <br>
                       3. Animation de chargement <br>
                       <br>
                     </p>
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
                              <a href="gamification">
                                 <img class="img-fluid" src="img/post/button_gamification.png" alt="">
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="gamification">
                                 <span class="lnr text-white ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                              <p>Précédent</p>
                              <a href="gamification">
                                 <h4>Gamification</h4>
                              </a>
                           </div>
                        </div>
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <div class="detials">
                              <p>Suivant</p>
                              <a href="logo">
                                 <h4>Logo Tendances</h4>
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="logo">
                                 <span class="lnr text-white ti-arrow-right"></span>
                              </a>
                           </div>
                           <div class="thumb">
                              <a href="logo">
                                 <img class="img-fluid" src="img/post/button_logo.png" alt="">
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="blog-author">
                  <div class="media align-items-center">
                     <img src="img/blog/author_1.png" alt="https://material.io/design/iconography/animated-icons.html">
                     <div class="media-body">
                        <a href="https://material.io/design/iconography/animated-icons.html">
                           <h4>Material design</h4>
                        </a>
                     </div>
                  </div>
               </div>

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
