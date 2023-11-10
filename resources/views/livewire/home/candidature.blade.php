<div>
    <section class="relative md:py-24 py-16">
        <div class="container">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Quelques talents open to work </h3>

                <p class="text-slate-400 max-w-xl mx-auto">Nous rassemblons quelque talents pour mettre à disposition des recruteurs, regarder toutes les candidatures et faites votre choix</p>
            </div>
        </div><!--end container-->
    </section>


    <div class="container mt-2">
        <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">


            @foreach ($allCandidature as $candidature)
            <div class="group bg-white dark:bg-slate-900 relative overflow-hidden rounded-md shadow dark:shadow-gray-700 text-center p-6">
                <img src="{{asset('avatar-icon-png-24.jpg')}}" class="h-20 w-20 rounded-full shadow dark:shadow-gray-700 mx-auto" alt="">

                <div class="mt-2">
                    <a href="candidate-detail.html" class="hover:text-emerald-600 font-semibold text-lg">{{$candidature->nom}} {{$candidature->prenom}}</a>
                    <p class="text-sm text-slate-400">{{$candidature->specialite->specialite}}</p>
                </div>

                <ul class="mt-2 list-none">
                    <li class="inline"><span class="bg-emerald-600/10 inline-block text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full">Design</span></li>
                    <li class="inline"><span class="bg-emerald-600/10 inline-block text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full">UI</span></li>
                    <li class="inline"><span class="bg-emerald-600/10 inline-block text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full">Digital</span></li>
                </ul>

                <div class="flex justify-between mt-2">
                    <div class="block">
                        <span class="text-slate-400">Pays:</span>
                        <span class="block text-sm font-semibold">{{$candidature->pays}}</span>
                    </div>
                    <div class="block">
                        <span class="text-slate-400">Ville :</span>
                        <span class="block text-sm font-semibold">{{$candidature->ville}}</span>
                    </div>
                </div>

                <div class="mt-3">
                    <a href="#" class="btn btn-sm bg-emerald-600 hover:bg-emerald-700 border-emerald-600 dark:border-emerald-600 text-white rounded-md">Profile</a>
                    <a href="#" class="btn btn-sm btn-icon bg-emerald-600/5 hover:bg-emerald-600 border-emerald-600/10 hover:border-emerald-600 text-emerald-600 hover:text-white rounded-full ms-1"><i class="uil uil-hipchat text-[20px]"></i></a>
                </div>

                <span class="w-24 bg-yellow-400 text-white text-center absolute ltr:-rotate-45 rtl:rotate-45 -start-[30px] top-1"><i class="uil uil-star"></i></span>

                <span class="absolute top-[10px] end-4">
                    <a href="javascript:void(0)" class="text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600 text-2xl"><i class="mdi mdi-heart"></i></a>
                </span>
            </div><!--end content-->

            @endforeach


        </div><!--end grid-->


    </div>

</div>
