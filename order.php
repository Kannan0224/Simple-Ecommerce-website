<?php
session_start();
require_once 'db.php';
 if(isset($_SESSION["username"]))
 {
    $address=$_SESSION["address"];
    $date=$_SESSION["date"];
  $table=$_SESSION["cart"];
  $sql="SELECT * FROM `product` WHERE `name` IN (SELECT `order` FROM `$table` WHERE `order` IS NOT NULL)";
  $result=mysqli_query($con,$sql);
  if(mysqli_query($con,$sql))
  {}
  else
  {
      echo "<script>alert('No order in Your List ');window.location.href='index.php';</script>";
  }
  ?>
  <html>
  <head><title>Order</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
  </head>
  <body>
    <div class="jumbotron bg-primary">
    <h5 class="text-center text-white"><?php echo "Welcome ".$_SESSION["username"] ?></h5>
      <h6 class="text-center text-white"> Your Ordered Item</h6>
      <h6 class="text-center mt-2">
         <a href="index.php" class="text-white" style="text-decoration:none"><span class="fa fa-home"></span> Home</a>
      </h6>
    </div>
    <div class="container">
    <div class="row">
      <?php
        while($row=mysqli_fetch_assoc($result))
        {
           echo '
           <table class="table table-striped table-bordered" style="width:100%;">
            <tr class="text-center text-dark row">
                <th class="col-12 d-md-none">Photo & Details</th>
                <th class="d-none d-md-block col-md-4">photo</th>
                <th class="d-none d-md-block col-md-8"> Details</th>
            </tr>
         <tr class="row">
           <td class="col-12 col-md-4">
                <img src="'. $row["image"].'" class="img-fluid mx-auto d-block" style="width:auto;height:220px;"></td>
           <td class="col-12 col-md-8">
            <table class="table table-bordered">
               <tr>
                  <th>Name</th><td><p class="card-title d-inline">'.$row["name"].'</td>
               </tr>
               <tr>
                  <th>OrginalValue</th><td><p class="card-title d-inline">'.$row["orginalvalue"].'</td>
               </tr>
               <tr>
                  <th>Discount</th><td><p class="card-title d-inline">'.$row["discount"].'</td>
               </tr>
               <tr>
                  <th>Shipping Address</th><td><p class="card-title d-inline">'.$_SESSION["address"].'</td>
               </tr>
               <tr>
                  <th>Date & time</th><td><p class="card-title d-inline">'.$_SESSION["date"].'</td>
               </tr>
               <tr>
                  <th>Price</th><td><p class="card-title d-inline">Rs:'.$row["value"].'/-</td>
               </tr>
            </table>
         </table>
           ';
        }
      ?>
      </div>
      </div>
      <div class="container-fluid mt-3">
            <p class="text-dark font-weight-bolder text-center" id="copy">&copy; Copyright KANNAN</p>
        </div>
  </body>
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
             <h5 class="text-white font-weight-bolder text-center">Order List Empty</h5>
             <p class="text-center text-white font-weight-bolder">
             <span class="fa fa-user"></span> Sign In First <small>To Know your Order</small>
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