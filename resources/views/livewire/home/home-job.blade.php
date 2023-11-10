<div>
    <section class="relative table w-full py-36 bg-[url('../../assets/images/hero/bg.html')] bg-top bg-no-repeat bg-cover">
        <div class="absolute inset-0 bg-emerald-900/90"></div>
        <div class="container">
            <div class="grid grid-cols-1 text-center mt-10">
                <h3 class="md:text-3xl text-2xl md:leading-snug tracking-wide leading-snug font-medium text-white">Annuaire des emplois </h3>
            </div><!--end grid-->
        </div><!--end container-->
    </section>
    <section class="relative md:py-24 py-16">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                <div class="lg:col-span-4 md:col-span-6">
                    <div class="shadow dark:shadow-gray-700 p-6 rounded-md bg-white dark:bg-slate-900 sticky top-20">

                            <div class="grid grid-cols-1 gap-3">
                                <div>
                                    <label for="searchname" class="font-semibold">Rechercher un job </label>
                                    <div class="relative mt-2">
                                        <i class="uil uil-search text-lg absolute top-[5px] start-3"></i>
                                        <input wire:model="search"  type="text" class="form-input border border-slate-100 dark:border-slate-800 ps-10" placeholder="Rechercher par titre du job">
                                    </div>
                                </div>

                                <div>
                                    <label class="font-semibold">Categories</label>
                                    <select wire:model="family_id" class="form-select form-input border border-slate-100 dark:border-slate-800 block w-full mt-1">
                                        <option >Sélectionner une catégorie</option>
                                        @foreach ($allCategories as $categorie)
                                        <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div>
                                    <label class="font-semibold">Lieu </label>
                                    <select wire:model="lieu_id" class="form-select form-input border border-slate-100 dark:border-slate-800 block w-full mt-1">
                                        <option >Sélectionner un lieu </option>
                                        @foreach ($allLieus as $lieu)
                                        <option value="{{$lieu->id}}">{{$lieu->name}}</option>
                                        @endforeach

                                    </select>
                                </div>

                                <div>
                                    <label class="font-semibold">Contrat</label>
                                    <div class="block mt-2">
                                        @foreach ($allContrats as $contrat)
                                        <div class="flex justify-between">
                                            <div class="inline-flex items-center mb-0">
                                                <input type="radio" class="form-radio border-gray-200 dark:border-gray-800 text-emerald-600 focus:border-emerald-300 focus:ring focus:ring-offset-0 focus:ring-emerald-200 focus:ring-opacity-50 me-2" wire:model="contrat_id" value="{{$contrat->id}}">
                                                <label class="form-radio-label text-slate-400" for="fulltime">{{$contrat->name}}</label>
                                            </div>

                                            <span class="bg-emerald-600/10 text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full h-5"></span>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>



                                <div>

                                    <button  wire:click="renitialise" class="btn bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white rounded-md w-full">Rénitialiser</button>
                                </div>
                            </div>

                    </div>
                </div><!--end col-->

                <div class="lg:col-span-8 md:col-span-6">
                    <div class="grid grid-cols-1 gap-[30px]">

                        @forelse ($allJobs as  $job)
                        <div class="group relative overflow-hidden bg-white dark:bg-slate-900 shadow hover:shadow-md dark:shadow-gray-700 dark:hover:shadow-gray-700 hover:-mt-2 rounded-md transition-all duration-500 h-fit">
                            <div class="p-6">
                                <div class="flex items-center">
                                    <div class="w-14 h-14 min-w-[56px] flex items-center justify-center bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
                                        <img src="{{asset('images/offre-emploo.jpg')}}" class="h-8 w-8" alt="">
                                    </div>

                                    <div class="ms-3">
                                        <a href="{{route('detail.emploi', $job->slug)}}" class="inline-block text-[16px] font-semibold hover:text-emerald-600 transition-all duration-500 me-1">{{$job->title}}</a>
                                        <span class="inline-block text-sm text-slate-400">{{$job->created_at->diffForHumans()}}</span>
                                        <div>
                                            <span class="bg-emerald-600/10 inline-block text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">{{$job->contrat->name}}</span>
                                            <span class="text-sm font-medium inline-block me-1">Employeur: <span class="text-slate-400">{{$job->employeur}}</span></span>

                                        </div>
                                    </div>
                                </div>

                                <p class="text-slate-400 py-3">{{$job->mini_description}}.</p>

                                <div>
                                    {{-- <span class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">HTML</span>
                                    <span class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">CSS</span>
                                    <span class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">SASS</span>
                                    <span class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">SCSS</span>
                                    <span class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">Photoshop</span>
                                    <span class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">Graphics</span>
                                    <span class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">Bootstrap</span> --}}
                                </div>
                            </div>

                            <div class="px-6 py-2 bg-slate-50 dark:bg-slate-800 lg:flex justify-between items-center">
                                <div class="lg:inline-block flex justify-between">
                                    <span class="inline-block me-1 font-semibold"><i class="mdi mdi-check-decagram mdi-18px text-blue-500 me-1"></i>Verifiée</span>
                                    <ul class="list-none inline-block me-1 text-yellow-400 space-x-0.5">
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                    </ul>
                                    <span class="inline-block me-1 text-slate-400"><i class="uil uil-map-marker text-[18px] text-slate-900 dark:text-white me-1"></i>{{$job->lieu->name}}</span>
                                </div>

                                <a href="{{route('detail.emploi', $job->slug)}}" class="btn btn-sm rounded-md bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white md:ms-2 w-full lg:w-auto lg:mt-0 mt-4">Consulter</a>
                            </div>

                            <a href="#" class="btn btn-icon rounded-full bg-emerald-600/5 hover:bg-emerald-600 border-emerald-600/10 hover:border-emerald-600 text-emerald-600 hover:text-white absolute top-0 end-0 m-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark h-4 w-4"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg></a>
                        </div><!--end content-->
                        @empty
                        <span>Aucune offre trouvé désole</span>
                        @endforelse




                    </div><!--end grid-->

                    {{-- <div class="grid md:grid-cols-12 grid-cols-1 mt-8">
                        <div class="md:col-span-12 text-center">
                            <nav aria-label="Page navigation example">
                                <ul class="inline-flex items-center -space-x-px">
                                    <li>
                                        <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 bg-white dark:bg-slate-900 rounded-s-3xl hover:text-white border border-gray-100 dark:border-gray-800 hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600">
                                            <i class="uil uil-angle-left text-[20px] rtl:rotate-180 rtl:-mt-1"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600">1</a>
                                    </li>
                                    <li>
                                        <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600">2</a>
                                    </li>
                                    <li>
                                        <a href="#" aria-current="page" class="z-10 w-[40px] h-[40px] inline-flex justify-center items-center text-white bg-emerald-600 border border-emerald-600">3</a>
                                    </li>
                                    <li>
                                        <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600">4</a>
                                    </li>
                                    <li>
                                        <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600">5</a>
                                    </li>
                                    <li>
                                        <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 bg-white dark:bg-slate-900 rounded-e-3xl hover:text-white border border-gray-100 dark:border-gray-800 hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600">
                                            <i class="uil uil-angle-right text-[20px] rtl:rotate-180 rtl:-mt-1"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div><!--end col-->
                    </div> --}}
                    <!--end grid-->
                </div>
            </div>
        </div><!--end container-->

        {{-- <div class="container md:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Here's why you'll love it Jobstack</h3>

                <p class="text-slate-400 max-w-xl mx-auto">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
            </div><!--end grid-->

            <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                <div class="group p-6 shadow dark:shadow-gray-700 rounded-md bg-white hover:bg-emerald-600/5 dark:bg-slate-900 dark:hover:bg-emerald-600/10 text-center transition-all duration-500">
                    <div class="w-16 h-16 flex items-center justify-center mx-auto bg-emerald-600/5 group-hover:bg-emerald-600 dark:bg-emerald-600/10 dark:group-hover:bg-emerald-600 shadow dark:shadow-gray-700 rounded-lg transition-all duration-500">
                        <i class="uil uil-phone text-[30px] text-emerald-600 group-hover:text-white"></i>
                    </div>

                    <div class="mt-4">
                        <a href="#" class="text-lg font-semibold hover:text-emerald-600 transition-all duration-500">24/7 Support</a>

                        <p class="text-slate-400 mt-3 mb-2">Many desktop publishing now use and a search for job.</p>

                        <a href="#" class="hover:text-emerald-600 font-medium transition-all duration-500">Read More <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div><!--end content-->

                <div class="group p-6 shadow dark:shadow-gray-700 rounded-md bg-white hover:bg-emerald-600/5 dark:bg-slate-900 dark:hover:bg-emerald-600/10 text-center transition-all duration-500">
                    <div class="w-16 h-16 flex items-center justify-center mx-auto bg-emerald-600/5 group-hover:bg-emerald-600 dark:bg-emerald-600/10 dark:group-hover:bg-emerald-600 shadow dark:shadow-gray-700 rounded-lg transition-all duration-500">
                        <i class="uil uil-atom text-[30px] text-emerald-600 group-hover:text-white"></i>
                    </div>

                    <div class="mt-4">
                        <a href="#" class="text-lg font-semibold hover:text-emerald-600 transition-all duration-500">Tech &amp; Startup Jobs</a>

                        <p class="text-slate-400 mt-3 mb-2">Many desktop publishing now use and a search for job.</p>

                        <a href="#" class="hover:text-emerald-600 font-medium transition-all duration-500">Read More <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div><!--end content-->

                <div class="group p-6 shadow dark:shadow-gray-700 rounded-md bg-white hover:bg-emerald-600/5 dark:bg-slate-900 dark:hover:bg-emerald-600/10 text-center transition-all duration-500">
                    <div class="w-16 h-16 flex items-center justify-center mx-auto bg-emerald-600/5 group-hover:bg-emerald-600 dark:bg-emerald-600/10 dark:group-hover:bg-emerald-600 shadow dark:shadow-gray-700 rounded-lg transition-all duration-500">
                        <i class="uil uil-user-arrows text-[30px] text-emerald-600 group-hover:text-white"></i>
                    </div>

                    <div class="mt-4">
                        <a href="#" class="text-lg font-semibold hover:text-emerald-600 transition-all duration-500">Quick &amp; Easy</a>

                        <p class="text-slate-400 mt-3 mb-2">Many desktop publishing now use and a search for job.</p>

                        <a href="#" class="hover:text-emerald-600 font-medium transition-all duration-500">Read More <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div><!--end content-->

                <div class="group p-6 shadow dark:shadow-gray-700 rounded-md bg-white hover:bg-emerald-600/5 dark:bg-slate-900 dark:hover:bg-emerald-600/10 text-center transition-all duration-500">
                    <div class="w-16 h-16 flex items-center justify-center mx-auto bg-emerald-600/5 group-hover:bg-emerald-600 dark:bg-emerald-600/10 dark:group-hover:bg-emerald-600 shadow dark:shadow-gray-700 rounded-lg transition-all duration-500">
                        <i class="uil uil-hourglass text-[30px] text-emerald-600 group-hover:text-white"></i>
                    </div>

                    <div class="mt-4">
                        <a href="#" class="text-lg font-semibold hover:text-emerald-600 transition-all duration-500">Save Time</a>

                        <p class="text-slate-400 mt-3 mb-2">Many desktop publishing now use and a search for job.</p>

                        <a href="#" class="hover:text-emerald-600 font-medium transition-all duration-500">Read More <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div><!--end content-->
            </div><!--end grid-->
        </div>
         --}}
        <!--end container-->

        {{-- <div class="container-fluid md:mt-24 mt-16">
            <div class="container">
                <div class="grid grid-cols-1">
                    <div class="relative overflow-hidden lg:px-8 px-6 py-10 rounded-xl shadow-lg dark:shadow-gray-700">
                        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                            <div class="lg:col-span-8 md:col-span-7">
                                <div class="ltr:md:text-left rtl:md:text-right text-center relative z-1">
                                    <h3 class="text-2xl font-semibold text-black dark:text-white mb-4">Explore a job now!</h3>
                                    <p class="text-slate-400 max-w-xl">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
                                </div>
                            </div><!--end col-->

                            <div class="lg:col-span-4 md:col-span-5">
                                <div class="ltr:text-right rtl:text-left relative z-1">
                                    <a href="employer-detail.html" class="btn bg-emerald-600 hover:bg-emerald-700 border-emerald-600 dark:border-emerald-600 text-white rounded-md">Apply Now</a>
                                    <a href="aboutus.html" class="btn bg-emerald-600/5 hover:bg-emerald-600 border-emerald-600/10 hover:border-emerald-600 text-emerald-600 hover:text-white rounded-md ms-2">Learn More</a>
                                </div>
                            </div><!--end col-->
                        </div><!--end grid-->

                        <div class="absolute -top-5 -start-5">
                            <div class="uil uil-envelope lg:text-[150px] text-7xl text-black/5 dark:text-white/5 ltr:-rotate-45 rtl:rotate-45"></div>
                        </div>

                        <div class="absolute -bottom-5 -end-5">
                            <div class="uil uil-pen lg:text-[150px] text-7xl text-black/5 dark:text-white/5 rtl:-rotate-90"></div>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </div>
         --}}
        <!--end container-->
    </section>
</div>
