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
                            <h3>Tigre</h3>
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
                        <img class="img-fluid" src="img/projets/projets_3.png" alt="">
                     </div>
                     <div class="blog_details">
                        <h2>Tigre</h2>
                        <ul class="blog-info-link mt-3 mb-4">
                           <li><a href="#"><i class="fa fa-user"></i> Illustration, Design</a></li>
                           <li><a href="#"><i class="fa fa-comments"></i> 0 Commentaires</a></li>
                        </ul>
                        <p class="excert">
                        Dans cette article, j'ai choisi le tigre car je peux y ajouter différentes couleurs. <br>
                        Souvent, pour réaliser des créations sur Photoshop ou Illustrator, le web designer s'inspire des images d'Adobe sur les réseaux sociaux. <br>
                        On y trouvera des animaux la plupart du temps ou encore des champignons, etc. <br>
                        Vous retrouverez souvent une image hors du commun, créative, à la fois surréaliste et réaliste. <br>
                        </p>

                        <div class="quote-wrapper">
                           <div class="quotes">
                             <p>
                               <i>Comment ai-je obtenu une image crayonnée sur Photoshop à partir d'une photo ? </i><br>
                               <br>
                                 Tout d'abord, je pose la photo sur Photoshop. Je duplique ensuite la même photo. <br>
                                 Je clique ensuite sur le logo en forme de lune en bas à droite puis sur teinte / saturation de la photo dupliquée. <br>
                                 J'applique la saturation à -100. Ensuite, je mets le mode de fusion et la densité de couleur négative. <br>
                                 Pour avoir un effet plus net et marqué de l'image, je pose un filtre. Pour cela, je clique sur Filtre, Flou puis Flou Gaussien
                                 avec un rayon qui dépend de l'image. <br>
                                 Pour finir, l'effet crayonné dépend des niveaux, ceux-ci s'ajuste avec des flèches. Pour ajouter les niveaux, cliquez sur le logo en forme de lune puis ajustez selon votre convenance. <br>
                             <p>
                           </div>
                        </div>
                          <p>
                            Voici un aperçu de l'image avec l'effet crayonnée, ajusté à ma manière. <br>
                          <br>
                          <div class="feature-img">
                           <img   class="img-fluid" src="img/projets/tigre.png" alt="" width="730" height="300" text-center> <br>
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
                              <div class="thumb">
                                 <a href="bechic">
                                    <img class="img-fluid" src="img/post/button_gazelle.png" alt="">
                                 </a>
                              </div>
                              <div class="arrow">
                                 <a href="bechic">
                                    <span class="lnr text-white ti-arrow-left"></span>
                                 </a>
                              </div>
                              <div class="detials">
                                 <p>Précédent</p>
                                 <a href="bechic">
                                    <h4>Be chic</h4>
                                 </a>
                              </div>
                           </div>
                           <div
                              class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                              <div class="detials">
                                 <p>Suivant</p>
                                 <a href="xabia">
                                    <h4>Xabia</h4>
                                 </a>
                              </div>
                              <div class="arrow">
                                 <a href="xabia">
                                    <span class="lnr text-white ti-arrow-right"></span>
                                 </a>
                              </div>
                              <div class="thumb">
                                 <a href="xabia">
                                    <img class="img-fluid" src="img/post/button_xabia.png" alt="">
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
