@extends('admin.layout')

@section('admin')
<div class="content-wrapper" style="min-height: 2080.12px;">

  <main>

    <!-- =======================
    Main contain START -->
    <section class="">
      <div class="container">
        <div class="row pb-4">
          <div class="col-12">
            <!-- Title -->
              <h1 class="mb-0 h2">Edition de Offre </h1>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <!-- Chart START -->
            <div class="card border">
              <!-- Card body -->
              <div class="card-body">
                <!-- Form START -->
                <form method="POST" action="{{ route('job.update', $ressource->id) }}" enctype="multipart/form-data">

                  @csrf
                  @method('PATCH')
                  <!-- Main form -->
                  <div class="row">
                    <div class="col-12">
                      <!-- Post name -->
                      <div class="mb-3">
                        <label class="form-label">Titre de l'offre </label>
                        <input required="" id="con-name" name="title" type="text" class="form-control" placeholder="Developpeur fullstack " value="{{ old('title')?? $ressource->title }}" maxlength="200">
                        <small>le title ne doit pas exceller 50 caracteres </small>
                      </div>


                      <div class="mb-3">
                        <label class="form-label"> Employeurs </label>
                        <input required="" id="con-name" name="employeur" type="text" class="form-control"  value="{{ old('title')?? $ressource->employeur }}">
                        <small>Marquer <strong>Autre </strong> si le nom de l'employeur ne figure pas dans la liste </small>
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Lieu </label>
                        <select name="lieu_id"  class="form-control">
                          @foreach ($lieu as $value)
                          <option value="{{$value->id}}" {{$value->id ==$ressource->lieu_id? 'selected': ''}}>{{$value->name }}</option>
                          @endforeach

                        </select>
                        <small>Marquer <strong>Autre </strong> si le nom de l'employeur ne figure pas dans la liste </small>
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Contrat  </label>
                        <select name="contrat_id" id="" class="form-control">
                          @foreach ($contrat as $value)
                          <option value="{{$value->id}}" {{$value->id ==$ressource->contrat_id? 'selected': ''}}>{{$value->name }}</option>
                          @endforeach

                        </select>
                        <small>Marquer <strong>Autre </strong> si le nom de l'employeur ne figure pas dans la liste </small>
                      </div>

                    </div>

                    <div class="col-12">
                      <!-- Post name -->
                      <div class="mb-3">
                        <label class="form-label">Description minimale de l'offre  </label>
                        <input type="text" class="form-control" value="{{$ressource->mini_description}}">
                        <small>le title ne doit pas exceller 120 caracteres </small>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <!-- Message -->
                      <div class="mb-3">
                        <label class="form-label">Catégorie </label>
                        <select class="form-control" name="family_id">
                          @foreach ($categoryjob as $value)
                          <option value="{{$value->id}}" {{$value->id ==$ressource->family_id? 'selected': ''}}>{{$value->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label class="form-label">Description  complete de l'offre   </label>
                            <textarea class="form-control" name="description" rows="3" id="#basic-example"> {{ old('description') ?? $ressource->description }}</textarea>
                        </div>
                      </div>

                    <div class="col-12">
                      <div class="form-check mb-3">
                        <input class="form-check-input" name="publish_at" type="checkbox" value="1" id="postCheck">
                        <label class="form-check-label" for="postCheck">
                         Voulez vous publié automatiquement l'offre alors cochez la case ?
                        </label>
                      </div>
                    </div>
                    <!-- Create post button -->
                    <div class="col-md-12 text-start">
                      <button class="btn btn-primary w-100" type="submit">Mettre à jour l'offre </button>
                    </div>
                  </div>
                </form>
                <!-- Form END -->
              </div>
            </div>
            <!-- Chart END -->
          </div>
        </div>
      </div>
    </section>
    <!-- =======================
    Main contain END -->

    </main>


  </div>


@endsection
