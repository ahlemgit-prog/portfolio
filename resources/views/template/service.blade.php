{{--
  ./resources/views/template/service.blade.php
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
                        <h3>Services</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bradcam_area  -->

    @include('template.partials._service')

    <div class="project_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="projects_thumb">
                        <img src="img/about/projects.png" alt="">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="projects_info">
                        <h3>Mes projets</h3>
                        <p>J’ai crée mon propre site, ce qui m’a permis de développer de nombreuses compétences, par exemple en Photoshop, PHP, SASS et JavaScript.
                        <br>
                        Progressivement, je me suis rendu compte que je souhaitais occuper un poste de web designer. Mon souhait est de gagner en polyvalence pour, dans quelques années, viser un poste de web designer agréee.
                        <br>
                        Cette légitimité technique me permettra, je l’espère,
                        prendre régulièrement en charge le rôle de chef d'un projet.</p>
                        <a href="projets1" class="boxed-btn3">Découvrir un aperçu</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('template\partials\_testimonial')

    @include('template.partials._discuss')

    @include('template.partials._footer')

    @include('template.partials._scripts')

</body>

</html>
