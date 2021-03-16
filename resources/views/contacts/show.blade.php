{{--
  ./resources/views/contacts/_show.blade.php
  Variables disponibles
    $contact OBJ(id, titre, message, nom, email, objet) --> Mes messages de contact se trouvent sur mon compte MailChimp afin que cela soit plus sécurisé !
--}}

<!-- ================ contact section start ================= -->
<section class="contact-section section_padding">
  <div class="container">
    <div class="d-none d-sm-block mb-5 pb-4">
      <!-- <div id="map" style="height: 480px;"></div> -->
      <div class="map-responsive" text-center>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2531.207754914444!2d5.5551238154668106!3d50.623257282779484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0f9f3a7f02bb7%3A0x6a0fdcc69283f57!2sPlace%20Marcel%20Lonay%2C%204000%20Li%C3%A8ge!5e0!3m2!1sfr!2sbe!4v1611676551376!5m2!1sfr!2sbe" width="690" height="480" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>
    <div class="row">
      {{-- <div id="mce-responses" class="clear">
        <div class="response" id="mce-error-response" style="display:none">Une erreur s'est produite</div>
        <div class="response" id="mce-success-response" style="display:none">Merci de votre coopération !</div>
      </div> --}}

      {{-- titre --}}
      <div class="col-12">
        <h2 class="contact-title">Gardez contact !</h2>
      </div>
      <div class="col-lg-8">
        <div id="mc_embed_signup">
          <form class="form-contact contact_form" action="https://gmail.us1.list-manage.com/subscribe/post?u=e258f2c790beb560c7583457b&amp;id=5aa8caa585" method="post" id="mc-embedded-subscribe-form"  name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="novalidate">
            <div id="mc_embed_signup_scroll">
              <div class="row">
                {{-- message --}}
                <div class="col-12">
                  <div class="form-group">
                      <label for="mce-MMERGE1"></label><textarea type="textarea" class="form-control w-100" name="MESSAGE" class="" id="mce-MMERGE1" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Votre message'" placeholder = 'Votre message'></textarea>
                  </div>
                </div>
                {{-- nom --}}
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="mce-NOM"></label><input class="form-control" type="text" value="" name="NOM" id="mce-NOM" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Votre nom'" placeholder = 'Votre nom'>
                  </div>
                </div>
                {{-- email --}}
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="mce-EMAIL"></label><input class="form-control" name="EMAIL" id="mce-EMAIL" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Votre mail'" placeholder = 'Votre mail'>
                  </div>
                </div>
                {{-- objet --}}
                <div class="col-12">
                  <div class="form-group">
                    <label for="mce-MMERGE3"></label><input class="form-control" name="OBJET" class="" id="mce-MMERGE3" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Objet'" placeholder = 'Objet'>
                  </div>
                </div>
              </div>
              <div class="form-group mt-3">
                <div class="clear"><input type="submit" class="button button-contactForm btn_4 boxed-btn" value="Envoyer" name="subscribe" id="mc-embedded-subscribe"></div>
                {{-- <div class="clear"><button type="submit" class="button button-contactForm btn_4 boxed-btn" name="subscribe" id="mc-embedded-subscribe">Envoyer</button></div> --}}
              </div>
            </div>
          </form>
        </div>
      </div>
      @include('template.partials._contact')
    </div>
  </div>
</section>


 <div id="app"></div>

<!-- ================ contact section end ================= -->

{{-- <script type="text/javascript">

$(document).ready(function () {
var $form = $('#mc-embedded-subscribe-form')
if ($form.length > 0) {
  $('form input[type="submit"]').bind('click', function (event) {
    if (event) event.preventDefault()
    register($form)
  })
}
})

function register($form) {
$('#mc-embedded-subscribe').val('Envoyé');
};


</script> --}}
