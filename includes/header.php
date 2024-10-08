       <?php
       session_start();
       ?>
       <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="logo">
                            <a href="index.php">
                           
                                <h1> <img src="img\logo.jpeg" alt="" height="45px">  Zoyera</h1>
                                <!-- <img src="img/logo.jpg" alt="Logo"> -->
                            </a>
                        </div>
                    </div>

<?php 
$sql = "SELECT * from tblpages where type='contact'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
foreach($results as $result)
{       
?>
                    <div class="col-lg-8 col-md-7 d-none d-lg-block">
                        <div class="row">
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-clock"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Opening Hour</h3>
                                        <p><?php   echo $result->openignHrs; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="fa fa-phone-alt"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Call Us</h3>
                                        <p>+91 <?php   echo $result->phoneNumber; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Email Us</h3>
                                        <p><?php   echo $result->emailId; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index.php" class="nav-item nav-link ">Home</a>
                            <a href="about.php" class="nav-item nav-link">About</a>
                            <a href="washing-plans.php" class="nav-item nav-link">Washing Plans</a>
                            <?php 
        
        
        if (!isset($_SESSION["user_id"])) {
           
            
        }
         else {
            echo ' <a class="nav-link" href="check-appointment.php">Check Appointment</a>';
        }
    
    ?>

                         

                            
                    
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                            <!-- <a href="admin" class="nav-item nav-link">Admin</a> -->
                        </div>
                        <div class="ml-auto">
                        <?php 
        
        if (!isset($_SESSION["user_id"])) {
           
        }
         else {
            echo '<a class="btn btn-custom" href="profile.php">Profile</a>';
        }
    
    ?>

<?php 
        
        if (!isset($_SESSION["user_id"])) {
           echo '<a class="btn btn-custom" href="login.php">Login</a>';
            
        }
         else {
            echo '<a class="btn btn-custom" href="logout.php">logout</a>';
        }
    
    ?>
                    
                    <!-- <a class="btn btn-custom" href="login.php">Login</a> -->
                            <!-- <button class="btn btn-custom" data-toggle="modal" data-target="#confirmation">
                        Logout
                    </button> -->
                    <!-- The Modal -->
                    <div class="modal" id="confirmation">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- <div class="modal-header">
                                    <div class="modal-title">You had successfully logged out.</div>
                                </div> -->
                                <div class="modal-body">
                                    <p>You had successfully logged out.</p>
                                </div>
            
                                <div class="modal-footer">
                                    <p>Thank you visit again</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->
