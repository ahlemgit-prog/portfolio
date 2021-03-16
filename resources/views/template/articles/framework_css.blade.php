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
                         <h3>Framework CSS</h3>
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
                     <img class="img-fluid" src="img/projets/start.png" alt="">
                  </div>
                  <div class="blog_details">
                     <h2>Start Bootstrap | Framework CSS</h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="fa fa-user"></i> CSS, Design</a></li>
                        <li><a href="#"><i class="fa fa-comments"></i> 0 Commentaires</a></li>
                     </ul>
                     <p class="excert">
                       <i>Qu'est-ce un framework CSS ? </i> <br>
                       <br>
                      Un framework CSS est une feuille de style CSS que vous allez pouvoir importer sur votre page et qui va vous permettre d'avoir des styles prédéfinis pour un certain nombres d'élements. <br>
                      Il est ensuite possible de composer sa page HTML en utilisant et en combinant ces différentes classes. <br>
                      Cette approche de structurer une page au fur et à mesure de sa conception permet de “bootstraper” un site sans forcément avoir un design spécifique en amont. <br>
                      C'est une structure de base, qui comprend une grille, des modèles d'interface utilisateur interactifs, une typographie Web, des info-bulles, des boutons, des éléments de formulaire, des icônes. <br>
                      <br>
                     </p>

                     <div class="quote-wrapper">
                        <div class="quotes">
                          <p>
                            <i>Le framework Bootstrap</i> <br>
                            <br>
                            Bootstrap est un ensemble d'outils utiles à la création du design tel le graphisme, l'animation et les interactions avec la page dans le navigateur, etc. de sites et d'applications web. <br>
                            C'est un ensemble qui contient des codes HTML et CSS, des formulaires, boutons, outils de navigation et autres éléments interactifs, ainsi que des extensions JavaScript en option. <br>
                            C'est l'un des projets les plus populaires sur la plate-forme de gestion de développement GitHub.
                          <p>
                        </div>
                     </div>
                       <p>
                         Ce framework est principalement composé de dossiers dans lequel se trouvent des fichiers .sass, .css et index.html.
                         Voici un exemple simple d'un framework css dans lequel se trouve à gauche, le fichier index.html avec les classes.
                         A droite se trouve notre CSS, dans lequel l'on sélectionne la classe, on ajoute la propriété par exemple color, la valeur par exemple green. <br>
                         L'ensemble des propriétés et des valeurs se nomme la spécification.
                         <br>
                         <div class="feature-img">
                            <img class="img-fluid" src="img/projets/html_framework.png" alt="">
                         </div>
                       </p>
                       <p>
                         <br>
                         Voici l'aperçu du site web
                         <div class="feature-img">
                            <img class="img-fluid" src="img/projets/framework.png" alt="">
                         </div>
                       </p>
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
                           <div class="thumb">
                              <a href="piccolo.html">
                                 <img class="img-fluid" src="img/post/button_piccolo.png" alt="">
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="piccolo">
                                 <span class="lnr text-white ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                              <p>Précédent</p>
                              <a href="piccolo">
                                 <h4>Piccolo</h4>
                              </a>
                           </div>
                        </div>
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <div class="detials">
                              <p>Suivant</p>
                              <a href="integration_css">
                                 <h4>Integration CSS</h4>
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="integration_css">
                                 <span class="lnr text-white ti-arrow-right"></span>
                              </a>
                           </div>
                           <div class="thumb">
                              <a href="integration_css">
                                 <img class="img-fluid" src="img/post/button_css.png" alt="">
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
