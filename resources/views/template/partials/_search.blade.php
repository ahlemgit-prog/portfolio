{{--
  ./resources/views/template/partials/_search.blade.php
--}}

{{-- <aside class="single_sidebar_widget search_widget">
    <form method="GET" action="">
        <div class="form-group">
            <div class="input-group mb-3">
                <input type="text" name="recherche" class="form-control" placeholder='Rechercher un mot'
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Rechercher un mot'">
                <div class="input-group-append">
                    <button class="btn" type="button"><i class="ti-search"></i></button>
                </div>
            </div>
        </div>
        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
            type="submit">Rechercher</button>
    </form>
</aside> --}}

<?php

    $db_server = 'localhost'; // Adresse du serveur MySQL
    $db_name = 'portfolio';            // Nom de la base de données
    $db_user_login = 'root';  // Nom de l'utilisateur
    $db_user_pass = 'root';       // Mot de passe de l'utilisateur

    // Ouvre une connexion au serveur MySQL
    $conn = mysqli_connect($db_server,$db_user_login, $db_user_pass, $db_name);


     // Récupère la recherche
     $recherche = isset($_GET['recherche']) ? $_GET['recherche'] : '' ;

     // la requete mysql
     $q = $conn->query(
     "SELECT tag FROM portfolio.pages
      WHERE tag LIKE '%$recherche%'
      -- OR lien LIKE '%$recherche%'
      LIMIT 1");

//      // affichage du résultat
//      while( $r = mysqli_fetch_array($q)){
//      echo ''.$r['tag'].' <br />'
// ;
//      }
?>
