
<?php

/*
|--------------------------------------------------------------------------
| Date de derniere modification par KGS DEV le 03/06/2023 à 2H13
|--------------------------------------------------------------------------
*/

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Admin\Cv\CvController;
use App\Http\Controllers\Admin\Job\JobController;
use App\Http\Controllers\Admin\Users\UserController;
use App\Http\Controllers\Admin\Region\RegionController;
use App\Http\Controllers\Admin\Contrat\ContratController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Employeur\EmployeurController;
use App\Http\Controllers\Admin\CategoryJob\CategoryJobController;
use App\Http\Controllers\Admin\Letter\LetterMotivationController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProviderController;

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



//routes pour l'administration



Route::get('/dashboard/admin', [AdminController::class, 'index'])->name('admin');

Route::resources([
'category' => CategoryController::class,
'categoryjob' => CategoryJobController::class,
'job' => JobController::class,
'cvs' => CvController::class,
'letter'=>LetterMotivationController::class,
'blogs' =>  BlogController::class,
'employeur' => EmployeurController::class,
'region' => RegionController::class,
'contrat' => ContratController::class,
'users' => UserController::class ,
]);


//mes vues
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/detail/emploi/{slug}', [HomeController::class, 'detailEmploi'])->name('detail.emploi');


Route::get('/download/cv/{id}', [HomeController::class, 'downloadCv'])->name('download.cv');


Route::get('/annuaire-des-emplois', [HomeController::class, 'homejob'])->name('home.job');

Route::get('/annuaire-employeur-job/{slug}', [HomeController::class, 'homejobemployeur'])->name('home.job.employeur');


Route::get('/detailArticle/{slug}', [HomeController::class, 'detailArticle'])->name('detail.article');


Route::get('/actualites', [HomeController::class, 'homeArticle'])->name('home.actualy');


Route::get('/categorie-job-find-{id}', [HomeController::class, 'categoryjob'])->name('categorie.job');



Route::get('/carriere-pro-search-query', [HomeController::class, 'searchJob'])->name('search.job');


Route::get('/annuaire-cv' , [HomeController::class, 'homecv'])->name('home.cv');

Route::get('/annuaire-letter-Motivation' , [HomeController::class, 'homeletterMotivaton'])->name('home.letterMotivation');

Route::get('/annuaire-courses' , [HomeController::class, 'homeCourse'])->name('home.course');

Route::get('/annuaire-application' , [HomeController::class, 'homeApplication'])->name('home.application');


Route::get('/login', [AuthController::class, 'login'])->name('login');



Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']);
Route::get('/auth/{provider}/callback', [ProviderController::class, 'callback']);



//routes profiles


Route::get('/profile', [ProfileController::class, 'profile'])->name('profile.user');

