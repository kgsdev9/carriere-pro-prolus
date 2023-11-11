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
              <h1 class="mb-0 h2">Nouvelle Offre </h1>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <!-- Chart START -->
            <div class="card border">
              <!-- Card body -->
              <div class="card-body">
                <!-- Form START -->
                <form method="POST" action="{{ route('job.store') }}" enctype="multipart/form-data">

                  @csrf
                  <!-- Main form -->


                  <div class="row">
                    <div class="col-12">
                      <!-- Post name -->
                      <div class="mb-3">
                        <label class="form-label">Titre de l'offre @error('title')
                            <small class="text-danger">{{$message}}</small>

                        @enderror </label>
                        <input required="" id="con-name" name="title" type="text" class="form-control" placeholder="Developpeur fullstack " value="{{ old('title') }}" maxlength="200">
                        <small>le title ne doit pas exceller 50 caracteres </small>
                      </div>


                       <!-- Post name -->
                       <div class="mb-3">
                        <label class="form-label">Employeur  @error('employeur')
                            <small class="text-danger">{{$message}}</small>

                        @enderror </label>
                        <input required="" id="con-name" name="employeur" type="text" class="form-control" placeholder="Societe Génerale" value="{{ old('employeur') }}" maxlength="100">
                        <small>le title ne doit pas exceller 50 caracteres </small>
                      </div>


                      <div class="mb-3">
                        <label class="form-label">Lieu @error('lieu_id')
                            <small class="text-danger">{{$message}}</small>

                        @enderror  </label>
                        <select name="lieu_id"  class="form-control">
                          <option value="">Selectionner une  catégorie </option>
                          @foreach ($lieu as $value)
                          <option value="{{ $value->id }}">{{ $value->name }}</option>
                          @endforeach

                        </select>
                        <small>Marquer <strong>Autre </strong> si le nom de l'employeur ne figure pas dans la liste </small>
                      </div>


                      <div class="mb-3">
                        <label class="form-label">Contrat  @error('contrat_id')
                            <small class="text-danger">{{$message}}</small>

                        @enderror </label>
                        <select name="contrat_id" id="" class="form-control">
                          <option value="">Selectionner une  catégorie </option>
                          @foreach ($contrat as $value)
                          <option value="{{ $value->id }}">{{ $value->name }}</option>
                          @endforeach

                        </select>
                        <small>Marquer <strong>Autre </strong> si le nom de l'employeur ne figure pas dans la liste </small>
                      </div>

                    </div>

                    <div class="col-12">
                      <!-- Post name -->
                      <div class="mb-3">
                        <label class="form-label">Description minimale de l'offre @error('mini_description')
                            <small class="text-danger">{{$message}}</small>
                        @enderror  </label>
                          <textarea name="mini_description"  class="form-control" cols="30" rows="2"></textarea>

                      </div>
                    </div>

                    <div class="col-lg-12">
                      <!-- Message -->
                      <div class="mb-3">
                        <label class="form-label">Catégorie  @error('family_id')
                            <small class="text-danger">{{$message}}</small>

                        @enderror</label>
                        <select class="form-control" name="family_id">
                          <option value="">Selectionner une  catégorie </option>
                          @foreach ($categoryjob as $value)
                          <option value="{{ $value->id }}">{{ $value->name }}</option>
                          @endforeach

                        </select>
                      </div>
                    </div>

                      <!-- Short description -->
                  <div class="col-12">
                    <div class="mb-3">
                        <label class="form-label">Description  complete de l'offre @error('description')
                            <small class="text-danger">{{$message}}</small>

                        @enderror   </label>
                        <textarea class="form-control" id="basic-example"  name="description" rows="3" >


                            {{ old('description') }}</textarea>
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
                      <button class="btn btn-primary w-100" type="submit">Créer le l'offre </button>
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


@push('javascript')
<script>

    tinymce.init({
    selector: 'textarea#basic-example',
    height:300
    });

    </script>
@endpush
@endsection


