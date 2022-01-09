<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    <link rel="shortcut icon" type="image" href="vnr.png">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/15b077b312.js" crossorigin="anonymous"></script>
    <style>
            body {
/* Location of the image */
background-image: url("tree2.jpg");

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
.card{
    background:rgba(255,255,255,.5);
}
    </style>
</head>
<body>
 <div class="container-fluid mt-3">
<div class="row">
    <div class="col-md-8 col-sm-8"></div>
    <div class="col-md-4 col-sm-4">
        <a  href="volunteer_login.php" class="btn btn-success float-end mx-2"><i class="fas fa-user"></i>  பயனர் உள்நுழைவு</a>
        <a href="admin/index.php" class="btn btn-success float-end"> <i class="fas fa-users-cog"></i>  நிர்வாகி</a>
       
    </div>
</div>
 </div>
<div class="container mt-5">
    <div class="row g-3">
        <div class="col-md-10 col-sm-10">
            <img src="vnr.png" height="200px" width="200px" alt="" class="img-fluid float-end">
        </div>
        <div class="col-md-2 col-sm-2"></div>
    </div>
    <div class="row g-3 mt-5">
        <div class="col-md-5 col-sm-5"></div>
            <?php 
                $con=new mysqli("localhost","root","","vnr");
                
                $sql="SELECT sum(count) as totalcount FROM planted";
                $result=mysqli_query($con,$sql);
                if($result){
                        if($row=mysqli_fetch_assoc($result))
                        {
                            $totalcount=$row['totalcount'];
                            
                                echo "<div class='col-md-4 col-lg-4 col-sm-4 mb-3'>
                                <div class='card shadow-lg'>
                                    <div class='card-body'>
                                        <div class='h6 mt-1 mx-2 '><b>நடப்பட்ட மரக்கன்றுகள்</div><br>
                                        <div class='p pt-2 '><i class='fas fa-tree'> $totalcount</i></div>
                                    </div>
                                </div>
                                </div>";

                        }

                        

                        $mysql1="SELECT count(name) as totalcount FROM volunteer";
                        $myresult1=mysqli_query($con,$mysql1);
                        if($myresult1){
                        if($row=mysqli_fetch_assoc($myresult1))
                        {
                            $totalcount=$row['totalcount'];
                            
                                echo "<div class='col-md-3 col-lg-3 col-sm-3 mb-3'>
                                <div class='card shadow-lg'>
                                    <div class='card-body'>
                                        <div class='h4 btn '><b>உறுப்பினர்கள்</div><br>
                                        <div class='p btn '><i class='fas fa-users'></i> $totalcount</div> 
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

</body>
</html>