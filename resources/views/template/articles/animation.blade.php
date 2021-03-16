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
                         <h3>Animations</h3>
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
                    <img class="card-img rounded-0" src="img/blog/single_blog_14.png" alt="">
                  </div>
                  <div class="blog_details">
                     <h2>Lottie (Bodymovin) : des animations plus fluides pour votre application</h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="https://material.io/design/iconography/animated-icons.html#usage"><i class="fa fa-user"></i>Animation, PandaSuiteBlog</a></li>
                        <li><a href="#"><i class="fa fa-comments"></i> 0 Commentaires</a></li>
                     </ul>
                     <p class="excert">
                       <i>Des animations plus fluides et légères grâce au format JSON</i> <br>

                      Auparavant, réaliser une animation complexe était un process long et difficile. Il était nécessaire d’utiliser des formats d’images volumineux ou alors des gifs animés, ce qui alourdissait le poids d’une page et ralentissait le chargement. Ou de coder l’animation à partir d’une animation créée par un designer. <br>
                       <br>
                      Développée par les équipes Airbnb, Lottie est une librairie open source iOS, Android et React Native qui génère les animations After Effects en temps réel, ce qui permet aux applications d’utiliser les animations aussi facilement qu’elles utilisent des images statiques. Au final, les animations sont plus fluides, plus légères et plus facilement contrôlables. <br>
                       <br>
                       <i>After Effect</i> <br>

                       Nul besoin de savoir coder ! Bodymovin est le plug-in original depuis After Effect pour exporter les animations en JSON. Développé plus récemment le plug-in Lottiefiles offre des fonctionnalités supplémentaires pour optimiser le workflow des designers. <br>
                       Grâce à PandaSuite, vous pouvez ajouter des actions sur ces animations comme le survol de la souris, jouer une fois, faire une boucle ou même être créatif et jouer les icônes une fois qu’elles ont défilé dans une section. Et encore une fois, sans une ligne de code. <br>
                       <br>
                       Créez vos animations avec After Effects et Bodymovin / LottieFiles <br>
                       Quel que soit le plug-in retenu, exportez directement vos animations After Effect dans le bon format.
                       <br>
                       Préparez les ressources à importer dans After Effects <br>
                       Créez votre animation dans After Effects. <br>
                       Exportez le fichier JSON à l’aide du plugin Bodymovin ou Lottiefiles. <br>
                       <br>

                       <i>Des collections d’animations gratuites</i> <br>
                       Vous ne savez pas utiliser After Effect ? Au sein de Lottiefiles, découvre une collection d’animations JSON gratuites, prêtes à être intégrées dans vos produits digitaux.
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
                              <a href="logo">
                                 <img class="img-fluid" src="img/post/button_logo.png" alt="">
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="logo">
                                 <span class="lnr text-white ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                              <p>Précédent</p>
                              <a href="logo">
                                 <h4>Logos tendances</h4>
                              </a>
                           </div>
                        </div>
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <div class="detials">
                              <p>Suivant</p>
                              <a href="duolingo">
                                 <h4>Duolingo</h4>
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="duolingo">
                                 <span class="lnr text-white ti-arrow-right"></span>
                              </a>
                           </div>
                           <div class="thumb">
                              <a href="duolingo">
                                 <img class="img-fluid" src="img/post/duolingo.png" alt="">
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
