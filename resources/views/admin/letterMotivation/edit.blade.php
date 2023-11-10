@extends('admin.layout')

@section('admin')
<div class="content-wrapper" style="min-height: 2080.12px;">
    <div class="card mb-4">
      <!-- Card header -->
      <div class="card-header">
        <h3 class="mb-0">Edition  Lettre de motivation </h3>
      </div>
      <!-- Card body -->
        <form action="{{route('letter.update', $ressource->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
      <div class="card-body">
        <!-- Form groups used in grid -->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                @error('name')
                <small>{{$message}}</small>

                @enderror
              <label class="form-control-label" for="example3cols1Input">Nom de la categorie</label>
              <input type="text" class="form-control" name="title" id="example3cols1Input" placeholder="Nom de la categorie" value="{{$ressource->name}}">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label class="form-control-label" for="example3cols3Input">Categorie</label>
                <select name="type_letter_id" id="" class="form-control">
                    @foreach ($typeletter as $value )
                    <option value="{{$value->id}}">{{$value->name}}</option>
                    @endforeach
                </select>
            </div>
          </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-12">
              <div class="form-group">
                <label class="form-control-label" for="example4cols1Input">Document </label>
                <input type="file" name="image" class="form-control" value="{{$ressource->image}}">
              </div>
            </div>
          </div>


        <div class="row">
          <div class="col-sm-12 col-md-12">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input">Contenu de la lettre de motivation</label>
                <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$ressource->contenu}} </textarea>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <button class="btn btn-primary">Enregister les motivations</button>
            </div>
          </div>
        </div>
      </div>
    </form>
    </div>


  </div>

@endsection
