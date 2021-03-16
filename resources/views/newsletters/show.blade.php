{{--
  ./resources/views/newsletters/_show.blade.php
  Variables disponibles
    $newsletter OBJ(id, titre, mail) --> Mes abonnées se trouvent sur mon compte MailChimp afin que cela soit plus sécurisé !
--}}

{{-- <aside class="single_sidebar_widget newsletter_widget">
    <h4 class="widget_title">Newsletter</h4>
    {{-- <div id="msg"></div>
    <form method="POST" id="form-subscribe" action="https://gmail.us1.list-manage.com/subscribe/post?u=e258f2c790beb560c7583457b&amp;id=5aa8caa585">
        <div class="form-group">
            <input type="email" id="email" name="email" class="form-control" onfocus="this.placeholder = ''"
                onblur="this.placeholder = 'Introduire votre mail'" placeholder='Introduire votre mail' required autocomplete="off">
        </div>
        <input name="submit"  id="btn-subscriber" class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
            type="submit" value="Souscrire" />
    </form>
</aside> --}}


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


<!-- Begin Mailchimp Signup Form -->
<aside class="single_sidebar_widget newsletter_widget">
  <h4 class="widget_title">Newsletter</h4>
  <div id="msg"></div>
  <div id="subscribe-result"></div>
  <div id="mc_embed_signup">
    <form action="https://gmail.us1.list-manage.com/subscribe/post?u=e258f2c790beb560c7583457b&amp;id=5aa8caa585" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
      <div class="form-group">
        <div class="mc-field-group" id="mc_embed_signup_scroll">
        	<label for="mce-EMAIL"></label>
        	<input type="email" value="" name="EMAIL" class="form-control" id="mce-EMAIL" onfocus="this.placeholder = ''"
              onblur="this.placeholder = 'Introduire votre mail'" placeholder='Introduire votre mail'>
        </div>
      </div>
    	{{-- <div id="mce-responses" class="clear">
    		<div class="response" id="mce-error-response"></div>
    		<div class="response" id="mce-success-response"></div>
    	</div> --}}
        <div class="clear">
          <input type="submit" value="Souscrire" name="subscribe" id="mc-embedded-subscribe" class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn">
        </div>
      </form>
    </div>
  </div>
</aside>
<!--End mc_embed_signup-->
