<?php
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blood Bank Management System</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/modern-business.css" rel="stylesheet">
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block;
    }
    </style>

</head>

<body>

    <!-- Navigation -->
<?php include('includes/header.php');?>
<?php include('includes/slider.php');?>
   
    <!-- Page Content -->
    <div class="container">

        <h1 class="my-4">Welcome to Blood Bank Management System</h1>

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card" style="background: #f9f9f9;
	                                    padding: 10px;
	                                    margin-top: 20px;
	                                    border-top-right-radius: 30px;
	                                    border-top-left-radius: 30px; border-bottom-right-radius: 30px;
	                                    border-bottom-left-radius: 30px;" 
                                        span="margin: 3px;
	                                    font-size: 20px;
	                                    font-weight: bold;">
                    <h4 class="card-header">Why should I donate blood?</h4>
                   
                        <p class="card-text" style="padding-left:2%; font-size: 15px; margin-top: 20px">
                        Blood is the most precious gift that anyone can give to another person — the gift of life.
                         A decision to donate your blood can save a life, 
                         or even several if your blood is separated into its components — red cells, platelets and plasma — which can be used individually for patients with specific conditions.</p>
                </div>

            </div>
            <div class="col-lg-4 mb-4">
                <div class="card" style="background: #f9f9f9;
	                                    padding: 10px;
	                                    margin-top: 20px;
	                                    border-top-right-radius: 30px;
	                                    border-top-left-radius: 30px; border-bottom-right-radius: 30px;
	                                    border-bottom-left-radius: 30px;" 
                                        span="margin: 3px;
	                                    font-size: 20px;
	                                    font-weight: bold;">
                    <h4 class="card-header">Blood Donation Tips!</h4>
                   
                        <p class="card-text" style="padding-left:2%; font-size: 15px; margin-top: 20px">Drinking extra water before your donation means that there will be spare fluid in your system. 
                        It also means your blood will flow more easily and can make your donation go by more quickly.

We recommend that you have plenty of fluids the day before your donation — eight glasses if you’re a woman or ten if you’re a man. 
Then, have another three glasses of water in the three hours before your donation. 
If you're giving whole blood, we also recommend an extra two glasses when you arrive. </p>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card" style="background: #f9f9f9;
	                                    padding: 10px;
	                                    margin-top: 20px;
	                                    border-top-right-radius: 30px;
	                                    border-top-left-radius: 30px; border-bottom-right-radius: 30px;
	                                    border-bottom-left-radius: 30px;" 
                                        span="margin: 3px;
	                                    font-size: 20px;
	                                    font-weight: bold;">
                    <h4 class="card-header">Am I eligible?</h4>
                   
                        <p class="card-text" style="padding-left:2%; font-size: 15px; margin-top: 20px">Be in good general health and feeling well.
                        Be at least 17 years old in most states (16 years old with parental consent in some states).
                        Weigh at least 110 pounds. Additional weight requirements apply for donors 18 years old and younger and all high school donors.
                        Have not donated blood in the last 56 days.</p>
                </div>
            </div>
        </div>
        <!-- /.row -->



        <!-- Portfolio Section -->
        <h2>Current Donors</h2>

        <div class="row">
                   <?php 
$status=1;
$sql = "SELECT * from tblblooddonars where status=:status order by rand() limit 6";
$query = $dbh -> prepare($sql);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>

            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top img-fluid" src="images/blood-donor.jpg" alt="" ></a>
                    <div class="card-block">
                        <h4 class="card-title"><a href="#"><?php echo htmlentities($result->FullName);?></a></h4>
                        <p class="card-text"><b>Gender :</b> <?php echo htmlentities($result->Gender);?></p>
                        <p class="card-text"><b>Blood Group :</b> <?php echo htmlentities($result->BloodGroup);?></p>

                    </div>
                </div>
            </div>

            <?php }} ?>
          
 



        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-6">
                <h2>Blood Types</h2>
                <p>  Blood is surprisingly versatile. The blood you donate can be made into 22 different medical treatments. You may be able to donate blood, plasma or platelets. 
                Each type of blood donation is used for different medical treatments, and your blood type determines the best donation for you to make.</p>
                <ul>
                    <li>A+ or A-</li>
                    <li>B+ or B-</li>
                    <li>O+ or O-</li>
                    <li>AB+ or AB-</li>
                </ul>
                <p>A healthy diet helps ensure a successful blood donation, and also makes you feel better! Check out the following recommended foods to eat prior to your donation.</p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="images/blood-donor (1).jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="row mb-4">
            <div class="col-md-8">
            <h4>Universal Donors & Recipients</h4>
                <p>
                In transfusions of packed red blood cells, individuals with type O Rh D negative blood are often called "universal donors". 
                Those with type AB Rh D positive blood are called "universal recipients". 
                However, these terms are only generally true with respect to possible reactions of the recipient's anti-A and anti-B antibodies to transfused red blood cells, 
                and also possible sensitization to Rh D antigens.
                 One exception is individuals with hh antigen system (also known as the Bombay phenotype) who can only receive blood safely from other hh donors, 
                 because they form antibodies against the H antigen present on all red blood cells.
                 Blood donors with exceptionally strong anti-A, anti-B or any atypical blood group antibody may be excluded from blood donation. 
                </p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-secondary btn-block" href="become-donar.php">Become a Donor</a>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
  <?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
