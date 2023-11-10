@extends('layout.app')
@section('content')


<section class="relative table w-full py-36 bg-[url('../../assets/images/hero/bg.html')] bg-top bg-no-repeat bg-cover">
    <div class="absolute inset-0 bg-emerald-900/90"></div>
    <div class="container">
        <div class="grid grid-cols-1 text-center mt-10">
            <h3 class="md:text-3xl text-2xl md:leading-snug tracking-wide leading-snug font-medium text-white"> Emploi {{$categoryname}}</h3>
        </div><!--end grid-->
    </div><!--end container-->
</section>

<div class="container mt-10">
    <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-[30px]">

        @foreach ($job as $jobcarriere)
        <div class="group relative overflow-hidden bg-white dark:bg-slate-900 shadow hover:shadow-md dark:shadow-gray-700 dark:hover:shadow-gray-700 hover:-mt-2 rounded-md transition-all duration-500 h-fit">
            <div class="p-6">
                <div class="flex items-center">
                    <div class="w-14 h-14 min-w-[56px] flex items-center justify-center bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
                        <img src="{{asset('images/offre-emploo.jpg')}}" class="h-8 w-8" alt="">
                    </div>

                    <div class="ms-3">
                        <a href="{{route('detail.emploi', $jobcarriere->slug)}}" class="inline-block text-[16px] font-semibold hover:text-emerald-600 transition-all duration-500 me-1">{{$jobcarriere->title}}</a>
                        <span class="inline-block text-sm text-slate-400">{{$jobcarriere->created_at->diffForHumans()}}</span>
                        <div>
                            <span class="bg-emerald-600/10 inline-block text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">{{$jobcarriere->contrat->name}}</span>
                            <span class="text-sm font-medium inline-block me-1">Est. time: <span class="text-slate-400">Employeur :  {{$jobcarriere->employeur}} </span></span>

                        </div>
                    </div>
                </div>
                <p class="text-slate-400 py-3">{{$jobcarriere->mini_description}}</p>
            </div>

            <div class="px-6 py-2 bg-slate-50 dark:bg-slate-800 lg:flex justify-between items-center">
                <div class="lg:inline-block flex justify-between">
                    <span class="inline-block me-1 font-semibold"><i class="mdi mdi-check-decagram mdi-18px text-blue-500 me-1"></i>Verified</span>
                  
                    <span class="inline-block me-1 text-slate-400"><i class="uil uil-map-marker text-[18px] text-slate-900 dark:text-white me-1"></i>{{$jobcarriere->lieu->name}}</span>
                </div>

                <a href="{{route('detail.emploi', $jobcarriere->slug)}}" class="btn btn-sm rounded-md bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white md:ms-2 w-full lg:w-auto lg:mt-0 mt-4">Consulter</a>
            </div>

            <a href="#" class="btn btn-icon rounded-full bg-emerald-600/5 hover:bg-emerald-600 border-emerald-600/10 hover:border-emerald-600 text-emerald-600 hover:text-white absolute top-0 end-0 m-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark h-4 w-4"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg></a>
        </div><!--end content-->
        @endforeach



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
    <br>
</div>


@endsection

