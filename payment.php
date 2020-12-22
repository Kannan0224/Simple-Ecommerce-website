<?php
session_start();
require_once 'db.php';
if(isset($_SESSION["username"]))
{
     if(isset($_POST["cardname"])|| isset($_POST["cardremove"]))
     {
       if(isset($_POST["cardname"]))
       {
        $_SESSION["cardname"]=$_POST["cardname"];
       }
       else
       {
        $_SESSION["cardname"]=$_POST["cardremove"];
       }
      $_SESSION["cardimg"]=$_POST["cardimg"];
      $_SESSION["carddis"]=$_POST["carddis"];
      $_SESSION["cardorg"]=$_POST["cardorg"];
      $_SESSION["cardvalue"]=$_POST["cardvalue"];
       $name=$_SESSION["username"];
       $sql="SELECT * FROM `login` WHERE `name`='$name'";
       if(mysqli_query($con,$sql))
       {
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($result);
        $_SESSION["user"]=$row["name"];
        $_SESSION["email"]=$row["email"];
        $_SESSION["phone"]=$row["phone"];
        ?>
         <html>
         <head><title><?php echo $_POST["cardname"]; ?></title>
         <meta name="viewport" content="width=device-width,initial-scale=1.0">
         <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
         <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
         </head>
         <body>
         <div class="jumbotron bg-info">
           <h3 class="text-white text-center font-weight-bolder"><span class="fa fa-money"></span> Payment Page</h3>
           <h5 class="text-white text-center font-weight-bolder"><span class="fa fa-check"></span> Your Select Item  <span class="text-dark">
           <?php if(isset($_POST["cardname"]))
                {
                  echo $_SESSION["cardname"];
                }
                else
                {
                  echo $_SESSION["cardname"];
                }?>
           </span></h5>
         </div>
           <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6">
                  <h3 class="text-center text-dark font-weight-bolder">User Details</h4>
                   <h5><span class="fa fa-user"></span> Name</h5>
                     <h4><pre class="text-info font-weight-bolder">    <?php echo $row["name"] ?></pre></h4>
                   <h5><span class="fa fa-envelope-o"></span> Email Id</h5>
                   <h4><pre class="text-info font-weight-bolder">    <?php echo $row["email"] ?></pre></h4>
                   <h5><span class="fa fa-phone"></span> Phone</h5>
                   <h4><pre class="text-info font-weight-bolder">    <?php echo $row["phone"] ?></pre></h4>
                   <h5><span class="fa fa-address-book"></span> Address</h5>
                   <small class="text-dark">*You want Change Address Type in below...</small>
                   <form method="post" action="Conform.php" id="formadd">
                   <textarea class="form-control text-info font-weight-bolder mt-2" rows="5" name="address" value="<?php echo $row["address"] ?>"><?php echo $row["address"] ?>
                   </textarea>
                   </form>
                </div>
                <div class="col-12 col-md-6">
                <h3 class="text-center text-dark font-weight-bolder">Product Details</h4>
                <div class="card shadow m-2">
                     <div class="inner">
                         <img src="<?php echo $_SESSION["cardimg"]?>" class="card-img-top img-fluid">
                     </div>
                 <div class="card-body">
                     <h5 class="card-title d-inline"><?php echo $_SESSION["cardname"]?></h5>
                      <p class="card-text"><small><?php echo $_SESSION["carddis"]?></small> </p>
                     <p class="card-text text-primary font-weight-bolder">Rs:<?php echo $_SESSION["cardvalue"]?>/-   
                        <small class="font-weight-bolder text-muted"><del><?php echo $_SESSION["cardorg"]?></del>
                        </small>
                     </p>
                 </div>
             </div>
                </div>
               </div>
           </div>
           <button class="btn btn-primary form-control" onclick="data()"><span class="fa fa-arrow-right"></span> Order</button>
           </body>
           <script>
               function data()
               {
                var form=document.getElementById("formadd");
                form.submit();
               }
           </script>
           </html>
        <?php
       }
      }
    }
    else
    {
      echo "<script>alert('sign in First');window.location.href='Shop.php'</script>";
    }
?>