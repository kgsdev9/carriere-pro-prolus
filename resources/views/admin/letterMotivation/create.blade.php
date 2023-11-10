@extends('admin.layout')

@section('admin')
<div class="content-wrapper" style="min-height: 2080.12px;">
    <div class="card mb-4">
      <!-- Card header -->
      <div class="card-header">
        <h3 class="mb-0">Nouvelle Lettre de motivation </h3>
      </div>
      <!-- Card body -->
        <form action="{{route('letter.store')}}" method="post" enctype="multipart/form-data">
            @csrf
      <div class="card-body">
        <!-- Form groups used in grid -->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                @error('title')
                <small>{{$message}}</small>

                @enderror
              <label class="form-control-label" for="example3cols1Input">Libéllé de la lettre de motivation</label>
              <input type="text" class="form-control" name="title" id="example3cols1Input" value="{{old('title')}}" placeholder="libellé de la lettre de motivation">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label class="form-control-label" for="example3cols3Input">Categorie @error('type_letter_id')
                <small class="text-danger">{{$message}}</small>

              @enderror</label>
                <select name="category_id"  class="form-control">

                    <option value="">----------</option>
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
                <label class="form-control-label" for="example4cols1Input">Document (docx, doc) @error('image')
                    <small class="text-danger">{{$message}}</small>

                @enderror</label>
                <input type="file" name="image" class="form-control">
              </div>
            </div>
          </div>


        <div class="row">
          <div class="col-sm-12 col-md-12">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input">Description de la lettre de motivation  @error('description')

                    {{$message}}
              @enderror</label>
                <textarea name="description" id="" cols="30" rows="2" class="form-control"> {{old('description')}}</textarea>
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
