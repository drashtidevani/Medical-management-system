<?php include_once 'top_header.php';?>
<?php 
	$query = "SELECT * FROM `package`";
	$result= $mysqli->query($query);
	$rows= [];
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		$rows[] = $row;
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
							<div class="kt-subheader__main"><h4>
							 <span class="kt-subheader__iconfa fa fa-file-signature"></span></h4>&nbsp;&nbsp;
								<span class="kt-subheader__title"><h4><b><u>View Package</u></b></h4></span>
							</div>
							
						</div>
							

						<!-- end:: Content Head -->

						<!-- begin:: Content -->
						<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">

                        <div class="kt-portlet kt-portlet--mobile">
                            <div class="kt-portlet__head kt-portlet__head--lg">

                                <div class="kt-portlet__head-toolbar">
                                    <div class="kt-portlet__head-wrapper">
                                        <div class="kt-portlet__head-actions">

                                            &nbsp;
                                            <a href="packageAdd.php"
                                                class="btn btn-brand btn-elevate btn-icon-sm">
                                                <i class="la la-plus"></i>
                                                Add
                                            </a>
                                        </div>
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
                                            <th><b>package Name</b></th>
                                            <th><b>Duration</b></th>
                                            <th><b>Amount</b></th>
                                            <th><b>Status</b></th>
                                            <th><b>Actions</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($rows as $r){ ?>
                                        <tr>
                                            <td><?php echo $r['package_id']; ?></td>
                                            <td><?php echo $r['package_name']; ?></td>
                                            <td><?php echo $r['duration']; ?> Month</td>
                                            <td>Rs.  <?php echo $r['amount']; ?> </td>
                                            <td><?php echo $r['status'] == 1 ?  
                                            '<span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Active</span>' : '<span class="kt-badge  kt-badge--warning kt-badge--inline kt-badge--pill">Pending</span>'; ?></td>
                                            <td>
                                                <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md"
                                                href="editpackage.php?id=<?php echo $r['package_id']; ?>">
                                                    <i class="la la-edit"></i>
                                                </a>
                                                <a title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md"
                                                    href="deletepackage.php?id=<?php echo $r['package_id']; ?>">
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
	<script>
		$(document).ready(function() {
			$('#degreeTable').DataTable();
		} );
	</script>
	</body>

	<!-- end::Body -->
</html>