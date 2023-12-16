@extends('layout.layout')
@section('content')
<main>
    <section class="bg-light py-8 bg-cover">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div>
                        <div class="text-center text-md-start">
                            <!-- heading -->
                            <h1 class="display-2 fw-bold mb-3">Bienvenue sur carriereproplus.</h1>
                            <!-- lead -->
                            <p class="lead">À la recherche d'un nouveau Job, Stage, Formation , Conseil Pro, Curriculum vitæ , Lettre de motivation,vous êtes à la bonne adresse Carrière proplus vous accompagne vers vos objectifs de vie..
                                .</p>
                        </div>
                        <div class="mt-8">
                            <!-- card -->
                            <div class="bg-white rounded-md-pill shadow rounded-3 mb-4">
                                <!-- card body -->
                                <div class="p-md-2 p-4">
                                    <!-- form -->
                                    <form class="row g-1">
                                        <div class="col-12 col-md-5">
                                            <!-- input -->
                                            <div class="input-group mb-2 mb-md-0 border-md-0 border rounded-pill">
                                                <!-- input group -->
                                                <span class="input-group-text bg-transparent border-0 pe-0 ps-md-3 ps-md-0" id="searchJob">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                        <path
                                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                                                    </svg>
                                                </span>
                                                <!-- search -->
                                                <input
                                                    type="search"
                                                    class="form-control rounded-pill border-0 ps-3 form-focus-none"
                                                    placeholder="Développeur fullstack"
                                                    aria-label="Job Title"
                                                    aria-describedby="searchJob">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <!-- inpt group -->
                                            <div class="input-group mb-3 mb-md-0 border-md-0 border rounded-pill">
                                                <span class="input-group-text bg-transparent border-0 pe-0 ps-md-0" id="location">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                                        <path
                                                            d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z">
                                                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z">
                                                    </svg>
                                                </span>
                                                <!-- search -->
                                                <input
                                                    type="search"
                                                    class="form-control rounded-pill border-0 ps-3 form-focus-none"
                                                    placeholder="Abidjan"
                                                    aria-label="Abidjan"
                                                    aria-describedby="location">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-3 text-end d-grid">
                                            <!-- button -->
                                            <button type="submit" class="btn btn-primary rounded-pill">Trouver</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- text -->
                            <span class="fs-4"> Fabriquez votre emploi, fabriquez votre joie</span>
                        </div>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-5 col-12 text-center">
                    <div class="position-relative d-none d-lg-block">
                        <img src="../../assets/images/job/png/job-hero-section.png" class="img-fluid" alt="img">



                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-8">
        <!-- container -->
        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-xl-10 col-md-12 col-12">
                    <!-- row -->
                    <div class="row text-center">
                        <!-- col -->
                        <div class="col">
                            <div class="mb-3 mt-3">
                                <img src="{{asset('jeuneemploi.png')}}" style="height:50px;" alt="logo">
                            </div>
                        </div>
                        <!-- col -->
                        <div class="col">
                            <div class="mb-3 mt-3">
                                <img src="{{asset('educarriere.jpg')}}" style="height:50px;" alt="logo">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 mt-3">
                                <img src="{{asset('ministerejeunesse.jpeg')}}" style="height:70px;" alt="logo">
                            </div>
                        </div>
                        <!-- col -->

                        <!-- col -->

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-lg-8 py-6">
        <div class="container my-lg-8">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-12">
                    <div class="mb-6 mb-lg-8">
                        <h2 class="h1 text-center">
                            Job par catégorie

                        </h2>

                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($jobcategory as $category)
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="card mb-4 card-hover border">

                        <div class="card-body">
                            <h4 class="mb-3">
                                <a href="#!" class="text-inherit">{{$category->name}}</a>
                            </h4>
                            <div class="d-flex align-items-center mb-5 lh-1">
                                <div>
                                    <span class="text-inherit fw-semibold me-1">8</span>
                                   Job disponible 4
                                </div>
                            </div>
                            <a href="#!">
                                Consulter
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach






            </div>
        </div>
    </section>

    <section class="py-lg-8 pb-8">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="offset-xl-2 col-xl-8 col-md-12 col-12">
                    <div class="text-center mb-8">
                        <!-- col -->
                        <!-- text -->
                        <span class="text-uppercase text-primary fw-semibold ls-md">Job Disponible</span>
                        <!-- heading -->
                        <h2 class="h1 fw-bold mt-3">Emploi recemments publiés .</h2>
                    </div>
                    <!-- row -->

                    <!-- button -->

                </div>
            </div>
        </div>

        <div class="album py-5 bg-white">
            <div class="container">

              <div class="row">

                @foreach ($joball as $job)
                <div class="col-md-3 box-shadow">
                    <div class="card mb-4 box-shadow">
                      <div class="card-body">
                          <h5>{{$job->title}}</h5>
                        <p class="card-text">deux plateaux angré.</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <a href="{{route('detail.emploi', $job->slug)}}" hx-boost="true" class="btn btn-sm btn-outline-secondary">Consulter</a>
                          </div>
                          <small class="text-muted">{{$job->created_at}}</small>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach




         </div>
            </div>
          </div>

          <div class="mt-6 text-center">
            <a href="{{route('home.job')}}" hx-boost="true" class="btn btn-outline-primary">Consulter plus </a>
        </div>
    </section>

    <section class="pb-8">
        <div class="container">
          <div class="row">

            @foreach ($articleRandom as $article)


            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
              <!-- Card -->
              <div class="card mb-4 shadow-lg card-lift">
                <a href="blog-single.html">
                  <!-- Img  -->
                  <img src="{{asset('blog/images/'.$article->image)}}" class="card-img-top" alt="blogpost ">
                </a>
                <!-- Card body -->
                <div class="card-body">
                  <a href="#" class="fs-5 mb-2 fw-semibold d-block text-success">{{$article->category->name}}</a>
                  <h3><a href="blog-single.html" class="text-inherit">{{$article->title}}</a></h3>
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut sit assumenda ipsam accusamus suscipit iste? Ducimus vero accusantium iste et hic architecto. Eius dolorum soluta, ut maiores eaque fugiat sapiente?</p>
                  <!-- Media content -->
                  <div class="row align-items-center g-0 mt-4">

                    <div class="col lh-1">
                   <a class="btn btn-warning" href="{{route('detail.article', $article->slug)}}" hx-boost="true">Consulter</a>
                    </div>
                    <div class="col-auto">
                        <p class="fs-6 mb-0">{{$article->created_at}}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach


            <!-- Buttom -->

          </div>
        </div>
      </section>


</main>
@endsection
