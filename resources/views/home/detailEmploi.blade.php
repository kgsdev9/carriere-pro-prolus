@extends('layout.app')
@section('title', $detail->title)
@section('content')


<section class="relative table w-full py-36 bg-[url('../../assets/images/hero/bg.html')] bg-top bg-no-repeat bg-cover">
    <div class="absolute inset-0 bg-emerald-900/90"></div>
    <div class="container">
        <div class="grid grid-cols-1 text-center mt-10">
            <h3 class="md:text-3xl text-2xl md:leading-snug tracking-wide leading-snug font-medium text-white">{{$detail->title }}</h3>

        </div><!--end grid-->
    </div><!--end container-->

    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="breadcrumb tracking-[0.5px] breadcrumb-light mb-0 inline-block">
           <li class="inline breadcrumb-item text-[15px] font-semibold duration-500 ease-in-out text-white/50 hover:text-white"><a href="#">Carriere proplus </a></li>
           <li class="inline breadcrumb-item text-[15px] font-semibold duration-500 ease-in-out text-white/50 hover:text-white"><a href="#">Emploi </a></li>
            <li class="inline breadcrumb-item text-[15px] font-semibold duration-500 ease-in-out text-white" aria-current="page">Job Detail</li>
            <li class="inline breadcrumb-item text-[15px] font-semibold duration-500 ease-in-out text-white/50 hover:text-white"><a href="#"> <i class="uil uil-eye"></i>  {{$detail->view}} </a></li>
        </ul>
    </div>
</section>

<section class="relative md:py-24 py-16">
    <div class="container">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">


            <div class="lg:col-span-8 md:col-span-6">
                <h5 class="text-lg font-semibold">Job Description:</h5>
                <p>{!! $detail->description !!}</p>


                <div class="mt-5">
                    <a href="#" class="btn rounded-md bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white md:ms-2 w-full md:w-auto">Partager</a>

                    <li class="flex justify-between mt-3">

                        <ul class="list-none ltr:text-right rtl:text-left space-x-0.5">
                            <li class="inline">

                                <button class="btn btn-icon btn-sm border-2 border-gray-200 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 hover:text-white dark:text-white text-slate-400 share-page" data-url="{{$currentPage}}">
                                    <i class="uil uil-whatsapp" title="WhatsApp"></i>
                                </button>


                            </li>

                                 <li class="inline">
                                    <button class="btn btn-icon btn-sm border-2 border-gray-200 dark:border-gray-700
                                    rounded-md hover:border-emerald-600 dark:hover:border-emerald-600
                                    hover:bg-emerald-600 dark:hover:bg-emerald-600 hover:text-white
                                    dark:text-white text-slate-400 share-facebook" data-url="{{$currentPage}}"> <i class="uil uil-facebook-f align-middle" title="facebook"></i></button>
                                </li>




                            <li class="inline">
                              <button class="btn btn-icon btn-sm border-2 border-gray-200 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 hover:text-white dark:text-white text-slate-400 share-telegram" data-url="{{$currentPage}}">
                                <i class="uil uil-telegram align-middle"></i>

                              </button>

                            </li>


                            <li class="inline">
                                <button class="btn btn-icon btn-sm border-2 border-gray-200 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 hover:text-white dark:text-white text-slate-400 share-linkdln">
                                    <i class="uil uil-linkedin" title="Linkedin"></i>
                                </button>
                            </li>


                        </ul><!--end icon-->
                    </li>
                </div>


            </div><!--end col-->

            <div class="lg:col-span-4 md:col-span-6">
                <div class="shadow dark:shadow-gray-700 rounded-md bg-white dark:bg-slate-900 sticky top-20">
                    <div class="p-6">
                        <h5 class="text-lg font-semibold">Job Information</h5>
                    </div>
                    <div class="p-6 border-t border-slate-100 dark:border-t-gray-700">
                        <ul class="list-none">
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check h-5 w-5"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>

                                <div class="ms-4">
                                    <p class="font-medium">Entreprise :</p>
                                    <span class="text-emerald-600 font-medium text-sm">{{$detail->employeur}}</span>
                                </div>
                            </li>

                            <li class="flex items-center mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin h-5 w-5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>

                                <div class="ms-4">
                                    <p class="font-medium">Location:</p>
                                    <span class="text-emerald-600 font-medium text-sm">{{$detail->lieu->name}}</span>
                                </div>
                            </li>

                            <li class="flex items-center mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-monitor h-5 w-5"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>

                                <div class="ms-4">
                                    <p class="font-medium">Job Type:</p>
                                    <span class="text-emerald-600 font-medium text-sm">{{$detail->family->name}}</span>
                                </div>
                            </li>

                            <li class="flex items-center mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase h-5 w-5"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>

                                <div class="ms-4">
                                    <p class="font-medium">Contrat :</p>
                                    <span class="text-emerald-600 font-medium text-sm">{{$detail->contrat->name}}</span>
                                </div>
                            </li>





                            <li class="flex items-center mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock h-5 w-5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>

                                <div class="ms-4">
                                    <p class="font-medium">Date d'ajout :</p>
                                    <span class="text-emerald-600 font-medium text-sm">{{$detail->created_at}}</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container lg:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Catégories similaires </h3>


        </div><!--end grid-->

        <div class="grid lg:grid-cols-3 md:grid-cols-2 mt-8 gap-[30px]">

            @foreach ($similarjob as $similaire)
            <div class="group shadow dark:shadow-gray-700 p-6 rounded-md bg-white dark:bg-slate-900">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-14 h-14 flex items-center justify-center bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
                            <img src="{{asset('assets/images/company/facebook-logo.png')}}" class="h-8 w-8" alt="">
                        </div>

                        <div class="ms-3">
                            <a href="{{route('detail.emploi', $similaire->slug)}}" class="block text-[16px] font-semibold hover:text-emerald-600 transition-all duration-500">{{$similaire->employeur}}</a>
                            <span class="block text-sm text-slate-400">{{$similaire->created_at->diffForHumans()}}</span>
                        </div>
                    </div>

                    <span class="bg-emerald-600/10 group-hover:bg-emerald-600 inline-block text-emerald-600 group-hover:text-white text-xs px-2.5 py-0.5 font-semibold rounded-full transition-all duration-500">{{$similaire->contrat->name}}</span>
                </div>

                <div class="mt-6">
                    <a href="{{route('detail.emploi', $similaire->slug)}}" class="text-lg hover:text-emerald-600 font-semibold transition-all duration-500">{{Str::limit($similaire->title, 48)}}</a>
                    <h6 class="text-base font-medium"><i class="uil uil-map-marker"></i> {{$similaire->lieu->name}}</h6>
                </div>

                <div class="mt-6">
                    {{-- <div>
                        <span class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">HTML</span>
                        <span class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">CSS</span>
                        <span class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">SASS</span>
                        <span class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">SCSS</span>
                        <span class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">Photoshop</span>
                        <span class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">Graphics</span>
                        <span class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">Bootstrap</span>
                    </div> --}}
                    <div class="mt-5">
                        <a href="{{route('detail.emploi', $similaire->slug)}}" class="btn rounded-md bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white md:ms-2 w-full md:w-auto"> <i class="uil uil-eye"></i> Consulter </a>
                    </div>

                </div>
            </div><!--end content-->
            @endforeach


        </div><!--end grid-->
    </div><!--end container-->

    <div class="container-fluid md:mt-24 mt-16">
        <div class="container">
            <div class="grid grid-cols-1">
                <div class="relative overflow-hidden lg:px-8 px-6 py-10 rounded-xl shadow-lg dark:shadow-gray-700">
                    <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                        <div class="lg:col-span-8 md:col-span-7">
                            <div class="ltr:md:text-left rtl:md:text-right text-center relative z-1">
                                <h3 class="text-2xl font-semibold text-black dark:text-white mb-4">Explorer tous les emplois maintenants !</h3>
                                <p class="text-slate-400 max-w-xl">Recherchez tous les postes ouverts, faites vous votre propre opignon des offres et lancez vous .</p>
                            </div>
                        </div>

                        <div class="lg:col-span-4 md:col-span-5">
                            <div class="ltr:text-right rtl:text-left relative z-1">
                                <a href="{{route('home.job')}}" class="btn bg-emerald-600 hover:bg-emerald-700 border-emerald-600 dark:border-emerald-600 text-white rounded-md">Consulter </a>
                                <a href="#" class="btn bg-emerald-600/5 hover:bg-emerald-600 border-emerald-600/10 hover:border-emerald-600 text-emerald-600 hover:text-white rounded-md ms-2">Qui sommes nous ?</a>
                            </div>
                        </div>
                    </div>

                    <div class="absolute -top-5 -start-5">
                        <div class="uil uil-envelope lg:text-[150px] text-7xl text-black/5 dark:text-white/5 ltr:-rotate-45 rtl:rotate-45"></div>
                    </div>

                    <div class="absolute -bottom-5 -end-5">
                        <div class="uil uil-pen lg:text-[150px] text-7xl text-black/5 dark:text-white/5 rtl:-rotate-90"></div>
                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </div><!--end container-->
</section>

@endsection
