


<?php include_once 'top_header.php';?>
<?php 
$conn = mysqli_connect("localhost","root","","medical");

if(!empty($_POST['name']))
{

   $name = $_POST['name'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$contact_no = $_POST['contact_no'];
	$status = $_POST['status'];
	$city_id = $_POST['city_id'];

    $sql = "select name from hospital where  name='$name'";
    $res = mysqli_query($conn,$sql);

    if(mysqli_num_rows($res) > 0)
    {
        echo '<script type="text/javascript">';
        echo ' alert("This Hospital already exist")';  //not showing an alert box.
        echo '</script>';
    }
    else
    {
       $query = "INSERT INTO `hospital` (`hospital_id`, `name`, `address`, `city_id`, `email`, `contact_no`, `status`) VALUES (NULL,'".$name."','".$address."',".$city_id.", '".$email."', ".$contact_no.", '".$status."');";
        mysqli_query($conn,$query);
        //redirect('viewdegree.php');
        echo "<script>location.href = 'viewhospital.php';</script>";
    }
}
$query = "SELECT * FROM `city`";
$result= $mysqli->query($query);
$citys= [];
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
	$citys[] = $row;
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
								<span class="kt-subheader__iconfa fa fa-hospital"></span></h3>&nbsp;&nbsp;
								<span class="kt-subheader__title"><h3><b><u>Hospital</u></b></h3></span>
							</div>
							<div class="kt-subheader__toolbar">
								<div class="kt-subheader__wrapper">
									<a href="#" class="btn kt-subheader__btn-secondary"><b>Today</b></a>
									<a href="#" class="btn kt-subheader__btn-secondary"><b>Month</b></a>
									<a href="#" class="btn kt-subheader__btn-secondary"><b>Year</b></a>
								</div>
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
                                                <a href="viewhospital.php" class="btn btn-brand btn-elevate">
                                                    View Data
                                                </a>
                                            </div>
                                        </div>
										<!--begin::Form-->
										<form class="kt-form kt-form--label-right" method="post">
											<div class="kt-portlet__body">
												
												<div class="form-group row">
													<label for="example-text-input" class="col-2 col-form-label"><h5><b>Hospital Name</b></h5></label>
													<div class="col-10">
														<input class="form-control" type="text" name="name" placeholder="hospital" id="example-text-input" pattern="^[A-Za-z_.-]*$"    minlength="2" maxlength="30" title="Please enter only alphabet" required>
													</div>

												</div>

												<div class="form-group row">
													<label for="example-text-input" class="col-2 col-form-label"><h5><b>Address</b></h5></label>
													<div class="col-10">
														<input class="form-control" type="text" name="address" placeholder="Address" minlength="2" maxlength="300" required>
													</div>
												</div>	
												<div class="form-group row">
													<label for="example-text-input" class="col-2 col-form-label"><h5><b>City</b></h5></label>
													<div class="col-10">
														<select class="form-control" type="text" name="city_id">
															<?php foreach($citys as $city){ ?>
																<option value="<?php echo $city['city_id']; ?>"><?php echo $city['city_name']; ?></option>
															<?php } ?>
														</select>
													</div>
												</div>	
												<div class="form-group row">
													<label for="example-text-input" class="col-2 col-form-label"><h5><b>Email</b></h5></label>
													<div class="col-10">
                                
														<input class="form-control" type="text" name="email" placeholder="Email" pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" Title="Enter Valid Email Address" required>
													</div>
												</div>	
												<div class="form-group row">
													<label for="example-text-input" class="col-2 col-form-label"><h5><b>Contact Number</b></h5></label>
													<div class="col-10">
														<input class="form-control" type="text" name="contact_no"  placeholder="Contact Number"  pattern="[0-9]{10}" title="Enter only 10 Digits"  required>
													</div>
												</div>	
												<div class="form-group row">
													<label for="example-text-input" class="col-2 col-form-label"><h5><b>Status</b></h5></label>
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