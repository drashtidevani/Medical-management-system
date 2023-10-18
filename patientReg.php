<?php error_reporting(0) ?>
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
							<div class="kt-subheader__main"><h3>
								<span class="kt-subheader__iconfa fa fa-user-edit"></span></h3>&nbsp;&nbsp;
								<span class="kt-subheader__title"><h3><b><u>Patient Registration</u></b></h3></span>
							</div>
							
						</div>
							

						<!-- end:: Content Head -->

						<!-- begin:: Content -->
						<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">

                        <div class="kt-portlet kt-portlet--mobile">
                            <div class="kt-portlet__head kt-portlet__head--lg">
                            </div>
                            <div class="kt-portlet__body">

                                <!--begin: Datatable -->
                                <table class="table table-striped- table-bordered table-hover table-checkable"
                                    id="example">
                                    <thead>
                                        <tr>
                                            <th><b>Id</b></th>
											<th><b>Name</b></th>
											<th><b>Profile Photo</b></th>
											<th><b>Date Of Birth</b></th>
											<th><b>Address</b></th>
											<th><b>City</b></th>
                                            <th><b>Email</b></th>											
											<th><b>Contact No.</b></th>
                                            <th><b>Blood Group</b></th>
											<th><b>Register Date & time</b></th>
											
											<th><b>Status</b></th>
                                            <th><b>Actions</b></th>
                                           
                                        </tr>
                                    </thead>
                                    <?php
							           $con = mysqli_connect("localhost","root","","medical");
										$str = "select * from patient where status='approve' ";
										$result = mysqli_query($con,$str);
										while($row = mysqli_fetch_array($result))
											{
												echo "<tr>";
												echo "<td>".$row['patient_id']."</td>";
												echo "<td>".$row['name']."</td>";
											?>	

												<td><img src="../patientpic/<?php echo $row['profile_Photo'];?>" height='100px'></td>
										<?php
												echo "<td>".$row['birth_date']."</td>";
												echo "<td>".$row['address']."</td>";
												$query1 = "SELECT city_name FROM city WHERE city_id=".$row['city_id'];
													$results = mysqli_query($con,$query1);
													$roww1 = mysqli_fetch_assoc($results);
													$y = $roww1['city_name'];
												echo "<td>".$y."</td>";
												echo "<td>".$row['email']."</td>";
												echo "<td>".$row['contact_no']."</td>";
												echo "<td>".$row['bloodgroup']."</td>";
												echo "<td>".$row['reg_datetime']."</td>";
									?>
												
						            <?php											

												echo "<td>".$row['status']."</td>";
												echo "<td> <a href='decline1.php?patient_id=".$row['patient_id']."'>Decline</a></td>";
												echo "</tr>";
											}
									?>
								</table>
										<!--end: Datatable -->
                        </div>
                    </div>
                </div>
                <!-- end:: Content -->

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
    <script>
     $(document).ready(function() {
    $('#example').DataTable( {
        "scrollY": 300,
        "scrollX": true
    } );
} );
    </script>
    </body>

    <!-- end::Body -->

    </html>