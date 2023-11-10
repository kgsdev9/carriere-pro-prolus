@extends('admin.layout')

@section('admin')
<div class="content-wrapper" style="min-height: 2080.12px;">
    <div class="card mb-4">
      <!-- Card header -->
      <div class="card-header">
        <h3 class="mb-0">Nouveau CV</h3>
      </div>
      <!-- Card body -->
        <form action="{{route('cvs.store')}}" method="post" enctype="multipart/form-data">
            @csrf
      <div class="card-body">
        <!-- Form groups used in grid -->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">

              <label class="form-control-label" for="example3cols1Input">Libellé du modéle
                @error('title')
                <small class="text-danger">{{$message}}</small>

                @enderror
              </label>
              <input type="text" class="form-control" name="title" id="example3cols1Input" placeholder="Titre du cv" value="{{old('title')}}">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label class="form-control-label" for="example3cols3Input">Image du modéle(Png, Jpg, Jpeg) @error('image')
                <small class="text-danger">{{$message}}</small>

                @enderror</label>
              <input type="file" name="image" class="form-control" id="example3cols3Input" >
            </div>
          </div>
        </div>


        <div class="row">
            <div class="col-md-6">
              <div class="form-group">

                <label class="form-control-label" for="example3cols1Input">
                    @error('price')
                    <small>{{$message}}</small>

                    @enderror

                    Prix (Ne rien marquer si le cv est gratuit)</label>
                <input type="number" class="form-control" name="price" id="example3cols1Input" placeholder="Prix du cv" value="{{old('price')}}">
              </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label class="form-control-label" for="example4cols1Input">
                      Catégorie du cv
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


          </div>

          <div class="row">


            <div class="col-sm-12 col-md-12">
                <div class="form-group">
                  <label class="form-control-label" for="example4cols1Input">
                    Téleverser le cv (Docs, docx, pdf)
                    @error('document')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </label>
                        <input type="file" name="document">
                </div>
              </div>


          </div>
        <div class="row">
          <div class="col-sm-12 col-md-12">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input"> Déscription du cv
                @error('description')
                <small class="text-danger">{{$message}}</small>
                @enderror

              </label>
                <textarea name="description" id="" cols="30" rows="10" class="form-control">
                    {{old('description')}}
                </textarea>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <button class="btn btn-primary">Enregister le cv  </button>
            </div>
          </div>
        </div>
      </div>
    </form>
    </div>
  </div>

@endsection
