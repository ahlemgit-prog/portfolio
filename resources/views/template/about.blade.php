{{--
  ./resources/views/template/about.blade.php
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
                        <h3>A propos d'Ahlem</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bradcam_area  -->

  <div class="video_area">
      <div class="container">
          <div class="row">
              <div class="col-xl-12">
                  <div class="video_wrap">
                    <div class="thumb">
                        <!-- <img src="img/video/foret.png" alt="#"> -->
                        <!-- <div class="video_icon">
                            <a class="popup-video" href="" ><i class="fa fa-play"></i></a>
                        </div> -->

                        <video class="video" allowscreen frameborder="0" autoplay=1 loop=1 controls >
                          <source src="img/video/astronaute.mp4" type="video/mp4">
                        </video>
                        <!-- <img src="img/projets/astronaute.png" alt=""> -->
                    </div>
                      <div class="video_text text-center">
                        <p>Bonjour, je m'appelle Ahlem. Je suis Web designer, j'aime voyager,
                            les films, les jeux vidéos. Je voudrais partager avec vous
                            mon atmosphère.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

    @include('template.partials._about')

    @include('template.partials._counter')

    @include('template\partials\_testimonial')

    @include('template.partials._discuss')

    @include('template.partials._footer')

    @include('template.partials._scripts')
</body>

</html>
