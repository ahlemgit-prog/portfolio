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
                         <h3>Bien être numérique</h3>
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
                     <img class="img-fluid" src="img/blog/single_blog_9.png" alt="">
                  </div>
                  <div class="blog_details">
                     <h2>Principes axés sur les personnes pour le bien-être numériques</h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="https://material.io/blog/digital-wellbeing-ux-principles"><i class="fa fa-user"></i> Numerique, Material Design</a></li>
                        <li><a href="#"><i class="fa fa-comments"></i> 0 Commentaires</a></li>
                     </ul>
                     <p class="excert">
                       <i>Autonomiser grâce aux défauts</i> <br>
                       Faire des choix qui favorisent le bien-être à long terme plutôt que la gratification immédiate est difficile.
                       Le principe d '«autonomisation» reconnaît le rôle fondamental que les paramètres par défaut peuvent jouer pour faire pencher la balance en faveur d'une prise de décision qui améliore le bien-être. <br>
                       Il a été démontré que les valeurs par défaut incitent efficacement (et souvent sans effort) les gens à faire des choix positifs concernant leurs finances (type par défaut: plan d'épargne 401k opt-out) et la santé publique (type par défaut: registre de don d'organes opt-out). <br>
                       La conception de valeurs par défaut saines offre la possibilité d'avoir un impact positif sur le bien-être des utilisateurs. <br>
                       Un exemple de produit de support par défaut peut être vu dans l'option de YouTube pour désactiver les sons et les notifications : un paramètre qui favorise le repos de 22 h 00 à 8 h 00 par défaut. <br>
                       Alors que les utilisateurs peuvent toujours désactiver le paramètre ou ajuster la synchronisation en fonction de leurs propres besoins, les valeurs par défaut prennent le bien-être de l'utilisateur comme point de départ, plutôt qu'une étape supplémentaire que les utilisateurs doivent configurer pour eux-mêmes.
                     </p>
                     <br>
                     <p>
                       <i>Sensibiliser aux comportements et aux objectifs</i> <br>
                       Les informations et les opportunités qui mènent à l'auto-réflexion aident les gens à devenir plus conscients de la façon dont ils passent leur temps.
                       Les chercheurs ont montré que la prise de conscience de soi dans des activités telles que l'utilisation d'appareils permet de prendre conscience de ses objectifs, en particulier le sommeil, l'exercice et la nutrition . Lorsque les utilisateurs reçoivent régulièrement des commentaires sur leur activité, ils sont habilités à corriger plus facilement leurs comportements par rapport à des objectifs qui peuvent être en retard.

                     </p>
                     <div class="quote-wrapper">
                        <div class="quotes">
                          <i>Créez des expériences contextuelles</i>
                          <br>
                          Selon une étude de 2019 commandée par Google, l'équipe du bien-être numérique a appris que la technologie affecte le plus les gens lorsqu'elle entrave ou soutient leurs objectifs.
                          Sans surprise, les gens n'ont pas déclaré se sentir bien lorsque leurs objectifs étaient entravés par la technologie. En fait, ils se sentaient agacés, fatigués et même honteux.
                          <br>
                          D'un autre côté, lorsque les gens sentaient que leurs objectifs étaient soutenus par la technologie, ils se sentaient heureux, fiers, calmes et excités.<br>
                          Comprendre et soutenir les objectifs d'un individu est fondamental et peut être atteint en pensant à l'adaptabilité.
                        </div>
                     </div>
                     <p>
                       <i>Fournir des paramètres transparents </i><br>
                       Selon une étude de 2019 commandée par Google, 1 personne sur 3 a apporté ou tenté d'apporter des modifications à son utilisation de la technologie afin de remédier aux effets indésirables qu'elle a subis. <br>
                       Plus de 80% de ceux qui ont réagi à cette expérience l'ont trouvée utile. Cet aperçu nous donne une autre raison de rendre les contrôles disponibles et facilement découvrables afin que lorsque les gens souhaitent modifier leurs habitudes ou leur expérience, ce soit aussi simple que possible. <br>
                       <br>
                       Les interrupteurs marche / arrêt sont un endroit facile pour commencer à fournir aux gens des commandes plus granulaires. Si les produits prennent le temps d'anticiper les besoins, les capacités et les antécédents divers des gens, nous pouvons mieux identifier les moyens de s'adapter à ces besoins. <br>
                       Des contrôles transparents sont obtenus en expliquant en détail le fonctionnement d'une fonctionnalité, y compris la manière dont les données sont collectées et utilisées.<br>
                     <p>
                       <i>Au-delà des principes</i><br>
                       Construire pour le bien-être numérique ne se résume pas à cocher une liste de principes - cela nécessite de l'empathie et de la créativité. <br>
                       Lorsque vous combinez ces attributs UX avec des principes de bien-être numérique, la conception peut servir à soutenir les objectifs des gens et, en fin de compte, améliorer les résultats positifs.
                     </p>
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
                              <a href="selfies">
                                 <img class="img-fluid" src="img/post/button_selfies.png" alt="">
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="selfies">
                                 <span class="lnr text-white ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                              <p>Précédent</p>
                              <a href="selfies">
                                 <h4>Filtres et Selfies</h4>
                              </a>
                           </div>
                        </div>
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <div class="detials">
                              <p>Suivant</p>
                              <a href="gestalt">
                                 <h4>Gestalt</h4>
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="gestalt">
                                 <span class="lnr text-white ti-arrow-right"></span>
                              </a>
                           </div>
                           <div class="thumb">
                              <a href="gestalt">
                                 <img class="img-fluid" src="img/post/button_gestalt.png" alt="">
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="blog-author">
                  <div class="media align-items-center">
                     <img src="img/blog/author_3.png" alt="https://blog.google/inside-google/googlers/maggie-stanphill-making-more-mindful-tech/">
                     <div class="media-body">
                        <a href="https://blog.google/inside-google/googlers/maggie-stanphill-making-more-mindful-tech/">
                           <h4>Maggie Stanphill</h4>
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
