@extends('admin.layout')

@section('admin')
<div class="container-fluid mt-2">

    <div class="card">
      <!-- Card header -->
      <div class="card-header border-0">
        <div class="row">
          <div class="col-6">
            <h3 class="mb-0">liste des applications </h3>
          </div>
          <div class="col-6 text-right">
            <a href="{{route('apps.form')}}" class="btn btn-sm btn-neutral btn-round btn-icon" data-toggle="tooltip" data-original-title="Nouvelle application">
              <span class="btn-inner--icon"><i class="fas fa-user-edit"></i></span>
              <span class="btn-inner--text">Nouvelle Application </span>
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
              <th>Prix </th>
              <th>Url </th>
              <th>Populaire </th>
              <th>Vente </th>
              <th>Catégories </th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ( $ressource as $cate )
            <tr>
              <td class="table-user">

                <b>{{$cate->title}}</b>
              </td>
              <td>
                <span class="text-muted">{{$cate->price}}FCFA</span>
              </td>
              <td>
                <a href="{{$cate->url}}" class="font-weight-bold" target="_blank">Lien Demo </a>
              </td>

              <td>
                <span class="text-muted">{{$cate->popular}}</span>
              </td>

              <td>
                <span class="text-muted">{{$cate->total_buye}} Vente(s) </span>
              </td>
              <td>
                <span class="text-muted"> Applications </span>
              </td>

              <td class="table-actions">
                <a href="{{route('apps.edit', $cate->id)}}" class="table-action" data-toggle="tooltip" data-original-title="Editer">
                  <i class="fas fa-user-edit"></i>
                </a>
                <a href="{{route('apps.destroy', $cate->id)}}" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Supprimer" onclick="return confirm('etes vous sures ?')">
                  <i class="fas fa-trash"></i>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
                {{  $ressource->links()}}
      </div>
    </div>




  </div>



@endsection
