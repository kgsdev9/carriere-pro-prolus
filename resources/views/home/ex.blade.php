<main class="main">
    <section class="section-box mt-50">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-12 col-sm-12 col-12">
            <div class="box-border-single">
              <div class="row mt-10">
                <div class="col-lg-8 col-md-12">
                    <h3>{{$detail->title}}</h3>
                  <div class="mt-0 mb-15">
                    <span class="card-briefcase">{{$detail->contrat->name}}</span><span class="card-time">
                        {{$detail->created_at->diffForHumans()}}</span>
                    </div>
                </div>

              </div>
              <div class="border-bottom pt-10 pb-10"></div>
              <div class="content-single">
                <p>{!! $detail->description !!}</p>
              </div>
              <div class="author-single"><span>Carriereproplus</span></div>
              <div class="single-apply-jobs">
                <div class="row align-items-center">
                  <div class="col-md-5">


                    <span>Ne payez aucune somme à un recruteur</span>

                </div>
                  <div class="col-md-7 text-lg-end social-share">
                    <h6 class="color-text-paragraph-2 d-inline-block d-baseline mr-10">Partager</h6>
                    <a class="mr-5 d-inline-block d-middle" href="#">
                        <img alt="Carrriereproplus" src="{{asset('assets/imgs/template/icons/share-fb.svg')}}"></a>

                        <a class="mr-5 d-inline-block d-middle" href="#"><img alt="Carrriereproplus" src="{{asset('assets/imgs/page/blog/tw.svg')}}"></a>
                        <a class="mr-5 d-inline-block d-middle" href="#"><img alt="Carrriereproplus" src="{{asset('assets/imgs/template/icons/share-red.svg')}}"></a>
                        <a class="d-inline-block d-middle" href="#"><img alt="Carrriereproplus" src="{{asset('assets/imgs/template/icons/share-whatsapp.svg')}}"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12 col-12 pl-40 pl-lg-15 mt-lg-30">
            <div class="sidebar-border">
              <div class="sidebar-heading">
                <div >
                  <figure><img alt="Carrriereproplus" src="{{asset('logocarrierepro.jpg')}}" style="height:30x;"></figure>

                </div>
              </div>
              <div class="sidebar-list-job">
                <div class="box-map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.4405992058228!2d-4.0028054215941795!3d5.349525221866935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1eb70010e12bd%3A0xcc7e0ad28d00b61f!2sSODEFOR!5e0!3m2!1sfr!2sci!4v1689107244961!5m2!1sfr!2sci" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <ul class="ul-disc">
                  <li>Abidjan Cote D'ivoire Cocody Carrefour Sedefor</li>
                  <li>Télephone: (+225) 07 68 36 58 66 </li>
                  <li>Email: <a href="">carriereproplus@gmail.com</a></li>
                </ul>
              </div>
            </div>
            <div class="sidebar-border">
              <h6 class="f-18"> Catégorie emploi similaire </h6>
              <div class="sidebar-list-job">
                <ul>
                    @foreach ($similarjob as $value)
                  <li>
                    <div class="card-list-4 wow animate__ animate__fadeIn hover-up animated" style="visibility: visible; animation-name: fadeIn;">
                      <div class="image"><a href="{{route('detail.emploi', $value->slug)}}"><img src="{{asset('marketing.svg')}}" alt="Carrriereproplus"></a></div>
                      <div class="info-text">
                        <h5 class="font-md font-bold color-brand-1"><a href="{{route('detail.emploi', $value->slug)}}">{{$value->title}}</a></h5>
                        <div class="mt-0"><span class="card-briefcase">{{$value->contrat->name}}</span><span class="card-time"><span> {{$value->created_at->diffForHumans()}}</span>


                        </span></div>
                        <div class="mt-5">
                          <div class="row">
                            <div class="col-6">
                                <a class="bbtn btn-apply-now mr-5" href="{{route('detail.emploi', $value->slug)}}">Consulter  </a>
                            </div>
                            <div class="col-6 text-end"><span class="card-briefcase">{{$value->lieu->name}}</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

  </main>
