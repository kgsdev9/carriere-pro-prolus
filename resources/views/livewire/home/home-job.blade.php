<div>

    <section class="jumbotron text-center mt-6">
        <div class="container">
          <h1 class="jumbotron-heading">Annuaire  emploi </h1>
          <p class="lead ">
            Decroche ton premier job et progresse vers ton avenir radieu</p>

        </div>
      </section>



        <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            @foreach ($allJobs as  $job)


            <div class="col-md-3 box-shadow">
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                    <h5>{{$job->title}}</h5>
                  <p class="card-text">{{$job->mini_description}}.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a  href="{{route('detail.emploi', $job->slug)}}"  hx-boost="true" class="btn btn-sm btn-outline-secondary">Consulter</a>
                    </div>
                    <small class="text-muted">{{$job->created_at}}</small>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    <main>


    </main>
</div>
