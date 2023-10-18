<?php include_once 'top_header.php';?>
		
		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
				<!-- begin:: Aside -->

					<?php include_once 'Menu.php';?>

				<!-- end:: Aside -->
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

					<!-- begin:: Header -->
					<?php 
					include_once 'header.php';
					?>

					<!-- end:: Header -->
					<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

					
					<!-- begin:: Content Head -->
					<div class="kt-subheader   kt-grid__item" id="kt_subheader">
						<div class="kt-subheader__main"><h3>
							<span class="kt-subheader__icon fa fa-warehouse"></span></h3>&nbsp;&nbsp;
							<span class="kt-subheader__title"><h3><b>Dashboard</b></h3></span>
						</div>
                    <div class="kt-subheader__toolbar">
                     
                    </div>
                </div>
						
						<!-- end:: Content Head -->

						<!-- begin:: Content -->
						<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">

							<!--Begin::Dashboard 1-->

							<!--Begin::Section-->
							<div class="row">
								<div class="col-xl-4">

									<!--begin:: Widgets/Activity-->
									<div class="kt-portlet kt-portlet--fit kt-portlet--head-lg kt-portlet--head-overlay kt-portlet--skin-solid kt-portlet--height-fluid">
										<div class="kt-portlet__head kt-portlet__head--noborder kt-portlet__space-x">
											
											
										</div>
										<div class="kt-portlet__body kt-portlet__body--fit">
											<div class="kt-widget17">
												<div class="kt-widget17__visual kt-widget17__visual--chart kt-portlet-fit--top kt-portlet-fit--sides" style="background-color: #fd397a">
													<div class="kt-widget17__chart" style="height:320px;">
														<canvas id=""></canvas>
													</div>
												</div>
												<div class="kt-widget17__stats">
													<div class="kt-widget17__items">
														<div class="kt-widget17__item">
															<span class="kt-widget17__icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 64 80" style="enable-background:new 0 0 64 64;" xml:space="preserve">
																<g>
																<path d="M59.7,48.3c-0.3-2.5-2.1-4.4-4.3-5.6c-2.9-1.6-6.1-3-9.4-4.1c-1-0.3-1.9-0.6-2.9-0.8c-0.9,1.4-1.8,2.7-2.7,3.9   c-1.7,2.3-3.4,4.5-5.2,6.7c-1.1,1.3-2.2,2.7-3.3,4.1c-1.1-1.4-2.2-2.7-3.2-4.1c-1.8-2.2-3.5-4.4-5.2-6.7c-0.9-1.3-1.8-2.5-2.7-3.9   c-1,0.2-1.9,0.5-2.9,0.8c-3.3,1.1-6.5,2.5-9.4,4.1c-2.2,1.2-4,3.1-4.3,5.6c0,0.3-0.1,0.5-0.1,0.8v8.8c0.5,5.3,4,5.4,4.2,5.4h47.1   c0.2,0,3.7-0.1,4.2-5.4V49C59.8,48.8,59.7,48.5,59.7,48.3z M52,53.2h-2v2c0,0.8-0.6,1.4-1.4,1.4h0c-0.8,0-1.4-0.6-1.4-1.4v-1.9h-2   c-0.8,0-1.4-0.6-1.4-1.4v0c0-0.8,0.6-1.4,1.4-1.4h1.9v-2c0-0.8,0.6-1.4,1.4-1.4h0.1c0.8,0,1.4,0.6,1.4,1.4v1.9h2   c0.4,0,0.7,0.2,1,0.4c0.3,0.3,0.4,0.6,0.4,1C53.4,52.6,52.8,53.2,52,53.2z"/>
																<path d="M18,14.6c1.8,0.6,14.4,4.5,28.1,0c0,0,0,0,0,0h0.1V13c0-0.2,0-0.4,0-0.5c0-0.2,0-0.3,0-0.5V6.8c0-3.4-2.7-6.1-6.1-6.1H24.1   c-3.4,0-6.1,2.7-6.1,6.1V11c-0.1,0.5-0.1,0.9-0.1,1.4C17.9,13.2,17.9,13.9,18,14.6z"/><path d="M18,22.4c0.2,1.8,0.6,3.9,2.5,5.4c0.1,0.1,0.2,0.3,0.3,0.4c0.9,2.7,2.1,4.7,3.9,6.1c2.3,2,4.6,2.9,7.1,2.9   c0.1,0,0.2,0,0.3,0c2.5,0.1,4.9-0.9,7.4-2.9c1.8-1.5,3-3.4,3.9-6.1c0.1-0.2,0.2-0.3,0.3-0.4c1.9-1.5,2.3-3.6,2.5-5.4   c0-0.4,0-0.7,0-1.1c0-0.2,0-0.4,0-0.6c0.1-1.5-0.5-2.8-1.6-3.6c0,0,0,0,0,0c-0.9,0.3-1.9,0.5-2.8,0.8l-0.1,1l0.9,0.4   c0.6,0.3,0.9,0.6,0.8,1.4c0,0.3,0,0.5,0,0.7c0,0.3,0,0.6,0,0.8c-0.1,1.6-0.4,2.7-1.5,3.5c-0.1,0.1-0.2,0.1-0.2,0.2   c-6.4-1.9-12.8-1.9-19.1,0.1c-0.1-0.1-0.2-0.2-0.3-0.3c-1-0.8-1.3-1.9-1.5-3.5c0-0.3,0-0.5,0-0.8c0-0.2,0-0.5,0-0.7   c0-0.8,0.2-1.1,0.8-1.4l0.9-0.4l-0.1-1c-1.2-0.3-2.1-0.5-2.8-0.7v0c-1.1,0.8-1.7,2-1.6,3.6c0,0.2,0,0.4,0,0.6   C17.9,21.6,17.9,22,18,22.4z"/>
																</g>
																</svg></span>
															<span class="kt-widget17__subtitle" style="	font-size: 22px;" >
																<b>Surgeons</b>
															</span>
															<span class="kt-widget17__desc" style="	font-size: 18px;">
																<?php
																	$con = mysqli_connect("localhost","root","","medical");
																	$sql = "select count(*) AS total from surgeonmaster where status='approve'";
																	$res = mysqli_query($con,$sql);
																	$data = mysqli_fetch_assoc($res);
																	echo  $data['total'];
																?>
																Surgeon Registerd
															</span>
														</div>
														<div class="kt-widget17__item">
															<span class="kt-widget17__icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--dark">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<polygon id="Shape" points="0 0 24 0 24 24 0 24"/>
																		<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" id="Mask" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
																		<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" id="Mask-Copy" fill="#000000" fill-rule="nonzero"/>
																		</g>
																</svg> </span>
															<span class="kt-widget17__subtitle" style="	font-size: 22px;">
																<b>Patients</b>
															</span>
															<span class="kt-widget17__desc" style="	font-size: 18px;">
																
																<?php
																	$con = mysqli_connect("localhost","root","","medical");
																	$sql = "select count(*) AS total from patient where status='approve'";
																	$res = mysqli_query($con,$sql);
																	$data = mysqli_fetch_assoc($res);
																	echo  $data['total'];
																?>
																Patient Rregisterd
															</span>
														</div>
													</div>
													<div class="kt-widget17__items">
														<div class="kt-widget17__item">
															<span class="kt-widget17__icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--dark">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect id="bound" x="0" y="0" width="24" height="24"/>
																	<path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" id="Combined-Shape" fill="#000000" opacity="0.3"/>
																	<path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" id="Combined-Shape" fill="#000000"/>
																	<rect id="Rectangle-152" fill="#000000" opacity="0.3" x="10" y="9" width="7" height="2" rx="1"/>
																	<rect id="Rectangle-152-Copy-2" fill="#000000" opacity="0.3" x="7" y="9" width="2" height="2" rx="1"/>
																	<rect id="Rectangle-152-Copy-3" fill="#000000" opacity="0.3" x="7" y="13" width="2" height="2" rx="1"/>
																	<rect id="Rectangle-152-Copy" fill="#000000" opacity="0.3" x="10" y="13" width="7" height="2" rx="1"/>
																	<rect id="Rectangle-152-Copy-5" fill="#000000" opacity="0.3" x="7" y="17" width="2" height="2" rx="1"/>
																	<rect id="Rectangle-152-Copy-4" fill="#000000" opacity="0.3" x="10" y="17" width="7" height="2" rx="1"/>
																	</g>
																</svg> </span>
															<span class="kt-widget17__subtitle" style="	font-size: 22px;">
																<b>Totle Appointment</b>
															</span>
															<span class="kt-widget17__desc" style="	font-size: 18px;">
																
																<?php
																	$con = mysqli_connect("localhost","root","","medical");
																	$sql = "select count(*) AS total from appointment";
																	$res = mysqli_query($con,$sql);
																	$data = mysqli_fetch_assoc($res);
																	echo  $data['total'];
																?>

																Appointment Booked
															</span>
														</div>
														<div class="kt-widget17__item">
															<span class="kt-widget17__icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--dark">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect id="bound" x="0" y="0" width="24" height="24"/>
																			<path d="M13.5,21 L13.5,18 C13.5,17.4477153 13.0522847,17 12.5,17 L11.5,17 C10.9477153,17 10.5,17.4477153 10.5,18 L10.5,21 L5,21 L5,4 C5,2.8954305 5.8954305,2 7,2 L17,2 C18.1045695,2 19,2.8954305 19,4 L19,21 L13.5,21 Z M9,4 C8.44771525,4 8,4.44771525 8,5 L8,6 C8,6.55228475 8.44771525,7 9,7 L10,7 C10.5522847,7 11,6.55228475 11,6 L11,5 C11,4.44771525 10.5522847,4 10,4 L9,4 Z M14,4 C13.4477153,4 13,4.44771525 13,5 L13,6 C13,6.55228475 13.4477153,7 14,7 L15,7 C15.5522847,7 16,6.55228475 16,6 L16,5 C16,4.44771525 15.5522847,4 15,4 L14,4 Z M9,8 C8.44771525,8 8,8.44771525 8,9 L8,10 C8,10.5522847 8.44771525,11 9,11 L10,11 C10.5522847,11 11,10.5522847 11,10 L11,9 C11,8.44771525 10.5522847,8 10,8 L9,8 Z M9,12 C8.44771525,12 8,12.4477153 8,13 L8,14 C8,14.5522847 8.44771525,15 9,15 L10,15 C10.5522847,15 11,14.5522847 11,14 L11,13 C11,12.4477153 10.5522847,12 10,12 L9,12 Z M14,12 C13.4477153,12 13,12.4477153 13,13 L13,14 C13,14.5522847 13.4477153,15 14,15 L15,15 C15.5522847,15 16,14.5522847 16,14 L16,13 C16,12.4477153 15.5522847,12 15,12 L14,12 Z" id="Combined-Shape" fill="#000000"/>
																			<rect id="Rectangle-Copy-2" fill="#FFFFFF" x="13" y="8" width="3" height="3" rx="1"/>
																			<path d="M4,21 L20,21 C20.5522847,21 21,21.4477153 21,22 L21,22.4 C21,22.7313708 20.7313708,23 20.4,23 L3.6,23 C3.26862915,23 3,22.7313708 3,22.4 L3,22 C3,21.4477153 3.44771525,21 4,21 Z" id="Rectangle-2" fill="#000000" opacity="0.3"/>
																			</g>
																</svg> </span>
															<span class="kt-widget17__subtitle" style="	font-size: 22px;">
																<b>Approved Appointment</b>
															</span>
															<span class="kt-widget17__desc" style="	font-size: 18px;">
																
																<?php
																	$con = mysqli_connect("localhost","root","","medical");
																	$sql = "select count(*) AS total from appointment where isapprove='approved'";
																	$res = mysqli_query($con,$sql);
																	$data = mysqli_fetch_assoc($res);
																	echo  $data['total'];
																?>

																Approved Appointment 
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end:: Widgets/Activity-->
								</div>
							</div>

							<!--End::Section-->
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

		<?php include_once 'footer_script.php';?>
		
	</body>
	<!-- end::Body -->
</html>