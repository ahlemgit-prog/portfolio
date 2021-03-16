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
                         <h3>Gamification</h3>
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
                     <img class="img-fluid" src="img/blog/single_blog_11.png" alt="#">
                  </div>
                  <div class="blog_details">
                     <h2>La stratégie de gamification</h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="https://www.emydigital.fr/concept-de-la-gamification-au-service-de-lexperience-utilisateur/"><i class="fa fa-user"></i>UX design, Gamification</a></li>
                        <li><a href="#"><i class="fa fa-comments"></i> 0 Commentaires</a></li>
                     </ul>
                     <p class="excert">
                       <i>Qu'est-ce que la gamification ?</i> <br>
                       <br>
                       La gamification consiste à utiliser des mécaniques de jeu dans un environnement non-ludique tel que les sites web ou les applications mobiles.Des mécaniques tel que : les systèmes de points, de récompenses, de challenges, et tout ça dans un esprit résolument ludique. <br>
                       <br>
                       Les UX designers sont de cette façon capable de jouer sur le comportement des utilisateurs afin de les inciter à jouer, à relever des défis. <br>
                       La gamification va encore plus loin que la fidélisation des clients, elle fait de celui-ci un acteur et non plus un utilisateur passif. <br>
                       <br>
                     </p>
                     <div class="quote-wrapper">
                        <div class="quotes">
                          <p>
                          Il est depuis longtemps avéré que les utilisateurs aiment relever des défis et être récompensés.<br>
                          <p>
                        </div>
                     </div>
                     <p>
                       <i>Quels sont les mécaniques les plus représentatives ? </i><br>
                       <br>
                       Les défis : la nature humaine aime relever des défis et les réussir. <br>
                       Si on ajoute des récompenses à la clé, l’utilisateur sera encore plus motivé, cet élément est un des plus convaincant et incite l’utilisateur à agir. <br>
                       <br>
                       Les systèmes de points : ajouter la performance permet de visualiser l’implication des utilisateurs, il indique l’engagement de ceux-ci dans le site ou l’application. Utiliser un système de comptabilité des points par une forme d’évaluation, de vidéos lus, etc… peut être aussi un bon moyen de fidélisation. <br>
                       <br>
                       Les badges et autocollants : un autre élément très apprécié est la collection de badges ou d’autocollant suivant les performances et/ou l’implication. <br>
                       Cette méthode est très utilisé dans les jeux, il est donc reconnu des internautes. <br>
                       De plus, ce système de récompenses laisse place à de nombreuses possibilités de réalisation graphique, ce qui motivera d’autant plus les utilisateurs. <br>
                       <br>
                       Les tableaux de bord : Le fait de pouvoir visualiser les performances de chacun sur un tableau de bord incite les utilisateurs à se surpasser. Le désir de compétition, la volonté de faire mieux est un moteur de motivation. Attention cependant certains pourraient être démoralisés au vu du rang très élevé qui pourrait avoir d’autres utilisateurs. <br>
                       <br>
                       Le tutoriel : bien connu des joueurs, ce système permet à l’utilisateur de découvrir au démarrage du jeu les fonctionnalités de celui-ci. Il est utile afin de rassurer et d’accompagner l’utilisateur dans le processus de découverte. Le fait de révéler petit à petit les fonctionnalités au fur et à mesure qu’il devient plus expérimenté est une motivation de plus. <br>
                       <br>
                       Les contraintes : indiquer un temps bien défini pour réaliser une action dans le jeu incite les utilisateurs à agir plus rapidement et permet d’empêcher l’éventuelle lassitude d’un jeu qui durerait trop longtemps.
                     </p>
                     <br>
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
                              <a href="fidelisation">
                                 <img class="img-fluid" src="img/post/button_fidelisation.png" alt="">
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="fidelisation">
                                 <span class="lnr text-white ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                              <p>Précédent</p>
                              <a href="fidelisation">
                                 <h4>Fidélisation</h4>
                              </a>
                           </div>
                        </div>
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <div class="detials">
                              <p>Suivant</p>
                              <a href="icons-animees">
                                 <h4>Icones animées</h4>
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="icons-animees">
                                 <span class="lnr text-white ti-arrow-right"></span>
                              </a>
                           </div>
                           <div class="thumb">
                              <a href="icons-animees">
                                 <img class="img-fluid" src="img/post/button_icon.png" alt="">
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="blog-author">
                  <div class="media align-items-center">
                     <img src="img/blog/author_6.png" alt="https://fr.linkedin.com/in/pascale-limare-digital">
                     <div class="media-body">
                        <a href="https://fr.linkedin.com/in/pascale-limare-digital">
                           <h4>Pascale Limare</h4>
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
