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
                         <h3>Be Chic</h3>
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
                     <img class="img-fluid" src="img/projets/projets_2.png" alt="">
                  </div>
                  <div class="blog_details">
                     <h2>Gazelle lumineuse | Be chic</h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="fa fa-user"></i> Illustration, Design</a></li>
                        <li><a href="#"><i class="fa fa-comments"></i> 0 Commentaires</a></li>
                     </ul>
                     <p class="excert">
                       Pour commencer, sélectionnez le contenu principal puis masquez. Cliquez ensuite sur l'affichage -> pelure d'oignon puis changez la transparence à 50%. <br>
                       Pour améliorer le contour de l'image afin qu'elle soit plus propre et nette, utilisez l'outil d'amélioration des contours avec une taille de 20. <br>
                       Par la suite, cliquez sur l'affichage -> sur noir -> changez le contraste à un peu près 10%. Le contraste dépend de l'image. <br>
                       Choisissez le paramètre de sortie en sélectionnant "cocher la case décontamination des couleurs" et choisir "nouveau calque avec masque de fusion". <br>
                       <br>
                       Pour la deuxième étape, copiez l'image originale avec les touches CTRL + J puis sélectionnez la deuxième image de l'arrière-plan copie en noir et blanc avec les touches CTRL + Click <br>
                       Utilisez le laso polygonal et contourez l'élément non principal de l'image pour travailler sur l'élément principal par la suite. <br>
                       Ainsi de suite, sélectionnez la première image de l'arrière plan copie puis redupliquez en appuyant sur les touches CTRL + J. <br>
                     </p>

                     <div class="quote-wrapper">
                        <div class="quotes">
                          <p>
                            <i> Quelle est la technique principale pour obtenir un effet glowing ? </i> <br>
                            <br>
                            Pour obtenir un effet glowing, la technique principale est de dupliquer en appuyant sur les touches CTRL + J à chaque fois. <br>
                            Formez un groupe à partir du calque dupliqué en appuyant sur CTRL + G. <br>
                            <i>Je veux accentuer une couleur précise ou accentuer la lumière. Comment procéder ? </i> <br>
                            Pour accentuer une couleur, cliquez sur le calque arrière plan de la première image puis appuyez sur le logo en forme de lune en dessous à droite -> correspondance de couleur <br>
                            Choisissez 3DLUT en MoonLight 3DL pour avoir un effet sombre afin d'illuminer l'élément principal, ici les cornes de la gazelle, avec l'effet glowing. <br>
                          <p>

                        </div>
                     </div>
                       <p>
                       En cliquant, une nouvelle fois sur le logo lune, cliquez sur noir et blanc et mettez une opacité de 50%. <br>
                       En réduissant l'opacité, l'élément principal sera d'autant plus accentué avec l'effet glowing car cela permettra d'accentuer la luminosité. <br>
                       N'oubliez pas de convertir en objet dynamique le calque se trouvant dans un groupe de calque et changez également l'élément principal de normal en densité linéaire négatif. <br>
                       Afin de peaufiner le tout, cliquez sur Filtre et ajoutez le flou gaussien avec un rayon qui correspond à votre image. <br>
                       Ce flou gaussien donnera plus d'importance à l'élément se situant en avant-plan, le mettant plus en valeur. <br>
                       <br>
                       Pour ma part, j'ai effectué un rayon en ajoutant 5. Pour la première, je mets un rayon de 5 puis je duplique. La seconde, un rayon de 10 puis je duplique et ainsi de suite.<br>
                       Je réalise cette étape jusqu'au rayon de 250. <br>
                       Pour choisir une couleur en particulier, cliquez sur le logo lune -> teinte et saturation -> cocher la case avec une flèche -> coloriser et enfin ajustez le calque. <br>
                       Attention, il faut bien sélectionner le calque pour que cela fonctionne et n'oubliez surtout pas d'ajuster la saturation à 90 pour avoir un effet plus imposant. <br>
                       La teinte est une sorte de palette de couleur dont le choix vous est destiné. Vous pouvez choisir la teinte de couleur que vous souhaitez. <br>
                       Pour ma part, pour obtenir un effet "GOLD", j'ai opté pour une teinte de 33. <br>
                       <br>
                       Enfin, pour ajuster à la fois la luminosité et le contraste, n'hésitez pas à cliquer sur le logo lune -> courbes puis ajustez de votre façon. <br>
                       La courbe doit être très légèrement modifiée pour avoir une image nette et proche de la réalité. <br>
                       Sélectionnez le masque de la courbe, peaufinez le tout avec l'outil pinceau général arrondi-flou dont l'opacité est de 100% et le flou de 30%. <br>
                       Changez ensuite le fond blanc en fond noir grâce à la palette de couleur. Dupliquez la teinte saturation et inversez le masque de fusion avec les touches CTRL + i. <br>
                       <br>
                       Voici un aperçu de l'avant / l'après. Vous aimez le style ? <br>
                       <br>
                       <div class="feature-img">
                        <img   class="img-fluid" src="img/projets/gazelle_avant_apres.png" alt="" width="730" height="300" text-center> <br>
                       </div>
                     <p>
                       <br>
                       <i>Pour ajouter un fond étoilé et donner un côté plus lumineux,</i> <br>
                       changez le mode normal en lumière tamisée avec un pinceau inversé côté blanc, le flou est de 30%. <br>
                       Ensuite cliquez sur masque de fusion et CTRL + i pour inverser le masque. <br>
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
                              <a href="todzilla">
                                 <img class="img-fluid" src="img/post/button_todzilla.png" alt="">
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="todzilla">
                                 <span class="lnr text-white ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                              <p>Précédent</p>
                              <a href="todzilla">
                                 <h4>Todzilla</h4>
                              </a>
                           </div>
                        </div>
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <div class="detials">
                              <p>Suivant</p>
                              <a href="tigre">
                                 <h4>Tigre</h4>
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="tigre">
                                 <span class="lnr text-white ti-arrow-right"></span>
                              </a>
                           </div>
                           <div class="thumb">
                              <a href="tigre">
                                 <img class="img-fluid" src="img/post/button_tigre.png" alt="">
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
