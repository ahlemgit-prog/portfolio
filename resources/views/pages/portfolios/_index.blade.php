{{--
  ./resources/views/pages/portfolios/_index.blade.php
  Variables disponibles:
    $portfolios ARRAY(OBJ(id, image, titre))
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
                            <h3>Portfolio</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /bradcam_area  -->

        @include('pages.portfolios.show')

        @include('template\partials\_testimonial')

        @include('template.partials._discuss')

        @include('template.partials._footer')

        @include('template.partials._scripts')

    </body>
  </html>
