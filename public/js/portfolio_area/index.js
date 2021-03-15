/*

./public/js/portfolio_area/index.js

 */

 // $(function() {
 //
 //   $('#loisirs').click(function(e) {
 //     e.preventDefault();
 //     $.ajax({
 //       url: '?loisirs_suivants',
 //       success: function(reponsePHP){
 //         alert('coco');
 //       },
 //       error: function(){
 //         alert("Problème durant la transaction !");
 //       }
 //     });
 //   });
 // });


   $('#loisirs').click(function(e){
     e.preventDefault();

     $.get('portfolio.php', function(reponse){
       $('#hobbies').html(reponse).slideToggle(1500);
     });
   });
