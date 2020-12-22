<?php
session_start();
  require_once 'db.php';
  if(isset($_SESSION["cart"]))
  {
   $table=$_SESSION["cart"];
   $sql="SELECT * FROM `product` WHERE name in(select cart from `$table` where 1)";
   if(mysqli_query($con,$sql))
   {
   $result=mysqli_query($con,$sql);
   ?>
   <html>
   <head><title>Cart</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
   </head>
   <style>
   body
       {
           background-color:#d9eef1;
       }
   </style>
   <body>
      <div class="container-fluid bg-info p-3">
      <p class="text-center d-inline">
      <h6 class="text-center">
      <a href="index.php" class="text-white" style="text-decoration:none"><span class="fa fa-home"></span> Home</a> 
      </h6>
      <p class="text-center text-white font-weight-bolder"><?Php echo 'Welcome '.$_SESSION["username"].''; ?></p>
      </div>
      <div class="container-fluid">
        <div class="row">
            <?php
            while($row=mysqli_fetch_assoc($result))
            {
             echo  '
             <div class="col-12 col-md-3">
              <div class="card shadow m-2">
                     <div class="inner">
                         <img src='.$row["image"].' class="card-img-top img-fluid">
                     </div>
                 <div class="card-body">
                     <form method="post" action="addcart.php">
                     <h5 class="card-title d-inline">'.$row["name"].'</h5>
                     <input type="hidden" value="'.$row["name"].'" name="cardremove">
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
                    <button class="btn btn-primary" onclick="pay(this)" type="button">
                       <span class="fa fa-arrow-right"></span> Continue</button>
                    <button class="btn btn-danger"><span class="fa fa-trash-o"></span> 
                    <a href="addcart.php" class="text-white"></a>Remove</button>
                     </form>
                 </div>
             </div>
         </div>';
            }
            }
            else
            {
                echo "<script>alert('Server Problem');window.location.href='signup.php';</script>";
            }
            ?>
        </div>
      </div>
   </body>
   <script>
      function pay(id)
      {
          var form=id.parentNode;
          form.action="payment.php";
          form.submit();
      }
   </script>
   </html>
   <?php
  }
  else{
      ?>
      <html>
   <head><title>Cart</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
   </head>
   <style>
   body
       {
           background-image:url("images/sad.jpg");
           background-position:center;
           background-size:cover;
       }
       .bg-info{
            background-color:#203c72e0 !important;
        }
   </style>
   <body>
   <div class="container-fluid bg-info p-3">
      <p class="text-center d-inline">
      <h6 class="text-center">
      <a href="index.php" class="text-white" style="text-decoration:none"><span class="fa fa-home"></span> Home</a> 
      </h6>
      <h4 class="text-center text-white font-weighter-boler"><span class="fa fa-shopping-cart"></span> No Card Added</h4>
      <p class="text-center text-white font-weight-bolder"><span class="fa fa-sign-in"></span> Go To Sign In First</p>
      </div>
   </body>
   </html>
   <?php
  }
?>