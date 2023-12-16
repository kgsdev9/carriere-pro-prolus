@extends('admin.layout')
@section('admin')
<section class="container-fluid p-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="border-bottom pb-3 mb-3 d-lg-flex justify-content-between align-items-center">
                <div class="mb-3 mb-lg-0">
                    <h1 class="mb-0 h2 fw-bold">Bienvenue ss </h1>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-12 col-12">
            <!-- Card -->
            <div class="card mb-4">
                <!-- Card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                        <div>
                            <span class="fs-6 text-uppercase fw-semibold">Total EMploi</span>
                        </div>
                        <div>
                            <span class="fe fe-shopping-bag fs-3 text-primary"></span>
                        </div>
                    </div>
                    <h2 class="fw-bold mb-1">{{$countJobs}}</h2>
                    <span class="ms-1 fw-medium">Tous les jobs publiés </span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 col-12">
            <!-- Card -->
            <div class="card mb-4">
                <!-- Card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                        <div>
                            <span class="fs-6 text-uppercase fw-semibold">Emploi du moi en cours </span>
                        </div>
                        <div>
                            <span class=" fe fe-book-open fs-3 text-primary"></span>
                        </div>
                    </div>
                    <h2 class="fw-bold mb-1">{{$curentMont}}</h2>
                    <span class="ms-1 fw-medium">emploi du mois courant</span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 col-12">
            <!-- Card -->
            <div class="card mb-4">
                <!-- Card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                        <div>
                            <span class="fs-6 text-uppercase fw-semibold">Liste des utilisateurs</span>
                        </div>
                        <div>
                            <span class=" fe fe-users fs-3 text-primary"></span>
                        </div>
                    </div>
                    <h2 class="fw-bold mb-1">{{$countUsers}}</h2>
                    <span class="ms-1 fw-medium">Tous les utilisateurs</span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 col-12">
            <!-- Card -->
            <div class="card mb-4">
                <!-- Card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                        <div>
                            <span class="fs-6 text-uppercase fw-semibold">Article </span>
                        </div>
                        <div>
                            <span class=" fe fe-user-check fs-3 text-primary"></span>
                        </div>
                    </div>
                    <h2 class="fw-bold mb-1">{{$countArticles}}</h2>
                    <span class="ms-1 fw-medium">Liste des articles </span>
                </div>
            </div>
        </div>
    </div>


</section>

@endsection
