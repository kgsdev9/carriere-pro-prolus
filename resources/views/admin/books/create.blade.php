@extends('admin.layout')

@section('admin')
<div class="container-fluid mt-2">
    <div class="card mb-4">
      <!-- Card header -->
      <div class="card-header">
        <h3 class="mb-0">Nouveau Livre </h3>
      </div>
      <!-- Card body -->
        <form action="{{route('book.poste')}}" method="post" enctype="multipart/form-data">
            @csrf
      <div class="card-body">
        <!-- Form groups used in grid -->
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
                @error('name')
                <small>{{$message}}</small>

                @enderror
              <label class="form-control-label" for="example3cols1Input">Titre du livre</label>
              <input type="text" class="form-control" name="title" id="example3cols1Input" placeholder="Nom de la categorie">
            </div>
          </div>


        </div>


        <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                  @error('name')
                  <small>{{$message}}</small>
                  @enderror
                <label class="form-control-label" for="example3cols1Input">Téleverser le document</label>
                <input type="file" class="form-control" name="document" id="example3cols1Input" placeholder="Nom de la categorie">
              </div>
            </div>


          </div>


          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                  @error('name')
                  <small>{{$message}}</small>

                  @enderror
                <label class="form-control-label" for="example3cols1Input">Catégorie du livre du livre</label>
                    <select name="category_id" id="" class="form-control">
                        @foreach ($category as $value )
                        <option value="">{{$value->name}}</option>
                        @endforeach

                    </select>
              </div>
            </div>


          </div>


          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                  @error('name')
                  <small>{{$message}}</small>

                  @enderror
                <label class="form-control-label" for="example3cols1Input">Description du livre</label>
             <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
              </div>
            </div>


          </div>


        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <button class="btn btn-primary">Enregister</button>
            </div>
          </div>
        </div>
      </div>
    </form>
    </div>


  </div>

@endsection













