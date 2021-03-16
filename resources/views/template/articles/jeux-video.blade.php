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
                         <h3>Jeux Vidéos</h3>
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
                    <img class="card-img rounded-0" src="img/blog/single_blog_17.gif" alt="">
                  </div>
                  <div class="blog_details">
                     <h2>Développement de jeux vidéo</h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="https://material.io/design/iconography/animated-icons.html#usage"><i class="fa fa-user"></i>Jeux Vidéos, Technologie</a></li>
                        <li><a href="#"><i class="fa fa-comments"></i> 0 Commentaires</a></li>
                     </ul>
                     <p class="excert">
                       <i>Le game design du jeu vidéo</i> <br>
                       <br>
                        Le jeu vidéo est souvent considéré comme un média entièrement dédié au divertissement et à la détente. <br>
                        Parfois, on le considère comme un bon outil d’éducation lorsqu’il s’accompagne du label « serious game ». <br>
                        Pourtant, le jeu vidéo est capable de véhiculer des revendications et des points de vue originaux portant sur des problématiques sociales. <br>
                       <br>
                       <i>Spyro</i> <br>
                       <br>
                       Le physique initial de Spyro illustre son fort caractère, son regard plein de défi renvoie à son côté bagarreur et entêté. <br>
                       Il forme un véritable boute-en-train ne craignant pas le danger et il est bel et bien décidé à devenir un grand et fort dragon. <br>
                       Cette image correspond aux enfants à la charnière de la pré adolescence, à qui cette licence s’adresse.<br>
                       <br>
                       Dans The Legend of Spyro Trilogy, sa personnalité évolue en dragon plus adolescent, davantage à l’écoute des autres et moins à la recherche de reconnaissance. <br>
                       Il souhaite en savoir plus sur son passé, et se soucie de ce qui pourrait arriver par la suite. Même s’il reste parfois imprévisible, il roule sa bosse et incarne les prémices d’un leader-ship. <br>
                        <br>
                       <i>Fidélisation grâce à Youtube</i> <br>
                       <br>
                        Le tutoriel est une mode y compris pour les gamers. Les joueurs s'adaptent au personnage du jeu vidéo afin de captiver l'attention des spectateurs.<br>
                        C'est une manière de fidéliser ses abonnés afin de promouvoir un intérêt financier, une passion et garder la communication avec ses interlocuteurs.<br>
                        Cela lui donne une identité, un contenu personnalisée grâce à la chaine Youtube.
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
                              <a href="legos">
                                 <img class="img-fluid" src="img/post/button_simpsons.png" alt="">
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="legos">
                                 <span class="lnr text-white ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                              <p>Précédent</p>
                              <a href="legos">
                                 <h4>Psychologie de la forme</h4>
                              </a>
                           </div>
                        </div>
                        <!-- <div
                           class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <div class="detials">
                              <p>Suivant</p>
                              <a href="#">
                                 <h4>Telescopes 101</h4>
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-right"></span>
                              </a>
                           </div>
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="img/post/next.png" alt="">
                              </a>
                           </div>
                        </div> -->
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
