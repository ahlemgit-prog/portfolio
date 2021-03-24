{{--
  ./resources/views/template/partials/_header.blade.php
--}}
<!-- header-start -->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-2">
                        <div class="logo">
                            <a href="accueil.html">
                                <img src="img/logo.png" alt="accueil.html" class="logo">
                            </a>
                        </div>
                    </div>

                    @include('template.partials._nav')

                    <!-- Language -->
                    {{-- <div class="default-select" id="default-select">
                      <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                        <select class="text-lang-color">
                          <option value="1">Français</option>
                          <option value="2">Nederlands</option>
                          <option value="3">English</option>
                          <option value="4">العربية</option>
                          <option value="5">Spanish</option>
                        </select>
                      </div>
                    </div> --}}
                      <!-- End Language -->

                      <!-- Switch-->
                     <div class="col-lg-3 col-md-4 mt-sm-30">
                      <div class="single-element-widget">
                        <div class="switch-wrap d-flex justify-content-between">
                          <div class="primary-radio">
                            <input type="checkbox" id="default-radio" class="darkMode" checked >
                            <label for="default-radio">
                              <button type="button" name="light_dark" onclick="toggleLightDark()" title="Eclaicir mon champs de vision !" class="mode">
                                   <img src="img/svg_icon/torch.svg" width= 25px height= 25px alt="#" class="on">
                              </button>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div>
                        <img src="img/svg_icon/arrow.png" alt="" class="arrow_left"><span class="click_here">Click here !</span></p>
                      </div>
                    </div>
                      <!--End Switch-->

                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                    <!-- <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                        <div class="Appointment">
                            <div class="book_btn d-none d-lg-block">
                                <a  href="#">Contact Me</a>
                            </div>
                        </div>
                    </div>
                  -->
            </div>
        </div>
    </div>
</header>
<!-- header-end -->
