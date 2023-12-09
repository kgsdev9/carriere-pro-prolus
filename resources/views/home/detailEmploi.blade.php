@extends('layout.app')
@section('title', $detail->title)
@section('content')
<div class="bg-light rounded py-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                <div class="jbd-01 d-flex align-items-center justify-content-between">
                    <div class="jbd-flex d-flex align-items-center justify-content-start">
                        <div class="jbd-01-thumb">
                            <img src="https://via.placeholder.com/120x120" class="img-fluid" width="100" alt="">
                        </div>
                        <div class="jbd-01-caption pl-3">
                            <div class="tbd-title"><h4 class="mb-0 ft-medium fs-md">{{$detail->title}}<img src="assets/img/verify.svg" class="ml-1" width="12" alt=""></h4></div>
                            <div class="jbl_location mb-3">
                                <span><i class="lni lni-map-marker mr-1"></i>San Francisco, USA</span>
                                <span class="ml-3"><i class="lni lni-briefcase mr-1"></i>InVision</span>
                                <span class="ml-3"><i class="lni lni-money-protection mr-1"></i>$35k-50k PA</span>
                            </div>
                            <div class="jbl_info01">
                                <span class="px-2 py-1 ft-medium medium text-light theme-bg rounded mr-2">Full Time</span>
                                <span class="px-2 py-1 ft-medium medium text-light bg-warning rounded mr-2">Urgent</span>
                                <span class="px-2 py-1 ft-medium medium text-light bg-purple rounded">Urgent</span>
                            </div>
                        </div>
                    </div>
                    <div class="jbd-01-right text-right">
                        <div class="jbl_button mb-2"><a href="javascript:void(0);" class="btn btn-md rounded theme-bg-light theme-cl fs-sm ft-medium">Apply This Job</a></div>
                        <div class="jbl_button"><a href="javascript:void(0);" class="btn btn-md rounded bg-white border fs-sm ft-medium">View Company</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <section class="py-5">

				<div class="container">
					<div class="row">

						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
							<div class="rounded mb-4">
								<div class="jbd-01 pr-3">
									<div class="jbd-details mb-4">
										<h5 class="ft-medium fs-md">Job description</h5>

										<p>{!! $detail->description !!}</p>

									</div>







								</div>

								<div class="jbd-02 pt-4 pr-3">

									<div class="jbd-02-flex d-flex align-items-center justify-content-between">
										<div class="jbd-02-social">
											<ul class="jbd-social">
												<li><i class="ti-sharethis"></i></li>
												<li><a href="javascript:void(0);"><i class="ti-facebook"></i></a></li>
												<li><a href="javascript:void(0);"><i class="ti-twitter"></i></a></li>
												<li><a href="javascript:void(0);"><i class="ti-linkedin"></i></a></li>
												<li><a href="javascript:void(0);"><i class="ti-instagram"></i></a></li>
											</ul>
										</div>
										<div class="jbd-02-aply">
											<div class="jbl_button mb-2">
												<a href="#" class="btn btn-md rounded gray fs-sm ft-medium mr-2">Save This Job</a>
												<a href="#" class="btn btn-md rounded theme-bg text-light fs-sm ft-medium">Apply Job</a>
											</div>
										</div>
									</div>

								</div>
							</div>

						</div>

						<!-- Sidebar -->
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
							<div class="jb-apply-form bg-white shadow rounded py-3 px-4 box-static">
								<h4 class="ft-medium fs-md mb-3">Intrested in this job?</h4>

								<form class="_apply_form_form">

									<div class="form-group">
										<label class="text-dark mb-1 ft-medium medium">First Name</label>
										<input type="text" class="form-control" placeholder="First Name">
									</div>

									<div class="form-group">
										<label class="text-dark mb-1 ft-medium medium">Your Email</label>
										<input type="email" class="form-control" placeholder="themezhub@gmail.com">
									</div>

									<div class="form-group">
										<label class="text-dark mb-1 ft-medium medium">Phone Number:</label>
										<input type="text" class="form-control" placeholder="+91 245 256 2548">
									</div>

									<div class="form-group">
										<label class="text-dark mb-1 ft-medium medium">Upload Resume:<small class="medium ft-medium">pdf, doc, docx</small></label>
										<div class="custom-file">
										  <input type="file" class="custom-file-input" id="customFile">
										  <label class="custom-file-label" for="customFile">Choose file</label>
										</div>
									</div>

									<div class="form-group">
										<div class="terms_con">
											<input id="aa3" class="checkbox-custom" name="Coffee" type="checkbox">
											<label for="aa3" class="checkbox-custom-label">I agree to pirvacy policy</label>
										</div>
									</div>

									<div class="form-group">
										<button type="button" class="btn btn-md rounded theme-bg text-light ft-medium fs-sm full-width">Apply For This Job</button>
									</div>

								</form>
							</div>
						</div>

					</div>
				</div>

    </section>


@endsection
