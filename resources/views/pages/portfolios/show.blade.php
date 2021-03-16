{{--
  ./resources/views/pages/portfiolios/show.blade.php
  Variables disponibles
    $portfolio OBJ(id, image, titre)
--}}


<!-- portfolio_image_area  -->
<div class="portfolio">
  <div class="portfolio_image_area dec_margin">
      <div class="container">
          <div class="row">
              @foreach ($portfolios as $portfolio)
                {{-- formatImage --}}
              <div class="{{$portfolio->formatImage}}">
                  <div class="single_Portfolio">
                      <div class="portfolio_thumb">
                        {{-- image --}}
                          <img src="{{$portfolio->image}}" alt="">
                      </div>
                        {{--lien--}}
                      <a href="{{$portfolio->lien}}" class="popup popup-image"></a>
                      <div class="portfolio_hover">
                        {{-- titre --}}
                          <div class="title">
                                  <h3>{{$portfolio->titre}}</h3>
                          </div>
                      </div>
                  </div>
              </div>
              @endforeach
          </div>
      </div>
  </div>
</div>


    <!--/ portfolio_image_area  -->
