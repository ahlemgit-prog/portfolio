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
                         <h3>Gestalt</h3>
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
                     <img class="img-fluid" src="img/blog/single_blog_8.png" alt="">
                  </div>
                  <div class="blog_details">
                     <h2>Principes de Gestalt dans la conception Web</h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="https://swapps.com/blog/gestalt-principles-in-web-design/"><i class="fa fa-user"></i> Gestalt, Swapps</a></li>
                        <li><a href="#"><i class="fa fa-comments"></i> 0 Commentaires</a></li>
                     </ul>
                     <p class="excert">
                       Et c'est précisément la perception visuelle et spatiale deux des principaux sujets que les principes de la psychologie étudient. <br>
                       Les gens regroupent les informations reçues à travers nos cinq sens et essaient, consciemment ou inconsciemment, de leur donner un sens de manière ordonnée et compréhensible. <br>
                       <br>
                       <i>Quel est le lien entre la psychologie et la conception Web?</i>
                       <br>
                       C'est là que les principes de la Gestalt entrent en jeu. Gestalt est un mot allemand qui signifie forme et est un concept psychologique qui explique essentiellement comment nous interprétons la réalité. <br>
                       Ce concept explore la perception visuelle, en proposant une série de principes décrivant la manière dont nous regroupons visuellement les informations. <br>
                       Décrivons brièvement ces éléments et comment nous pouvons les utiliser dans la conception des interfaces:
                     </p>

                     <div class="quote-wrapper">
                        <div class="quotes">
                          <p>
                            <i>Les principes de base</i> <br>
                            Certains des principes de Gestalt appliqués à l'interface utilisateur. <br>
                            Des principes qui nous aideront à mener à bien notre mission dans le domaine de la conception web: communiquer. <br>
                            En fin de compte, c'est ce que vise la conception des interfaces: d'apporter de manière visuelle et agréable un message aux nombreux utilisateurs d'une application ou d'un site Web.
                          <p>
                        </div>
                     </div>
                     <p>
                       <i>La proximité</i> <br>
                       <br>
                       Nous percevons les objets proches les uns des autres comme similaires. <br>
                       Comment cela s'applique-t-il à la conception de l'interface utilisateur ? <br>
                       Nous pouvons profiter de ce principe en regroupant des informations similaires, telles que des sections au sein d'une même page / application Web ou des boutons de navigation. Étant si proche, l'espace blanc joue un rôle fondamental pour laisser les yeux se reposer. <br>
                       <br>
                       <i>La similarité</i> <br>
                       <br>
                       Nous percevons les objets qui partagent les mêmes caractéristiques (couleur, forme, taille, texture et orientation) comme faisant partie d'un ensemble, même lorsqu'ils ne sont pas des positions adjacentes ou fermées. <br>
                       Comment cela s'applique-t-il à la conception de l'interface utilisateur ? <br>
                       Les éléments qui partagent les mêmes caractéristiques nous montrent qu'ils font partie d'un groupe.  <br>
                       Il peut s'agir d'éléments d'une interface de la page / de l'application, tels que des liens Web dans le menu de navigation, ou des fiches de prix. <br>
                       <br>
                       <i>L'achèvement</i> <br>
                       <br>
                       Notre cerveau aura tendance à compléter des formes ou des objets même s'il leur manque quelque chose. <br>
                       Comment cela s'applique-t-il à la conception de l'interface utilisateur ? <br>
                       Un exemple clair de ce principe dans le design est l'iconographie que des millions de personnes voient sur le Web de tous les jours. Dans n'importe quel site Web ou application, nous avons la possibilité de voir des icônes qui représentent différents types d'actions, de situations ou d'éléments de manière claire, concise et légère sans tomber dans le skeuomorph.  <br>
                       <br>
                       <i>La contuinité</i> <br>
                       <br>
                       Nous percevons le mouvement et la direction selon certains éléments, même si ce n'est pas explicite. <br>
                       Comment cela s'applique-t-il à la conception de l'interface utilisateur ? <br>
                       La continuité est utilisée lorsque certains éléments suggèrent que nous devrions diriger notre attention vers un lieu ou une direction spécifique. Des exemples de cela peuvent être les miniatures dans une galerie, une diapositive d'images ou un menu déroulant. <br>
                       <br>
                       <i>Le destin commun</i> <br>
                       <br>
                       Nous regroupons les objets qui se déplacent ou pointent dans la même direction, peu importe à quel point ils sont différents ou éloignés les uns des autres.<br>
                       Comment cela s'applique-t-il à la conception de l'interface utilisateur ? <br>
                       Le destin commun est un principe qui donne du dynamisme à une interface graphique, à travers le mouvement et le changement de rythme de manière synchronisée. <br>
                       Le fil d'Ariane dans la navigation ou une barre de progression nous aide à illustrer ce principe.
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
                              <a href="bien-etre-numerique">
                                 <img class="img-fluid" src="img/post/button_numerique.png" alt="">
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="bien-etre-numerique">
                                 <span class="lnr text-white ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                              <p>Précédent</p>
                              <a href="bien-etre-numerique">
                                 <h4>Bien-être numérique</h4>
                              </a>
                           </div>
                        </div>
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <div class="detials">
                              <p>Suivant</p>
                              <a href="fidelisation">
                                 <h4>Fidélisation</h4>
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="fidelisation">
                                 <span class="lnr text-white ti-arrow-right"></span>
                              </a>
                           </div>
                           <div class="thumb">
                              <a href="fidelisation">
                                 <img class="img-fluid" src="img/post/button_fidelisation.png" alt="">
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="blog-author">
                  <div class="media align-items-center">
                     <img src="img/blog/author_4.png" alt="https://swapps.com/blog/author/hperea/">
                     <div class="media-body">
                        <a href="https://swapps.com/blog/author/hperea/">
                           <h4>Hector Perea</h4>
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
