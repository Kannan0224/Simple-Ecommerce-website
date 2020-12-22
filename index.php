<?php
session_start();
require_once 'db.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Index Page</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    </head>
    <style>
        a:hover{
          text-decoration: none;
        }
        .bg-white
        {
            background-color: #17a2b8 !important;
        }
        li
        {
            font-weight: bolder;
        }
        address
        {
            font-weight: bolder;
            color:floralwhite;

        }
        .col-6
        {
            padding-right: 0 !important;
            padding-left:0 !important;

        }
        .modal-body
        {
            background-color:#314a4e0f;
        }
    </style>
    <body>

        <div class="modal fade" id="mymodel">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <h5 class="modal-title text-white">Login</h5>
                        <button type="button" class="close text-white" data-dismiss="modal">
                           &times;
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="form-row" method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="username" class="font-weight-bolder">UserName</label>
                                    <input type="text" name="user" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="username"class="font-weight-bolder">Password</label>
                                    <input type="password" name="pass" class="form-control">
                                </div>
                            </div>
                            <hr>
                            <div class="offset-md-8">
                                <button class="btn btn-primary"><span class="fa fa-sign-in"></span> Login</button>
                                <button class="btn btn-danger"><a href="signup.html" class="text-white"><span class="fa fa-user"></span> New User </a></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <!------>
        <nav class="navbar navbar-inverse  navbar-expand-md navbar-dark bg-white">
            <a class="navbar-brand  text-white font-weight-bolder">
                Eshop
            </a>
           <button class="navbar-toggler bg-info" type="button" data-toggle="collapse" data-target="#drop">
               <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="drop">
              <ul class="navbar-nav">
                 <li class="nav-item active"><a href="javascript:void(0)" class="nav-link text-white">
                     <span class="fa fa-home"></span> Home</a></li>
                 <li class="nav-item"><a href="/Shop.php" class="nav-link text-white">
                     <span class="fa fa-shopping-bag"></span> Shop</a></li>
                <li class="nav-item"><a href="/Wishlist.php" class="nav-link text-white">
                        <span class="fa fa-heart"></span> Wishlist</a></li>
                <li class="nav-item"><a href="/cart.php" class="nav-link text-white">
                        <span class="fa fa-shopping-cart"></span> Cart</a></li>
              </ul>
            <p class="font-weight-bolder ml-md-auto" id="login">
            <a  data-toggle="modal" data-target="#mymodel" class="nav-item text-white">
               <span class="fa fa-sign-in"></span> Login</a>
            </p>
           </div>
        </nav>
        <!---->
        <div class="carousel slide" data-ride="carousel" id="demo">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1" ></li>
                <li data-target="#demo" data-slide-to="2" ></li>
                <li data-target="#demo" data-slide-to="3" ></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active"><img src="images/carousel/image3.jpg" class="img-fluid"></div>
                <div class="carousel-item "><img src="images/carousel/image1.jpg" class="img-fluid"></div>
                <div class="carousel-item "><img src="images/carousel/image2.jpg" class="img-fluid"></div>
                <div class="carousel-item "><img src="images/carousel/image3.jpg" class="img-fluid"></div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
        </div>
                <div>
                        <img src="images/mens/men4.jpg" class="img-fluid">
                </div>
        <div class="container-fluid mt-2 mb-2">
          <div class="row">
              <div class="col-6 col-sm-6 col-md-3">
                   <a href="Shop.php"><img src="images/mens/men.jpg" class="img-fluid m-md-1"></a>
              </div>
              <div class="col-6 col-sm-6 col-md-3">
                <a href="Shop.php"><img src="images/mens/men2.jpg" class="img-fluid m-1"></a>
                </div>
              <div class="col-6 col-sm-6 col-md-3">
                <a href="Shop.php"><img src="images/mens/men1.jpg" class="img-fluid m-md-1"></a>
                </div>
              <div class="col-6 col-sm-6 col-md-3">
                <a href="Shop.php"><img src="images/mens/men3.jpg" class="img-fluid m-1"></a>
              </div>
          </div>
        </div>

          <div class="container-fluid mb-2 p-0">
              <a href="Shop.php">
                  <img src="images/womens/women.jpg" class="img-fluid">
                </a>
            </div>
        </div>

<footer class="bg-white">
  <div class="container-fluid p-md-5 p-2">
        <div class="row m-md-2 m-1">
            <div class="col-12 col-md-4 align-self-center mb-2">
               <ul class="navbar-nav">
                <li class="nav-item active"><a href="javascript:void(0)" class="nav-link text-white">
                    <span class="fa fa-home"></span> Home</a></li>
                <li class="nav-item"><a href="/Shop.php" class="nav-link text-white">
                    <span class="fa fa-shopping-bag"></span> Shop</a></li>
               <li class="nav-item"><a href="/Wishlist.php" class="nav-link text-white">
                       <span class="fa fa-heart"></span> Wishlist</a></li>
                       <li class="nav-item"><a href="" class="nav-link text-white">
                        <span class="fa fa-user"></span> Login</a></li>
                        <li class="nav-item"><a href="/cart.php" class="nav-link text-white">
                        <span class="fa fa-shopping-cart"></span> Cart</a></li>
               </ul>
            </div>
            <div class="col-12 col-md-4 mb-2">
                <address class="mt-2">
                    Maruthi puram,<br>
                    Thimiri, Arcot Taulk,<br>
                    Vellore district,<br>
                    <span class="fa fa-phone"></span> 6380392858<br>
                    <span class="fa fa-envelope"></span> kannansang246@gmail.com
                </address>
          </div>
          <div class="col-12 col-md-4 align-self-center ">
                <button class="btn btn-light">
                    <span class="fa fa-facebook"></span>
                </button>
                <button class="btn btn-light">
                    <span class="fa fa-twitter "></span>
                </button>
                <button class="btn btn-light">
                    <span class="fa fa-google "></span>
                </button>
          </div>
        </div>
  </div>
</footer>
<div class="container-fluid">
    <p class="text-dark font-weight-bolder text-center mt-2">&copy; Copyright KANNAN</p>
</div>
    </body>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</html>
<?php
              if(isset($_POST["user"]))
              {
                $name=$_POST["user"];
                $pass=$_POST["pass"];
                $sql="SELECT `name`,`username` FROM `login` WHERE username='$name' && pass='$pass'";
                $result=mysqli_query($con,$sql);
                $row=mysqli_fetch_assoc($result);
                if(mysqli_num_rows($result)>0)
                {
                   $_SESSION["username"]=$row["name"];
                   $_SESSION["cart"]=$row["username"];
                }
                else
                {
                echo '<script>alert("'.$name.' not Registred..");</script>';
                }
             }
            if(isset($_SESSION["username"]))
            {
                $username=$_SESSION["username"];
                echo "<script>
                var div=document.createElement('div');
                div.setAttribute('class','dropdown');
                var value=document.createElement('a');
                value.setAttribute('data-toggle','dropdown');
                value.setAttribute('class','dropdown-toggle text-white font-weight-bolder');
                value.innerHTML='Welcome $username';
                div.appendChild(value);
                var menu=document.createElement('div');
                menu.setAttribute('class','dropdown-menu');
                var item=document.createElement('a');
                item.setAttribute('class','dropdown-item');
                item.setAttribute('href','signout.php'); 
                item.innerHTML='sign out';
                var item1=document.createElement('a');
                item1.setAttribute('class','dropdown-item');
                item1.setAttribute('href','order.php');
                item1.innerHTML='Orders';
                menu.appendChild(item);
                menu.appendChild(item1);
                div.appendChild(menu);
                var data=document.getElementById('login');data.removeAttribute('data-toggle')
                data.removeChild(data.childNodes[1]);;
                data.appendChild(div);
                </script>";
            }else{

            }
            ?>