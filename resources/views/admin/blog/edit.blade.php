@extends('admin.layout')
@section('title', 'Edition de l\'article')
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
                <h1 class="mb-0 h2">Edition de  article </h1>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <!-- Chart START -->
              <div class="card border">
                <!-- Card body -->
                <div class="card-body">
                  <!-- Form START -->
                  <!-- Card body -->
                   <form action="{{route('blogs.update', $ressource->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                     @method('PATCH')

                    <!-- Main form -->


                    <div class="row">
                      <div class="col-12">
                        <!-- Post name -->
                        <div class="mb-3">
                          <label class="form-label">Titre de l'offre @error('title')
                              <small class="text-danger">{{$message}}</small>

                          @enderror </label>
                          <input type="text" class="form-control" name="title" id="example3cols1Input" placeholder="Titre du cv" value="{{$ressource->title}}">
                          <small>le title ne doit pas exceller 50 caracteres </small>
                        </div>

                      </div>

                      <div class="col-12">
                        <!-- Post name -->
                        <div class="mb-3">
                          <label class="form-label">Description minimale de l'offre @error('mini_description')
                              <small class="text-danger">{{$message}}</small>
                          @enderror  </label>
                          <input type="text" class="form-control" name="mini_description" cols="30" rows="2" value="{{$ressource->mini_description}}">
                        </div>
                      </div>

                      <br>

                      <div class="col-lg-12">
                        <!-- Message -->
                        <div class="mb-3">
                          <label class="form-label">Catégorie  @error('category_id')
                              <small class="text-danger">{{$message}}</small>
                          @enderror</label>
                          <select name="category_id" id="" class="form-control">
                            @foreach ($category as $value)
                            <option value="{{$value->id}}" {{$value->id ==$ressource->contrat_id? 'selected': ''}}>{{$value->name }}</option>
                            @endforeach

                          </select>

                        </div>
                      </div>

                      <div class="col-lg-12">
                        <!-- Message -->
                        <div class="mb-3">
                          <label class="form-label">Image  @error('image')
                              <small class="text-danger">{{$message}}</small>

                          @enderror</label>
                          <input type="file" name="image" class="form-control" id="example3cols3Input" >
                        </div>
                      </div>

                        <!-- Short description -->
                    <div class="col-12">
                      <div class="mb-3">
                          <label class="form-label">Description  complete de l'offre @error('description')
                              <small class="text-danger">{{$message}}</small>

                          @enderror   </label>
                          <textarea class="form-control" id="editor"  name="description" rows="3" >
                            {{$ressource->description}} </textarea>
                      </div>
                    </div>

                      <!-- Create post button -->
                      <div class="col-md-12 text-start">
                        <button class="btn btn-primary" type="submit">Enregister les modifications  </button>
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
