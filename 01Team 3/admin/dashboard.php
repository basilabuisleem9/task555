﻿<?php 

session_start();
$name=$_SESSION['firstname'];
$family= $_SESSION['lastname'];

?>
<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
        <div class="grid_10 ">
            <div class="box round first grid mt-5">
                <h2> Dashbord</h2>
                <div class="block">               
                  Welcome Mr.  <?php echo $name." ".$family ?> to the admin panel        
                </div>
            </div>
        </div>
