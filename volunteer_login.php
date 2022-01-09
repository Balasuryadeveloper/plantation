<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer login</title>
    <link rel="shortcut icon" type="image" href="gct1.png">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/15b077b312.js" crossorigin="anonymous"></script>
    
<style>
    form{
        margin-top:20px;
        
        border-radius: 30px;
        
        background:white;
    }
    body {
/* Location of the image */
background-image: url("admin.jpg");

/* Background image is centered vertically and horizontally at all times */
background-position: center;



/* Background image is fixed in the viewport so that it doesn't move when
the content's height is greater than the image's height */
background-attachment: fixed;

/* This is what makes the background image rescale based
on the container's size */
background-size:cover;
background-repeat:no-repeat;


/* Set a background color that will be displayed
while the background image is loading */
/* background-color: #464646; */
}

</style>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-3 col-sm-3"></div>
            <div class="col-md-6 col-sm-6">
                <center><img src="logo.png" alt="" class="img-fluid"></center>
            </div>
            <div class="col-md-3 col-sm-3"></div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row g-3">
        <div class="col-md-4 col-sm-4"></div>
        <form action="volunteer_login.php" class="col-md-5 col-sm-5 shadow-lg px-5 py-5" method="post">
            <label for="Name">பெயர்  <span style="color:red">*</span></label><br>
            <input type="text" class="form-control my-2" placeholder="இங்கே உள்ளிடவும்" name="name" autocomplete="off">
            <label for="Password">கடவுச்சொல் <span style="color:red">*</span></label><br>
            <input type="password" class="form-control my-2" placeholder="இங்கே உள்ளிடவும்" name="password" autocomplete="off">
            <center><button class="btn btn-success mt-3 mb-3" name="submit">உள்நுழைக</button></center>
            <small>கணக்கு இல்லையா ? <a href="volunteer_reg.php">பதிவு செய்யவும்</a></small>
        </form>
        <div class="col-md-3 col-sm-3"></div>
        </div>
    </div>
</body>
</html>


<?php 
$con=new mysqli('localhost','id18233341_root','t1$ROHySi^^<a7|G','id18233341_vnr');

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $psw = $_POST['password'];
    $sql = "SELECT * FROM volunteer WHERE name='$name'and password='$psw'";
    $result=mysqli_query($con,$sql);
    if(!empty($name) and !empty($psw))
    {
    if(mysqli_num_rows($result)==0)
    {
        echo "<script>alert('User Name Or Password Is Wrong')</script>";
    }
    else
    {
        header("Location:dashboard.php");
    }
    }
    else
    {
        echo "<script>alert('Please Fill All the Field')</script>";
    }
}



?>
<?php
error_reporting(E_ERROR | E_PARSE);
$name = $_POST['name'];
$psw = $_POST['password'];
 $_SESSION['name']=$name;
 $_SESSION['password']=$psw;
?>