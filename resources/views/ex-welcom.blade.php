@extends('layout.app')
@section('title', 'Bienvenue sur carriere pro plus ')
@section('content')
        <!-- Start Hero -->
        <section class="relative flex py-36 md:h-screen h-auto items-center ">

            <div class="absolute inset-0 "></div>
            <div class="container z-1">
                <div class="grid grid-cols-1 text-center mt-10 relative">
                    <h4 class="lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 font-bold text-black"> Bienvenue Sur Carriere Pro Plus</h4>
                    <p class="text-black/50 text-lg max-w-xl mx-auto">À la recherche d'un nouveau Job, Stage, Formation , Conseil Pro, Curriculum vitæ , Lettre de motivation,vous êtes à la bonne adresse Carrière proplus vous accompagne vers vos objectifs de vie..</p>




                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Hero -->

        <!-- Start -->
        <section class="relative md:py-24 py-16">
            <div class="container">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Comment ça marche ?</h3>

                    <p class="text-slate-400 max-w-xl mx-auto">Avec carriere proplus plus besoin de vous fatiguer, postuler rapidement à des offres sans plus attendre</p>
                </div><!--end grid-->

                <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-6 gap-[30px]">
                    <div class="p-6 hover:shadow-xl hover:shadow-gray-100 dark:hover:shadow-gray-800 transition duration-500 rounded-2xl mt-6 text-center">
                        <div class="w-14 h-14 bg-emerald-600/5 text-emerald-600 rounded-xl text-2xl flex align-middle justify-center items-center mx-auto shadow-sm dark:shadow-gray-800">
                            <i class="uil uil-airplay"></i>
                        </div>

                        <div class="content mt-7">
                            <a href="#" class="title h5 text-lg font-semibold hover:text-emerald-600">Créer votre compte </a>
                            <p class="text-slate-400 mt-3">Inscrivez vous et recevez en live les dernieres offre d'emploi  </p>

                            <div class="mt-5">
                                <a href="#" class="btn btn-link text-emerald-600 hover:text-emerald-600 after:bg-emerald-600 duration-500 ease-in-out">Commencer <i class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!--end content-->

                    <div class="p-6 shadow-xl shadow-gray-100 dark:shadow-gray-800 transition duration-500 rounded-2xl mt-6 text-center">
                        <div class="w-14 h-14 bg-emerald-600/5 text-emerald-600 rounded-xl text-2xl flex align-middle justify-center items-center mx-auto shadow-sm dark:shadow-gray-800">
                            <i class="uil uil-shutter"></i>
                        </div>

                        <div class="content mt-7">
                            <a href="#" class="title h5 text-lg font-semibold hover:text-emerald-600">Completer votre profil </a>
                            <p class="text-slate-400 mt-3">Actualiser votre profil et partager votre profile cv au recruteur potentiel </p>

                            <div class="mt-5">
                                <a href="#" class="btn btn-link text-emerald-600 hover:text-emerald-600 after:bg-emerald-600 duration-500 ease-in-out">Je Complete mon profil  <i class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!--end content-->

                    <div class="p-6 hover:shadow-xl hover:shadow-gray-100 dark:hover:shadow-gray-800 transition duration-500 rounded-2xl mt-6 text-center">
                        <div class="w-14 h-14 bg-emerald-600/5 text-emerald-600 rounded-xl text-2xl flex align-middle justify-center items-center mx-auto shadow-sm dark:shadow-gray-800">
                            <i class="uil uil-camera-plus"></i>
                        </div>

                        <div class="content mt-7">
                            <a href="#" class="title h5 text-lg font-semibold hover:text-emerald-600">Postuler à un job  </a>
                            <p class="text-slate-400 mt-3">Créer un cv moderne et une lettre de motivation grace à nos cvs  postuler</p>

                            <div class="mt-5">
                                <a href="#" class="btn btn-link text-emerald-600 hover:text-emerald-600 after:bg-emerald-600 duration-500 ease-in-out">Me faire assister<i class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!--end content-->
                </div><!--end grid-->
            </div><!--end container-->

            <div class="container md:mt-24 mt-16">
                <div class="grid md:grid-cols-12 grid-cols-1 pb-8 items-end">
                    <div class="lg:col-span-8 md:col-span-6 ltr:md:text-left rtl:md:text-right text-center">
                        <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Emploi par  Categories</h3>
                        <p class="text-slate-400 max-w-xl">Recherchez les opportuinités en fonction de votre domaine de compétences </p>
                    </div>

                    <div class="lg:col-span-4 md:col-span-6 ltr:md:text-right rtl:md:text-left hidden md:block">
                        <a href="#" class="btn btn-link text-slate-400 hover:text-emerald-600 after:bg-emerald-600 duration-500 ease-in-out">Toutes les catégories <i class="uil uil-arrow-right align-middle"></i></a>
                    </div>
                </div>

                <div class="grid xl:grid-cols-5 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                    @foreach ($jobcategory as $categorie)
                    <div class="group p-4 rounded-md shadow dark:shadow-gray-700 bg-slate-50 dark:bg-slate-800 hover:bg-emerald-600 dark:hover:bg-emerald-600 transition-all duration-500">
                        <h5 class="text-lg font-semibold group-hover:text-white">{{Str::limit($categorie->name, 10)}}</h5>
                        <span class="block text-slate-400 group-hover:text-white/50 text-sm mt-1">{{count($categorie->jobs)}} Disponible</span>

                        <div class="mt-2">
                            <a href="{{route('categorie.job', $categorie->id)}}" class="text-emerald-600 dark:text-white/80 group-hover:text-white font-medium">Explorer <i class="uil uil-arrow-right"></i></a>
                        </div>
                    </div><!--end content-->
                    @endforeach


                </div><!--end grid-->


            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <section class="relative bg-slate-50 dark:bg-slate-800 md:py-24 py-16">
            <div class="container">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Emploi récents </h3>

                    <p class="text-slate-400 max-w-xl mx-auto">Liste des emplois recemments ajoutés </p>
                </div><!--end grid-->


                <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                    @foreach ($joball as  $job)
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

                            <p class="text-slate-400 py-3">{{$job->mini_description}}</p>

                            {{-- <div>
                                <span class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">HTML</span>
                                <span class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">CSS</span>
                                <span class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">SASS</span>
                                <span class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">SCSS</span>
                                <span class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">Photoshop</span>
                                <span class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">Graphics</span>
                                <span class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">Bootstrap</span>
                            </div> --}}
                        </div>

                        <div class="px-6 py-2 bg-slate-50 dark:bg-slate-800 lg:flex justify-between items-center">
                            <div class="lg:inline-block flex justify-between">
                                <span class="inline-block me-1 font-semibold"><i class="mdi mdi-check-decagram mdi-18px text-blue-500 me-1"></i>Vérifiée</span>

                                <span class="inline-block me-1 text-slate-400"><i class="uil uil-map-marker text-[18px] text-slate-900 dark:text-white me-1"></i>{{$job->lieu->name}}</span>

                                <span class="inline-block me-1 text-slate-400"><i class="uil uil-eye"></i> {{$job->view}}</span>
                            </div>

                            <a href="{{route('detail.emploi', $job->slug)}}" class="btn btn-sm rounded-md bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white md:ms-2 w-full lg:w-auto lg:mt-0 mt-4">Consulter</a>
                        </div>

                        <a href="{{route('detail.emploi', $job->slug)}}" class="btn btn-icon rounded-full bg-emerald-600/5 hover:bg-emerald-600 border-emerald-600/10 hover:border-emerald-600 text-emerald-600 hover:text-white absolute top-0 end-0 m-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark h-4 w-4"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg></a>
                    </div><!--end content-->
                    @endforeach

                </div><!--end grid-->

                <div class="grid md:grid-cols-12 grid-cols-1 mt-8">
                    <div class="md:col-span-12 text-center">
                        <a href="{{route('home.job')}}" class="btn btn-link text-slate-400 hover:text-emerald-600 after:bg-emerald-600 duration-500 ease-in-out">Consulter plus  <i class="uil uil-arrow-right align-middle"></i></a>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section>

            @livewire('home.candidature')


        <div class="container md:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">D'autres conténus sur carriere pro plus </h3>

                <p class="text-slate-400 max-w-xl mx-auto">Besoin de relookage de cv , une lettre de motivation , une assisante prenez contact avec l'équipe carriere pro plus.</p>
            </div><!--end grid-->

            <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                <div class="group p-6 shadow dark:shadow-gray-700 rounded-md bg-white hover:bg-emerald-600/5 dark:bg-slate-900 dark:hover:bg-emerald-600/10 text-center transition-all duration-500">
                    <div class="w-16 h-16 flex items-center justify-center mx-auto bg-emerald-600/5 group-hover:bg-emerald-600 dark:bg-emerald-600/10 dark:group-hover:bg-emerald-600 shadow dark:shadow-gray-700 rounded-lg transition-all duration-500">
                        <i class="uil uil-phone text-[30px] text-emerald-600 group-hover:text-white"></i>
                    </div>

                    <div class="mt-4">
                        <a href="#" class="text-lg font-semibold hover:text-emerald-600 transition-all duration-500">24/7 Support</a>

                        <p class="text-slate-400 mt-3 mb-2">Besoin d'une assistante personnelle contactez-nous.</p>

                        <a href="#" class="hover:text-emerald-600 font-medium transition-all duration-500">Contact <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div><!--end content-->

                <div class="group p-6 shadow dark:shadow-gray-700 rounded-md bg-white hover:bg-emerald-600/5 dark:bg-slate-900 dark:hover:bg-emerald-600/10 text-center transition-all duration-500">
                    <div class="w-16 h-16 flex items-center justify-center mx-auto bg-emerald-600/5 group-hover:bg-emerald-600 dark:bg-emerald-600/10 dark:group-hover:bg-emerald-600 shadow dark:shadow-gray-700 rounded-lg transition-all duration-500">
                        <i class="uil uil-atom text-[30px] text-emerald-600 group-hover:text-white"></i>
                    </div>

                    <div class="mt-4">
                        <a href="#" class="text-lg font-semibold hover:text-emerald-600 transition-all duration-500">Rubrique Cvs</a>

                        <p class="text-slate-400 mt-3 mb-2">Consulter nos  catalogue de cvs gratuits.</p>

                        <a href="#" class="hover:text-emerald-600 font-medium transition-all duration-500">Consulter <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div><!--end content-->

                <div class="group p-6 shadow dark:shadow-gray-700 rounded-md bg-white hover:bg-emerald-600/5 dark:bg-slate-900 dark:hover:bg-emerald-600/10 text-center transition-all duration-500">
                    <div class="w-16 h-16 flex items-center justify-center mx-auto bg-emerald-600/5 group-hover:bg-emerald-600 dark:bg-emerald-600/10 dark:group-hover:bg-emerald-600 shadow dark:shadow-gray-700 rounded-lg transition-all duration-500">
                        <i class="uil uil-user-arrows text-[30px] text-emerald-600 group-hover:text-white"></i>
                    </div>

                    <div class="mt-4">
                        <a href="#" class="text-lg font-semibold hover:text-emerald-600 transition-all duration-500">Rubriques lettre de motivation </a>

                        <p class="text-slate-400 mt-3 mb-2">Consulter nos lettre de motivation prés à emploi .</p>

                        <a href="#" class="hover:text-emerald-600 font-medium transition-all duration-500">Consulter <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div><!--end content-->

                <div class="group p-6 shadow dark:shadow-gray-700 rounded-md bg-white hover:bg-emerald-600/5 dark:bg-slate-900 dark:hover:bg-emerald-600/10 text-center transition-all duration-500">
                    <div class="w-16 h-16 flex items-center justify-center mx-auto bg-emerald-600/5 group-hover:bg-emerald-600 dark:bg-emerald-600/10 dark:group-hover:bg-emerald-600 shadow dark:shadow-gray-700 rounded-lg transition-all duration-500">
                        <i class="uil uil-hourglass text-[30px] text-emerald-600 group-hover:text-white"></i>
                    </div>

                    <div class="mt-4">
                        <a href="#" class="text-lg font-semibold hover:text-emerald-600 transition-all duration-500">Nos Formations</a>

                        <p class="text-slate-400 mt-3 mb-2">Consulter nos formations en informatique, bureautique et à venir  .</p>

                        <a href="#" class="hover:text-emerald-600 font-medium transition-all duration-500">Consulter<i class="uil uil-arrow-right"></i></a>
                    </div>
                </div><!--end content-->
            </div><!--end grid-->
        </div>

        <div class="container md:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Consuler nos article, conseils... </h3>

                <p class="text-slate-400 max-w-xl mx-auto">Restez informer des dernieres actualités sur les emplois, concours, conseils professionnels .</p>
            </div><!--end grid-->

            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">

               @foreach ($articleRessource as $article)


                <div class="group relative overflow-hidden bg-white dark:bg-slate-900 rounded-md shadow dark:shadow-gray-700">
                    <div class="relative overflow-hidden">
                        <img src="{{asset('blog/images/'.$article->image)}}" class="scale-110 group-hover:scale-100 transition-all duration-500" alt="">
                    </div>

                    <div class="relative p-6">
                        <div class="absolute start-6 -top-4">
                            <span class="bg-emerald-600 text-white text-[12px] px-2.5 py-1 font-semibold rounded-full h-5">{{$article->category->name}}</span>
                        </div>

                        <div class="">
                            <div class="flex mb-4">
                                <span class="text-slate-400 text-sm"><i class="uil uil-calendar-alt text-slate-900 dark:text-white me-2"></i>{{$article->created_at->diffForHumans()}}</span>
                                <span class="text-slate-400 text-sm ms-3"><i class="uil uil-clock text-slate-900 dark:text-white me-2"></i>4 minutes de lecture</span>
                            </div>

                            <a href="{{route('detail.article', $article->slug)}}" class="title text-lg font-semibold hover:text-emerald-600 duration-500 ease-in-out">{{Str::limit($article->title, 100)}}</a>

                            <div class="flex justify-between items-center mt-3">
                                <a href="{{route('detail.article', $article->slug)}}" class="btn btn-link hover:text-emerald-600 after:bg-emerald-600 duration-500 ease-in-out">Consulter <i class="uil uil-arrow-right"></i></a>
                                <span class="text-slate-400 text-sm"><a href="#" class="text-slate-900 dark:text-white hover:text-emerald-600 dark:hover:text-emerald-600 font-medium">by carriereproplus</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div><!--end grid-->
        </div>


        <div class="container-fluid md:mt-24 mt-16">
            <div class="container">
                <div class="grid grid-cols-1">
                    <div class="relative overflow-hidden lg:px-8 px-6 py-10 rounded-xl shadow-lg dark:shadow-gray-700">
                        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                            <div class="lg:col-span-8 md:col-span-7">
                                <div class="ltr:md:text-left rtl:md:text-right text-center relative z-1">
                                    <h3 class="text-2xl font-semibold text-black dark:text-white mb-4">Consulter Plus d'offre</h3>
                                    <p class="text-slate-400 max-w-xl">Avec carriereproplus decrochez votre premier job, stage, consultance, contrat en freelance.</p>
                                </div>
                            </div><!--end col-->

                            <div class="lg:col-span-4 md:col-span-5">
                                <div class="ltr:text-right rtl:text-left relative z-1">
                                    <a href="{{route('home.job')}}" class="btn bg-emerald-600 hover:bg-emerald-700 border-emerald-600 dark:border-emerald-600 text-white rounded-md">Consulter</a>
                                    <a href="#" class="btn bg-emerald-600/5 hover:bg-emerald-600 border-emerald-600/10 hover:border-emerald-600 text-emerald-600 hover:text-white rounded-md ms-2">Se faire assister</a>
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





     @endsection
