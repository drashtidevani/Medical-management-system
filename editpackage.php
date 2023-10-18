<?php include_once 'top_header.php';?>
<?php 
error_reporting(0);
$conn = mysqli_connect("localhost","root","","medical");
if(!empty($_POST['package_name'])){
	$package_name = $_POST['package_name'];
	$duration = $_POST['duration'];
	$amount = $_POST['amount'];
	$status = $_POST['status'];
	$package_id = $_POST['package_id'];

     $sql = "select package_name from package where  package_name='$package_name'";
    $res = mysqli_query($conn,$sql);

    if(mysqli_num_rows($res) > 0)
    {
        echo '<script type="text/javascript">';
        echo ' alert("This Package already exist")';  //not showing an alert box.
        echo '</script>';
    }
    else
    {
	   $query = "UPDATE `package` SET `package_name` = '".$package_name."', `duration` = '".$duration."', `amount` = '".$amount."', `status` = '".$status."' WHERE `package_id` = ".$package_id;
	   $result= $mysqli->query($query);
    //redirect('Viewpackage.php')
	   echo "<script>location.href = 'viewpackage.php';</script>";
    }
}
if(!empty($_GET['id'])){
    $id=$_GET['id'];
    $query = "SELECT * FROM `package` WHERE package_id=".$id;
	$result= $mysqli->query($query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
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
                                    <span class="kt-portlet__head-title"><h4><b><u>Edit Package</u></b></h4></span>
                                </div>
                            </div>
                            <!--begin::Form-->
                            <?php if(!empty($_GET['id'])) { ?>
                            <form class="kt-form kt-form--label-right" method="post">
                                <div class="kt-portlet__body">

                                    <input type="hidden" name="package_id" value="<?php echo $row['package_id']; ?>">
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-2 col-form-label"><h5><b>Package Name</b></h5></label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" name="package_name" value="<?php echo $row['package_name']; ?>"  pattern="^[A-Za-z_.-]*$"    minlength="2" maxlength="15" title="Please enter only alphabet"  placeholder="package Name" id="example-text-input" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-2 col-form-label"><h5><b>Duration</b></h5></label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" name="duration" value="<?php echo $row['duration']; ?>"   pattern="[1-9]{1,}" placeholder="duration" id="example-text-input" required >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-2 col-form-label"><h5><b>Amount</b></h5></label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" name="amount" value="<?php echo $row['amount']; ?>" placeholder="amount"
                                                id="example-text-input"  min="0" max="10000" required>
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
                                            <button type="Submit"
                                                class="btn btn-success">Update</button>&nbsp;&nbsp;&nbsp;
                                            <button type="Reset" class="btn btn-outline-brand btn-pill">Reset</button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                            <?php } else { ?>
                                <form class="kt-form kt-form--label-right" method="post">
                                <div class="kt-portlet__body">
                                    <input type="hidden" name="package_id">
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Package Name</label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" name="package_name" placeholder="package Name"
                                                id="example-text-input" pattern="^[A-Za-z_.-]*$"    minlength="2" maxlength="15" title="Please enter only alphabet" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Duration</label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" name="duration" placeholder="duration"
                                                id="example-text-input"  pattern="[1-9]{1,}" placeholder="duration" id="example-text-input" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Amount</label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" name="amount" placeholder="amount"
                                                id="example-text-input"  min="0" max="10000" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-2 col-form-label">
                                            Status
                                        </label>
                                        <div class="kt-radio-list">
                                            <label class="kt-radio kt-radio--bold kt-radio--success">
                                                <input type="radio" name="status" Yes
                                                <span></span>
                                            </label>
                                            <label class="kt-radio kt-radio--bold kt-radio--brand">
                                                <input type="radio" name="status" No
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="kt-portlet__foot kt-form__actions row ">
                                        <div class="col-12" align="center">
                                            <button type="Submit"
                                                class="btn btn-success">Update</button>&nbsp;&nbsp;&nbsp;
                                            <button type="Reset" class="btn btn-outline-brand btn-pill">Reset</button>
                                        </div>
                                    </div>

                                </div>
                            </form>
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