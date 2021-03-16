<?php

namespace App\Http\Controllers;

use app\Models\Portfolio;

class PortfolioController extends Controller
{
  public function show(Portfolio $portfolio) {
    return view('portfolios._index', compact('portfolio'));
  }

}

// /**
// * LISTE de toutes les images du portfolio
// * @param PDO $connexion
// */
//
// function _showAction(\PDO $connexion) {
//   include_once '../app/Models/Portfolio.php';
//   $portfolios = Portfolio\findAll($connexion);
//   GLOBAL $zoneScripts;
//   $zoneScripts .= '<script src="js/portfolios/index.js"></script>';
//   //
//   ob_start();
//   include '../resources/views/pages/portfolios/_show.blade.php';
// }
