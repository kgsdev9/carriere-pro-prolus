@extends('layout.layout')

@section('title' , 'Annuaire Des Curriculum vitæ')

@section('content')

<section class="section-box">
    <div class="breacrumb-cover bg-img-about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="mb-10">Annuaire Des CVS </h2>
            <p class="font-lg color-text-paragraph-2">Nous Mettons à votre disposition plusieurs CVS que vous pouvez télecharger et modifier à vos goûts. </p>
          </div>
          <div class="col-lg-6 text-lg-end">
            <ul class="breadcrumbs mt-40">
              <li><a class="home-icon" href="#">Acceuil</a></li>
              <li>Annuaire CV</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

<section class="section-box mt-20">
    <div class="section-box wow animate__ animate__fadeIn mt-70 animated" style="visibility: visible; animation-name: fadeIn;">
      <div class="container">
        <div class="mt-10">
          <div class="tab-content" id="myTabContent-1">
            <div class="tab-pane fade show active" id="tab-job-1" role="tabpanel" aria-labelledby="tab-job-1">
              <div class="row">
                @foreach ($home  as $value)
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                  <div class="card-grid-2 grid-bd-16 hover-up">
                    <div class="card-grid-2-image">
                    </span>
                      <div class="image-box">
                        <figure><img src="{{asset('cv/images/'.$value->image)}}" alt="CarriereProPlus"></figure>
                      </div>
                    </div>
                    <div class="card-block-info">
                      <h5><a href="#">{{$value->title}}</a></h5>

                      <div class="card-2-bottom mt-20">
                        <div class="row">
                          <div class="col-xl-7 col-md-7 mb-2">
                            <a class="btn btn-tags-sm mr-5" href="{{asset('cv/document/'.$value->document)}}">Télecharger</a>
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
    </div>
  </section>


@endsection
