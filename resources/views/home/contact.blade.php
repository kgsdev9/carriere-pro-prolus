@extends('layout.app')

@section('content')
<main class="main">
    <section class="section-box">
      <div class="breacrumb-cover bg-img-about">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h2 class="mb-10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">À propos de nous</font></font></h2>
              <p class="font-lg color-text-paragraph-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Recevez les dernières nouvelles, mises à jour et conseils</font></font></p>
            </div>
            <div class="col-lg-6 text-lg-end">
              <ul class="breadcrumbs mt-40">
                <li><a class="home-icon" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Maison</font></font></a></li>
                <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Blog</font></font></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-box mt-80">
      <div class="container">
        <div class="box-info-contact">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-30"><a href="#"><img src="assets/imgs/page/contact/logo.svg" alt="joxbox"></a>
              <div class="font-sm color-text-paragraph"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">205 North Michigan Avenue, Suite 810 Chicago, 60601, États-Unis </font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Téléphone : (123) 456-7890 </font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Courriel : </font></font><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">contact@jobbox.com</font></font></div><a class="text-uppercase color-brand-2 link-map" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Voir la carte</font></font></a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
              <h6><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Londres</font></font></h6>
              <p class="font-sm color-text-paragraph mb-20"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2118 Thornridge Cir. </font><font style="vertical-align: inherit;">Syracuse, </font></font><br class="d-none d-lg-block"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Connecticut 35624</font></font></p>
              <h6><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">New York</font></font></h6>
              <p class="font-sm color-text-paragraph mb-20"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4517 Washington Avenue </font></font><br class="d-none d-lg-block"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Manchester, Kentucky 39495</font></font></p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
              <h6><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chicago</font></font></h6>
              <p class="font-sm color-text-paragraph mb-20"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3891 Ranchview Dr Richardson, </font></font><br class="d-none d-lg-block"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Californie 62639</font></font></p>
              <h6><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">San Fransisco</font></font></h6>
              <p class="font-sm color-text-paragraph mb-20"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4140, chemin Parker. </font><font style="vertical-align: inherit;">Allentown, </font></font><br class="d-none d-lg-block"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nouveau-Mexique 31134</font></font></p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
              <h6><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sydney</font></font></h6>
              <p class="font-sm color-text-paragraph mb-20"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3891 Ranchview Dr Richardson, </font></font><br class="d-none d-lg-block"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Californie 62639</font></font></p>
              <h6><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Singapour</font></font></h6>
              <p class="font-sm color-text-paragraph mb-20"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4140, chemin Parker. </font><font style="vertical-align: inherit;">Allentown, </font></font><br class="d-none d-lg-block"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nouveau-Mexique 31134</font></font></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-box mt-70">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mb-40"><span class="font-md color-brand-2 mt-20 d-inline-block"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contactez-nous</font></font></span>
            <h2 class="mt-5 mb-10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Entrer en contact</font></font></h2>
            <p class="font-md color-text-paragraph-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Le bon geste au bon moment permet d'économiser votre investissement. </font><font style="vertical-align: inherit;">vivez </font></font><br class="d-none d-lg-block"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">le rêve d'agrandir votre entreprise.</font></font></p>
            <form class="contact-form-style mt-30" id="contact-form" action="#" method="post">
              <div class="row wow animate__ animate__fadeInUp animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="col-lg-6 col-md-6">
                  <div class="input-style mb-20">
                    <input class="font-sm color-text-paragraph-2" name="name" placeholder="Entrez votre nom" type="text">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="input-style mb-20">
                    <input class="font-sm color-text-paragraph-2" name="company" placeholder="Comapy (en option)" type="text">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="input-style mb-20">
                    <input class="font-sm color-text-paragraph-2" name="email" placeholder="Votre e-mail" type="email">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="input-style mb-20">
                    <input class="font-sm color-text-paragraph-2" name="phone" placeholder="Numéro de téléphone" type="tel">
                  </div>
                </div>
                <div class="col-lg-12 col-md-12">
                  <div class="textarea-style mb-30">
                    <textarea class="font-sm color-text-paragraph-2" name="message" placeholder="Parlez nous de vous"></textarea>
                  </div>
                  <button class="submit btn btn-send-message" type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Envoyer le message</font></font></button>
                  <label class="ml-20">
                    <input class="float-start mr-5 mt-6" type="checkbox"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">En cliquant sur le bouton contactez-nous, vous acceptez nos conditions et notre politique,
                  </font></font></label>
                </div>
              </div>
            </form>
            <p class="form-messege"></p>
          </div>
          <div class="col-lg-4 text-center d-none d-lg-block"><img src="assets/imgs/page/contact/img.png" alt="joxbox"></div>
        </div>
      </div>
    </section>
    <section class="section-box mt-80">
      <div class="post-loop-grid">
        <div class="container">
          <div class="text-center">
            <h6 class="f-18 color-text-mutted text-uppercase"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Notre compagnie</font></font></h6>
            <h2 class="section-title mb-10 wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rencontrez notre équipe</font></font></h2>
            <p class="font-sm color-text-paragraph w-lg-50 mx-auto wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </font><font style="vertical-align: inherit;">Quisque ligula ante, dictum non aliquet eu, dapibus ac quam. </font><font style="vertical-align: inherit;">Morbi vel ante viverra orci tincidunt tempor eu id ipsum. </font><font style="vertical-align: inherit;">Sed consectetur, risus a blandit tempor, velit magna pellentesque risus, at congue tellus dui quis nisl.</font></font></p>
          </div>
          <div class="row mt-70">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-md-30">
              <div class="card-grid-4 text-center hover-up">
                <div class="image-top-feature">
                  <figure><img alt="jobBox" src="assets/imgs/page/about/team1.png"></figure>
                </div>
                <div class="card-grid-4-info">
                  <h5 class="mt-10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Arlene McCoy</font></font></h5>
                  <p class="font-xs color-text-paragraph-2 mt-5 mb-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Développeur frontal</font></font></p>
                  <div class="rate-reviews-small pt-5"><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">( </font></font></span><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">65 </font></font></span><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">)</font></font></span></span></div><span class="card-location"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">New York, États-Unis</font></font></span>
                  <div class="text-center mt-30"><a class="share-facebook social-share-link" href="#"></a><a class="share-twitter social-share-link" href="#"></a><a class="share-instagram social-share-link" href="#"></a><a class="share-linkedin social-share-link" href="#"></a></div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-md-30">
              <div class="card-grid-4 text-center hover-up">
                <div class="image-top-feature">
                  <figure><img alt="jobBox" src="assets/imgs/page/about/team2.png"></figure>
                </div>
                <div class="card-grid-4-info">
                  <h5 class="mt-10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Floyd Miles</font></font></h5>
                  <p class="font-xs color-text-paragraph-2 mt-5 mb-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Concepteur UI/UX</font></font></p>
                  <div class="rate-reviews-small pt-5"><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">( </font></font></span><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">28 </font></font></span><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">)</font></font></span></span></div><span class="card-location"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chicago, États-Unis</font></font></span>
                  <div class="text-center mt-30"><a class="share-facebook social-share-link" href="#"></a><a class="share-twitter social-share-link" href="#"></a><a class="share-instagram social-share-link" href="#"></a><a class="share-linkedin social-share-link" href="#"></a></div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-md-30">
              <div class="card-grid-4 text-center hover-up">
                <div class="image-top-feature">
                  <figure><img alt="jobBox" src="assets/imgs/page/about/team3.png"></figure>
                </div>
                <div class="card-grid-4-info">
                  <h5 class="mt-10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Devon Lane</font></font></h5>
                  <p class="font-xs color-text-paragraph-2 mt-5 mb-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Développeur frontal</font></font></p>
                  <div class="rate-reviews-small pt-5"><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">( </font></font></span><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">65 </font></font></span><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">)</font></font></span></span></div><span class="card-location"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">New York, États-Unis</font></font></span>
                  <div class="text-center mt-30"><a class="share-facebook social-share-link" href="#"></a><a class="share-twitter social-share-link" href="#"></a><a class="share-instagram social-share-link" href="#"></a><a class="share-linkedin social-share-link" href="#"></a></div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-md-30">
              <div class="card-grid-4 text-center hover-up">
                <div class="image-top-feature">
                  <figure><img alt="jobBox" src="assets/imgs/page/about/team4.png"></figure>
                </div>
                <div class="card-grid-4-info">
                  <h5 class="mt-10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Jérôme Bell</font></font></h5>
                  <p class="font-xs color-text-paragraph-2 mt-5 mb-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Développeur frontal</font></font></p>
                  <div class="rate-reviews-small pt-5"><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">( </font></font></span><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">65 </font></font></span><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">)</font></font></span></span></div><span class="card-location"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">New York, États-Unis</font></font></span>
                  <div class="text-center mt-30"><a class="share-facebook social-share-link" href="#"></a><a class="share-twitter social-share-link" href="#"></a><a class="share-instagram social-share-link" href="#"></a><a class="share-linkedin social-share-link" href="#"></a></div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-md-30">
              <div class="card-grid-4 text-center hover-up">
                <div class="image-top-feature">
                  <figure><img alt="jobBox" src="assets/imgs/page/about/team5.png"></figure>
                </div>
                <div class="card-grid-4-info">
                  <h5 class="mt-10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Il y a un</font></font></h5>
                  <p class="font-xs color-text-paragraph-2 mt-5 mb-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Développeur frontal</font></font></p>
                  <div class="rate-reviews-small pt-5"><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">( </font></font></span><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">65 </font></font></span><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">)</font></font></span></span></div><span class="card-location"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">New York, États-Unis</font></font></span>
                  <div class="text-center mt-30"><a class="share-facebook social-share-link" href="#"></a><a class="share-twitter social-share-link" href="#"></a><a class="share-instagram social-share-link" href="#"></a><a class="share-linkedin social-share-link" href="#"></a></div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-md-30">
              <div class="card-grid-4 text-center hover-up">
                <div class="image-top-feature">
                  <figure><img alt="jobBox" src="assets/imgs/page/about/team6.png"></figure>
                </div>
                <div class="card-grid-4-info">
                  <h5 class="mt-10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cameron</font></font></h5>
                  <p class="font-xs color-text-paragraph-2 mt-5 mb-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Développeur frontal</font></font></p>
                  <div class="rate-reviews-small pt-5"><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">( </font></font></span><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">65 </font></font></span><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">)</font></font></span></span></div><span class="card-location"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">New York, États-Unis</font></font></span>
                  <div class="text-center mt-30"><a class="share-facebook social-share-link" href="#"></a><a class="share-twitter social-share-link" href="#"></a><a class="share-instagram social-share-link" href="#"></a><a class="share-linkedin social-share-link" href="#"></a></div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-md-30">
              <div class="card-grid-4 text-center hover-up">
                <div class="image-top-feature">
                  <figure><img alt="jobBox" src="assets/imgs/page/about/team7.png"></figure>
                </div>
                <div class="card-grid-4-info">
                  <h5 class="mt-10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Jacob Jones</font></font></h5>
                  <p class="font-xs color-text-paragraph-2 mt-5 mb-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Développeur frontal</font></font></p>
                  <div class="rate-reviews-small pt-5"><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">( </font></font></span><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">65 </font></font></span><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">)</font></font></span></span></div><span class="card-location"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">New York, États-Unis</font></font></span>
                  <div class="text-center mt-30"><a class="share-facebook social-share-link" href="#"></a><a class="share-twitter social-share-link" href="#"></a><a class="share-instagram social-share-link" href="#"></a><a class="share-linkedin social-share-link" href="#"></a></div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-md-30">
              <div class="card-grid-4 text-center hover-up">
                <div class="image-top-feature">
                  <figure><img alt="jobBox" src="assets/imgs/page/about/team8.png"></figure>
                </div>
                <div class="card-grid-4-info">
                  <h5 class="mt-10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cour Henri</font></font></h5>
                  <p class="font-xs color-text-paragraph-2 mt-5 mb-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Développeur frontal</font></font></p>
                  <div class="rate-reviews-small pt-5"><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">( </font></font></span><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">65 </font></font></span><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">)</font></font></span></span></div><span class="card-location"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">New York, États-Unis</font></font></span>
                  <div class="text-center mt-30"><a class="share-facebook social-share-link" href="#"></a><a class="share-twitter social-share-link" href="#"></a><a class="share-instagram social-share-link" href="#"></a><a class="share-linkedin social-share-link" href="#"></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-box mt-50 mb-50">
      <div class="container">
        <div class="text-start">
          <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp" style="visibility: hidden; animation-name: none;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nouvelles et Blogue</font></font></h2>
          <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp" style="visibility: hidden; animation-name: none;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Recevez les dernières nouvelles, mises à jour et conseils</font></font></p>
        </div>
      </div>
      <div class="container">
        <div class="mt-50">
          <div class="box-swiper style-nav-top">
            <div class="swiper-container swiper-group-3 swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
              <div class="swiper-wrapper pb-70 pt-5" id="swiper-wrapper-ca1fdf37d460072e" aria-live="off" style="transform: translate3d(-762px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" role="group" aria-label="3 / 3" style="width: 351px; margin-right: 30px;" data-swiper-slide-index="2">
                  <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn" style="visibility: hidden; animation-name: none;">
                    <div class="text-center card-grid-3-image"><a href="#">
                        <figure><img alt="jobBox" src="assets/imgs/page/homepage1/img-news3.png"></figure></a></div>
                    <div class="card-block-info">
                      <div class="tags mb-15"><a class="btn btn-tag" href="blog-grid.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nouvelles</font></font></a></div>
                      <h5><a href="blog-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Question d'Entrevue&nbsp;: Pourquoi n'avez-vous pas de diplôme&nbsp;?</font></font></a></h5>
                      <p class="mt-10 color-text-paragraph font-sm"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Apprenez à répondre si un intervieweur vous demande pourquoi vous n'avez pas de diplôme et lisez des exemples de réponses qui peuvent vous aider à élaborer</font></font></p>
                      <div class="card-2-bottom mt-20">
                        <div class="row">
                          <div class="col-lg-6 col-6">
                            <div class="d-flex"><img class="img-rounded" src="assets/imgs/page/homepage1/user3.png" alt="jobBox">
                              <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">William Kend </font></font></span><br><span class="font-xs color-text-paragraph-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">06 septembre</font></font></span></div>
                            </div>
                          </div>
                          <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9 minutes de lecture</font></font></span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide swiper-slide-prev" role="group" aria-label="1 / 3" style="width: 351px; margin-right: 30px;" data-swiper-slide-index="0">
                  <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn" style="visibility: hidden; animation-name: none;">
                    <div class="text-center card-grid-3-image"><a href="#">
                        <figure><img alt="jobBox" src="assets/imgs/page/homepage1/img-news1.png"></figure></a></div>
                    <div class="card-block-info">
                      <div class="tags mb-15"><a class="btn btn-tag" href="blog-grid.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nouvelles</font></font></a></div>
                      <h5><a href="blog-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">21 conseils pour un entretien d'embauche : comment faire bonne impression</font></font></a></h5>
                      <p class="mt-10 color-text-paragraph font-sm"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Notre mission est de créer l'entreprise de soins de santé la plus durable au monde en créant des produits de soins de santé de haute qualité dans des emballages emblématiques et durables.</font></font></p>
                      <div class="card-2-bottom mt-20">
                        <div class="row">
                          <div class="col-lg-6 col-6">
                            <div class="d-flex"><img class="img-rounded" src="assets/imgs/page/homepage1/user1.png" alt="jobBox">
                              <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sarah Harding </font></font></span><br><span class="font-xs color-text-paragraph-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">06 septembre</font></font></span></div>
                            </div>
                          </div>
                          <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8 minutes de lecture</font></font></span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide swiper-slide-active" role="group" aria-label="2 / 3" style="width: 351px; margin-right: 30px;" data-swiper-slide-index="1">
                  <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn" style="visibility: hidden; animation-name: none;">
                    <div class="text-center card-grid-3-image"><a href="#">
                        <figure><img alt="jobBox" src="assets/imgs/page/homepage1/img-news2.png"></figure></a></div>
                    <div class="card-block-info">
                      <div class="tags mb-15"><a class="btn btn-tag" href="blog-grid.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Événements</font></font></a></div>
                      <h5><a href="blog-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">39 forces et faiblesses à discuter lors d'un entretien d'embauche</font></font></a></h5>
                      <p class="mt-10 color-text-paragraph font-sm"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Notre mission est de créer l'entreprise de soins de santé la plus durable au monde en créant des produits de soins de santé de haute qualité dans des emballages emblématiques et durables.</font></font></p>
                      <div class="card-2-bottom mt-20">
                        <div class="row">
                          <div class="col-lg-6 col-6">
                            <div class="d-flex"><img class="img-rounded" src="assets/imgs/page/homepage1/user2.png" alt="jobBox">
                              <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Steven Jobs </font></font></span><br><span class="font-xs color-text-paragraph-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">06 septembre</font></font></span></div>
                            </div>
                          </div>
                          <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6 minutes de lecture</font></font></span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide swiper-slide-next" role="group" aria-label="3 / 3" style="width: 351px; margin-right: 30px;" data-swiper-slide-index="2">
                  <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn" style="visibility: hidden; animation-name: none;">
                    <div class="text-center card-grid-3-image"><a href="#">
                        <figure><img alt="jobBox" src="assets/imgs/page/homepage1/img-news3.png"></figure></a></div>
                    <div class="card-block-info">
                      <div class="tags mb-15"><a class="btn btn-tag" href="blog-grid.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nouvelles</font></font></a></div>
                      <h5><a href="blog-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Question d'Entrevue&nbsp;: Pourquoi n'avez-vous pas de diplôme&nbsp;?</font></font></a></h5>
                      <p class="mt-10 color-text-paragraph font-sm"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Apprenez à répondre si un intervieweur vous demande pourquoi vous n'avez pas de diplôme et lisez des exemples de réponses qui peuvent vous aider à élaborer</font></font></p>
                      <div class="card-2-bottom mt-20">
                        <div class="row">
                          <div class="col-lg-6 col-6">
                            <div class="d-flex"><img class="img-rounded" src="assets/imgs/page/homepage1/user3.png" alt="jobBox">
                              <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">William Kend </font></font></span><br><span class="font-xs color-text-paragraph-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">06 septembre</font></font></span></div>
                            </div>
                          </div>
                          <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9 minutes de lecture</font></font></span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" role="group" aria-label="1 / 3" style="width: 351px; margin-right: 30px;" data-swiper-slide-index="0">
                  <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn" style="visibility: hidden; animation-name: none;">
                    <div class="text-center card-grid-3-image"><a href="#">
                        <figure><img alt="jobBox" src="assets/imgs/page/homepage1/img-news1.png"></figure></a></div>
                    <div class="card-block-info">
                      <div class="tags mb-15"><a class="btn btn-tag" href="blog-grid.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nouvelles</font></font></a></div>
                      <h5><a href="blog-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">21 conseils pour un entretien d'embauche : comment faire bonne impression</font></font></a></h5>
                      <p class="mt-10 color-text-paragraph font-sm"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Notre mission est de créer l'entreprise de soins de santé la plus durable au monde en créant des produits de soins de santé de haute qualité dans des emballages emblématiques et durables.</font></font></p>
                      <div class="card-2-bottom mt-20">
                        <div class="row">
                          <div class="col-lg-6 col-6">
                            <div class="d-flex"><img class="img-rounded" src="assets/imgs/page/homepage1/user1.png" alt="jobBox">
                              <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sarah Harding </font></font></span><br><span class="font-xs color-text-paragraph-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">06 septembre</font></font></span></div>
                            </div>
                          </div>
                          <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8 minutes de lecture</font></font></span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Diapositive suivante" aria-controls="swiper-wrapper-26e8ad22a4e82282"></div>
            <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Diapositive précédente" aria-controls="swiper-wrapper-26e8ad22a4e82282"></div>
          </div>
          <div class="text-center"><a class="btn btn-brand-1 btn-icon-load mt--30 hover-up" href="blog-grid.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Charger plus de messages</font></font></a></div>
        </div>
      </div>
    </section>
    <section class="section-box mt-30 mb-40">
      <div class="container">
        <h2 class="text-center mb-15 wow animate__animated animate__fadeInUp" style="visibility: hidden; animation-name: none;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Notre client heureux</font></font></h2>
        <div class="font-lg color-text-paragraph-2 text-center wow animate__animated animate__fadeInUp" style="visibility: hidden; animation-name: none;">When it comes to choosing the right web hosting provider, we know how easy it<br class="d-none d-lg-block"> is to get overwhelmed with the number.</div>
        <div class="row mt-50">
          <div class="box-swiper">
            <div class="swiper-container swiper-group-3 swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
              <div class="swiper-wrapper pb-70 pt-5" id="swiper-wrapper-26e8ad22a4e82282" aria-live="off" style="transform: translate3d(-762px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" role="group" aria-label="3 / 3" style="width: 351px; margin-right: 30px;" data-swiper-slide-index="2">
                  <div class="card-grid-6 hover-up">
                    <div class="card-text-desc mt-10">
                      <p class="font-md color-text-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae neque metus. Vivamus consectetur ultricies commodo. Pellentesque at nisl sit amet neque finibus egestas ut at magna. Cras tincidunt tortor sed eros aliquam eleifend.</p>
                    </div>
                    <div class="card-image">
                      <div class="image">
                        <figure><img alt="jobBox" src="assets/imgs/page/about/user3.png"></figure>
                      </div>
                      <div class="card-profile">
                        <h6>Mark Adair</h6><span>Businessmen</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide swiper-slide-prev" role="group" aria-label="1 / 3" style="width: 351px; margin-right: 30px;" data-swiper-slide-index="0">
                  <div class="card-grid-6 hover-up">
                    <div class="card-text-desc mt-10">
                      <p class="font-md color-text-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae neque metus. Vivamus consectetur ultricies commodo. Pellentesque at nisl sit amet neque finibus egestas ut at magna. Cras tincidunt tortor sed eros aliquam eleifend.</p>
                    </div>
                    <div class="card-image">
                      <div class="image">
                        <figure><img alt="jobBox" src="assets/imgs/page/about/user1.png"></figure>
                      </div>
                      <div class="card-profile">
                        <h6>Mark Adair</h6><span>Businessmen</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide swiper-slide-active" role="group" aria-label="2 / 3" style="width: 351px; margin-right: 30px;" data-swiper-slide-index="1">
                  <div class="card-grid-6 hover-up">
                    <div class="card-text-desc mt-10">
                      <p class="font-md color-text-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae neque metus. Vivamus consectetur ultricies commodo. Pellentesque at nisl sit amet neque finibus egestas ut at magna. Cras tincidunt tortor sed eros aliquam eleifend.</p>
                    </div>
                    <div class="card-image">
                      <div class="image">
                        <figure><img alt="jobBox" src="assets/imgs/page/about/user2.png"></figure>
                      </div>
                      <div class="card-profile">
                        <h6>Mark Adair</h6><span>Businessmen</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide swiper-slide-next" role="group" aria-label="3 / 3" style="width: 351px; margin-right: 30px;" data-swiper-slide-index="2">
                  <div class="card-grid-6 hover-up">
                    <div class="card-text-desc mt-10">
                      <p class="font-md color-text-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae neque metus. Vivamus consectetur ultricies commodo. Pellentesque at nisl sit amet neque finibus egestas ut at magna. Cras tincidunt tortor sed eros aliquam eleifend.</p>
                    </div>
                    <div class="card-image">
                      <div class="image">
                        <figure><img alt="jobBox" src="assets/imgs/page/about/user3.png"></figure>
                      </div>
                      <div class="card-profile">
                        <h6>Mark Adair</h6><span>Businessmen</span>
                      </div>
                    </div>
                  </div>
                </div>
              <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" role="group" aria-label="1 / 3" style="width: 351px; margin-right: 30px;" data-swiper-slide-index="0">
                  <div class="card-grid-6 hover-up">
                    <div class="card-text-desc mt-10">
                      <p class="font-md color-text-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae neque metus. Vivamus consectetur ultricies commodo. Pellentesque at nisl sit amet neque finibus egestas ut at magna. Cras tincidunt tortor sed eros aliquam eleifend.</p>
                    </div>
                    <div class="card-image">
                      <div class="image">
                        <figure><img alt="jobBox" src="assets/imgs/page/about/user1.png"></figure>
                      </div>
                      <div class="card-profile">
                        <h6>Mark Adair</h6><span>Businessmen</span>
                      </div>
                    </div>
                  </div>
                </div></div>
              <div class="swiper-pagination swiper-pagination3"></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-box mt-50 mb-20">
      <div class="container">
        <div class="box-newsletter">
          <div class="row">
            <div class="col-xl-3 col-12 text-center d-none d-xl-block"><img src="assets/imgs/template/newsletter-left.png" alt="joxbox"></div>
            <div class="col-lg-12 col-xl-6 col-12">
              <h2 class="text-md-newsletter text-center">New Things Will Always<br> Update Regularly</h2>
              <div class="box-form-newsletter mt-40">
                <form class="form-newsletter">
                  <input class="input-newsletter" type="text" value="" placeholder="Entrez votre email ici">
                  <button class="btn btn-default font-heading icon-send-letter">Subscribe</button>
                </form>
              </div>
            </div>
            <div class="col-xl-3 col-12 text-center d-none d-xl-block"><img src="assets/imgs/template/newsletter-right.png" alt="joxbox"></div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection