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
								<span class="kt-subheader__title"><h3><b><u>Profile</u></b></h3></span>
							</div>
							
						</div>
				<!-- begin:: Content -->			
						
				<div class="container">
		
			<div class="doctor__item">
                <div class="row">
                    <div class="col-lg-6 order-lg-2">
                        
                    </div>
                    <div class="col-lg-6 order-lg-2">
                        <div class="doctor__item__text">
                              <h2>&nbsp;<?php echo $b; ?></h2>
                        <div class="col-md-12">
                        <i class="flaticon-placeholder-3" style="color:skyblue;"></i>&nbsp; 
							<?php  echo $e; ?>
						</div></br>
                        <div class="col-md-12">
                             <i class="fa fa-envelope" style="color:skyblue;"></i>&nbsp;
                        <?php echo $f; ?>
                        </div></br>

                        <div class="col-md-12">
                            <i class="fa fa-city" style="color:skyblue;"></i>&nbsp;
                        <?php echo $y; ?>
                        </div></br>

                        <div class="col-md-12">
                           <i class="flaticon-event-calendar-symbol" style="color:skyblue;"></i>&nbsp;
                        <?php  echo $d; ?>
                        </div></br>

                        <div class="col-md-12">
                            <label class="labels"><h6><b>Blood Group :</b></h6></label>
                        <?php echo $h; ?>
                        </div></br>
						
                        <div class="col-md-12">
                           <i class="fa fa-tty" style="color:skyblue;"></i>&nbsp;
                        <?php echo $g; ?>
                        </div></br>
                            
                        
                </div>
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
<!-- end:: Content Head -->