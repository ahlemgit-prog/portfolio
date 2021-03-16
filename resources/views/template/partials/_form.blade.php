{{--
  ./resources/views/template/partials/_form.blade.php
--}}

<div class="comment-form">
    <h4>Vous souhaitez commenter ? Exprimez-vous !</h4>
    <form class="form-contact comment_form" method="get" id="commentForm" data-route="{{ route('api.commentaires.store') }}">
       <div class="row">
          <div class="col-12">
             <div class="form-group">
                <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                   placeholder="Ecrire un commentaire"></textarea>
             </div>
          </div>
          <div class="col-sm-6">
             <div class="form-group">
                <input class="form-control" name="name" id="name" type="text" placeholder="Nom">
             </div>
          </div>
          <div class="col-sm-6">
             <div class="form-group">
                <input class="form-control" name="email" id="email" type="email" placeholder="Email">
             </div>
          </div>
       </div>
       <div class="form-group">
          <button type="submit" id="envoi" class="button button-contactForm btn_1 boxed-btn">Envoyer</button>
       </div>
    </form>
 </div>

 <div id="app"></div>


 <script type="text/javascript">
 const app   = document.querySelector('#app');
 const commentForm = document.querySelector('#commentForm');
 const envoi = document.querySelector('#envoi');

 envoi.onclick = function (e) {
   e.preventDefault();
   axios.post('traitement.php', new FormData(commentForm))
        .then(function(reponse) {
          app.innerHTML = reponse.data;
        });

 }

</script>

<script type="text/javascript">


// $(function() {
//
//  $('#envoi').click(function(e) {
//    e.preventDefault();
//    $.ajax({
//      url: '?envoi',
//      success: function(reponsePHP){
//        alert('Votre commentaire a bien été publiée !');
//      },
//      error: function(){
//        alert("Problème durant la transaction !");
//      }
//    });
//  });
// });
// $(function() {
//
//  $('#envoi').click(function(e) {
//    e.preventDefault();
//    $.ajax({
//      url: '?envoi',
//      success: function(reponsePHP){
//        axios.post('success.php', new FormData(commentForm))
//             .then(function(reponse) {
//               app.innerHTML = reponse.data;
//             });
//      },
//      error: function(){
//        axios.post('error.php', new FormData(commentForm))
//             .then(function(reponse) {
//               app.innerHTML = reponse.data;
//             });
//      }
//    });
//  });
// });
// $(document).ready(function(){
//     //Affiche un message lors de l'envoi du formulaire
//     $("form").submit(function(){
//         alert("Votre commentaire a bien été publiée !");
//     });
// });


 </script>
