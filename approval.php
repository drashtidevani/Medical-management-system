<?php include_once 'top_header.php';?>
<style>
table {
	font-size: 15px;
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

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
                             <span class="kt-subheader__iconfa fa fa-clipboard-check"></span></h4>&nbsp;&nbsp;
                             <span class="kt-subheader__title"><h4><b>Approval</b></h4></span>
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
										<!--begin::Form-->
                                        <?php
							$con = mysqli_connect("localhost","root","","medical");
                            $str = "select * from surgeonmaster where surgeonid=".$_GET['surgeonid'];
                            $result = mysqli_query($con,$str);
                            $r = mysqli_fetch_array($result);
							$a = $r['surgeonid'];
							$b = $r['name'];
                            $c = $r['experience'];
							
							$j = $r['hospital_id'];
							$query3 = "SELECT name FROM hospital WHERE hospital_id=".$j;
							$results3 = mysqli_query($con,$query3);
							$roww3 = mysqli_fetch_assoc($results3);
							$v = $roww3['name'];
						    			
							$i = $r['sd_id'];
							$query2 = "SELECT degree_name FROM degree WHERE degre_id=".$i;
							$results2 = mysqli_query($con,$query2);
							$roww2 = mysqli_fetch_assoc($results2);
							$w = $roww2['degree_name'];
							
							$h = $r['surgery_id'];
							$query = "SELECT surgery_name FROM surgery WHERE surgery_id=".$h;
							$results = mysqli_query($con,$query);
							$roww = mysqli_fetch_assoc($results);
							$z = $roww['surgery_name'];
                           
						    $d = $r['address'];
							
							$g = $r['city_id'];
							$query1 = "SELECT city_name FROM city WHERE city_id=".$g;
							$results = mysqli_query($con,$query1);
							$roww1 = mysqli_fetch_assoc($results);
							$y = $roww1['city_name'];
                            
							$e = $r['contact_no'];
                            $f = $r['email'];
                            $i = $r['profile_photo'];		
                                    
                        ?>						
				
				<form class="kt-form kt-form--label-right" action="<?php   
										
				if(isset($_GET['surgeonid']))
				{
					echo "approv.php?surgeonid=".$_GET['surgeonid'];
				}
				
			?>" method="post">
            <div class="kt-portlet__body">
                                           
				<center><img src="../surgeonpic/<?php echo $r['profile_photo'];?>" height='200px' width='200px' class="rounded-circle"></center>
				<div class="scrollmenu">
				<div class="agile-tables">
					<div class="w3l-table-info">
					  
					    
                <table id="table" align="center" border='2' width="50%">
						<thead>
						  
						  <tr>
							<th>ID</th>
							<td><?php echo $a; ?></td>
						</tr>
						  
						 <tr>
							<th>Name</th>
							<td style="font-weight: bold;"><?php echo $b; ?></td>
						</tr>
						  
						<tr>
							<th>Experience</th>
							<td><?php echo $c; ?></td>
						</tr>
						
						<tr>
							<th>Hospital</th>
							<td><?php echo $v; ?></td>
						</tr>
						
						<tr>
							<th>Surgery</th>
							<td><?php echo $z; ?></td>
						</tr>
						
						<tr>
							<th>Degree</th>
							<td><?php echo $w; ?></td>
						</tr>
						  
							<th>Address</th>
							<td><?php  echo $d; ?></td>
						  </tr>
					   
					   <tr>
							<th>City</th>
							<td><?php echo $y; ?></td>
						</tr>
						
						<tr>
							<th>Phone Number</th>
							<td><?php echo $e; ?></td>
						</tr>
						<tr>
							<th>Email</th>
							<td><?php echo $f; ?></td>
						</tr>
						  <tr>
							<th>Status</th>
							<td><label class="kt-radio kt-radio--bold kt-radio--success">
                                                <input type="radio" name="a" value="approv" align="center">Approve
                                                <span></span>
                                </label>
                                <label class="kt-radio kt-radio--bold kt-radio--brand">
                                                <input type="radio" name="a" value="decline" align="center">Decline
                                                <span></span>
                                </label>
                                
							</td>
						 </tr>
						  <tr>
							
							<td colspan="2"><center><input type="submit"  name="sub-1" value="Submit" class="btn btn-primary"></Center>
							</td>
						  </tr>
						</thead>
						</table>
				 				</div>
				<!-- //tables -->
                                    
                                    
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