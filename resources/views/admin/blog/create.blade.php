@extends('admin.layout')

@section('admin')
<div class="content-wrapper" style="min-height: 2080.12px;">
    <div class="card mb-4">
      <!-- Card header -->
      <div class="card-header">
        <h3 class="mb-0">Nouvel  Article  </h3>
      </div>
      <!-- Card body -->
        <form action="{{route('blogs.store')}}" method="post" enctype="multipart/form-data">
            @csrf
      <div class="card-body">
        <!-- Form groups used in grid -->
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">

              <label class="form-control-label" for="example3cols1Input">Titre de l'article
                @error('title')
                <small class="text-danger">{{$message}}</small>

                @enderror
              </label>
              <input type="text" class="form-control" name="title" id="example3cols1Input" placeholder="Title de l'article" value="{{old('title')}}">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label class="form-control-label" for="example3cols3Input">Image de  l'article  @error('image')
                <small class="text-danger">{{$message}}</small>

                @enderror</label>
              <input type="file" name="image" class="form-control" id="example3cols3Input" >
            </div>
          </div>

        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  <label class="form-control-label" for="example4cols1Input">
                      Catégorie de l'article
                      @error('category_id')
                      <small class="text-danger">{{$message}}</small>
                      @enderror


                  </label>
                      <select name="category_id" id="" class="form-control">
                          <option value="">----------</option>
                          @foreach ($category as $value )
                          <option value="{{$value->id}}">{{$value->name}}</option>
                          @endforeach

                      </select>
                </div>
              </div>


              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-control-label" for="example4cols1Input">
                     Description miniale de l'article
                      @error('category_id')
                      <small class="text-danger">{{$message}}</small>
                      @enderror

                  </label>
                     <textarea name="mini_description" class="form-control" id="blog" cols="30" rows="2"></textarea>
                </div>
              </div>


              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-control-label" for="example4cols1Input">
                      Description  de l'article
                      @error('category_id')
                      <small class="text-danger">{{$message}}</small>
                      @enderror
                  </label>
                     <textarea name="description" class="form-control" id="#basic-example" cols="30" rows="10"></textarea>
                </div>
              </div>
          </div>


          <br>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <button class="btn btn-primary">Enregister l'article  </button>
            </div>
          </div>
        </div>
      </div>
    </form>
    </div>
  </div>


@endsection
