@extends('admin.layout')

@section('admin')

<div class="content-wrapper" style="min-height: 2080.12px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Annuaire  Des Lettre de motivations   </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Accueil  </a></li>
            <li class="breadcrumb-item active">Lettre de motivation  </li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">



          <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="card-title">Liste des Lettre de motivation  </h3>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('letter.create') }}" class="btn btn-primary">Nouvelle LMotivation</a>
                    </div>
                </div>


            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6">
                <div class="dt-buttons btn-group flex-wrap">
                       </div>

                      </div>

                      <div class="col-sm-12 col-md-6">
                        <div id="example1_filter" class="dataTables_filter">

                              </div>
                            </div>
                          </div>
                          <div class="row">
                       <div class="col-sm-12">

                <table id="example" class="table table-bordered table-striped dataTable dtr-inline collapsed">
                <thead>

                <tr>
                  <th class="sorting">Libelle </th>
                  <th class="sorting">Contenu</th>
                  <th class="sorting">Catégorie</th>
                  <th class="sorting">Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($letter as  $value)


                <tr class="odd">
                  <td class="dtr-control sorting_1" tabindex="0">{{ $value->name }}</td>

                  <td>{{Str::limit($value->contenu, 15) }}</td>

                  <td>
                    {{ $value->category->name }}
                </td>


                  <td>
                  <a href="{{ route('letter.edit', $value->id)}}" class="text-dark"> <i class="fa fa-edit"></i></a>
                  <form action="{{route('letter.destroy', $value->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Voulez-vous vraiment supprimer ?')"><i class="fa fa-trash"></i></button>
                </form>
                 



                  </td>
                </tr>

                @endforeach
               </tbody>

              </table>

            </div>

          </div>



        </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>


@endsection
