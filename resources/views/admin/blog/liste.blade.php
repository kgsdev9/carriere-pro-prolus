@extends('admin.layout')
@section('title', 'Annuaire actualites')
@section('admin')


<div class="content-wrapper" style="min-height: 2080.12px;">

    <section class="container-fluid p-4">
        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12 col-md-12 col-12">
                <div class="border-bottom pb-3 mb-3 d-flex align-items-center justify-content-between">
                    <div>
                        <h1 class="mb-1 h2 fw-bold">Liste des actualites </h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Accueil</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Acutalies</li>
                            </ol>
                        </nav>
                    </div>
                    <div>
                        <a href="{{route('blogs.create')}}" class="btn btn-primary">Nouvel article </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Card -->
                <div class="card rounded-3">
                    <div>
                        <div class="tab-content" id="tabContent">
                            <!-- Tab -->
                            <div class="tab-pane fade show active" id="all-post" role="tabpanel" aria-labelledby="all-post-tab">
                                <div class="table-responsive">
                                    <!-- Table -->
                                    <table class="table mb-0 text-nowrap table-centered table-hover table-with-checkbox table-centered table-hover">
                                        <!-- Table Head -->
                                        <thead class="table-light">
                                            <tr>
                                                <th>Article</th>
                                                <th>Type</th>
                                                <th>Category</th>
                                                <th>Date</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($article as  $value)
                                            <tr>
                                                <td>
                                                    <h5 class="mb-0">
                                                        <a href="#" class="text-inherit">{{Str::limit($value->title, 30)}}</a>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <i class="fe fe-image text-primary fs-4"></i>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-inherit">{{ $value->category->name}}</a>
                                                </td>
                                                <td>{{ $value->created_at}}</td>
                                                <td>
                                                    <form action="{{route('blogs.destroy', $value->id)}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" onclick="return confirm('Voulez-vous vraiment supprimer ?')" class="btn btn-outline-secondary btn-sm">Supprimer</button>
                                                    </form>
                                                    <br>
                                                    <a href="{{ route('blogs.edit', $value->id)}}" class="btn btn-success btn-sm">Modifier</a>
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
                        <nav>
                            {{$article->links()}}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
