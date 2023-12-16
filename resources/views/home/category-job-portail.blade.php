@extends('layout.layout')
@section('content')
<section class="py-lg-8 pb-8">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="offset-xl-2 col-xl-8 col-md-12 col-12">
				<div class="text-center mb-8">
					<h2 class="h1 fw-bold mt-3">Emploi {{$categoryname}} .</h2>
				</div>
				<!-- row -->
				<!-- button -->
			</div>
		</div>
	</div>
	<div class="album py-5 bg-white">
		<div class="container">
			<div class="row">
                @foreach ($job as $article)
				<div class="col-md-3 box-shadow">
					<div class="card mb-4 box-shadow">
						<div class="card-body">
							<h5>
								{{$article->title}}
							</h5>
							<p class="card-text">
                                {{$article->mini_description}}
							</p>
							<div class="d-flex justify-content-between align-items-center">
								<div class="btn-group">
									<a href="{{route('detail.emploi', $article->slug)}}" hx-boost="true" class="btn btn-sm btn-outline-secondary">Consulter</a>
								</div>
								<small class="text-muted">
                                    {{$article->created_at->diffForHumans()}}
								</small>
							</div>
						</div>
					</div>
				</div>
                @endforeach
			</div>
		</div>
	</div>
	<div class="mt-6 text-center">
		<a href="http://localhost:8000/annuaire-des-emplois" hx-boost="true" class="btn btn-outline-primary">Consulter plus </a>
	</div>
</section>
@endsection
