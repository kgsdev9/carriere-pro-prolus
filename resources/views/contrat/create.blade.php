@extends('admin.layout')

@section('admin')

<div class="content-wrapper" style="min-height: 2080.12px;">
    <div class="card mb-4">
      <!-- Card header -->
      <div class="card-header">
        <h3 class="mb-0">Nouveau Contrat </h3>
      </div>
      <!-- Card body -->
        <form action="{{route('contrat.store')}}" method="post" >
            @csrf
      <div class="card-body">
        <!-- Form groups used in grid -->
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">

              <label class="form-control-label" for="example3cols1Input" >Nom du contrat
                                    @error('name')
                <small class="text-danger">{{$message}}</small>

                @enderror

              </label>
              <input type="text" class="form-control" name="name" id="example3cols1Input" placeholder="Nom du contrat " value="{{old('name')}}">
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <button class="btn btn-primary">Enregister le contrat </button>
            </div>
          </div>
        </div>
      </div>
    </form>
    </div>


  </div>


@endsection
