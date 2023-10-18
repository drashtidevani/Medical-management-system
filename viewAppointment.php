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
								<span class="kt-subheader__title"><h3><b><u>View Appointment</u></b></h3></span>
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
											<th><b>Patient Name</b></th>
											<th><b>Surgeon</b></th>
											<th><b>Appointment date</b></th>
                                            <th><b>Appointment time</b></th>
                                            <th><b>surgery</b></th>
                                            <th><b>suggesion Date</b></th>
                                            <th><b>suggesion Time</b></th>
											<th><b>Remarks</b></th>
											<th><b>Actions</b></th>
                                           
                                        </tr>
                                    </thead>
                                     <?php
							       			$con = mysqli_connect("localhost","root","","medical");
											$str = "select * from appointment";
											$result = mysqli_query($con,$str);
											while($row = mysqli_fetch_array($result)) 		
											{
												echo "<tr>";
												echo "<td>".$row['appo_id']."</td>";
												
												$query = "SELECT name FROM patient WHERE patient_id=".$row['patient_id'];
												$results = mysqli_query($con,$query);
												$roww = mysqli_fetch_assoc($results);
												$v = $roww['name'];
												echo "<td>".$v."</td>";	
												
												$query3 = "SELECT name FROM surgeonmaster WHERE surgeonid=".$row['surgeonid'];
												$results3 = mysqli_query($con,$query3);
												$roww3 = mysqli_fetch_assoc($results3);
												$r = $roww3['name'];
												echo "<td>".$r."</td> ";
												
												echo "<td>".$row['date1']."</td>";
												echo "<td>".$row['time1']."</td>";
												
												$query = "SELECT surgery_name FROM surgery WHERE surgery_id=".$row['surgery_id'];
												$results = mysqli_query($con,$query);
												$roww = mysqli_fetch_assoc($results);
												$z = $roww['surgery_name'];
												echo "<td>".$z."</td>";
												echo "<td>".$row['suggestion_date']."</td>";
                                                echo "<td>".$row['suggestion_time']."</td>";	
												
												echo "<td>".$row['remarks']."</td>";
												echo "<td>".$row['isapprove']."</td>";
												
									?>
												
						            <?php
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
        "scrollY": 200,
        "scrollX": true
    } );
} );
    </script>
    </body>

    <!-- end::Body -->

    </html>