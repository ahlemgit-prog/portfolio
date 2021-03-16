{{--
  ./resources/views/template/contact.blade.php
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
                          <h3>Contact</h3>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- /bradcam_area  -->

      @include('contacts._index')

      @include('template.partials._footer')

      @include('template.partials._scripts')

  </body>
</html>
