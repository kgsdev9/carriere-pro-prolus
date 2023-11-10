@extends('admin.layout')

@section('admin')

<div class="content-wrapper" style="min-height: 2080.12px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Annuaire  des Employeurs   </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Accueil  </a></li>
            <li class="breadcrumb-item active">Employeurs</li>
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
                        <h3 class="card-title">Liste des Employeurs </h3>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('employeur.create') }}" class="btn btn-primary">Nouvelle Employeur</a>
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
                  <th class="sorting">Libellé </th>
                  <th class="sorting">Lieu</th>
                  <th class="sorting">Image</th>
                  <th class="sorting">Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($employeurs as  $value)


                <tr class="odd">
                  <td>{{ $value->designation }}</td>

                  <td>{{ $value->lieu }}</td>
                  <td>  <img src="{{asset('employeurs/image/'.$value->logo) }}" alt="" style="height:50px; width:50px;"> </td>


                </td>


                  <td>
                  <a href="{{ route('employeur.edit', $value->id)}}" class="text-dark"> <i class="fa fa-edit"></i></a>
                  <a href="{{ route('employeur.destroy', $value->id)}}" class="text-dark"> <i class="fa fa-trash"></i></a>
            
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
