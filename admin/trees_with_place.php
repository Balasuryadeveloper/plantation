<?php 
// session_start();
// $con=new mysqli("localhost","id18233341_root","t1$ROHySi^^<a7|G","id18233341_vnr");
// $sql="SELECT * FROM admin";
// $res=mysqli_query($con,$sql);
// $row=mysqli_fetch_assoc($res);
// extract($_REQUEST);
// $name=$row['name'];
// $psw=$row['password'];
// if(!empty($_SESSION['Name']==$name and $_SESSION['Password']==$psw)){

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
    <link rel="stylesheet" href="../sidebar/style.css">
    <title>முகப்பு - Dashboard</title>
    <link rel="shortcut icon" type="image" href="pp.jpg">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
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
                <a href="add_tree.php">மரங்கள் மற்றும் அதன் பயன்கள்</a>
                </li>
                <li>
                    <a href="add_plant.php">புதிய மரக்கன்றுகளை சேர்த்தல்</a>
                </li>
                <li>
                    <a href="planted.php">இன்று நடப்பட்டது</a>
                </li>
                <li>
                    <a href="add_event.php">நிகழ்வைச் சேர்க்கவும்</a>       
                </li>
                <li>
                    <a href="add_blog.php">புதிய வலைப்பதிவு</a>
                </li>

                <li>
                    <a href="../index.php">வெளியேறு</a>
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
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
        
                </div>
            </nav>
            <div class="container mt-4">
               
               
            <?php 
                $con=new mysqli('localhost','id18233341_root','t1$ROHySi^^<a7|G','id18233341_vnr');
                $treename=$_GET['treename'];
                $sql="SELECT DISTINCT * FROM planted WHERE treename='$treename'";
                $result=mysqli_query($con,$sql);
                if($result){
                    $sno=1;
                       echo " <p class='text-dark'>மரத்தின் பெயர் : $treename</p>";
                        echo "<table class='table table-bordered'>
                        <tr>
                            <th>S.No</th><th>Place</th><th>Date</th>
                        </tr>";
                        while($row=mysqli_fetch_assoc($result))
                        {
                            $date=$row['date'];
                            $cdate=date("d-m-Y",strtotime($date));
                            $treename=$row['treename'];
                            $Place=$row['place'];
                                echo "<tr><td>$sno</td><td>$Place</td><td>$cdate</td><tr>";
                            $sno++;
                        }
                        echo "</table>";

            }
                ?>
                </div>
            </div>
    </div>
<tr>

</tr>
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
// }
// else{
//     header("Location:index.php");
// }
?>