@extends('layout.layout')

@section('title', 'Actualites')
@section('content')


<section class="py-8">
    <div class="container">
      <div class="row">
        <div class="offset-xl-2 col-xl-8 offset-lg-1 col-lg-10 col-md-12 col-12">
          <div class="text-center mb-5">
            <h1 class="display-2 fw-bold">Acutalités </h1>
            <p class="lead">actualités carriere pro plus .</p>
          </div>
          <!-- Form -->

        </div>
      </div>
    </div>
  </section>

  <section class="pb-8">
    <div class="container">
        <div class="row">

            @foreach ($collectionActuality as $value)
            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                <!-- Card -->
                <div class="card mb-4 shadow-lg card-lift">
                    <a href="blog-single.html">
                        <img src="{{asset('blog/images/'.$value->image)}}" class="card-img-top" alt="blogpost ">
                    </a>
                    <!-- Card body -->
                    <div class="card-body">
                        <a href="#" class="fs-5 fw-semibold d-block mb-3 text-danger">{{$value->category->name}}</a>
                        <h3>
                            <a href="blog-single.html" class="text-inherit">{{$value->title}}</a>
                        </h3>
                        <p>{{$value->mini_description}}...</p>
                        <!-- Media content -->
                        <div class="row align-items-center g-0 mt-4">

                            <div class="col lh-1">

                              <button class="btn btn-warning">Consulter </button>
                            </div>
                            <div class="col-auto">
                                <p class="fs-6 mb-0">{{$value->created_at}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach


        </div>
    </div>
</section>




@endsection
