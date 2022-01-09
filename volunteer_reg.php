<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
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

    <div class="container">
        <div class="row g-3">
        <div class="col-md-3 col-sm-3"></div>
        <form action="volunteer_reg.php" class="col-md-6 col-sm-6 shadow-lg px-5 py-5" method="post">
            <label for="Name">பெயர் <span style="color:red">*</span></label><br>
            <input type="text" class="form-control my-2" placeholder="இங்கே உள்ளிடவும்" name="name" autocomplete="off">
            <label for="Mobile Number">கைபேசி எண் <span style="color:red">*</span></label><br>
            <input type="number" class="form-control my-2" placeholder="இங்கே உள்ளிடவும்" name="mobno" autocomplete="off">
            <label for="Address">முகவரி <span style="color:red">*</span></label><br>
            <textarea name="address" class="form-control my-2" id="" cols="30" rows="2" autocomplete="off" placeholder="இங்கே உள்ளிடவும்" ></textarea>
            <label for="Password">கடவுச்சொல் <span style="color:red">*</span></label><br>
            <input type="password" class="form-control my-2" placeholder="இங்கே உள்ளிடவும்" name="password" autocomplete="off">
            <button class="btn btn-success float-end" name="submit">சேமி</button>
        </form>
        <div class="col-md-3 col-sm-3"></div>
        </div>
    </div>
</body>
</html>


<?php 
$con = new mysqli("localhost","root","","vnr");

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mobno = $_POST['mobno'];
    $address = $_POST['address'];
    $psw = $_POST['password'];
    $sql = "INSERT INTO volunteer(name,mobno,address,password) VALUES('$name',$mobno,'$address','$psw')";
    if($con->query($sql))
    {
        echo "<script>alert('Registration Successfully Completed')</script>";
        header("location:volunteer_login.php");
    }
    else
    {
        echo "<script>alert('Registration Failed')</script>";
    }
}




?>
