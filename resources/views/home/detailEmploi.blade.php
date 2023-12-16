@extends('layout.layout')
@section('title', $detail->title)
@section('content')
<main>
    <section class="py-lg-8 py-7">
        <div class="container my-lg-8">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 col-md-12">
                    <div class="d-xl-flex">

                        <!-- text -->
                        <div class="ms-xl-3 w-100 mt-3 mt-xl-0">
                            <div class="d-flex justify-content-between mb-5">
                                <div>
                                    <h1 class="mb-1 h2">{{$detail->title}}</h1>
                                    <div>
                                        <span>Contrat {{$detail->contrat->name}}</span>
                                        <!-- star -->
                                        <span class="text-dark ms-2 fw-medium">


                                            <!-- text -->
                                        </span>
                                        <span class="ms-0">Lieu  {{$detail->lieu->name}}</span>
                                    </div>
                                </div>
                                <div>

                                </div>
                            </div>
                            <div>
                                <!-- year -->
                                <div class="d-md-flex justify-content-between">
                                    <div class="mb-2 mb-md-0">
                                        <span class="me-2">
                                            <i class="fe fe-briefcase"></i>
                                            <span class="ms-1">Publié {{$detail->created_at}}</span>
                                        </span>
                                        <!-- text -->


                                    </div>
                                    <div>
                                        <!-- time -->
                                        <i class="fe fe-clock"></i>
                                        <span>{{$detail->view}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4">

                    <div class="mt-6">
                        
                        <p> {!! $detail->description !!}.</p>
                    </div>
                    <!-- text -->

                    <!-- list -->



                </div>
            </div>

        </div>
    </section>
</main>


@endsection
