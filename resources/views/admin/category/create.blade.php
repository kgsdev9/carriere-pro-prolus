@extends('admin.layout')

@section('admin')
<div class="content-wrapper" style="min-height: 2080.12px;">
    <div class="card mb-4">
      <!-- Card header -->
      <div class="card-header">
        <h3 class="mb-0">Nouvelle Categorie</h3>
      </div>
      <!-- Card body -->
        <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
            @csrf
      <div class="card-body">
        <!-- Form groups used in grid -->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">

              <label class="form-control-label" for="example3cols1Input" >Nom de la categorie
                                    @error('name')
                <small class="text-danger">{{$message}}</small>

                @enderror

              </label>
              <input type="text" class="form-control" name="name" id="example3cols1Input" placeholder="Nom de la categorie">
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-sm-12 col-md-12">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input">Déscription de la categorie</label>
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
