@extends('admin.layout')

@section('admin')

<div class="content-wrapper" style="min-height: 2080.12px;">
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page Header -->
                <div class="border-bottom pb-3 mb-3 d-md-flex align-items-center justify-content-between">
                    <div class="mb-3 mb-md-0">
                        <h1 class="mb-1 h2 fw-bold">Annuaire des Cvs</h1>
                        <!-- Breadcrumb -->

                    </div>
                    <div>
                        <a href="{{route('cvs.create')}}" class="btn btn-primary">Nouveau cv </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Card -->
                <div class="card rounded-3">
                    <div>
                        <!-- Table -->
                        <div class="tab-content" id="tabContent">
                            <!--Tab pane -->
                            <div class="tab-pane fade show active" id="courses" role="tabpanel" aria-labelledby="courses-tab">
                                <div class="table-responsive border-0 overflow-y-hidden">
                                    <table class="table mb-0 text-nowrap table-centered table-hover">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Image</th>
                                                <th>Prix</th>
                                                <th>ACTION</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($cv as  $value)

                                            <tr>
                                                <td>
                                                    <a href="#" class="text-inherit">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <img src="{{asset('cv/images/'.$value->image)}}" alt="" class="img-4by3-lg rounded">
                                                            </div>
                                                            <div class="ms-3">
                                                                <h4 class="mb-1 text-primary-hover">{{ $value->title }}</h4>

                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">

                                                        <h5 class="mb-0">{{ $value->prix ?? 'Gratuit' }}</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <form action="{{route('cvs.destroy', $value->id)}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Voulez-vous vraiment supprimer ?')">Suppression</button>
                                                    </form>
                                                    <br>
                                                   
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

                </div>
            </div>
        </div>
    </section>

</div>


@endsection
