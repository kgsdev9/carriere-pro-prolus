@extends('layout.app')
@section('title', $detailArticle->title)
@section('content')

<section class="relative table w-full py-36 bg-[url('../../assets/images/hero/bg.html')] bg-top bg-no-repeat bg-cover">
    <div class="absolute inset-0 bg-emerald-900/90"></div>
    <div class="container">
        <div class="grid grid-cols-1 text-center mt-10">
            <h3 class="md:text-3xl text-2xl md:leading-snug tracking-wide leading-snug font-medium text-white mb-3">{{$detailArticle->title}}.</h3>

            <ul class="list-none mt-6">
                <li class="inline-block text-white/50 mx-5"> <span class="text-white block">Autheur  :</span> <span class="block">Carriereproplus</span></li>
                <li class="inline-block text-white/50 mx-5"> <span class="text-white block">Date :</span> <span class="block">{{$detailArticle->created_at}}</span></li>
                <li class="inline-block text-white/50 mx-5"> <span class="text-white block">Temps :</span> <span class="block">4 Minute</span></li>
            </ul>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="breadcrumb tracking-[0.5px] breadcrumb-light mb-0 inline-block">
           <li class="inline breadcrumb-item text-[15px] font-semibold duration-500 ease-in-out text-white/50 hover:text-white"><a href="#">Carriereproplus</a></li>
           <li class="inline breadcrumb-item text-[15px] font-semibold duration-500 ease-in-out text-white/50 hover:text-white"><a href="#">Article</a></li>
            <li class="inline breadcrumb-item text-[15px] font-semibold duration-500 ease-in-out text-white" aria-current="page">Detail</li>
        </ul>
    </div>
</section>

<section class="relative md:py-24 py-16">
    <div class="container">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-10 md:col-span-6">
                <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-800">
                    <div class="p-6">

                        <p>{!!$detailArticle->description!!}</p>


                    </div>
                </div>
            </div>


        </div>
    </div>




</section>



@endsection
