<?php
session_start();
require_once 'db.php';
  if(isset($_SESSION["username"]))
  {
 $table=$_SESSION["cart"];
  $sql="SELECT * FROM `product` WHERE name in(select wishlist from `$table` where 1)";
  $result=mysqli_query($con,$sql);
  if(isset($_POST["cardname"]))
  {
    $name=$_POST["cardname"];
    $sql="DELETE FROM `$table` WHERE `wishlist`='$name'";
    if(mysqli_query($con,$sql))
        {
            echo "<script>alert('$name Removed From WishList')</script>";
            header("Refresh:0");
        }
    else
        echo mysqli_error($con);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>WishList</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    </head>
    <body>
          
         <div class="jumbotron bg-info">
             <h5 class="text-white font-weight-bolder text-center">Welcome <?php echo $_SESSION["username"]; ?></h5>
             <p class="text-center text-white font-weight-bolder">
             <span class="fa fa-heart"></span> Your WishList
             </p>
             <h6 class="text-center mt-2">
                <a href="index.php" class="text-white" style="text-decoration:none"><span class="fa fa-home"></span> Home</a>
            </h6>
         </div>
        <div class="container-fluid">
          <div class="row">
                 <?php    
                while($row=mysqli_fetch_assoc($result))
                {
                echo '
                    <div class="col-12 col-md-3 '.$row["catagories"].'">
                        <div class="card shadow m-2">
                                <div class="inner">
                                    <img src='.$row["image"].' class="card-img-top img-fluid">
                                </div>
                            <div class="card-body">
                                <form method="post" action="'.$_SERVER["PHP_SELF"].'">
                                <h5 class="card-title d-inline">'.$row["name"].'</h5>
                                <input type="hidden" value="'.$row["name"].'" name="cardname">
                                <input type="hidden" value="'.$row["image"].'" name="cardimg">
                                <p class="card-text"><small>'.$row["discount"].'</small>
                                <input type="hidden" value="'.$row["discount"].'" name="carddis">
                                </p>
                                <p class="card-text text-primary font-weight-bolder">Rs:'.$row["value"].'/-
                                    <input type="hidden" value="'.$row["value"].'" class="hidden" name="cardvalue">
                                <small class="font-weight-bolder text-muted"><del>'.$row["orginalvalue"].'</del>
                                <input type="hidden" value="'.$row["orginalvalue"].'" name="cardorg">
                                </small>
                                </p>
                                <p class="card-text"><small class="font-weight-bolder">Public Review :</small>
                                 ';
                                 switch($row["rating"])
                                    {
                                    case 1:
                                        echo "<span class='fa fa-star text-danger'></span>
                                        <span class='fa fa-star text-danger'></span>
                                        <span class='fa fa-star-o text-danger'></span>
                                        <span class='fa fa-star-o text-danger'></span>
                                        <span class='fa fa-star-o text-danger'></span>";
                                    break;
                                    case 2:
                                        echo "<span class='fa fa-star text-danger'></span>
                                        <span class='fa fa-star text-danger'></span>
                                        <span class='fa fa-star text-danger'></span>
                                        <span class='fa fa-star-o text-danger'></span>
                                        <span class='fa fa-star-o text-danger'></span>";
                                    break;
                                    case 3:
                                        echo "<span class='fa fa-star text-danger'></span>
                                        <span class='fa fa-star text-danger'></span>
                                        <span class='fa fa-star text-danger'></span>
                                        <span class='fa fa-star text-danger'></span>
                                        <span class='fa fa-star-o text-danger'></span>";
                                    break;
                                    case 4:
                                        echo "<span class='fa fa-star text-danger'></span>
                                        <span class='fa fa-star text-danger'></span>
                                        <span class='fa fa-star text-danger'></span>
                                        <span class='fa fa-star text-danger'></span>
                                        <span class='fa fa-star text-danger'></span>";
                                    break;
                                    }; echo'
                                </p>
                                <button type="button" class="btn btn-primary m-2"><span class="fa fa-arrow-circle-right"> Buy</span></button>
                                <button type="button" class="btn btn-danger m-2" onclick="remove(this)"><span class="fa fa-trash"> Remove</span></button>
                                </form>
                            </div>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>
        <div class="container-fluid mt-3">
            <p class="text-dark font-weight-bolder text-center" id="copy">&copy; Copyright KANNAN</p>
        </div>
    </body>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
        function remove(id)
        {
          var submit=id.parentNode;
          submit.submit();
        }
    </script>
</html>
<?php
  }
  else{
?>

<!DOCTYPE html>
<html>
    <head>
        <title>WishList</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    </head>
    <style>
        body{
            background-image:url("images/sad.jpg");
            background-size:cover;
            background-repeat:repeat-y;
        }
        .bg-info{
            background-color:#203c72e0 !important;
        }
    </style>
    <body> 
         <div class="jumbotron bg-info">
             <h5 class="text-white font-weight-bolder text-center">No WishList Added</h5>
             <p class="text-center text-white font-weight-bolder">
             <span class="fa fa-user"></span> Sign In First <small>To Add your favourite List</small>
             </p>
             <p class="text-center"><button class="btn btn-success" onclick="sign()"><span class="fa fa-user"></span> SIGN IN</button></p>
         </div>
    </body>
    <script>
        function sign()
        {
            document.location.href="signup.html";
        }
        </script>
</html>
<?php
  }
?>