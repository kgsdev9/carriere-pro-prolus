@extends('admin.layout')

@section('admin')
<div class="content-wrapper" style="min-height: 2080.12px;">
    <div class="card mb-4">
      <!-- Card header -->
      <div class="card-header">
        <h3 class="mb-0">Edition de Employeur  </h3>
      </div>
      <!-- Card body -->
        <form action="{{route('employeur.update', $ressource->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
      <div class="card-body">
        <!-- Form groups used in grid -->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">

              <label class="form-control-label" for="example3cols1Input">libellé de l'entreprise
                @error('designation')
                <small class="text-danger">{{$message}}</small>

                @enderror
              </label>
              <input type="text" class="form-control" name="designation" id="example3cols1Input" placeholder="Libelle de l'entreprise" value="{{old('designation') ?? $ressource->designation}}">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label class="form-control-label" for="example3cols3Input">Logo de l'employeur  @error('image')
                <small class="text-danger">{{$message}}</small>

                @enderror</label>
              <input type="file" name="image" class="form-control" id="example3cols3Input" >
            </div>
          </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">

                  <label class="form-control-label" for="example3cols1Input">Emplacement de l'entreprise
                    @error('lieu')
                    <small class="text-danger">{{$message}}</small>

                    @enderror
                  </label>
                  <input type="text" class="form-control" name="lieu" id="example3cols1Input" placeholder="Abidjan Cote d'ivoire" value="{{old('lieu') ?? $ressource->lieu}}">
                </div>
              </div>
          </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <button class="btn btn-primary">Enregister l'employeur  </button>
            </div>
          </div>
        </div>
      </div>
    </form>
    </div>
  </div>

@endsection
