@extends('admin.layout')

@section('admin')
<div class="container-fluid mt-2">
    <div class="card mb-4">
      <!-- Card header -->
      <div class="card-header">
        <h3 class="mb-0">Nouvelle Application </h3>
      </div>
      <!-- Card body -->
        <form action="{{route('apps.poste')}}" method="post" enctype="multipart/form-data">
            @csrf
      <div class="card-body">
        <!-- Form groups used in grid -->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">

              <label class="form-control-label" for="example3cols1Input" >Nom l'application
                                    @error('name')
                <small class="text-danger">{{$message}}</small>

                @enderror

              </label>
              <input type="text" class="form-control" name="name" id="example3cols1Input" placeholder="Nom de la categorie">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label class="form-control-label" for="example3cols3Input">Prix de l'application  @error('price')
                <small class="text-danger">{{$message}}</small>
              @enderror</label>
              <input type="number" name="price" class="form-control" id="example3cols3Input" >
            </div>
          </div>
        </div>


        <div class="row">
            <div class="col-md-6">
              <div class="form-group">

                <label class="form-control-label" for="example3cols1Input" >Url de  l'application
                    @error('url')
                  <small class="text-danger">{{$message}}</small>
                  @enderror

                </label>
                <input type="text" class="form-control" name="url"   placeholder=" url demo de l'application ">
              </div>
            </div>

            <div class="col-md-6">
                <div class="custom-control custom-checkbox mb-3">

                    <select name="popular" id="" class="form-control">
                        <option value="Oui">Oui </option>
                        <option value="Nom">Nom</option>
                    </select>
                </div>



              </div>
          </div>




          <div class="row">
            <div class="col-md-12">
              <div class="form-group">

                <label class="form-control-label" for="example3cols1Input" >Catégorie de   l'application
                    @error('categorie')
                  <small class="text-danger">{{$message}}</small>
                  @enderror

                </label>
                <select name="categorie" id="" class="form-control">
                    @foreach ( $category as $value )
                    <option value="{{$value->id}}">{{$value->name}}</option>
                    @endforeach

                </select>
              </div>
            </div>
          </div>


        <div class="row">
          <div class="col-sm-12 col-md-12">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input">Déscription de l'application </label>
                <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
          </div>


        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <button class="btn btn-primary">Enregister la categorie</button>
            </div>
          </div>
        </div>
      </div>
    </form>
    </div>


  </div>

@endsection
