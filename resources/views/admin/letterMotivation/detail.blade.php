@extends('admin.layout')

@section('admin')
<div class="col-xl-12 order-xl-1">

    <div class="card">
      <div class="card-header">
        <div class="row align-items-center">
          <div class="col-8">
            <h3 class="mb-0">Lettre de motivation  </h3>
          </div>
          <div class="col-4 text-right">
            <a href="#!" class="btn btn-sm btn-primary">{{$ressource->name}}</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <form>
          <h6 class="heading-small text-muted mb-4">Objet: votre annonce n° ... ou candidature spontanée </h6>

          <hr class="my-4">
          <!-- Address -->
          <h6 class="heading-small text-muted mb-4">{{$ressource->typeletter->name}}</h6>
          <div class="pl-lg-4">
            <div class="row">
                <p>{{$ressource->contenu}}</p>
            </div>

          </div>
     

        </form>
      </div>
    </div>
  </div>

@endsection
