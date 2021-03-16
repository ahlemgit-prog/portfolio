{{--
  ./resources/views/template/articles/todzilla.blade.php
--}}

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
                         <h3>Todzilla</h3>
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
                  {{-- image --}}
                  <div class="feature-img">
                     <img class="img-fluid" src="img/projets/projets_1.png" alt="">
                  </div>
                  <div class="blog_details">
                    {{-- sousTitre --}}
                     <h2>Todzilla</h2>
                     <ul class="blog-info-link mt-3 mb-4">
                       {{-- lienTag --}}
                        <li><a href="#"><i class="fa fa-user"></i> Illustration, Design</a></li>
                       {{-- lienCommentaire --}}
                        <li><a href="#"><i class="fa fa-comments"></i> 0 Commentaires</a></li>
                     </ul>

                     <p class="excert">
                       Mon job en tant que designer consiste à m'appuyer sur un ensemble d'éléments tel les images, typographies , etc. Je les organise en compositions attrayantes. <br>
                       Ma tâche principale est de me concentrer sur l'attention du spectateur sur un certain concept visuel , une idée, un détail, une partie du design et de rendre une idée attrayante et mémorable.
                     </p>

                     <div class="quote-wrapper">
                        <div class="quotes">
                          <p>
                            <i>Quel est la technique sur Illustrator afin d'obtenir de très belles réalisations ? </i> <br>
                            <br>
                            Pour réaliser des images, il ne faut pas passer à côté de la plume. Cet outil est indispensable pour réaliser des courbes.
                            Illustrator offre des outils de dessin vectoriel puissants. Ces images vectorielles sont constituées de courbes dont l'un des outils principaux d'Illustrator
                            est cette plume.<br>
                            La plume se distingue par un ensemble de points qui permet de retracer l'image et redéfinir l'ensemble afin d'obtenir une illustration numérique.
                            Une illustration est un dessin, une peinture ou une œuvre d'art imprimée qui explique, clarifie, illumine, représente visuellement ou décore simplement un texte écrit, qui peut être de nature littéraire ou commerciale.
                             <br>
                          <p>
                        </div>
                     </div>
                     <p>
                       <i>Illustrator et ses atouts</i> <br>
                       <br>
                       Je commence par définir les différentes courbes de l'image afin d'obtenir l'identique de l'image originale.<br>
                       Ensuite, je choisis une palette de couleur pour combler l'image.<br>
                       Chaque couleur a une significaion et une interprétation. <br>
                       Dans le cas de todzilla, par exemple, le monstre est illustré avec une couleur verte qui représente ici l'avidité, synonyme d'empressement, de désir ou encore d'envie. <br>
                       Le monstre est une icône terrifiante. <br>
                       <br>
                       <div class="feature-img">
                          <img class="img-fluid" src="img/projets/palette_couleurs.png" alt="" width="730" height="468"> <br>
                       </div>
                       <br>
                     <p>
                       Je lui ai cependant donné un peu de peps avec la couleur orange et rouge. <br>
                       La couleur orange donne un côté dynamique au monstre, elle attire également l'attention. <br>
                       La couleur rouge donne un côté puissant au monstre, cette couleur représente également la passion et l'agression. <br>
                     </p>
                     </p>
                  </div>
               </div>
               <div class="navigation-top">
                  <div class="d-sm-flex justify-content-between text-center">
                     <!-- <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span>
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
                              <a href="#">
                                 <img class="img-fluid" src="img/post/preview.png" alt="">
                              </a>
                           </div>
                           <!-- <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                              <p>Précédent</p>
                              <a href="#">
                                 <h4></h4>
                              </a>
                           </div> -->
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <div class="detials">
                              <p>Suivant</p>
                              <a href="bechic">
                                 <h4>Be chic</h4>
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="bechic">
                                 <span class="lnr text-white ti-arrow-right"></span>
                              </a>
                           </div>
                           <div class="thumb">
                              <a href="bechic">
                                 <img class="img-fluid" src="img/post/button_gazelle.png" alt="">
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
