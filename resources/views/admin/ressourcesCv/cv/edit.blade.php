@extends('admin.layout')

@section('admin')
<div class="content-wrapper" style="min-height: 2080.12px;">
    <div class="card mb-4">
      <!-- Card header -->
      <div class="card-header">
        <h3 class="mb-0">Editer le cv</h3>
      </div>
      <!-- Card body -->
        <form action="{{route('cvs.update',$ressources->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
      <div class="card-body">
        <!-- Form groups used in grid -->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                @error('name')
                <small class="text-danger">{{$message}}</small>

                @enderror
              <label class="form-control-label" for="example3cols1Input">Nom de la categorie</label>
              <input type="text" class="form-control" name="title" id="example3cols1Input" value="{{$ressources->title}}">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label class="form-control-label" for="example3cols3Input">Image de la categorie  @error('image')
                <small class="text-danger">{{$message}}</small>

                @enderror</label>
              <input type="file" name="image" class="form-control" id="example3cols3Input" value="{{$ressources->image}}">
            </div>
          </div>
        </div>


        <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                  @error('name')
                  <small>{{$message}}</small>

                  @enderror
                <label class="form-control-label" for="example3cols1Input">Prix</label>
                <input type="number" class="form-control" name="price" id="example3cols1Input" placeholder="Prix du cv" value="{{$ressources->price}}">
              </div>
            </div>

            <div class="col-sm-5 col-md-6">
                <div class="form-group">
                  <label class="form-control-label" for="example4cols1Input"> Categorie</label>
                      <select name="category_id" id="" class="form-control">
                          @foreach ($category as $value )
                          <option value="{{$value->id}}">{{$value->name}}</option>
                          @endforeach
                      </select>
                </div>
              </div>

          </div>



          <div class="row">

            <div class="col-sm-5 col-md-6">
                <div class="form-group">
                  <label class="form-control-label" for="example4cols1Input">Document (Type (Cxs, docs)) <a href="{{asset('cv/document/'.$ressources->document)}}">lire </a></label>
                        <input type="file" name="document" class="form-control" value="{{$ressources->document}}">
                </div>
              </div>

                    <embed src="{{asset('cv/document/'.$ressources->document)}}" type="">



          </div>


        <div class="row">
          <div class="col-sm-12 col-md-12">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input"> Déscription  de la categorie</label>
                <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$ressources->description}}</textarea>
            </div>
          </div>


        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <button class="btn btn-primary">Enregister le cv</button>
            </div>
          </div>
        </div>
      </div>
    </form>
    </div>


  </div>

@endsection
