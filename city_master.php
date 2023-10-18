
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Medical Consulting System</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
<?php
 include 'header.php';
?>

<?php
 include 'menu.php';
?>
  <!-- container section start -->
   <section id="container" class="">
     <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i> City Master</h3>
            <ol class="breadcrumb">
             <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_document_alt"></i>Masters</li>
              <li><i class="fa fa-files-o"></i>City Master</li>  
            </ol>
          </div>
        </div>
    
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
           
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal " id="register_form" method="get" action="">
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">State Name</label>
                    <div class="col-lg-10">
                      <select class="form-control m-bot15">
                                              <option>Gujrat</option>
                                              <option>Rajasthan</option>
                                              <option>Delhi</option>
                                          </select>
                    </div>
                  </div>

                <div class="form-group " >
                      <label for="fullname"  class="control-label col-lg-2">City name <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control"  name="cityname" type="text" placeholder="Enter city name" required/>
                      </div>
                   </div>
                   
                    <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Status</label>
                    <div class="col-lg-10">
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                  Yes
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                                  No
                                              </label>
                      </div>

                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10"><br/><br/><br/>
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button class="btn btn-default" type="button">Cancel</button>
                      </div>
                    </div>
                    <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                City Master
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="icon_id"></i>City Id</th>
                    <th><i class="icon_profile"></i> State Name</th>
                    <th><i class="icon_profile"></i> City Name</th>
                    <th><i class="icon_calendar"></i> Status</th>
                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>
                  <tr>
                    <td>01.</td>
                    <td>Gujrart</td>
                    <td>Ahamdabad</td>
                    <td>Yes</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>02.</td>
                    <td>Rajasthan</td>
                    <td>Bombay</td>
                    <td>No</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  
                  </tr>
                </tbody>
              </table>
            </section>
          </div>
        </div>
                  </form>
                </div>
              </div>
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    
</section>

</body>

</html>

