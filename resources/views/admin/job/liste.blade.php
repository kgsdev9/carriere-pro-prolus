@extends('admin.layout')

@section('admin')


<section class="container-fluid p-4">
    <div class="row">
        <!-- Page Header -->
        <div class="col-lg-12 col-md-12 col-12">
            <div class="border-bottom pb-3 mb-3 d-flex align-items-center justify-content-between">
                <div class="">
                    <h1 class="mb-1 h2 fw-bold">Liste des emplois </h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="admin-dashboard.html">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                               Emploi
                            </li>
                        </ol>
                    </nav>
                </div>
                <div>
                    <a href="#" class="btn btn-primary">Nouveau job</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <!-- Card -->
            <div class="card rounded-3">
                <!-- Card Header -->

                <div class="p-4 row">
                    <!-- Form -->
                    <form class="d-flex align-items-center col-12 col-md-8 col-lg-3">
                        <span class="position-absolute ps-3 search-icon">
                            <i class="fe fe-search"></i>
                        </span>
                        <input type="search" class="form-control ps-6" placeholder="Rechercher ....">
                    </form>
                </div>
                <div>
                    <div class="tab-content" id="tabContent">
                        <!-- Tab -->
                        <div class="tab-pane fade active show" id="all-post" role="tabpanel" aria-labelledby="all-post-tab">
                            <div class="table-responsive">
                                <!-- Table -->
                                <table class="table mb-0 text-nowrap table-centered table-hover table-with-checkbox table-centered table-hover">
                                    <!-- Table Head -->
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col">Titre</th>
                                            <th scope="col">Lieu</th>
                                            <th scope="col">Catégorie</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">STATUS</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Table body -->
                                        @foreach ($jobALl as $job)
                                        <tr>
                                            <td>
                                                <h5 class="mb-0">
                                                    <a href="#" class="text-inherit">
                                                       {{$job->title}}
                                                    </a>
                                                </h5>
                                            </td>
                                            <td>
                                                {{ $job->lieu->name }}
                                            </td>
                                            <td>
                                                <a href="#" class="text-inherit">{{ $job->family->name }}</a>
                                            </td>

                                            <td>
                                                <div class="d-flex align-items-center">

                                                    <h5 class="mb-0">{{$job->created_at->diffForHumans() }}</h5>
                                                </div>
                                            </td>

                                            <td>
                                                <span class="dropdown dropstart">
                                                  <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="orderDropdownOne" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                  </a>
                                                  <span class="dropdown-menu" aria-labelledby="orderDropdownOne" style="">
                                                    <span class="dropdown-header">Action</span>
                                                    <a class="dropdown-item" href="{{route('job.show', $job->id)}}"><i class="fe fe-edit dropdown-item-icon"></i>Voir</a>
                                                    <a class="dropdown-item" href="{{route('job.edit', $job->id)}}"><i class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                    <form action="{{route('job.store', $job->id)}}" method="POST">
                                                     @csrf
                                                     <button type="submit" class="btn btn-danger">Supprimer</button>
                                                    </form>
                                                  </span>
                                                </span>
                                              </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>




                    </div>
                </div>
                <!-- Card Footer -->
                <div class="card-footer">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center mb-0">
                          {{$jobALl->links()}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
