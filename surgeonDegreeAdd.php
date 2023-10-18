<?php include_once 'top_header.php';?>
		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
				<!-- begin:: Aside -->

					<?php include_once 'Menu.php';?>

				<!-- end:: Aside -->
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

					<!-- begin:: Header -->
					
						<?php include_once 'Header.php';?>

					<!-- end:: Header -->
					<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

						<!-- begin:: Content Head -->
						
						<div class="kt-subheader   kt-grid__item" id="kt_subheader">
							<div class="kt-subheader__main">
								<h2 class="kt-subheader__title">Surgeon's Degree</h2>
							</div>
							
						</div>
							

						<!-- end:: Content Head -->

						<!-- begin:: Content -->
						<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">

							<!--Begin::Dashboard 1-->

								<div class="kt-portlet">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Surgeon's Degree
												</h3>
											</div>
										</div>

										<!--begin::Form-->
										<form class="kt-form kt-form--label-right">
											<div class="kt-portlet__body">
												
												<div class="form-group row">
													<label for="example-text-input" class="col-2 col-form-label">Doctors Degree</label>
													<div class="col-10">
														<input class="form-control" type="text" name="" placeholder="MBBS" id="example-text-input">
													</div>
												</div>
												
										        <div class="form-group row">
													<label for="example-text-input" class="col-2 col-form-label">Status</label>
													<div class="kt-radio-list">
														<label class="kt-radio kt-radio--bold kt-radio--success">
															<input type="radio" name="radio6"> Yes	
															<span></span>
														</label>
														<label class="kt-radio kt-radio--bold kt-radio--brand">
															<input type="radio" name="radio6"> No		
															<span></span>
														</label>
													</div>
												</div>											
												<div class="kt-portlet__foot kt-form__actions row ">
												<div class="col-12" align="center">
													<button type="Submit" class="btn btn-success">Save</button>&nbsp;&nbsp;&nbsp;
													<button type="Reset" class="btn btn-outline-brand btn-pill">Reset</button>
												</div>
												</div>

										</div>
										</form>
									</div>
									<!--end::Portlet-->








							<!--End::Dashboard 1-->
						</div>

						<!-- end:: Content -->
					</div>

					<!-- begin:: Footer -->
					
					<?php include_once 'Footer.php';?>

					<!-- end:: Footer -->
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!-- begin::Scrolltop -->
		<div id="kt_scrolltop" class="kt-scrolltop">
			<i class="fa fa-arrow-up"></i>
		</div>

		<!-- end::Scrolltop -->

		

		<!-- begin::Global Config(global config for global JS sciprts) -->
		<?php include_once 'footer_script.php';?>
		<!--end::Global App Bundle -->
	</body>

	<!-- end::Body -->
</html>