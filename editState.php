<?php include_once 'top_header.php';?>
<?php 
$conn = mysqli_connect("localhost","root","","medical");
if(!empty($_POST['state_name']))
{
	$state_name = $_POST['state_name'];
	$status = $_POST['status'];
	$state_id = $_POST['state_id'];


    $sql = "select state_name from state where  state_name='$state_name'";
    $res = mysqli_query($conn,$sql);

    if(mysqli_num_rows($res) > 0)
    {
        echo '<script type="text/javascript">';
        echo ' alert("state name already exist")';  //not showing an alert box.
        echo '</script>';
    }
    else
    {
	   $query = "UPDATE `state` SET `state_name` = '".$state_name."', `status` = '".$status."' WHERE `state_id` = ".$state_id;
	       $result= $mysqli->query($query);
	echo "<script>location.href = 'viewstate.php';</script>";
    }
}
if(!empty($_GET['id'])){
    $id=$_GET['id'];
    $query = "SELECT * FROM `state` WHERE state_id=".$id;
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
                                    <span class="kt-portlet__head-title"><h4><b><u>Edit State</u></b></h4></span>
                                </div>
                            </div>
                            <!--begin::Form-->
                            <?php if(!empty($_GET['id'])) { ?>
                            <form class="kt-form kt-form--label-right" method="post">
                                <div class="kt-portlet__body">
                                    <input type="hidden" name="state_id" value="<?php echo $row['state_id']; ?>">
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-2 col-form-label"><h5><b>State Name</b></h5></label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" name="state_name" value="<?php echo $row['state_name']; ?>"  pattern="^[A-Za-z_.-]*$"    minlength="2" maxlength="15" title="Please enter only alphabet" placeholder="state Name"
                                                id="example-text-input" required >
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

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label">state Name</label>
                                            <div class="col-10">
                                                <input class="form-control" type="text" name="state_name" placeholder="Degree Name"
                                                    id="example-text-input"  pattern="^[A-Za-z_.-]*$"    minlength="2" maxlength="15" title="Please enter only alphabet" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label">
                                                Status
                                            </label>
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
                                                <button type="Submit"
                                                    class="btn btn-success">Save</button>&nbsp;&nbsp;&nbsp;
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