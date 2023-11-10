@extends('admin.layout')

@section('admin')
<div class="container-fluid mt-2">

    <div class="card">
      <!-- Card header -->
      <div class="card-header border-0">
        <div class="row">
          <div class="col-6">
            <h3 class="mb-0">liste des types de sujets</h3>
          </div>
          <div class="col-6 text-right">
            <a href="{{route('book.form')}}" class="btn btn-sm btn-neutral btn-round btn-icon" data-toggle="tooltip" data-original-title="Edit product">
              <span class="btn-inner--icon"><i class="fas fa-user-edit"></i></span>
              <span class="btn-inner--text">Nouveau Libre</span>
            </a>
          </div>
        </div>
      </div>
      <!-- Light table -->
      <div class="table-responsive">
        <table class="table align-items-center table-flush table-striped">
          <thead class="thead-light">
            <tr>
              <th>Nom </th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ( $book as $cate )
            <tr>
              <td class="table-user">
                <img src="{{asset('categorie/images/'.$cate->image)}}" class="avatar rounded-circle mr-3">
                <b>{{$cate->title}}</b>
              </td>
              <td class="table-actions">
                <a href="{{route('edit.typesujet', $cate->id)}}" class="table-action" data-toggle="tooltip" data-original-title="Editer">
                  <i class="fas fa-user-edit"></i>
                </a>
                <a href="{{route('destroy.typesujet', $cate->id)}}" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Supprimer" onclick="return confirm('etes vous sures ?')">
                  <i class="fas fa-trash"></i>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
