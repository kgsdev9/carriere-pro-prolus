
@extends('layout.app')
@section('title', 'Bienvenue Sur Ma Carriere PRO - Plus')
@section('content')

<main class="main">

  <section class="section-box">
    <div class="banner-hero hero-1 banner-homepage4">
      <div class="banner-inner">
        <div class="row">
          <div class="col-xl-7 col-lg-12">
            <div class="block-banner">
              <h1 class="heading-banner wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bienvenue </font></font><span class="color-brand-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sur </font></font></span><br class="d-none d-lg-block"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Carriere Pro</font></font></h1>
              <div class="banner-description mt-20 wow animate__ animate__fadeInUp animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">À la recherche d'un nouveau Job, Stage, Formation , Conseil Pro, Curriculum vitæ , Lettre de motivation,vous êtes à la bonne adresse
                Carrière proplus vous accompagne vers vos objectifs de vie. </font></font></div>
              <div class="form-find mt-40 wow animate__ animate__fadeIn animated" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                <form  action="{{route('search.job')}}">

                  <input class="form-input input-keysearch mr-10" type="text" name="search" placeholder="Votre mot clé...">
                  <button class="btn btn-default btn-find font-sm" type="submit">Rechercher</button>
                </form>
              </div>
              <div class="list-tags-banner mt-60 wow animate__ animate__fadeInUp animated" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Consulter:</font></font></strong>
                <a href="{{route('home.job')}}" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nos Emplois </font></font></a>

                <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> , </font></font>
                <a href="{{route('home.cv')}}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nos Cvs</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> , </font></font>
                <a href="{{route('home.letterMotivation')}}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nos Lettre de motivation</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> , </font></font>
                <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nos Formations </font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> , </font></font>
                <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nos Conseils</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font>

            </div>
            </div>
          </div>
          <div class="col-xl-5 col-lg-12 d-none d-xl-block col-md-6">
            <div class="banner-imgs">
              <div class="block-1 shape-1"><img class="img-responsive" alt="jobBox" src="assets/imgs/page/homepage4/banner.png"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-box mt-70">
    <div class="container">
      <div class="text-center">
        <h2 class="section-title mb-10 wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Emploi par catégorie</font></font></h2>
        <p class="font-lg color-text-paragraph-2 wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trouver Votre Offre D'emploi par Catégorie </font></font></p>

      </div>
      <div class="mt-50">
        <div class="tab-content" id="myTabContent-1">
          <div class="tab-pane fade show active" id="tab-job-1" role="tabpanel" aria-labelledby="tab-job-1">
            <div class="row">
              @foreach ($jobcategory as $value)


              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-block-info pt-25">
                    <h6>
                      <a href="{{route('categorie.job', $value->id)}}">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;">
                            <img src="{{asset('look.svg')}}" alt="" style="height:20px;"> {{ $value->name }}</font></font></a></h6>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-lg-7 col-md-7">
                          <div class="d-flex">
                            <div class="info-right-img">
                              <h6 class="color-brand-1 lh-14">
                                <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;"> <span>{{count($value->jobs)}}Job</span> Disponible</font>
                                </font>
                              </h6>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>

              @endforeach


            </div>
          </div>


        </div>
      </div>
    </div>
  </section>


<div class="section-box mb-30 mt-4">
        <div class="container">
          <div class="box-we-hiring">
            <div class="text-1"><span class="text-we-are">CARRIERE </span><span class="text-hiring">PRO +</span></div>
            <div class="text-2">Béneficiez <span class="color-brand-1">Des Conseils </span> Formations <br> &amp; <span class="color-brand-1">Job</span> Services</div>
            <div class="text-3">
              <div class="btn btn-apply btn-apply-icon" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">S'Abonner</div>
            </div>
          </div>
        </div>
      </div>



      <section class="section-box mt-50">
        <div class="container">
          <div class="text-center">
            <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Les nouvelles offres d'emploi</h2>
            <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Commencer votre carrière dés maintenant. </p>

          </div>
          <div class="mt-70">
            <div class="tab-content" id="myTabContent-1">
              <div class="tab-pane fade show active">
                <div class="row">
                    @foreach ($joball as  $value)
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{ asset('marketing.svg') }}" alt="jobBox"></div>
                    <div class="right-info"><a class="name-job" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$value->employeur}}</font></font></a><span class="location-small"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$value->lieu->name}}</font></font></span></div>
                  </div>
                  <br>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">{{$value->title}}</a></h6>
                    <div class="mt-5"><span class="card-briefcase">{{$value->contrat->name}}</span><span class="card-time"><span> {{$value->created_at->diffForHumans()}} </span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">{{$value->mini_description}}</p>
                    <div class="mt-30">
                        <a class="bbtn btn-apply-now mr-5" href="{{route('detail.emploi', $value->slug)}}">Consulter  </a>

                    </div>

                  </div>
                </div>
              </div>

              @endforeach

            </div>
          </div>

        </div>
      </div>
    </div>
  </section>


  <section class="section-box mt-50">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 mb-15 mb-lg-0">
          <div class="box-radius-8 bg-urgent hover-up">
            <div class="image">
              <figure><img src="assets/imgs/page/homepage2/job-tools.png" alt="jobBox"></figure>
            </div>
            <div class="text-info">
              <h3>Améliorer Votre CV  </h3>
              <p class="font-sm color-text-paragraph-2">
                Notre équipe agile et innovante , à mise à votre disposition plusieurs curriculum vitæ que vous pouvez télecharger et modifier comme vous le souhaitez.</p>
              <div class="mt-15"><a class="btn btn-arrow-right" href="{{route('home.cv')}}">Télecharger des CV</a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="box-radius-8 bg-9 hover-up">
            <div class="image">
              <figure><img src="assets/imgs/page/homepage2/planning-job.png" alt="jobBox"></figure>
            </div>
            <div class="text-info">
              <h3>Lettre de motivation </h3>
              <p class="font-sm color-text-paragraph-2">Notre équipe agile et innivante , à mise à votre disposition plusieurs lettre de motivation que vous pouvez télecharger et modifier comme vous le souhaitez.</p>
              <div class="mt-15"><a class="btn btn-arrow-right" href="#">Télecharger Lettre-motivation</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-box mt-70 mb-40">
    <div class="container">
      <div class="text-start">
        <h2 class="section-title mb-10 wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Comment ca marche  ? </h2>
        <p class="font-lg color-text-paragraph-2 wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Créer un compte pour béneficier de beaucoup de ressource disponible!</p>
      </div>
      <div class="mt-70">
        <div class="row">
          <div class="col-lg-4">
            <div class="box-step step-1">
              <h1 class="number-element">1</h1>
              <h4 class="mb-20">Créer <br class="d-none d-lg-block">un compte </h4>
              <p class="font-lg color-text-paragraph-2">Créer votre compte ,<br class="d-none d-lg-block">et bénéficier de beaucoup d'avantage.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="box-step step-2">
              <h1 class="number-element">2</h1>
              <h4 class="mb-20"><br class="d-none d-lg-block">Explorer les offres d'emploi </h4>
              <p class="font-lg color-text-paragraph-2">Consulter les offres d'emploi ,<br class="d-none d-lg-block"> ameliorer votre profil pour convaincre les employeurs.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="box-step">
              <h1 class="number-element">3</h1>
              <h4 class="mb-20">Ameliorer <br class="d-none d-lg-block">Votre Profil </h4>
              <p class="font-lg color-text-paragraph-2">Télecharger des cvs, lettre de motivation ,<br class="d-none d-lg-block">des ressources suplementaires. </p>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-50 text-center"><a class="btn btn-default" href="">Commencer</a></div>
    </div>
  </section>


  <section class="section-box mt-50">
    <div class="post-loop-grid">
      <div class="container">
        <div class="text-left">
          <h2 class="section-title mb-10 wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">actualités de carrièreproplus </h2>
          <p class="font-lg color-text-paragraph-2 wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">soyez au parfum de l'actualité avec nous.</p>
        </div>
        <div class="row mt-30">
          <div class="col-lg-8">
            <div class="row">
                @foreach ($articleRessource as $value)
                <div class="col-lg-6 mb-30">
                    <div class="card-grid-3 hover-up">
                      <div class="text-center card-grid-3-image"><a href="{{route('detail.article', ['id' =>$value->id, 'slug'=>$value->slug])}}">
                          <figure><img alt="jobBox" src="{{asset('blog/images/'.$value->image)}}"></figure></a></div>
                      <div class="card-block-info">
                        <div class="tags mb-15"><a class="btn btn-tag" href="blog-grid.html">{{$value->category->name}}</a></div>
                        <h5><a href="{{route('detail.article', ['id' =>$value->id, 'slug'=>$value->slug])}}">{{$value->title}}</a></h5>
                        <p class="mt-10 color-text-paragraph font-sm">{{Str::limit($value->mini_description,130)}}</p>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-6 col-6">
                              <div class="d-flex"><img class="img-rounded" src="{{asset('blog/images/'.$value->image)}}">
                                <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Modérateur</span><br><span class="font-xs color-text-paragraph-2">{{$value->created_at->diffForHumans()}}</span></div>
                              </div>
                            </div>
                            <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">{{ date('d/m/Y', strtotime($value->created_at))}}</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach



            </div>

          </div>
          <div class="col-lg-4 col-md-12 col-sm-12 col-12 pl-40 pl-lg-15 mt-lg-30">
            <div class="widget_search mb-40">
              <div class="search-form">
                <form action="#">
                  <input type="text" placeholder="Rechercher">
                  <button type="submit"><i class="fi-rr-search"></i></button>
                </form>
              </div>
            </div>
            <div class="sidebar-shadow sidebar-news-small">
              <h5 class="sidebar-title">événement recent  </h5>
              <div class="post-list-small">
                @foreach ($articleRandom as $value)
                <div class="post-list-small-item d-flex align-items-center">
                    <figure class="thumb mr-15">

                        <a href="{{route('detail.article', ['id' =>$value->id, 'slug'=>$value->slug])}}">
                            <img src="{{asset('blog/images/'.$value->image)}}" alt="jobBox"></figure>
                        </a>


                    <div class="content">
                      <h5>{{$value->title}}</h5>
                      <div class="post-meta text-muted d-flex align-items-center mb-15">

                      </div>
                    </div>
                  </div>
                @endforeach


              </div>
            </div>
            <div class="sidebar-border-bg bg-right"><span class="text-grey">BIENVENUE </span><span class="text-hiring">SUR  CARRIRE PRO PLUS </span>
              <p class="font-xxs color-text-paragraph mt-5">La meilleure plateforme qui vous permettra de trouver ce que vous chercher en un clic </p>
              <div class="mt-15"><a class="btn btn-paragraph-2" href="#">Commencer</a></div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>




</main>



@endsection
