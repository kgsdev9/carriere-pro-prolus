<div>
    <div class="col-12">
        <!-- Blog list table START -->
        <div class="card border bg-transparent rounded-3">
            <!-- Card header START -->
            <div class="card-header bg-transparent border-bottom p-3">
                <div class="d-sm-flex justify-content-between align-items-center">
                    <h5 class="mb-2 mb-sm-0">
                        Job listes
                        <div id="summernote"></div>
                    </h5>
                    <a href="{{route('job.create')}}">Créer </a>
                    <button  wire:click="activeMode()" class="btn btn-sm btn-primary mb-0">Nouveau job </button>
                </div>
            </div>
            <!-- Card header END -->
            <!-- Card body START -->
            <div class="card-body">
                <!-- Search and select START -->
                <div class="row g-3 align-items-center justify-content-between mb-3">
                    <!-- Search -->
                    <div class="col-md-8">
                        <form class="rounded position-relative">
                            <input class="form-control pe-5 bg-transparent" type="search" wire:model="search" placeholder="Rechercher" aria-label="Rechercher">
                            <button class="btn bg-transparent border-0 px-2 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 "></i></button>
                        </form>
                    </div>
                    <!-- Select option -->
                    <div class="col-md-3">
                        <!-- Short by filter -->
                        <form>
                            <select class="form-select z-index-9 bg-transparent" aria-label=".form-select-sm">
                                <option value="">Sort by</option>
                                <option>Free</option>
                                <option>Newest</option>
                                <option>Oldest</option>
                            </select>
                        </form>
                    </div>
                </div>
                <!-- Search and select END -->
                <!-- Blog list table START -->
                <div class="table-responsive border-0">
                    <table class="table align-middle p-4 mb-0 table-hover table-shrink">
                        <!-- Table head -->
                        <thead class="table-dark">
                            <tr>
                                <th scope="col" class="border-0 rounded-start">
                                   Titre
                                </th>
                                <th scope="col" class="border-0">
                                    Lieu
                                </th>
                                <th scope="col" class="border-0">
                                    Date
                                </th>
                                <th scope="col" class="border-0">
                                    Categories
                                </th>
                                <th scope="col" class="border-0">
                                    Status
                                </th>
                                <th scope="col" class="border-0 rounded-end">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <!-- Table body START -->
                        <tbody class="border-top-0">
                            <!-- Table item -->
                            @foreach ($allJobs as $job)


                            <tr>
                                <!-- Table data -->
                                <td>
                                    <h6 class="course-title mt-2 mt-md-0 mb-0">
                                        <a href="#">{{$job->title}}</a>
                                    </h6>
                                </td>
                                <!-- Table data -->
                                <td>
                                    <h6 class="mb-0">
                                        <a href="#">{{$job->lieu->name}}</a>
                                    </h6>
                                </td>
                                <!-- Table data -->
                                <td>
                                    {{$job->created_at->diffForHumans()}}
                                </td>
                                <!-- Table data -->
                                <td>
                                    <a href="#" class="badge text-bg-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>{{$job->family->name}}</a>
                                </td>
                                <!-- Table data -->
                                <td>
                                    @if($job->publish_at =! null)
                                    <span class="badge bg-success bg-opacity-10 text-success mb-2">Publiée</span>
                                    @else
                                    <span class="badge bg-danger bg-opacity-10 text-danger mb-2">Pas encore</span>
                                    @endif
                                </td>
                                <!-- Table data -->
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="bi bi-trash"></i></a>
                                        <a href="dashboard-post-edit.html" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            <!-- Table item -->


                        </tbody>
                        <!-- Table body END -->
                    </table>
                </div>
                <!-- Blog list table END -->
                <!-- Pagination START -->
                <div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-4 mt-sm-3">
                    <!-- Content -->
                    <p class="mb-sm-0 text-center text-sm-start">

                    </p>
                    <!-- Pagination -->
                    <nav class="mb-sm-0 d-flex justify-content-center" aria-label="navigation">
                        <ul class="pagination pagination-sm pagination-bordered mb-0">
                           {{$allJobs->links()}}
                        </ul>
                    </nav>
                </div>
                <!-- Pagination END -->
            </div>
        </div>

        <!-- Blog list table END -->
    </div>

</div>


