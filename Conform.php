<?php
session_start();
  require_once 'db.php';
  if(isset($_POST["address"]))
  {
   $table=$_SESSION["cart"];
   $date = date('d-m-y h:i:s');
   $name=$_SESSION["username"];
   $address=$_POST["address"];
   $card=$_SESSION["cardname"];
   $_SESSION["address"]=$_POST["address"];
   $_SESSION["date"]=$date;
   $sql="UPDATE `login` SET `address`='$address' WHERE `name`='$name'";
   $sql1="INSERT INTO `$table` (`order`,`date`)VALUES('$card','$date')";
   if(mysqli_query($con,$sql)&& mysqli_query($con,$sql1))
   {
   ?>
   <html>
   <head>
   <title><?php echo $_SESSION["cardname"] ?></title>
   <meta name="viewport" content="width=device-width,initial-scale=1.0">
   <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
   </head>
   <body>
   <div class="container">
         <table class="table table-striped table-responsive">
           <tr><th colspan="2" class="text-center">Eshop</th></tr>
         <tr class="bg-info text-white text-center row">
             <th class="col-12 d-md-none">Photo & Details</th>
            <th class="d-none d-md-block col-md-6">photo</th>
            <th class="d-none d-md-block col-md-6"> Details</th>
         </tr>
         <tr class="row">
           <td class="col-12 col-md-6">
           <img src="<?php echo $_SESSION["cardimg"] ?>" class="img-fluid" style="width:auto;height:auto;"></td>
           <td class="col-12 col-md-6">
            <table class="table table-bordered">
               <tr>
                  <th>Name</th><td><p class="card-title d-inline"><?php echo $_SESSION["cardname"]?></p></td>
               </tr>
               <tr>
                  <th>UserName</th><td><p class="card-title d-inline"><?php echo $_SESSION["user"]?></p></td>
               </tr>
               <tr>
                  <th>Email</th><td><p class="card-title d-inline"><?php echo $_SESSION["email"]?></p></td>
               </tr>
               <tr>
                  <th>Phone</th><td><p class="card-title d-inline"><?php echo $_SESSION["phone"]?></p></td>
               </tr>
               <tr>
                  <th>Address</th><td><p class="card-title d-inline"><?php echo $_POST["address"]?></p></td>
               </tr>
               <tr>
                  <th>Date & Time</th><td><p class="card-title d-inline"><?php echo $date?></p></td>
               </tr>
               <tr>
                  <th>Discount</th><td><p class="card-text"><small><?php echo $_SESSION["carddis"]?></p></td>
               </tr>
               <tr>
                  <th>Orginalvalue</th><td><small class="font-weight-bolder text-muted"><del><?php echo $_SESSION["cardorg"]?></del>
                  </small></td>
               </tr>
               <tr>
                  <th>GST tax</th><td><small class="font-weight-bolder text-muted"> 5 %<small></td>
               </tr>
               <tr>
                  <th>Other tax</th><td><small class="font-weight-bolder text-muted"> 2.4 %</small></td>
               </tr>
               <tr class="text-info">
               <th>price</th><td><p class="card-title d-inline">Rs:<?php echo $_SESSION["cardvalue"]?>/- </p></td>
               </tr>
            </table>
           </td>
         </tr>
         <tr class="bg-success text-white text-center ">
         <th colspan="2">Order Successfully</th>
         </tr>
         <tr class="text-dark text-center mt-2">
         <th colspan="2"><small class="font-weight-bolder"><p>&copy; Copyright KANNAN</p></small></th>
         </tr>
         </table>
   </div>
   </body>
   <script>
      alert("Ordered Successfully..");
      window.print();
      window.location.href="index.php";
   </script>
   <?php
   }
   else
   {
      echo "<script>alert('Server Error Try Later...');window.location.href='Shop.php';</script>";
   }
  }
?>