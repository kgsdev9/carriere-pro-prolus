
<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Job Listing Landing Template" name="description">
        <meta content="Carriere proplus une plateforme de relais,partaged e publication" name="keywords">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- favicon -->
        <link rel="shortcut icon" href="{{asset('images/logocarrierepro.jpg')}}">
        <!-- Css -->
        <link rel="stylesheet" href="{{asset('assets/libs/tobii/css/tobii.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/libs/choices.jsassets/scripts/choices.min.js')}}">
        <!-- Main Css -->
        <link href="{{asset('assets/libs/@iconscout/unicons/css/line.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('assets/libs/@mdi/font/css/materialdesignicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/tailwind.min.css')}}">
    </head>
    <body class="dark:bg-slate-900">

        <nav id="topnav" class="defaultscroll is-sticky">
            <div class="container">
                <!-- Logo container-->
                <a class="logo" href="{{route('home')}}">
                    <div class="block sm:hidden">
                        CPP
                        {{-- <img src="{{asset('images/logocarrierepro.jpg')}}" class="h-10 inline-block dark:hidden"  alt="">
                        <img src="{{asset('images/logocarrierepro.jpg')}}" class="h-10 hidden dark:inline-block"  alt=""> --}}
                    </div>
                    <div class="sm:block hidden">
                        <span class="inline-block dark:hidden">
                            <img src="{{asset('images/logocarrierepro.jpg')}}" class="h-[24px] l-dark" alt="">
                            <img src="{{asset('images/logocarrierepro.jpg')}}" class="h-[24px] l-light" alt="">
                        </span>
                        <img src="{{asset('images/logocarrierepro.jpg')}}" class="h-[24px] hidden dark:inline-block" alt="">
                    </div>
                </a>
                <!-- End Logo container-->

                <!-- Start Mobile Toggle -->
                <div class="menu-extras">
                    <div class="menu-item">
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End Mobile Toggle -->

                <!--Login button Start-->
                <ul class="buy-button list-none mb-0">
                    <li class="inline-block mb-0">
                        <div class="relative top-[3px]">
                            <i class="uil uil-search text-lg absolute top-[3px] end-3"></i>
                            <input type="text" class="form-input h-9 pe-10 rounded-3xl sm:w-44 w-36 border-gray-100 dark:border-slate-800 bg-white dark:bg-slate-900" name="search" id="searchItem" placeholder="Rechercher">
                        </div>
                    </li>
                    <li class="dropdown inline-block relative ps-1">
                        <button data-dropdown-toggle="dropdown" class="dropdown-toggle items-center" type="button">
                            <span class="btn btn-icon rounded-full bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white"><img src="{{asset('images/logocarrierepro.jpg')}}" class="rounded-full" alt=""></span>
                        </button>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-44 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 hidden" onclick="event.stopPropagation();">
                            <ul class="py-2 text-start">
                                @guest
                                <li>
                                    <a href="{{route('login')}}" class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-emerald-600 dark:hover:text-white"><i data-feather="user" class="h-4 w-4 me-2"></i>Connexion</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-emerald-600 dark:hover:text-white"><i data-feather="settings" class="h-4 w-4 me-2"></i>Inscription</a>
                                </li>
                                @else
                                <li class="border-t border-gray-100 dark:border-gray-800 my-2"></li>
                                <li>
                                    <a href="{{route('profile.user')}}" class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-emerald-600 dark:hover:text-white"><i data-feather="lock" class="h-4 w-4 me-2"></i>Mon profile</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-emerald-600 dark:hover:text-white"><i data-feather="log-out" class="h-4 w-4 me-2"></i>Déconnection</a>
                                </li>
                                @endguest
                            </ul>
                        </div>
                    </li><!--end dropdown-->
                </ul>
                <!--Login button End-->

                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu justify-end nav-light">
                        <li class="parent-menu-item">
                            <a href="{{route('home')}}">Accueil</a><span class="menu-arrow"></span>

                        </li>

                        <li class="parent-parent-menu-item"><a href="{{route('home.job')}}"> Emploi </a><span class="menu-arrow"></span>

                        </li>

                        <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Nos Conseils</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="#" class="sub-menu-item">Lettre de motivation</a></li>
                                <li><a href="#" class="sub-menu-item">Curriculum vitæ</a></li>



                            </ul>
                        </li>
                        <li><a href="#" class="sub-menu-item">Formations</a></li>
                        <li><a href="{{route('home.actualy')}}" class="sub-menu-item">Actualites</a></li>
                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </nav><!--end header-->
        <!-- End Navbar -->



        @yield('content')


        <!-- Start Footer -->
        <footer class="relative bg-slate-900 dark:bg-slate-800 mt-8">
            <div class="container">
                <div class="grid grid-cols-1">
                    <div class="relative py-12">
                        <!-- Subscribe -->
                        <div class="relative w-full">
                            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                                <div class="md:col-span-3">
                                    <a href="#" class="flex justify-center md:justify-start focus:outline-none">
                                        <img src="{{asset('images/logocarrierepro.jpg')}}" class="" alt="">
                                    </a>
                                </div><!--end col-->

                                <div class="md:col-span-9">
                                    <ul class="list-disc footer-list ltr:md:text-right rtl:md:text-left text-center space-x-3">
                                        <li class="inline-block"><a href="#" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out font-medium">Accueil</a></li>
                                        <li class="inline-block mt-[10px] md:mt-0"><a href="#" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out font-medium">Emploi</a></li>
                                        <li class="inline-block mt-[10px] md:mt-0"><a href="#" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out font-medium">Formation </a></li>
                                        <li class="inline-block mt-[10px] md:mt-0"><a href="#" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out font-medium">Actualies</a></li>
                                        <li class="inline-block mt-[10px] md:mt-0"><a href="#" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out font-medium">Contact</a></li>
                                    </ul><!--end icon-->
                                </div><!--end col-->
                            </div><!--end grid-->
                        </div>
                        <!-- Subscribe -->
                    </div>
                </div>
            </div><!--end container-->

            <div class="py-[30px] px-0 border-t border-gray-800 dark:border-gray-700">
                <div class="container text-center">
                    <div class="grid md:grid-cols-2 items-center gap-6">
                        <div class="ltr:md:text-left rtl:md:text-right text-center">
                            <p class="mb-0 text-gray-300 font-medium">© <script>document.write(new Date().getFullYear())</script> Plateforme développée par   <i class="mdi mdi-heart text-red-600"></i> KGS  <a href="kgsinformatique.com" target="_blank" class="text-reset">INFORMATIQUE</a>.</p>
                        </div>

                        <ul class="list-none ltr:md:text-right rtl:md:text-left text-center space-x-0.5">
                            <li class="inline"><a href="https://t.me/carriereproplus" class="btn btn-icon btn-sm border-2 border-gray-800 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 text-white" target="_blank"><i class="uil uil-telegram" title="telegram-chanel-carriereproplus"></i></a></li>
                            <li class="inline"><a href="https://www.linkedin.com/company/carriere-pro-plus/" target="_blank" class="btn btn-icon btn-sm border-2 border-gray-800 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 text-white"><i class="uil uil-linkedin" title="Linkedin"></i></a></li>
                            <li class="inline"><a href="https://web.facebook.com/carriereproplus" target="_blank" class="btn btn-icon btn-sm border-2 border-gray-800 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 text-white"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                            <li class="inline"><a href="#" target="_blank" class="btn btn-icon btn-sm border-2 border-gray-800 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 text-white"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                            <li class="inline"><a href="https://chat.whatsapp.com/HI1lbqP3QPq1rcBsbU1z7x" target="_blank" class="btn btn-icon btn-sm border-2 border-gray-800 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 text-white"><i class="uil uil-whatsapp" title="email"></i></a></li>

                        </ul><!--end icon-->
                    </div><!--end grid-->
                </div><!--end container-->
            </div>
        </footer><!--end footer-->
        <!-- End Footer -->
        <!-- Switcher -->
        <div class="fixed top-1/4 -left-2 z-50">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk">
                <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
                    <i class="uil uil-moon text-[20px] text-yellow-500"></i>
                    <i class="uil uil-sun text-[20px] text-yellow-500"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] w-7 h-7"></span>
                </label>
            </span>
        </div>

        <!-- Switcher -->

        <!-- LTR & RTL Mode Code -->
        <div class="fixed top-[40%] -left-3 z-50">
            <a href="https://t.me/carriereproplus" target="_blank">

                <span class="py-1 px-3 relative inline-block rounded-b-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-semibold ltr:block rtl:hidden">Télegram</span>
            </a>
        </div>
        <!-- LTR & RTL Mode Code -->

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 h-9 w-9 text-center bg-emerald-600 text-white justify-center items-center"><i class="uil uil-arrow-up"></i></a>
        <!-- Back to top -->

        <!-- JAVASCRIPTS -->
            <!-- JAVASCRIPTS -->
            <script src="{{asset('assets/libs/tobii/js/tobii.min.js')}}"></script>
            <script src="{{asset('assets/libs/choices.jsassets/scripts/choices.min.js')}}"></script>
            <script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>
            <script src="{{asset('assets/js/plugins.init.js')}}"></script>
            <script src="{{asset('assets/js/app.js')}}"></script>
            <script src="{{asset('partage.js')}}"></script>
        <!-- JAVASCRIPTS -->
        @livewireScripts
    </body>
</html>
