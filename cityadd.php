

<?php include_once 'top_header.php';?>
<?php 
$conn = mysqli_connect("localhost","root","","medical");

if(!empty($_POST['city_name']))
{

    $city_name = $_POST['city_name'];
    $status = $_POST['status'];
    $state_id = $_POST['state_id'];

    $sql = "select city_name from city where  city_name='$city_name'";
    $res = mysqli_query($conn,$sql);

    if(mysqli_num_rows($res) > 0)
    {
        echo '<script type="text/javascript">';
        echo ' alert("city name already exist")';  //not showing an alert box.
        echo '</script>';
    }
    else
    {
        $query = "INSERT INTO `city` (`state_id`, `city_name`, `status`) VALUES (".$state_id.", '".$city_name."', '".$status."');";
        mysqli_query($conn,$query);
        //redirect('viewdegree.php');
        echo "<script>location.href = 'viewcity.php';</script>";
    }
}
$query = "SELECT * FROM `state`";
$result= $mysqli->query($query);
$states= [];
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
	$states[] = $row;
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
								 <span class="kt-subheader__iconfa fa fa-city"></span></h3>&nbsp;&nbsp;
								<span class="kt-subheader__title"><h3><b>City</b></h3></span>
								
							</div>
							<div class="kt-subheader__toolbar">
								<div class="kt-subheader__wrapper">
									<a href="#" class="btn kt-subheader__btn-secondary">Today</a>
									<a href="#" class="btn kt-subheader__btn-secondary">Month</a>
									<a href="#" class="btn kt-subheader__btn-secondary">Year</a>							
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
                                                <a href="viewcity.php" class="btn btn-brand btn-elevate">
                                                    View Data
                                                </a>
                                            </div>
                                        </div>
										<!--begin::Form-->
										<form class="kt-form kt-form--label-right" method="post">
											<div class="kt-portlet__body">
												
												
												<div class="form-group row">
													<label for="example-text-input" class="col-2 col-form-label"><h5><b>State Name</b></h5></label>
													<div class="col-10">
														<select class="form-control" type="text" name="state_id">
															<?php foreach($states as $state){ ?>
																<option value="<?php echo $state['state_id']; ?>"><?php echo $state['state_name']; ?></option>
															<?php } ?>
														</select>
													</div>
												</div>	
												<div class="form-group row">
													<label for="example-text-input" class="col-2 col-form-label"><h5><b>City Name</b></h5></label>
													<div class="col-10">
														<input class="form-control" type="text" name="city_name" placeholder="city" id="example-text-input" pattern="^[A-Za-z_.-]*$"    minlength="2" maxlength="15" title="Please enter only alphabet" required>
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
		<script>
		 $( "#kt_form_1" ).validate({
            // define validation rules
            rules: {
                email: {
                    required: true,
                    email: true,
                    minlength: 10 
                },
            }, 
		</script>
	</body>

	<!-- end::Body -->
</html>