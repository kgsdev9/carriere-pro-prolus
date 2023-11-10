<nav class="navbar-vertical navbar">
    <div class="vh-100" data-simplebar>
        <!-- Brand logo -->
        <a class="navbar-brand" href="#">
            <img src="{{asset('images/logocarrierepro.jpg')}}" alt="" >
        </a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin')}}"

                   >
                    <i class="nav-icon fe fe-home me-2"></i> Dashboard
                </a>

            </li>
            <li class="nav-item">
                <a class="nav-link  collapsed" href="{{route('users.index')}}">
                    <i class="nav-icon fe fe-book me-2"></i>Annuaire Utilisateurs
                </a>

            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link   collapsed " href="#"
                    data-bs-toggle="collapse" data-bs-target="#navProfile" aria-expanded="false"
                    aria-controls="navProfile">
                    <i class="nav-icon fe fe-user me-2"></i> Annuaire Emploi
                </a>
                <div id="navProfile" class="collapse "
                    data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link "
                                href="{{route('job.create')}}">
                                Nouvelle offre
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link "
                                href="{{route('categoryjob.index')}}">
                               Catégorie job
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link "
                                href="{{route('job.index')}}">Liste des emplois</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Nav item -->
            <li class="nav-item ">
                <a class="nav-link   collapsed  " href="{{route('region.index')}}"
                   >
                    Annuaire lieu
                </a>

            </li>
            <!-- Nav item -->
            <li class="nav-item ">
                <a class="nav-link   collapsed  " href="{{route('contrat.index')}}"
                    >
                    <i class="nav-icon fe fe-file me-2"></i> Contrats
                </a>

            </li>

            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link  collapsed " href="{{route('blogs.index')}}"
                    >
                    <i class="nav-icon fe fe-lock me-2"></i>Blogs
                </a>

            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link  collapsed " href="#"
                    data-bs-toggle="collapse" data-bs-target="#navecommerce" aria-expanded="false"
                    aria-controls="navecommerce">
                    <i class="nav-icon fe fe-shopping-bag me-2"></i> Formations
                </a>

            </li>
            <!-- Nav item -->
        </ul>

    </div>
</nav>
