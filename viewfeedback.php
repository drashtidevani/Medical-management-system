
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
							 <span class="kt-subheader__iconfa fa fa-file-signature"></span></h3>&nbsp;&nbsp;
									<span class="kt-subheader__title"><h3><b><u>View Feedback</u></b></h3></span>
							</div>
							
						</div>
							

						<!-- end:: Content Head -->

						<!-- begin:: Content -->
						
						<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">

                        <div class="kt-portlet kt-portlet--mobile">
                            <div class="kt-portlet__head kt-portlet__head--lg">

                                <div class="kt-portlet__head-toolbar">
                                    <div class="kt-portlet__head-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="kt-portlet__body">

                                <!--begin: Datatable -->
                        
                             <table class="table table-striped- table-bordered table-hover table-checkable"
                                    id="degreeTable">
                                    <thead>
                                    	
                                        <tr>
                                           <th><b>Id</b></th>
											<th><b>Name</b></th >
											<th><b>Email</b></th >
											<th><b>Mobile No</b></th>
                                            <th><b>Type</b></th >
                                            <th><b>Feedback</b></th >
                                            
                                            <th><b>Actions</b></th>

                                        </tr>
                                    </thead>
                                    <?php
							       			$con = mysqli_connect("localhost","root","","medical");
											$str = "select * from feedback";
											$result = mysqli_query($con,$str);
											while($row = mysqli_fetch_array($result)) 		
											{
												echo "<tr>";
												echo "<td>".$row['feed_id']."</td>";
												echo "<td>".$row['name']."</td>";
												echo "<td>".$row['email']."</td> ";
												echo "<td>".$row['contectno']."</td>";
												echo "<td>".$row['type']."</td>";
												echo "<td>".$row['feedback']."</td>";

												
									?>

									  <td>
                                                
                                         <a title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md" href="deletefeedback.php?id=<?php echo $row['feed_id']; ?>">
                                          <i class="la la-trash"></i>
                                         </a>
                                      </td>
                                        </tr>
                                        <?php } ?>

                                    </tbody>
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
        $('#degreeTable').DataTable();
    });
    </script>
    </body>

    <!-- end::Body -->

    </html>