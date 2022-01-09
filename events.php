<?php 
session_start();
$con=new mysqli("localhost","id18233341_root","t1$ROHySi^^<a7|G","id18233341_vnr");
$sql="SELECT * FROM volunteer";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);
extract($_REQUEST);
$name=$row['name'];
$psw=$row['password'];
if(!empty($_SESSION['name']==$name and $_SESSION['password']==$psw)){
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="sidebar/style.css">
    <title>வலைப்பதிவு - Blog</title>
    <link rel="shortcut icon" type="image" href="pp.jpg">
    <!-- Font Awesome JS -->
    <script src="https://kit.fontawesome.com/15b077b312.js" crossorigin="anonymous"></script>
    <style>
        span{
            color:red;
        }
        form{
        border-radius: 20px;
        padding-top: 20px;
        padding-bottom: 20px;
        padding-left: 20px;
        padding-right: 20px;
    }
    </style>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                 <center>
                    <img src="vnr.png" alt="" height="100px" width="100px" class="img-fluid">
                </center>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="dashboard.php">முகப்பு</a>
                </li>
                
                <li>
                <a href="tree_benifits.php">மரங்கள் மற்றும் அதன் பயன்கள்</a>
                </li>
                <li>
                <a href="events.php">புதிய நிகழ்வுகள்</a>
                </li>
                <li>
                <a href="blog.php">வலைப்பதிவு</a>
                </li>
                <li>
                    <a href="index.php">வெளியேறு</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn" style="background: #202d64;color: #fff;">
                        <i class="fas fa-align-left"></i>
                        <font>Toggle Sidebar</font>
                    </button>
                    
        
                </div>
            </nav>
            <div class="container mt-4">
                <div class="row g-3">
            <?php 
               $con=new mysqli('localhost','id18233341_root','t1$ROHySi^^<a7|G','id18233341_vnr');
                
                $sql="SELECT * FROM add_event";
                $result=mysqli_query($con,$sql);
                if($result){
                        while($row=mysqli_fetch_assoc($result))
                        {

                            $date=$row['date'];
                           
                            $ndate=date("d-m-Y",strtotime($date."+1 days"));
                            $currentDate = date("d-m-Y");
                            //$count = date_diff(date_create($date), date_create($currentDate));
                             if($currentDate<=$ndate)
                             {
                                $Title=$row['title'];
                                $Content=$row['Content'];
                                $place=$row['place'];
                            
                                // $cdate=date("d-m-Y",strtotime($date));
                                echo "<div class='col-md-4 col-lg-4 col-sm-4 mb-3'>
                                <div class='card shadow-lg'>
                                    <div class='card-body'>
                                    <div class='p'><b>$Title :</b></div>
                                    <p><b>தேதி :</b> $date
                                    <br><b>இடம் :</b> $place</p>
                                        <div class='p'>$Content</div>
                                    </div>
                                </div>
                                </div>";
                            }
                        }         
            }   //mat phy chem eng libr mba mca
                ?>
                </div>
            </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>

<?php
}
else{
    header("Location:volunteer_login.php");
}
?>