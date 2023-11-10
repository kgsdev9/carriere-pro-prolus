@extends('admin.layout')

@section('admin')

<div class="content-wrapper" style="min-height: 2646.44px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Detail de l'offre </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Offre</a></li>
            <li class="breadcrumb-item active">Detail </li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card card-solid">
      <div class="card-body pb-0">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 d-flex align-items-stretch flex-column">
            <div class="card bg-light d-flex flex-fill">
              <div class="card-header text-muted border-bottom-0">
               Categorie : {{ $ressource->family->name }}        Contrat: {{ $ressource->contrat->name }}
              </div>
              <div class="card-body pt-0">
                <div class="row">
                  <div class="col-7">
                    <h2 class="lead"><b>{{ $ressource->title }}</b></h2>


                    <p class="text-muted text-sm"><b>Employeur: </b>{{ $ressource->employeur}} </p>

                    <ul class="ml-4 mb-0 fa-ul text-muted">
                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Lieu : {{ $ressource->lieu->name }}</li>
                    </ul>

                    <p>{!! $ressource->description !!}</p>
                  </div>
                  <div class="col-5 text-center">
                    <img src="{{ asset('marketing.svg') }}" alt="user-avatar" class="img-circle img-fluid">
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="text-right">

                  <a href="#" class="btn btn-sm btn-primary">
                    <i class="fa fa-download"></i> Télecharger la version PDF
                  </a>
                </div>
              </div>
            </div>
          </div>






        </div>
      </div>
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>

@endsection
