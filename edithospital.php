<?php include_once 'top_header.php';?>
<?php 
error_reporting(0);
$conn = mysqli_connect("localhost","root","","medical");

if(!empty($_POST['name'])){
	$name = $_POST['name'];
	$address = $_POST['address'];
	$city_id = $_POST['city_id'];
	$email = $_POST['email'];
	$contact_no = $_POST['contact_no'];
	$status = $_POST['status'];
	$hospital_id = $_POST['hospital_id'];

     $sql = "select email from surgeonmaster where email='$email'";
    $res = mysqli_query($conn,$sql);

    if(mysqli_num_rows($res) > 0)
    {
        echo '<script type="text/javascript">';
        echo ' alert("This Email Id already exist")';  //not showing an alert box.
        echo '</script>';
    }
    else
    {

	   $query = "UPDATE `hospital` SET `name` = '".$name."',`address` = '".$address."',`city_id` = '".$city_id."',`email` = '".$email."',`contact_no` = '".$contact_no."', `status` = '".$status."' WHERE `hospital_id` = ".$hospital_id;
	   $result= $mysqli->query($query);
	   echo "<script>location.href = 'viewhospital.php';</script>";
    }
}
if(!empty($_GET['id'])){
    $id=$_GET['id'];
    $query = "SELECT * FROM `hospital` WHERE hospital_id=".$id;
	$result= $mysqli->query($query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
}
$query = "SELECT * FROM `city`";
$result= $mysqli->query($query);
$citys= [];
while($row1 = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
	$citys[] = $row1;
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
                    <div class="kt-subheader__main">
                        <h3 class="kt-subheader__title"></h3>
                    </div>
                    
                </div>


                <!-- end:: Content Head -->

                <!-- begin:: Content -->
                <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">

                    <!--Begin::Dashboard 1-->
                    <div class="kt-portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-toolbar"><h4>
									<span class="kt-portlet__head-icon fa fa-pen-square"></h4></span>&nbsp;&nbsp;
                                    <span class="kt-portlet__head-title"><h4><b><u>Edit Hospital</u></b></h4></span>
                                </div>
                        </div>
                        <!--begin::Form-->
                        <?php if(!empty($_GET['id'])) { ?>
                        <form class="kt-form kt-form--label-right" method="post">
                            <div class="kt-portlet__body">
                                <input type="hidden" name="hospital_id" value="<?php echo $row['hospital_id']; ?>">
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-2 col-form-label"><h5><b>Hospital Name</b></h5></label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" name="name"
                                            value="<?php echo $row['name']; ?>" pattern="^[A-Za-z_.-]*$"    minlength="2" title="Please enter only alphabet" placeholder="hospital Name"
                                            id="example-text-input"  required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-2 col-form-label"><h5><b>Address</b></h5></label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" name="address" value="<?php echo $row['address']; ?>" placeholder="Address" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-2 col-form-label"><h5><b>City</b></h5></label>
                                    <div class="col-10">
                                        <select class="form-control" type="text" name="city_id">
                                            <?php foreach($citys as $city){ ?>
                                            <option value="<?php echo $city['city_id']; ?>"
                                                <?php echo ($city['city_id'] == $row['city_id']) ? "Selected" : ""; ?>>
                                                <?php echo $city['city_name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-2 col-form-label"><h5><b>Email</b></h5></label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" name="email" value="<?php echo $row['email']; ?>"  pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" Title="Enter Valid Email Address" placeholder="Email" required>
                                    </div>
                                </div>	
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-2 col-form-label"><h5><b>Contact Number</b></h5></label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" name="contact_no" value="<?php echo $row['contact_no']; ?>" placeholder="Contact Number" pattern="[0-9]{10}" title="Enter only 10 Digits"  required >
                                    </div>
                                </div>	
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                        <h5><b>Status</b></h5>
                                    </label>
                                    <div class="kt-radio-list">
                                        <label class="kt-radio kt-radio--bold kt-radio--success">
                                            <input type="radio" name="status" <?php  echo ($row['status'] == 1 ?  "Checked" : ""); ?> value="1"><b>Yes</b>
                                            <span></span>
                                        </label>
                                        <label class="kt-radio kt-radio--bold kt-radio--brand">
                                            <input type="radio" name="status" <?php  echo ($row['status'] == 0 ?  "Checked" : ""); ?> value="0"><b>No</b> 
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="kt-portlet__foot kt-form__actions row ">
                                    <div class="col-12" align="center">
                                        <button type="Submit" class="btn btn-success">Update</button>&nbsp;&nbsp;&nbsp;
                                        <button type="Reset" class="btn btn-outline-brand btn-pill" value="reset">Reset</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                        <?php } else { ?>
                        <form class="kt-form kt-form--label-right" method="post">
											<div class="kt-portlet__body">
												<div class="form-group row">
													<label for="example-text-input" class="col-2 col-form-label">hospital Name</label>
													<div class="col-10">
														<input class="form-control" type="text" name="name" placeholder="hospital" id="example-text-input" pattern="^[A-Za-z_.-]*$" title="Please enter only alphabet" required>
													</div>

												</div>

												<div class="form-group row">
													<label for="example-text-input" class="col-2 col-form-label">Address</label>
													<div class="col-10">
														<input class="form-control" type="text" name="address" placeholder="Address" required>
													</div>
												</div>	
												<div class="form-group row">
													<label for="example-text-input" class="col-2 col-form-label">City</label>
													<div class="col-10">
														<select class="form-control" type="text" name="city_id"></select>
													</div>
												</div>	
												<div class="form-group row">
													<label for="example-text-input" class="col-2 col-form-label">Email</label>
													<div class="col-10">
                                
														<input class="form-control" type="text" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" Title="Enter Valid Email Address" required>
													</div>
												</div>	
												<div class="form-group row">
													<label for="example-text-input" class="col-2 col-form-label">Contact Number</label>
													<div class="col-10">
														<input class="form-control" type="text" name="contact_no"  placeholder="Contact Number"  pattern="[0-9]{10}" title="Enter only 10 Digits"  required>
													</div>
												</div>	
												<div class="form-group row">
													<label for="example-text-input" class="col-2 col-form-label">Status</label>
													<div class="kt-radio-list">
														<label class="kt-radio kt-radio--bold kt-radio--success">
															<input type="radio" name="status" value="1"> Yes	
															<span></span>
														</label>
														<label class="kt-radio kt-radio--bold kt-radio--brand">
															<input type="radio" name="status" value="0"> No		
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
										<?php } ?>
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