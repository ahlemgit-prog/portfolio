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
                         <h3>Duolingo</h3>
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
                     <img class="img-fluid" src="img/blog/single_blog_15.gif" alt="#">
                  </div>
                  <div class="blog_details">
                     <h2>Duolingo, une application éducative sous forme de ludification</h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="duolingo.html"><i class="fa fa-user"></i>UX design, Gamification</a></li>
                        <li><a href="#"><i class="fa fa-comments"></i> 0 Commentaires</a></li>
                     </ul>
                     <p class="excert">
                       <i>Avez-vous déjà pensé à parler une nouvelle langue ?</i> <br>
                       <br>
                       Tout d'abord, rappelons que le terme gamification synonyme de ludification, est l'appelation d'une application du design de jeux dans un endroit autre qu’un jeu. Vous pouvez le définir en ajoutant des niveaux, de l'expérience, des points de santé ou d'autres caractéristiques liées aux jeux.  <br>
                       <br>
                       Duolingo fait certainement quelque chose de bien pour atteindre ces chiffres. Cependant, il a fallu des années pour commencer de belles choses. <br>
                       À partir de cette revue de Duolingo, je vais vous expliquer comment créer un design engageant dès la première venue. <br>
                       <br>
                     </p>
                     <div class="quote-wrapper">
                        <div class="quotes">
                          <p>
                          Duolingo a un design attrayant et ludique et une expérience d'intégration fluide. <br>
                          Vous pouvez choisir la langue que vous souhaitez apprendre, vous fixer un objectif au quotidien et commencer immédiatement à réaliser des exercices guidés et suivi notamment grâce aux notifications par mail.<br>
                          <p>
                        </div>
                     </div>
                     <p>
                       <i>Plus de récompenses pour être plus motivé !</i><br>
                       <br>
                        Les exercices sont courts, seulement 10 questions au début et ne devraient pas prendre plus de 2-3 minutes à compléter. <br>
                       <br>
                        Plusieurs mécanismes de jeux intégrés ajoutent des améliorations de motivation pour s'assurer que les nouveaux utilisateurs atteignent rapidement leurs premiers états gagnants. <br>
                       <br>
                         Pour les personnes déterminantes, la barre de progression indique à quel point vous êtes sur le point de terminer l'exercice. Chaque bonne réponse est récompensée par un encouragé par un effet sonore. <br>
                         Duolingo met en avant un Hibou s'animant tel un émoticône lorsque vous réussissez l'exercice. <br>
                         Entre les questions, Duo, la chouette mascotte, commentera à quel point vous êtes intelligent. Sa positivité ainsi que son entousiasme motivera d’autant plus les utilisateurs. <br>
                       <br>
                         En plus d'atteindre l'état gagnant récompense les gemmes de l'EXP, chaque exercice terminé s'ajoute à l'expansion de l'arbre de compétences qui suit la progression d'apprentissage de l'utilisateur. <br>
                         Cette arbre à pour but d'avoir un aperçu sur vos réussites et votre progression afin de continuer l'aventure. <br>
                       <br>
                       Vous souhaitez apprendre une nouvelle langue vous aussi ? Tentez l'aventure avec Duolingo ! N'attendez plus et téléchargez cette application !

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
                              <a href="animation">
                                 <img class="img-fluid" src="img/post/button_bodymovin.png" alt="">
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="animation">
                                 <span class="lnr text-white ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                              <p>Précédent</p>
                              <a href="animation">
                                 <h4>Loggie Bodymovin</h4>
                              </a>
                           </div>
                        </div>
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <div class="detials">
                              <p>Suivant</p>
                              <a href="legos">
                                 <h4>Psychologie de la forme</h4>
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="legos">
                                 <span class="lnr text-white ti-arrow-right"></span>
                              </a>
                           </div>
                           <div class="thumb">
                              <a href="legos">
                                 <img class="img-fluid" src="img/post/button_simpsons.png" alt="">
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
