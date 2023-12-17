@extends('layout.layout')

@section('title' , 'Annuaire Des Curriculum vitæ')

@section('content')
<main>


    <!-- Page header -->
    <div class="py-8">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-1 col-lg-10 col-md-12 col-12">
                    <div class="text-center mb-5">
                        <h1 class="display-2 fw-bold">Consulter nos catalogues de cvs </h1>
                        <p class="lead">relooker votre cvs.</p>
                    </div>
                    <!-- Form -->

                </div>
            </div>
        </div>
    </div>
    <!-- Page Content -->
    <section class="pb-8">
        <div class="container">
            <div class="row">

                @foreach ($home as $cv)
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <!-- Card -->
                    <div class="card mb-4 shadow-lg card-lift">
                        <a href="#">
                            <img src="{{asset('cv/images/'.$cv->image)}}" class="card-img-top" alt="blogpost ">
                        </a>
                        <!-- Card body -->
                        <div class="card-body">

                            <h3>
                                <a href="#" class="text-inherit">{{$cv->title}}</a>
                            </h3>
                            <p>cv modene professionelle à votre service  ...</p>
                            <!-- Media content -->
                            <div class="row align-items-center g-0 mt-4">


                                <div class="col-auto">
                                   <a class="btn btn-warning" href="https://wa.me/+2250708375478?text=Ce%20Modele%20de%20CvMinteresse" target="_blank">Consulter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach





                <!-- Button -->

                </div>
            </div>
        </div>
    </section>



</main>


@endsection
