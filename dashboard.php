<?php 
session_start();
$con=new mysqli("localhost","root","","vnr");
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
    <title>முகப்பு - Dashboard</title>
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
                    <div class="col-md-2 col-sm-2">

                    </div>
                  
        
                </div>
            </nav>
            <div class="container mt-4">
                <div class="row g-3">
            <?php 
                $con=new mysqli("localhost","root","","vnr");
                
                $sql="SELECT sum(count) as totalcount FROM planted";
                $result=mysqli_query($con,$sql);
                if($result){
                        if($row=mysqli_fetch_assoc($result))
                        {
                            $totalcount=$row['totalcount'];
                            
                                echo "<div class='col-md-4 col-lg-4 col-sm-4 mb-3'>
                                <a href='planted_trees.php' class='card shadow-lg'>
                                    <div class='card-body'>
                                        <div class='h4 btn btn-lg'><b>நடப்பட்ட மரக்கன்றுகள்</div>
                                        <div class='p btn btn-lg'>$totalcount</div>
                                    </div>
                                </a>
                                </div>";

                        }

                        $mysql="SELECT sum(count) as totalcount FROM add_plant";
                        $myresult=mysqli_query($con,$mysql);
                        if($myresult){
                        if($row=mysqli_fetch_assoc($myresult))
                        {
                            $totalcount=$row['totalcount'];
                            
                                echo "<div class='col-md-4 col-lg-4 col-sm-4 mb-3'>
                                <a href='stock_tree.php' class='card shadow-lg'>
                                    <div class='card-body'>
                                        <div class='h4 btn btn-lg'><b>கையிருப்பு</div><br>
                                        <div class='p btn btn-lg'>$totalcount</div> 
                                    </div>
                                </a>
                                </div>";
                        }
                        }

                        $mysql1="SELECT count(name) as totalcount FROM volunteer";
                        $myresult1=mysqli_query($con,$mysql1);
                        if($myresult1){
                        if($row=mysqli_fetch_assoc($myresult1))
                        {
                            $totalcount=$row['totalcount'];
                            
                                echo "<div class='col-md-4 col-lg-4 col-sm-4 mb-3'>
                                <div class='card shadow-lg'>
                                    <div class='card-body'>
                                        <div class='h4 btn btn-lg'><b>உறுப்பினர்கள்</div><br>
                                        <div class='p btn btn-lg'>$totalcount</div> 
                                    </div>
                                </div>
                                </div>";
                        }
                        echo "</div>";
                        }
            }
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