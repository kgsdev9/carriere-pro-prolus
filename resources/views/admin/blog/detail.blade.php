@extends('admin.layout')

@section('admin')
<div class="col-xl-12 order-xl-1">

    <div class="card">
      <div class="card-header">
        <div class="row align-items-center">
          <div class="col-8">
            <h3 class="mb-0">Detail de l'article </h3>
          </div>
          <div class="col-4 text-right">
            <a href="#!" class="btn btn-sm btn-primary">{{$ressource->category->name}}</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <form>
          <h6 class="heading-small text-muted mb-4">Titre :  {{$ressource->title}} </h6>

          <hr class="my-4">
          <!-- Address -->
          <div class="pl-lg-4">
            <div class="row">
                <p>{{$ressource->paragraphe_one}}</p>
            </div>

          </div>


        </form>
      </div>
    </div>
  </div>

@endsection
