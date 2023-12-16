
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="Carriereproplus" />

<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="{{asset('images/logocarrierepro.jpg')}}" />

<!-- darkmode js -->
<script src="{{asset('assets/js/vendors/darkMode.js')}}"></script>

<!-- Libs CSS -->
<link href="{{asset('assets/fonts/feather/feather.css" rel="stylesheet')}}" />
<link href="{{asset('assets/libs/bootstrap-icons/font/bootstrap-icons.min.css')}}" rel="stylesheet" />
<link href="{{asset('assets/libs/simplebar/dist/simplebar.min.css')}}" rel="stylesheet" />
<script src="https://unpkg.com/htmx.org@1.9.9" integrity="sha384-QFjmbokDn2DjBjq+fM+8LUIVrAgqcNW2s0PjAxHETgRn9l4fvX31ZxDxvwQnyMOX" crossorigin="anonymous"></script>

<!-- Theme CSS -->
<link rel="stylesheet" href="{{asset('assets/css/theme.min.css')}}">
 <link rel="canonical" href="carriereproplus.com">
 <title>Bienvenue sur carriere proplus </title>
 @livewireStyles
</head>
    <body class="bg-white">
        <nav class="navbar navbar-expand-lg">
    <div class="container px-0">
        <a class="navbar-brand" href="/" hx-boost="true"><img src="{{asset('images/logocarrierepro.jpg')}}" style="height:40px;"  alt="Geeks" /></a>
        <div class="d-flex align-items-center order-lg-3 ms-lg-3">

            <button
                class="navbar-toggler collapsed ms-2 ms-lg-0"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbar-default"
                aria-controls="navbar-default"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="icon-bar top-bar mt-0"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>
        </div>
        <!-- Button -->

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbar-default">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/"  hx-boost="true">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home.job')}}" hx-boost="true">Emploi</a>

                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{route('home.cv')}}" id="navbarPages">Cv Pro </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" hx-boost="true">Formations</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('home.actualy')}}" hx-boost="true">Actualités</a>
                </li>

                <li class="nav-item">
                    @guest
                    <a class="btn btn-outline-primary mx-2 d-none d-md-block" href="{{route('login')}}" hx-boost="true">Connexion</a>
                    @else
                    <a class="btn btn-outline-primary mx-2 d-none d-md-block" href="#" hx-boost="true">Mon Compte </a>
                    @endguest

                </li>



            </ul>
        </div>
    </div>
</nav>


        <!-- Page Content -->
            @yield('content')
        <!-- footer -->
        <!-- footer -->
        <footer class="pt-5 pb-3">
            <div class="container">
                <div class="row justify-content-center text-center align-items-center">
                    <div class="col-12 col-md-12 col-xxl-6 px-0">
                        <div class="mb-4">
                            <a href="#">
                                <img src="{{asset('images/logocarrierepro.jpg')}}" alt="Geeks" style="height:50px;" class="mb-4 logo-inverse">
                            </a>
                            <p class="lead">Carriereproplus est une plateforme de rélais, de publication d 'offre d'emploi, de formation professionelle.</p>
                        </div>
                        <nav class="nav nav-footer justify-content-center">
                            <a class="nav-link" href="#">Accueil</a>
                            <span class="my-2 vr opacity-50"></span>
                            <a class="nav-link" href="#">Emploi</a>
                            <span class="my-2 vr opacity-50"></span>
                            <a class="nav-link" href="#">Cvs</a>
                            <span class="my-2 vr opacity-50"></span>
                            <a class="nav-link" href="#">Lettre de motivation </a>
                            <span class="my-2 vr opacity-50"></span>
                            <a class="nav-link" href="#">Formations</a>
                            <span class="my-2 vr opacity-50"></span>
                            <a class="nav-link" href="#">Actualites</a>

                        </nav>
                    </div>
                </div>
                <!-- Desc -->
                <hr class="mt-6 mb-3">
                <div class="row align-items-center">
                    <!-- Desc -->
                    <div class="col-lg-3 col-md-6 col-12">
                        <span>
                            ©
                            <span id="copyright4">
                                <script>
                                    document.getElementById("copyright4").appendChild(document.createTextNode(new Date().getFullYear()));
                                </script>
                            </span>
                            Tous droits réservés
                        </span>
                    </div>

                    <!-- Links -->
                    <div class="col-12 col-md-6 col-lg-7 d-lg-flex justify-content-center">
                        <nav class="nav nav-footer">


                            <a class="nav-link" href="kgsinformatique.tech">Une conception  de KGS informatique </a>
                        </nav>
                    </div>
                    <div class="col-lg-2 col-md-12 col-12 d-lg-flex justify-content-end">
                        <div>
                            <!--Facebook-->
                            <a href="#" class="me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                                </svg>
                            </a>
                            <!--Twitter-->
                            <a href="#" class="me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                                </svg>
                            </a>



                        </div>
                    </div>
                </div>

                <!-- Links -->
            </div>
        </footer>


        <!-- Scroll top -->
        <div class="btn-scroll-top">
    <svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
        <path d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z" />
    </svg>
</div>

        <!-- Scripts -->
        <!-- Libs JS -->
<script src="{{asset('assets/libs/%40popperjs/core/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/libs/simplebar/dist/simplebar.min.js')}}"></script>

<!-- Theme JS -->
<script src="{{asset('assets/js/theme.min.js')}}"></script>
 <script src="{{asset('assets/libs/tippy.js/dist/tippy-bundle.umd.min.js')}}"></script>
 <script src="{{asset('assets/js/vendors/tooltip.js')}}"></script>
 @livewireScripts
</body>
</html>
