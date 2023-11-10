@extends('admin.layout')

@section('admin')
<div class="content-wrapper" style="min-height: 2080.12px;">
    <div class="card mb-4">
      <!-- Card header -->
      <div class="card-header">
        <h3 class="mb-0">Edition de   Article  </h3>
      </div>
      <!-- Card body -->
        <form action="{{route('blogs.update', $ressource->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
      <div class="card-body">
        <!-- Form groups used in grid -->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">

              <label class="form-control-label" for="example3cols1Input">Titre de l'article
                @error('title')
                <small class="text-danger">{{$message}}</small>

                @enderror
              </label>
              <input type="text" class="form-control" name="title" id="example3cols1Input" placeholder="Titre du cv" value="{{$ressource->title}}">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label class="form-control-label" for="example3cols3Input">Image de  l'article  @error('image')
                <small class="text-danger">{{$message}}</small>

                @enderror</label>
              <input type="file" name="image" class="form-control" id="example3cols3Input"  value="{{$ressource->image}}">
            </div>
          </div>
        </div>


        <div class="row">

            <div class="col-md-12">
                <div class="form-group">
                  <label class="form-control-label" for="example4cols1Input">
                      Catégorie de l'article
                      @error('category_id')
                      <small class="text-danger">{{$message}}</small>
                      @enderror


                  </label>
                      <select name="category_id" id="" class="form-control">
                          <option value="{{$ressource->category->id}}">{{$ressource->category->name}}</option>
                      </select>
                </div>
              </div>


          </div>


        <div class="row">
          <div class="col-sm-12 col-md-12">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input">
                @error('one_section')
                <small class="text-danger">{{$message}}</small>
                @enderror

              </label>
                <textarea name="mini_description" id="" cols="30" rows="2" class="form-control">
               {{  $ressource->mini_description}}
                </textarea>
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
                 <textarea name="description" class="form-control" id="summernote" cols="30" rows="10">{{$ressource->description}}</textarea>
            </div>
          </div>


        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <button class="btn btn-primary">Enregister les  modifications  </button>
            </div>
          </div>
        </div>
      </div>
    </form>
    </div>
  </div>

@endsection
