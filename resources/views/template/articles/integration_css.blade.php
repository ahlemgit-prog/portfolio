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
                         <h3>CSS</h3>
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
                     <img class="img-fluid" src="img/projets/css.gif" alt="">
                  </div>
                  <div class="blog_details">
                     <h2>Intégration CSS</h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="fa fa-user"></i> CSS, Design</a></li>
                        <li><a href="#"><i class="fa fa-comments"></i> 0 Commentaires</a></li>
                     </ul>
                     <p class="excert">
                       Le CSS est un language de programmation. C'est un ensemble de feuilles de style en cascade, généralement appelées CSS de l'anglais Cascading Style Sheets. <br>
                       Ceci contient des éléments de codage et donne une présentation visuelle agréable avec une mise en forme des pages web HTML. <br>

                     </p>

                     <div class="quote-wrapper">
                        <div class="quotes">
                          <p>
                            <i>A quoi sert CSS ?</i> <br>
                            <br>
                            Le CSS vous permet de choisir la couleur de votre texte, de sélectionner la police utilisée sur votre site,
                            de définir la taille du texte, les bordures, le fond,...
                            Il permet de faire la mise en page de votre site. <br>
                            Par exemple, vous pourrez dire:"je veux que mon menu soit à gauche et occupe telle largeur, que l'en-tête de mon site soit calé en haut et qu'il soit toujours visible".
                            Grâce au CSS, vous pouvez placer votre menu à l'endroit que vous souhaitez, modifier les mesures,...
                          <p>
                        </div>
                     </div>
                       <p>
                          <br>
                       <br>
                       <!-- <div class="feature-img">
                        <img   class="img-fluid" src="img/projets/tigre.png" alt="" width="730" height="300" text-center> <br>
                       </div> -->
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
                                 <h4>Framework CSS</h4>
                              </a>
                           </div>
                        </div>
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <div class="detials">
                              <p>Suivant</p>
                              <a href="ajax">
                                 <h4>AJAX</h4>
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="ajax">
                                 <span class="lnr text-white ti-arrow-right"></span>
                              </a>
                           </div>
                           <div class="thumb">
                              <a href="ajax">
                                 <img class="img-fluid" src="img/post/button_js.png" alt="">
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
