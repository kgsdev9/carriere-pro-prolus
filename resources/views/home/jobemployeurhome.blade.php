@extends('layout.app')


@section('content')

<main class="main">
    <section class="section-box-2">
      <div class="container">
        <div class="banner-hero banner-single banner-single-bg">
          <div class="block-banner text-center">
            <h3 class="wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"><span class="color-brand-2">22 Jobs</span> Available Now</h3>
            <div class="font-sm color-text-paragraph-2 mt-10 wow animate__ animate__fadeInUp animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, <br class="d-none d-xl-block">atque delectus molestias quis?</div>
            <div class="form-find text-start mt-40 wow animate__ animate__fadeInUp animated" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
              <form>
                <div class="box-industry">
                  <select class="form-input mr-10 select-active input-industry select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                    <option value="0" data-select2-id="3">Industry</option>
                    <option value="1">Software</option>
                    <option value="2">Finance</option>
                    <option value="3">Recruting</option>
                    <option value="4">Management</option>
                    <option value="5">Advertising</option>
                    <option value="6">Development</option>
                  </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 180px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-bzq6-container"><span class="select2-selection__rendered" id="select2-bzq6-container" role="textbox" aria-readonly="true" title="Industry">Industry</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
                <select class="form-input mr-10 select-active select2-hidden-accessible" data-select2-id="4" tabindex="-1" aria-hidden="true">
                  <option value="" data-select2-id="6">Location</option>
                  <option value="AX">Aland Islands</option>
                  <option value="AF">Afghanistan</option>
                  <option value="AL">Albania</option>
                  <option value="DZ">Algeria</option>
                  <option value="AD">Andorra</option>
                  <option value="AO">Angola</option>
                  <option value="AI">Anguilla</option>
                  <option value="AQ">Antarctica</option>
                  <option value="AG">Antigua and Barbuda</option>
                  <option value="AR">Argentina</option>
                  <option value="AM">Armenia</option>
                  <option value="AW">Aruba</option>
                  <option value="AU">Australia</option>
                  <option value="AT">Austria</option>
                  <option value="AZ">Azerbaijan</option>
                  <option value="BS">Bahamas</option>
                  <option value="BH">Bahrain</option>
                  <option value="BD">Bangladesh</option>
                  <option value="BB">Barbados</option>
                  <option value="BY">Belarus</option>
                  <option value="PW">Belau</option>
                  <option value="BE">Belgium</option>
                  <option value="BZ">Belize</option>
                  <option value="BJ">Benin</option>
                  <option value="BM">Bermuda</option>
                  <option value="BT">Bhutan</option>
                  <option value="BO">Bolivia</option>
                  <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                  <option value="BA">Bosnia and Herzegovina</option>
                  <option value="BW">Botswana</option>
                  <option value="BV">Bouvet Island</option>
                  <option value="BR">Brazil</option>
                  <option value="IO">British Indian Ocean Territory</option>
                  <option value="VG">British Virgin Islands</option>
                  <option value="BN">Brunei</option>
                  <option value="BG">Bulgaria</option>
                  <option value="BF">Burkina Faso</option>
                  <option value="BI">Burundi</option>
                  <option value="KH">Cambodia</option>
                  <option value="CM">Cameroon</option>
                  <option value="CA">Canada</option>
                  <option value="CV">Cape Verde</option>
                  <option value="KY">Cayman Islands</option>
                  <option value="CF">Central African Republic</option>
                  <option value="TD">Chad</option>
                  <option value="CL">Chile</option>
                  <option value="CN">China</option>
                  <option value="CX">Christmas Island</option>
                  <option value="CC">Cocos (Keeling) Islands</option>
                  <option value="CO">Colombia</option>
                  <option value="KM">Comoros</option>
                  <option value="CG">Congo (Brazzaville)</option>
                  <option value="CD">Congo (Kinshasa)</option>
                  <option value="CK">Cook Islands</option>
                  <option value="CR">Costa Rica</option>
                  <option value="HR">Croatia</option>
                  <option value="CU">Cuba</option>
                  <option value="CW">CuraÇao</option>
                  <option value="CY">Cyprus</option>
                  <option value="CZ">Czech Republic</option>
                  <option value="DK">Denmark</option>
                  <option value="DJ">Djibouti</option>
                  <option value="DM">Dominica</option>
                  <option value="DO">Dominican Republic</option>
                  <option value="EC">Ecuador</option>
                  <option value="EG">Egypt</option>
                  <option value="SV">El Salvador</option>
                  <option value="GQ">Equatorial Guinea</option>
                  <option value="ER">Eritrea</option>
                  <option value="EE">Estonia</option>
                  <option value="ET">Ethiopia</option>
                  <option value="FK">Falkland Islands</option>
                  <option value="FO">Faroe Islands</option>
                  <option value="FJ">Fiji</option>
                  <option value="FI">Finland</option>
                  <option value="FR">France</option>
                  <option value="GF">French Guiana</option>
                  <option value="PF">French Polynesia</option>
                  <option value="TF">French Southern Territories</option>
                  <option value="GA">Gabon</option>
                  <option value="GM">Gambia</option>
                  <option value="GE">Georgia</option>
                  <option value="DE">Germany</option>
                  <option value="GH">Ghana</option>
                  <option value="GI">Gibraltar</option>
                  <option value="GR">Greece</option>
                  <option value="GL">Greenland</option>
                  <option value="GD">Grenada</option>
                  <option value="GP">Guadeloupe</option>
                  <option value="GT">Guatemala</option>
                  <option value="GG">Guernsey</option>
                  <option value="GN">Guinea</option>
                  <option value="GW">Guinea-Bissau</option>
                  <option value="GY">Guyana</option>
                  <option value="HT">Haiti</option>
                  <option value="HM">Heard Island and McDonald Islands</option>
                  <option value="HN">Honduras</option>
                  <option value="HK">Hong Kong</option>
                  <option value="HU">Hungary</option>
                  <option value="IS">Iceland</option>
                  <option value="IN">India</option>
                  <option value="ID">Indonesia</option>
                  <option value="IR">Iran</option>
                  <option value="IQ">Iraq</option>
                  <option value="IM">Isle of Man</option>
                  <option value="IL">Israel</option>
                  <option value="IT">Italy</option>
                  <option value="CI">Ivory Coast</option>
                  <option value="JM">Jamaica</option>
                  <option value="JP">Japan</option>
                  <option value="JE">Jersey</option>
                  <option value="JO">Jordan</option>
                  <option value="KZ">Kazakhstan</option>
                  <option value="KE">Kenya</option>
                  <option value="KI">Kiribati</option>
                  <option value="KW">Kuwait</option>
                  <option value="KG">Kyrgyzstan</option>
                  <option value="LA">Laos</option>
                  <option value="LV">Latvia</option>
                  <option value="LB">Lebanon</option>
                  <option value="LS">Lesotho</option>
                  <option value="LR">Liberia</option>
                  <option value="LY">Libya</option>
                  <option value="LI">Liechtenstein</option>
                  <option value="LT">Lithuania</option>
                  <option value="LU">Luxembourg</option>
                  <option value="MO">Macao S.A.R., China</option>
                  <option value="MK">Macedonia</option>
                  <option value="MG">Madagascar</option>
                  <option value="MW">Malawi</option>
                  <option value="MY">Malaysia</option>
                  <option value="MV">Maldives</option>
                  <option value="ML">Mali</option>
                  <option value="MT">Malta</option>
                  <option value="MH">Marshall Islands</option>
                  <option value="MQ">Martinique</option>
                  <option value="MR">Mauritania</option>
                  <option value="MU">Mauritius</option>
                  <option value="YT">Mayotte</option>
                  <option value="MX">Mexico</option>
                  <option value="FM">Micronesia</option>
                  <option value="MD">Moldova</option>
                  <option value="MC">Monaco</option>
                  <option value="MN">Mongolia</option>
                  <option value="ME">Montenegro</option>
                  <option value="MS">Montserrat</option>
                  <option value="MA">Morocco</option>
                  <option value="MZ">Mozambique</option>
                  <option value="MM">Myanmar</option>
                  <option value="NA">Namibia</option>
                  <option value="NR">Nauru</option>
                  <option value="NP">Nepal</option>
                  <option value="NL">Netherlands</option>
                  <option value="AN">Netherlands Antilles</option>
                  <option value="NC">New Caledonia</option>
                  <option value="NZ">New Zealand</option>
                  <option value="NI">Nicaragua</option>
                  <option value="NE">Niger</option>
                  <option value="NG">Nigeria</option>
                  <option value="NU">Niue</option>
                  <option value="NF">Norfolk Island</option>
                  <option value="KP">North Korea</option>
                  <option value="NO">Norway</option>
                  <option value="OM">Oman</option>
                  <option value="PK">Pakistan</option>
                  <option value="PS">Palestinian Territory</option>
                  <option value="PA">Panama</option>
                  <option value="PG">Papua New Guinea</option>
                  <option value="PY">Paraguay</option>
                  <option value="PE">Peru</option>
                  <option value="PH">Philippines</option>
                  <option value="PN">Pitcairn</option>
                  <option value="PL">Poland</option>
                  <option value="PT">Portugal</option>
                  <option value="QA">Qatar</option>
                  <option value="IE">Republic of Ireland</option>
                  <option value="RE">Reunion</option>
                  <option value="RO">Romania</option>
                  <option value="RU">Russia</option>
                  <option value="RW">Rwanda</option>
                  <option value="ST">São Tomé and Príncipe</option>
                  <option value="BL">Saint Barthélemy</option>
                  <option value="SH">Saint Helena</option>
                  <option value="KN">Saint Kitts and Nevis</option>
                  <option value="LC">Saint Lucia</option>
                  <option value="SX">Saint Martin (Dutch part)</option>
                  <option value="MF">Saint Martin (French part)</option>
                  <option value="PM">Saint Pierre and Miquelon</option>
                  <option value="VC">Saint Vincent and the Grenadines</option>
                  <option value="SM">San Marino</option>
                  <option value="SA">Saudi Arabia</option>
                  <option value="SN">Senegal</option>
                  <option value="RS">Serbia</option>
                  <option value="SC">Seychelles</option>
                  <option value="SL">Sierra Leone</option>
                  <option value="SG">Singapore</option>
                  <option value="SK">Slovakia</option>
                  <option value="SI">Slovenia</option>
                  <option value="SB">Solomon Islands</option>
                  <option value="SO">Somalia</option>
                  <option value="ZA">South Africa</option>
                  <option value="GS">South Georgia/Sandwich Islands</option>
                  <option value="KR">South Korea</option>
                  <option value="SS">South Sudan</option>
                  <option value="ES">Spain</option>
                  <option value="LK">Sri Lanka</option>
                  <option value="SD">Sudan</option>
                  <option value="SR">Suriname</option>
                  <option value="SJ">Svalbard and Jan Mayen</option>
                  <option value="SZ">Swaziland</option>
                  <option value="SE">Sweden</option>
                  <option value="CH">Switzerland</option>
                  <option value="SY">Syria</option>
                  <option value="TW">Taiwan</option>
                  <option value="TJ">Tajikistan</option>
                  <option value="TZ">Tanzania</option>
                  <option value="TH">Thailand</option>
                  <option value="TL">Timor-Leste</option>
                  <option value="TG">Togo</option>
                  <option value="TK">Tokelau</option>
                  <option value="TO">Tonga</option>
                  <option value="TT">Trinidad and Tobago</option>
                  <option value="TN">Tunisia</option>
                  <option value="TR">Turkey</option>
                  <option value="TM">Turkmenistan</option>
                  <option value="TC">Turks and Caicos Islands</option>
                  <option value="TV">Tuvalu</option>
                  <option value="UG">Uganda</option>
                  <option value="UA">Ukraine</option>
                  <option value="AE">United Arab Emirates</option>
                  <option value="GB">United Kingdom (UK)</option>
                  <option value="US">USA (US)</option>
                  <option value="UY">Uruguay</option>
                  <option value="UZ">Uzbekistan</option>
                  <option value="VU">Vanuatu</option>
                  <option value="VA">Vatican</option>
                  <option value="VE">Venezuela</option>
                  <option value="VN">Vietnam</option>
                  <option value="WF">Wallis and Futuna</option>
                  <option value="EH">Western Sahara</option>
                  <option value="WS">Western Samoa</option>
                  <option value="YE">Yemen</option>
                  <option value="ZM">Zambia</option>
                  <option value="ZW">Zimbabwe</option>
                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="5" style="width: 181.172px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-x3yz-container"><span class="select2-selection__rendered" id="select2-x3yz-container" role="textbox" aria-readonly="true" title="Location">Location</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                <input class="form-input input-keysearch mr-10" type="text" placeholder="Your keyword... ">
                <button class="btn btn-default btn-find font-sm">Search</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-box mt-30">
      <div class="container">
        <div class="row flex-row-reverse">
          <div class="col-lg-9 col-md-12 col-sm-12 col-12 float-right">
            <div class="content-page">
              <div class="box-filters-job">
                <div class="row">
                  <div class="col-xl-6 col-lg-5"><span class="text-small text-showing">Showing <strong>41-60 </strong>of <strong>944 </strong>jobs</span></div>
                  <div class="col-xl-6 col-lg-7 text-lg-end mt-sm-15">
                    <div class="display-flex2">
                      <div class="box-border mr-10"><span class="text-sortby">Show:</span>
                        <div class="dropdown dropdown-sort">
                          <button class="btn dropdown-toggle" id="dropdownSort" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"><span>12</span><i class="fi-rr-angle-small-down"></i></button>
                          <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort">
                            <li><a class="dropdown-item active" href="#">10</a></li>
                            <li><a class="dropdown-item" href="#">12</a></li>
                            <li><a class="dropdown-item" href="#">20</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="box-border"><span class="text-sortby">Sort by:</span>
                        <div class="dropdown dropdown-sort">
                          <button class="btn dropdown-toggle" id="dropdownSort2" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"><span>Newest Post</span><i class="fi-rr-angle-small-down"></i></button>
                          <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort2">
                            <li><a class="dropdown-item active" href="#">Newest Post</a></li>
                            <li><a class="dropdown-item" href="#">Oldest Post</a></li>
                            <li><a class="dropdown-item" href="#">Rating Post</a></li>
                          </ul>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <div class="row">

                @foreach ($job as $value)


                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                  <div class="card-grid-2 hover-up">
                    <div class="card-grid-2-image-left"><span class="flash"></span>
                      <div class="image-box"><img src="{{asset('employeurs/image/'.$value->employeur->logo)}}" alt="jobBox"></div>
                      <div class="right-info"><a class="name-job" href="{{route('detail.emploi', $value->slug)}}">Laravel</a><span class="location-small">{{$value->lieu->name}}</span></div>
                    </div>
                    <div class="card-block-info">
                      <h6><a href="{{route('detail.emploi', $value->slug)}}">{{$value->title}}</a></h6>
                      <div class="mt-5"><span class="card-briefcase">{{$value->contrat->name}}</span><span class="card-time">{{$value->created_at->diffForHumans()}}</span></div>
                      <p class="font-sm color-text-paragraph mt-15">{{$value->mini_description}}</p>
                      <div class="mt-30">
                        <a class="btn btn-grey-small mr-5" href="jobs-grid.html">Offre gratuite</a>

                      </div>
                      <div class="card-2-bottom mt-30">
                        <div class="row">
                          <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                          <div class="col-lg-5 col-5 text-end">
                            <div class="btn btn-apply-now"> <a href="{{route('detail.emploi', $value->slug)}}">Consulter</a>  </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                @endforeach


              </div>
            </div>
            <div class="paginations">
              <ul class="pager">
             
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-12 col-sm-12 col-12">
            <div class="sidebar-shadow none-shadow mb-30">
              <div class="sidebar-filters">
                <div class="filter-block head-border mb-30">
                  <h5>Advance Filter <a class="link-reset" href="#">Reset</a></h5>
                </div>
                <div class="filter-block mb-30">
                  <div class="form-group select-style select-style-icon">
                    <select class="form-control form-icons select-active select2-hidden-accessible" data-select2-id="7" tabindex="-1" aria-hidden="true">
                      <option data-select2-id="9">New York, US</option>
                      <option>London</option>
                      <option>Paris</option>
                      <option>Berlin</option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="8" style="width: 293.5px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-7djp-container"><span class="select2-selection__rendered" id="select2-7djp-container" role="textbox" aria-readonly="true" title="New York, US">New York, US</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span><i class="fi-rr-marker"></i>
                  </div>
                </div>
                <div class="filter-block mb-20">
                  <h5 class="medium-heading mb-15">Industry</h5>
                  <div class="form-group">
                    <ul class="list-checkbox">
                      <li>
                        <label class="cb-container">
                          <input type="checkbox" checked="checked"><span class="text-small">All</span><span class="checkmark"></span>
                        </label><span class="number-item">180</span>
                      </li>
                      <li>
                        <label class="cb-container">
                          <input type="checkbox"><span class="text-small">Software</span><span class="checkmark"></span>
                        </label><span class="number-item">12</span>
                      </li>
                      <li>
                        <label class="cb-container">
                          <input type="checkbox"><span class="text-small">Finance</span><span class="checkmark"></span>
                        </label><span class="number-item">23</span>
                      </li>
                      <li>
                        <label class="cb-container">
                          <input type="checkbox"><span class="text-small">Recruting</span><span class="checkmark"></span>
                        </label><span class="number-item">43</span>
                      </li>
                      <li>
                        <label class="cb-container">
                          <input type="checkbox"><span class="text-small">Management</span><span class="checkmark"></span>
                        </label><span class="number-item">65</span>
                      </li>
                      <li>
                        <label class="cb-container">
                          <input type="checkbox"><span class="text-small">Advertising</span><span class="checkmark"></span>
                        </label><span class="number-item">76</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="filter-block mb-20">
                  <h5 class="medium-heading mb-25">Salary Range</h5>
                  <div class="list-checkbox pb-20">
                    <div class="row position-relative mt-10 mb-20">
                      <div class="col-sm-12 box-slider-range">
                        <div id="slider-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background"><div class="noUi-base"><div class="noUi-origin noUi-stacking" style="left: 56%;"><div class="noUi-handle noUi-handle-lower"><div class="noUi-tooltip">280</div></div></div></div></div>
                      </div>
                      <div class="box-input-money">
                        <input class="input-disabled form-control min-value-money" type="text" name="min-value-money" disabled="disabled" value="">
                        <input class="form-control min-value" type="hidden" name="min-value" value="280">
                      </div>
                    </div>
                    <div class="box-number-money">
                      <div class="row mt-30">
                        <div class="col-sm-6 col-6"><span class="font-sm color-brand-1">$0</span></div>
                        <div class="col-sm-6 col-6 text-end"><span class="font-sm color-brand-1">$500</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group mb-20">
                    <ul class="list-checkbox">
                      <li>
                        <label class="cb-container">
                          <input type="checkbox" checked="checked"><span class="text-small">All</span><span class="checkmark"></span>
                        </label><span class="number-item">145</span>
                      </li>
                      <li>
                        <label class="cb-container">
                          <input type="checkbox"><span class="text-small">$0k - $20k</span><span class="checkmark"></span>
                        </label><span class="number-item">56</span>
                      </li>
                      <li>
                        <label class="cb-container">
                          <input type="checkbox"><span class="text-small">$20k - $40k</span><span class="checkmark"></span>
                        </label><span class="number-item">37</span>
                      </li>
                      <li>
                        <label class="cb-container">
                          <input type="checkbox"><span class="text-small">$40k - $60k</span><span class="checkmark"></span>
                        </label><span class="number-item">75</span>
                      </li>
                      <li>
                        <label class="cb-container">
                          <input type="checkbox"><span class="text-small">$60k - $80k</span><span class="checkmark"></span>
                        </label><span class="number-item">98</span>
                      </li>
                      <li>
                        <label class="cb-container">
                          <input type="checkbox"><span class="text-small">$80k - $100k</span><span class="checkmark"></span>
                        </label><span class="number-item">14</span>
                      </li>
                      <li>
                        <label class="cb-container">
                          <input type="checkbox"><span class="text-small">$100k - $200k</span><span class="checkmark"></span>
                        </label><span class="number-item">25</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="filter-block mb-30">
                  <h5 class="medium-heading mb-10">Popular Keyword</h5>
                  <div class="form-group">
                    <ul class="list-checkbox">
                      <li>
                        <label class="cb-container">
                          <input type="checkbox" checked="checked"><span class="text-small">Software</span><span class="checkmark"></span>
                        </label><span class="number-item">24</span>
                      </li>
                      <li>
                        <label class="cb-container">
                          <input type="checkbox"><span class="text-small">Developer</span><span class="checkmark"></span>
                        </label><span class="number-item">45</span>
                      </li>
                      <li>
                        <label class="cb-container">
                          <input type="checkbox"><span class="text-small">Web</span><span class="checkmark"></span>
                        </label><span class="number-item">57</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="filter-block mb-30">
                  <h5 class="medium-heading mb-10">Position</h5>
                  <div class="form-group">
                    <ul class="list-checkbox">
                      <li>
                        <label class="cb-container">
                          <input type="checkbox"><span class="text-small">Senior</span><span class="checkmark"></span>
                        </label><span class="number-item">12</span>
                      </li>
                      <li>
                        <label class="cb-container">
                          <input type="checkbox" checked="checked"><span class="text-small">Junior</span><span class="checkmark"></span>
                        </label><span class="number-item">35</span>
                      </li>
                      <li>
                        <label class="cb-container">
                          <input type="checkbox"><span class="text-small">Fresher</span><span class="checkmark"></span>
                        </label><span class="number-item">56</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="filter-block mb-30">
                  <h5 class="medium-heading mb-10">Experience Level</h5>
                  <div class="form-group">
                    <ul class="list-checkbox">
                      <li>
                        <label class="cb-container">
                          <input type="checkbox"><span class="text-small">Internship</span><span class="checkmark"></span>
                        </label><span class="number-item">56</span>
                      </li>
                      <li>
                        <label class="cb-container">
                          <input type="checkbox"><span class="text-small">Entry Level</span><span class="checkmark"></span>
                        </label><span class="number-item">87</span>
                      </li>
                      <li>
                        <label class="cb-container">
                          <input type="checkbox" checked="checked"><span class="text-small">Associate</span><span class="checkmark"></span>
                        </label><span class="number-item">24</span>
                      </li>
                      <li>
                        <label class="cb-container">
                          <input type="checkbox"><span class="text-small">Mid Level</span><span class="checkmark"></span>
                        </label><span class="number-item">45</span>
                      </li>
                      <li>
                        <label class="cb-container">
                          <input type="checkbox"><span class="text-small">Director</span><span class="checkmark"></span>
                        </label><span class="number-item">76</span>
                      </li>
                      <li>
                        <label class="cb-container">
                          <input type="checkbox"><span class="text-small">Executive</span><span class="checkmark"></span>
                        </label><span class="number-item">89</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="filter-block mb-30">
                  <h5 class="medium-heading mb-10">Onsite/Remote</h5>
                  <div class="form-group">
                    <ul class="list-checkbox">
                      <li>
                        <label class="cb-container">
                          <input type="checkbox"><span class="text-small">On-site</span><span class="checkmark"></span>
                        </label><span class="number-item">12</span>
                      </li>
                      <li>
                        <label class="cb-container">
                          <input type="checkbox" checked="checked"><span class="text-small">Remote</span><span class="checkmark"></span>
                        </label><span class="number-item">65</span>
                      </li>
                      <li>
                        <label class="cb-container">
                          <input type="checkbox"><span class="text-small">Hybrid</span><span class="checkmark"></span>
                        </label><span class="number-item">58</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="filter-block mb-30">
                  <h5 class="medium-heading mb-10">Job Posted</h5>
                  <div class="form-group">
                    <ul class="list-checkbox">
                      <li>
                        <label class="cb-container">
                          <input type="checkbox" checked="checked"><span class="text-small">All</span><span class="checkmark"></span>
                        </label><span class="number-item">78</span>
                      </li>
                      <li>
                        <label class="cb-container">
                          <input type="checkbox"><span class="text-small">1 day</span><span class="checkmark"></span>
                        </label><span class="number-item">65</span>
                      </li>
                      <li>
                        <label class="cb-container">
                          <input type="checkbox"><span class="text-small">7 days</span><span class="checkmark"></span>
                        </label><span class="number-item">24</span>
                      </li>
                      <li>
                        <label class="cb-container">
                          <input type="checkbox"><span class="text-small">30 days</span><span class="checkmark"></span>
                        </label><span class="number-item">56</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="filter-block mb-20">
                  <h5 class="medium-heading mb-15">Job type</h5>
                  <div class="form-group">
                    <ul class="list-checkbox">
                      <li>
                        <label class="cb-container">
                          <input type="checkbox"><span class="text-small">Full Time</span><span class="checkmark"></span>
                        </label><span class="number-item">25</span>
                      </li>
                      <li>
                        <label class="cb-container">
                          <input type="checkbox" checked="checked"><span class="text-small">Part Time</span><span class="checkmark"></span>
                        </label><span class="number-item">64</span>
                      </li>
                      <li>
                        <label class="cb-container">
                          <input type="checkbox"><span class="text-small">Remote Jobs</span><span class="checkmark"></span>
                        </label><span class="number-item">78</span>
                      </li>
                      <li>
                        <label class="cb-container">
                          <input type="checkbox"><span class="text-small">Freelancer</span><span class="checkmark"></span>
                        </label><span class="number-item">97</span>
                      </li>
                    </ul>
                  </div>
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
          <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp" style="visibility: hidden; animation-name: none;">News and Blog</h2>
          <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp" style="visibility: hidden; animation-name: none;">Get the latest news, updates and tips</p>
        </div>
      </div>
      <div class="container">
        <div class="mt-50">
          <div class="box-swiper style-nav-top">
            <div class="swiper-container swiper-group-3 swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
              <div class="swiper-wrapper pb-70 pt-5" id="swiper-wrapper-4c4e7a5674b8f210f" aria-live="off" style="transform: translate3d(-406px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev" role="group" aria-label="3 / 3" data-swiper-slide-index="2" style="width: 376px; margin-right: 30px;">
                  <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn" style="visibility: hidden; animation-name: none;">
                    <div class="text-center card-grid-3-image"><a href="#">
                        <figure><img alt="jobBox" src="assets/imgs/page/homepage1/img-news3.png"></figure></a></div>
                    <div class="card-block-info">
                      <div class="tags mb-15"><a class="btn btn-tag" href="blog-grid.html">News</a></div>
                      <h5><a href="blog-details.html">Interview Question: Why Dont You Have a Degree?</a></h5>
                      <p class="mt-10 color-text-paragraph font-sm">Learn how to respond if an interviewer asks you why you dont have a degree, and read example answers that can help you craft</p>
                      <div class="card-2-bottom mt-20">
                        <div class="row">
                          <div class="col-lg-6 col-6">
                            <div class="d-flex"><img class="img-rounded" src="assets/imgs/page/homepage1/user3.png" alt="jobBox">
                              <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Wiliam Kend</span><br><span class="font-xs color-text-paragraph-2">06 September</span></div>
                            </div>
                          </div>
                          <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">9 mins to read</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 3" data-swiper-slide-index="0" style="width: 376px; margin-right: 30px;">
                  <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn" style="visibility: hidden; animation-name: none;">
                    <div class="text-center card-grid-3-image"><a href="#">
                        <figure><img alt="jobBox" src="assets/imgs/page/homepage1/img-news1.png"></figure></a></div>
                    <div class="card-block-info">
                      <div class="tags mb-15"><a class="btn btn-tag" href="blog-grid.html">News</a></div>
                      <h5><a href="blog-details.html">21 Job Interview Tips: How To Make a Great Impression</a></h5>
                      <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world&amp;rsquo;s most sustainable healthcare company by creating high-quality healthcare products in iconic, sustainable packaging.</p>
                      <div class="card-2-bottom mt-20">
                        <div class="row">
                          <div class="col-lg-6 col-6">
                            <div class="d-flex"><img class="img-rounded" src="assets/imgs/page/homepage1/user1.png" alt="jobBox">
                              <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Sarah Harding</span><br><span class="font-xs color-text-paragraph-2">06 September</span></div>
                            </div>
                          </div>
                          <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">8 mins to read</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 3" data-swiper-slide-index="1" style="width: 376px; margin-right: 30px;">
                  <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn" style="visibility: hidden; animation-name: none;">
                    <div class="text-center card-grid-3-image"><a href="#">
                        <figure><img alt="jobBox" src="assets/imgs/page/homepage1/img-news2.png"></figure></a></div>
                    <div class="card-block-info">
                      <div class="tags mb-15"><a class="btn btn-tag" href="blog-grid.html">Events</a></div>
                      <h5><a href="blog-details.html">39 Strengths and Weaknesses To Discuss in a Job Interview</a></h5>
                      <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world&amp;rsquo;s most sustainable healthcare company by creating high-quality healthcare products in iconic, sustainable packaging.</p>
                      <div class="card-2-bottom mt-20">
                        <div class="row">
                          <div class="col-lg-6 col-6">
                            <div class="d-flex"><img class="img-rounded" src="assets/imgs/page/homepage1/user2.png" alt="jobBox">
                              <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Steven Jobs</span><br><span class="font-xs color-text-paragraph-2">06 September</span></div>
                            </div>
                          </div>
                          <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">6 mins to read</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide swiper-slide-duplicate-prev" role="group" aria-label="3 / 3" data-swiper-slide-index="2" style="width: 376px; margin-right: 30px;">
                  <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn" style="visibility: hidden; animation-name: none;">
                    <div class="text-center card-grid-3-image"><a href="#">
                        <figure><img alt="jobBox" src="assets/imgs/page/homepage1/img-news3.png"></figure></a></div>
                    <div class="card-block-info">
                      <div class="tags mb-15"><a class="btn btn-tag" href="blog-grid.html">News</a></div>
                      <h5><a href="blog-details.html">Interview Question: Why Dont You Have a Degree?</a></h5>
                      <p class="mt-10 color-text-paragraph font-sm">Learn how to respond if an interviewer asks you why you dont have a degree, and read example answers that can help you craft</p>
                      <div class="card-2-bottom mt-20">
                        <div class="row">
                          <div class="col-lg-6 col-6">
                            <div class="d-flex"><img class="img-rounded" src="assets/imgs/page/homepage1/user3.png" alt="jobBox">
                              <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Wiliam Kend</span><br><span class="font-xs color-text-paragraph-2">06 September</span></div>
                            </div>
                          </div>
                          <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">9 mins to read</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" role="group" aria-label="1 / 3" data-swiper-slide-index="0" style="width: 376px; margin-right: 30px;">
                  <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn" style="visibility: hidden; animation-name: none;">
                    <div class="text-center card-grid-3-image"><a href="#">
                        <figure><img alt="jobBox" src="assets/imgs/page/homepage1/img-news1.png"></figure></a></div>
                    <div class="card-block-info">
                      <div class="tags mb-15"><a class="btn btn-tag" href="blog-grid.html">News</a></div>
                      <h5><a href="blog-details.html">21 Job Interview Tips: How To Make a Great Impression</a></h5>
                      <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world&amp;rsquo;s most sustainable healthcare company by creating high-quality healthcare products in iconic, sustainable packaging.</p>
                      <div class="card-2-bottom mt-20">
                        <div class="row">
                          <div class="col-lg-6 col-6">
                            <div class="d-flex"><img class="img-rounded" src="assets/imgs/page/homepage1/user1.png" alt="jobBox">
                              <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Sarah Harding</span><br><span class="font-xs color-text-paragraph-2">06 September</span></div>
                            </div>
                          </div>
                          <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">8 mins to read</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-4c4e7a5674b8f210f"></div>
            <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-4c4e7a5674b8f210f"></div>
          </div>
          <div class="text-center"><a class="btn btn-brand-1 btn-icon-load mt--30 hover-up" href="blog-grid.html">Load More Posts</a></div>
        </div>
      </div>
    </section>
    <section class="section-box mt-50 mb-20">
      <div class="container">
        <div class="box-newsletter">
          <div class="row">
            <div class="col-xl-3 col-12 text-center d-none d-xl-block"><img src="assets/imgs/template/newsletter-left.png" alt="joxBox"></div>
            <div class="col-lg-12 col-xl-6 col-12">
              <h2 class="text-md-newsletter text-center">New Things Will Always<br> Update Regularly</h2>
              <div class="box-form-newsletter mt-40">
                <form class="form-newsletter">
                  <input class="input-newsletter" type="text" value="" placeholder="Enter your email here">
                  <button class="btn btn-default font-heading icon-send-letter">Subscribe</button>
                </form>
              </div>
            </div>
            <div class="col-xl-3 col-12 text-center d-none d-xl-block"><img src="assets/imgs/template/newsletter-right.png" alt="joxBox"></div>
          </div>
        </div>
      </div>
    </section>
  </main>


@endsection
