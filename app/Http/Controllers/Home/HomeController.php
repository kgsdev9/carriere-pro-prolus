<?php

namespace App\Http\Controllers\Home;

use App\Services\CvService;
use App\Services\JobService;
use Illuminate\Http\Request;
use App\Services\FamilyService;
use App\Services\ArticleService;
use App\Services\EmployeurService;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Services\LetterMotivationService;
use App\Traits\CompteurDeVue;

class HomeController extends Controller
{

    use CompteurDeVue;
   
    protected $jobService ;
    protected $familyService;
    protected $employeurService ;
    protected $cvService ;
    protected $letterMotivationService ;
    protected $articleService ;

    public function __construct(FamilyService $familyService,  JobService $jobService, EmployeurService $employeurService, ArticleService $articleService, CvService $cvService, LetterMotivationService $letterMotivationService)
    {
        $this->familyService = $familyService ;
        $this->jobService = $jobService ;
        $this->employeurService =$employeurService ;
        $this->articleService =$articleService ;
        $this->cvService = $cvService ;
        $this->letterMotivationService= $letterMotivationService;
    }

    public function index(){
        return view('welcome',[
            'jobcategory' => $this->familyService->customrandomCategoryJob(),
            'joball' =>  $this->jobService->collectionJob(),
            'articleRessource' => $this->articleService->collectionArticleFilterEventNull(),
            'articleRandom' => Article::orderByDesc('created_at')->take(3)->get()
        ]);
    }


    public function searchJob(Request $request) {

        return view('home.searchjob', [
            'demande' =>$this->jobService->search($request)
        ]);
    }
    public function detailEmploi($slug) {
        $this->countView($slug);

          $urlcurrent =  url()->current() ;


        return view('home.detailEmploi', [
            'detail' => $this->jobService->singleSlug($slug),
            'similarjob' => $this->jobService->similarJob($slug),
            'currentPage' => $urlcurrent
        ]);
    }


    public function homeletterMotivaton() {
        return view('home.homelettermotivation', [
            'ressourceAll' => $this->letterMotivationService->all()
        ]);
    }
    public function homecv() {
        return view('home.homecv', [
            'home' => $this->cvService->all()
        ]);
    }


    public function homejob() {
        return view('home.homeJob', [
            'joball' => $this->jobService->collectionjobrandom()
        ]);
    }


    public function detailArticle($slug) {

        return view('home.articledetail', [
        'detailArticle' => $this->articleService->single($slug)
        ]);

    }


    public function categoryjob($id)  {
        return view('home.category-job-portail', [
            'job' =>$this->jobService->categoryJob($id),
            'categoryname'=> $this->familyService->categoryParentJobName($id)
        ]);
    }

    public function homeArticle() {
        return view('home.home-actualite', [
        'collectionActuality'=>  $this->articleService->collectionArticle(),
        'articleAlaune' => $this->articleService->randomFilterArticleEventByNotNull()
        ]);
    }
}
