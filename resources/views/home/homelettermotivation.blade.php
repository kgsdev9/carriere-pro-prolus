@extends('layout.layout')

@section('content', )

@section('title' , 'Lettre de motivation')

<section class="section-box">
    <div class="breacrumb-cover">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="mb-10">Annuaire des lettres de motivation </h2>
            <p class="font-lg color-text-paragraph-2">completer votre cv implementant une lettre de motivation pour convaincre les employeurs.</p>
          </div>
          <div class="col-lg-6 text-lg-end">
            <ul class="breadcrumbs mt-40">
              <li><a class="home-icon" href="#">Accueil</a></li>
              <li>Lettre de motivation</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <br><br>
  <section class="section-box mt-30">
    <div class="container">
      <div class="content-page">
        <
        <div class="row">
            @foreach ($ressourceAll as $value)


          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="card-grid-2 hover-up">
              <div class="card-grid-2-image-left">
                <div class="card-grid-2-image-rd online"><a href="#">
                    <figure><img alt="jobBox" src="{{asset('Cover_letter_l.png')}}"></figure></a>

                </div>
                <div class="card-profile pt-10"><a href="#">
                    <h5>{{$value->name}}</h5></a>
                </div>
              </div>
              <div class="card-block-info">
                <p class="font-xs color-text-paragraph-2"> {{Str::limit($value->contenu, 120)}}</p>
                <div class="card-2-bottom card-2-bottom-candidate mt-30">
                  <div class="text-start">
                    <a class="bbtn btn-apply-now mr-5" href="{{asset('lettermotivation/document/'.$value->image)}}">Télecharger  </a>

                  </div>
                </div>

              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
@endsection
