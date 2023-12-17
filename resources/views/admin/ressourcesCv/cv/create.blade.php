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
                  <h1 class="mb-0 h2">Nouvelle Cv </h1>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <!-- Chart START -->
                <div class="card border">
                  <!-- Card body -->
                  <div class="card-body">
                    <!-- Form START -->
                    <form action="{{route('cvs.store')}}" method="post" enctype="multipart/form-data">

                      @csrf
                      <!-- Main form -->


                      <div class="row">
                        <div class="col-12">
                          <!-- Post name -->
                          <div class="mb-3">
                            <label class="form-label">Libellé du modéle @error('title')
                                <small class="text-danger">{{$message}}</small>

                            @enderror </label>
                            <input type="text" class="form-control" name="title" id="example3cols1Input" placeholder="Titre du cv" value="{{old('title')}}">

                          </div>

                          <div class="mb-3">
                            <label class="form-label">Prix @error('price')
                                <small class="text-danger">{{$message}}</small>

                            @enderror </label>
                            <input type="number" class="form-control" name="price"  placeholder="Prix du cv" value="{{old('price')}}">

                          </div>


                           <!-- Post name -->
                           <div class="mb-3">
                            <label class="form-label">Employeur  Image du modéle(Png, Jpg, Jpeg) @error('image')
                                <small class="text-danger">{{$message}}</small>

                            @enderror </label>
                            <input type="file" name="image" class="form-control" id="example3cols3Input" >

                          </div>




                        </div>

                        <div class="col-12">
                          <!-- Post name -->
                          <div class="mb-3">
                            <label class="form-label">Déscription du cv @error('description')
                                <small class="text-danger">{{$message}}</small>
                            @enderror  </label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control">
                                {{old('description')}}
                            </textarea>
                          </div>
                        </div>

                        <br>
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
  </div>

@endsection
