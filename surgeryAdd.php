
<?php include_once 'top_header.php';?>
<?php 
$conn = mysqli_connect("localhost","root","","medical");

if(!empty($_POST['surgery_name']))
{

    $surgery_name = $_POST['surgery_name'];
    $status = $_POST['status'];

    $sql = "select surgery_name from surgery where  surgery_name='$surgery_name'";
    $res = mysqli_query($conn,$sql);

    if(mysqli_num_rows($res) > 0)
    {
        echo '<script type="text/javascript">';
        echo ' alert("surgery name already exist")';  //not showing an alert box.
        echo '</script>';
    }
    else
    {
        $query = "INSERT INTO `surgery` (`surgery_name`, `status`) VALUES ('".$surgery_name."', '".$status."');";
        mysqli_query($conn,$query);
        //redirect('viewdegree.php');
        echo "<script>location.href = 'viewsurgery.php';</script>";
    }
}
?>
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
							<div class="kt-subheader__main"><h3>
							       <span class="kt-subheader__icon fab fa-wpexplorer"></span></h3>&nbsp;&nbsp;
									<span class="kt-subheader__title"><h3><b><u>Surgery</u></b></h3></span>
							</div>
							
						</div>
							

						<!-- end:: Content Head -->

						<!-- begin:: Content -->
						<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">

							<!--Begin::Dashboard 1-->
							<div class="kt-portlet">
										 <div class="kt-portlet__head">
                                            <div class="kt-portlet__head-label">
                                                
                                            </div>
                                            <div class="kt-portlet__head-toolbar">
                                                <a href="viewsurgery.php" class="btn btn-brand btn-elevate">
                                                    View Data
                                                </a>
                                            </div>
                                        </div>
										<!--begin::Form-->
										<form class="kt-form kt-form--label-right" method="post">
											<div class="kt-portlet__body">
												
												<div class="form-group row">
													<label for="example-text-input" class="col-2 col-form-label"><h5><b>Surgery Name</b></h5></label>
													<div class="col-10">
														<input class="form-control" type="text" name="surgery_name" placeholder="surgery name" id="example-text-input" pattern="^[A-Za-z_.-]*$" minlength="2" maxlength="10" title="Please enter only alphabet" required>
													</div>
												</div>	
												<div class="form-group row">
													<label for="example-text-input" class="col-2 col-form-label"><h5><b>Status<b></h5></label>
													<div class="kt-radio-list">
														<label class="kt-radio kt-radio--bold kt-radio--success">
															<input type="radio" name="status" value="1"><b>Yes</b>	
															<span></span>
														</label>
														<label class="kt-radio kt-radio--bold kt-radio--brand">
															<input type="radio" name="status" value="0"><b>No</b>		
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