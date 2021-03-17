<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
---------------------------------------------------------------------------
| VIEWS
---------------------------------------------------------------------------
*/

// VIEW COMPOSERS ------------------------------------------
View::composer('categories.show', function($view){
  $view->with('categories', App\Models\Categorie::orderBy('nom','asc')->get());
});

View::composer('blogs.news._index', function($view){
  $view->with('blogs', App\Models\Blog::orderBy('idblogs', 'asc')->take(4)->get()); //orderBy('lienArticle', 'asc')->get()); find([2,3,4]);
});

View::composer('blogs.news._index1', function($view){
  $view->with('blogs', App\Models\Blog::
  where('idblogs','>=', '5')->take(3)->get()); //where('idblogs', ([1,2,3,4,5]))->get());

});

View::composer('blogs.news._index2', function($view){
  $view->with('blogs', App\Models\Blog::
  where('idblogs', '>=', '8')->get()); //where('idblogs', ([8,9,10,11]))->get());

});

View::composer('tags._index', function($view){
  $view->with('tags', App\Models\Tag::orderBy('nom', 'desc')->get()); //all()
});

View::composer('pages.projets._index', function($view){
  $view->with('pages', App\Models\Page::orderBy('id', 'asc')->take(4)->get()); //orderBy('moisPublication', 'desc')->
});

View::composer('pages.projets._index1', function($view){
  $view->with('pages', App\Models\Page::orderBy('id', 'desc')->take(4)->get()); //orderBy('moisPublication', 'desc')->
});

View::composer('commentaires._index', function($view){
  $view->with('commentaires', App\Models\Commentaire::all());
});

View::composer('commentaires.show', function($view){
  $view->with('commentaires', App\Models\Commentaire::all());
});

View::composer('authors.projets', function($view){
  $view->with('authors', App\Models\Author::all());
});

View::composer('pages.portfolios._index', function($view){
  $view->with('portfolios', App\Models\Portfolio::all());
});


View::composer('posts._index', function($view){
  $view->with('posts', App\Models\Post::orderBy('datePublication', 'desc')->take(4)->get());
});

View::composer('contacts.show', function($view){
  $view->with('contacts', App\Models\Contact::all());
});






/*
---------------------------------------------------------------------------
| ROUTES
---------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('template.index');
});

Route::get('/accueil.html', function () {
    return view('template.index');
});

Route::get('/about.html', function () {
    return view('template.about');
});

Route::get('/portfolio.html', function () {
    return view('pages.portfolios._index');
});

Route::get('/services.html', function () {
    return view('template.service');
});

Route::get('/contact.html', function () {
    return view('template.contact');
});

// ROUTES VOYAGER

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// ROUTES AJAX DU PORTFOLIO----------------------------------------

// use App\Http\Controllers\PortfolioController;
// DETAILS DU PORTFOLIO
// PATTERN: /?loisirs
// CTRL: PorfolioController
// ACTION: _show

// if (isset($_GET['loisirs'])):
//   include_once '../app/Http/Controllers/PortfolioController.php';
//   Controllers\Portfolio\_showAction($connexion);



// ROUTES DES BLOGS ----------------------------------------

use App\Http\Controllers\BlogController;

Route::get('/news1.html', function () {
    return view('blogs.news._index');
});

Route::get('/news2.html', function () {
    return view('blogs.news._index1');
});

Route::get('/news3.html', function () {
    return view('blogs.news._index2');
});


// LISTE D'UN BLOG
// PATTERN: /blogs
// CTRL: BlogController
// ACTION: index

  Route::get('/blogs', [BlogController::class, 'blogs.news._index'])->name('blogs.news._index');

// DETAILS D'UN BLOG
// PATTERN: blogs/blog/slug
// CTRL: Blogs
// ACTION: show
  Route::get('/blogs/{blog}/{slug}', [BlogController::class, 'show'])
      ->where([
        'blog'   => '[1-9][0-9]*',
        'slug' => '[a-z0-9][a-z0-9\-]*' //important pour le referencement
      ])
      ->name('blogs.news.show');



// ROUTES DES PAGES ----------------------------------------
use App\Http\Controllers\PageController;

Route::get('/portfolio.html', function () {
    return view('pages.portfolios._index');
});

Route::get('/projets1.html', function () {
    return view('pages.projets._index');
});

Route::get('/projets2.html', function () {
    return view('pages.projets._index1');
});


// LISTE D'UNE PAGE
// PATTERN: /pages
// CTRL: PageController
// ACTION: index
Route::get('/pages', [PageController::class, 'pages._index']);

// DETAILS D'UNE PAGE
// PATTERN: pages/page/slug
// CTRL: Pages
// ACTION: show
Route::get('/pages/{page}/{slug}', [PageController::class, 'show'])
  ->where([
    'page'   => '[1-9][0-9]*',
    'slug' => '[a-z0-9][a-z0-9\-]*' //important pour le referencement
  ])
  ->name('pages.show');



// ROUTES DES TAGS ----------------------------------------
use App\Http\Controllers\TagController;
// LISTE D'UNE TAG
// PATTERN: /tags
// CTRL: TagController
// ACTION: index
Route::get('/tags', [TagController::class, 'index'])->name('tags._index');

// DETAILS D'UN TAG
// PATTERN: tags/tag/slug
// CTRL: Tags
// ACTION: show
Route::get('/tags/{tag}/{slug}', [TagController::class, 'show'])
  ->where ([
    'tag'  => '[1-9][0-9]*',
    'slug' => '[a-z0-9][a-z0-9\-]*'
  ])
  ->name('tags.show');


// ROUTES DES CATEGORIES ----------------------------------------

use App\Http\Controllers\CategorieController;
// LISTE D'UNE CATEGORIE
// PATTERN: /categories
// CTRL: CategorieController
// ACTION: index
Route::get('/categories', [CategorieController::class, 'categories._index'])->name('categories._index');

// DETAILS D'UNE CATEGORIE
// PATTERN: categories/categorie/slug
// CTRL: Posts
// ACTION: show
Route::get('/categories/{categorie}/{slug}', [CategorieController::class, 'show'])
  ->where([
    'categorie'   => '[1-9][0-9]*',
    'slug' => '[a-z0-9][a-z0-9\-]*' //important pour le referencement
  ])
  ->name('categories.show');



//ROUTES DES COMMENTAIRES ---------------------------------------
use App\Http\Controllers\CommentaireController;

// LISTE D'UN COMMENTAIRE
// PATTERN: /commentaires
// CTRL: CommentaireController
// ACTION: index
Route::get('/commentaires', [CommentaireController::class, 'commentaires_.index'])->name('commentaires._index');

// DETAILS D'UN COMMENTAIRE
// PATTERN: /commentaires/{commentaire}/{slug}
// CTRL: Commentaires
// ACTION: show
Route::get('/commentaires/{commentaire}/{slug}', [CommentaireController::class, 'show'])
->name('commentaires.show');



//ROUTES DES AUTHORS ----------------------------------------
use App\Http\Controllers\AuthorController;
// LISTE D'UN AUTHOR
// PATTERN: /authors
// CTRL: AuthorController
// ACTION: index
Route::get('/authors', [AuthorController::class, 'authors._index'])->name('authors._index');

// DETAILS D'UN AUTHOR
// PATTERN: authors/author/slug
// CTRL: /authors/{author}/{slug}
// ACTION: show
Route::get('/authors/{author}/{slug}', [AuthorController::class, 'show'])
   ->where([
     'author'   => '[1-9][0-9]*',
     'slug' => '[a-z0-9][a-z0-9\-]*' //important pour le referencement
   ])
   ->name('authors.show');


// ROUTES DES CONTACTS ----------------------------------------

use App\Http\Controllers\ContactController;

Route::get('/contact.html', function () {
    return view('template.contact');
});



// LISTE D'UN CONTACT
// PATTERN: /contacts
// CTRL: ContactController
// ACTION: index
Route::get('/contacts', [ContactController::class, 'contacts_.index'])->name('contacts._index');

// // DETAILS D'UN CONTACT
// // PATTERN: contacts/contact/slug
// // CTRL: /contacts/{contact}/{slug}
// // ACTION: show
Route::get('/contacts/{contact}/{slug}', [ContactController::class, 'show'])
    ->where([
      'contact'   => '[1-9][0-9]*',
      'slug' => '[a-z0-9][a-z0-9\-]*' //important pour le referencement
    ])
    ->name('contacts.show');

//  Route::get('contact-form', [ ContactController::class, 'create' ]);
//  Route::post('contact-form', [ ContactController::class, 'store' ]);

// ROUTES DES ARTICLES DE LA PAGE "PROJETS"----------------------------------------

Route::get('/todzilla.html', function () {
    return view('template.articles.todzilla');
});

Route::get('/bechic.html', function () {
    return view('template.articles.bechic');
});

Route::get('/tigre.html', function () {
    return view('template.articles.tigre');
});

Route::get('/xabia.html', function () {
    return view('template.articles.xabia');
});

Route::get('/piccolo.html', function () {
    return view('template.articles.piccolo');
});

Route::get('/framework_css.html', function () {
    return view('template.articles.framework_css');
});

Route::get('/integration_css.html', function () {
    return view('template.articles.integration_css');
});

Route::get('/ajax.html', function () {
    return view('template.articles.ajax');
});

// ROUTES DES ARTICLES DU BLOG "NEWS"----------------------------------------

Route::get('/conception.html', function () {
    return view('template.articles.conception');
});

Route::get('/selfies.html', function () {
    return view('template.articles.selfies');
});

Route::get('/bien-etre-numerique.html', function () {
    return view('template.articles.bien-etre-numerique');
});

Route::get('/gestalt.html', function () {
    return view('template.articles.gestalt');
});

Route::get('/fidelisation.html', function () {
    return view('template.articles.fidelisation');
});

Route::get('/gamification.html', function () {
    return view('template.articles.gamification');
});

Route::get('/icons-animees.html', function () {
    return view('template.articles.icons-animees');
});

Route::get('/logo.html', function () {
    return view('template.articles.logo');
});

Route::get('/animation.html', function () {
    return view('template.articles.animation');
});

Route::get('/duolingo.html', function () {
    return view('template.articles.duolingo');
});

Route::get('/legos.html', function () {
    return view('template.articles.legos');
});

Route::get('/jeux-video.html', function () {
    return view('template.articles.jeux-video');
});
