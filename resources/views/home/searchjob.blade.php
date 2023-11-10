@extends('layout.app')

@section('content')
<section class="section-box mt-70">
    <div class="container">
      <div class="text-center">
        <h2 class="section-title mb-10 wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Résultat de vos recherches </h2>
        <p class="font-lg color-text-paragraph-2 wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"> le nombre d'occurence trouvé {{count($demande)}}.</p>

      </div>
      <div class="mt-50">
        <div class="tab-content" id="myTabContent-1">
          <div class="tab-pane fade show active" id="tab-job-1" role="tabpanel" aria-labelledby="tab-job-1">
            <div class="row">

                @foreach ($demande as $value)


              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-block-info pt-25">
                    <h6><a href="job-details.html">{{$value->title}}</a></h6>
                    <div class="mt-5"><span class="card-briefcase mr-15">{{$value->contrat->name}}</span><span class="card-time">{{$value->created_at->diffForHumans()}}</span></div>
                        <p>{{Str::limit($value->mini_description,130)}}</p>

                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-lg-7 col-md-7">
                                <div class="d-flex"><img class="img-rounded" src="{{asset('marketing.svg')}}" alt="jobBox">
                                  <div class="info-right-img">
                                    <h6 class="color-brand-1 lh-14">{{$value->employeur}}</h6><span class="card-location font-xxs pl-15 color-text-paragraph-2">{{$value->lieu->name}}</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-5 col-md-5 text-end">
                                  <a class="bbtn btn-apply-now mr-5" href="{{route('detail.emploi', $value->slug)}}">Consulter  </a>

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

@endsection


