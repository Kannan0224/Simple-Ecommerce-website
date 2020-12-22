<?php
require_once 'add.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Mens</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    </head>
    <style>

         .bg-white
        {
            background-color: #17a2b8 !important;
        }
        .inner
        {
            overflow:hidden;
        }
        .inner img
        {
            transition: all 1.5s ease;
        }
        .inner:hover img
        {
            transform: scale(1.3);
        }
        a{
            text-decoration:none;
        }
    </style>
    <body>
        <nav class="navbar navbar-inverse navbar-dark bg-white">
            <div class="container-fluid">
                <div class="d-none col-md-1 d-none d-sm-block">
                    <a class="navbar-brand text-white font-weight-bolder" href="index.php">
                        <span class="fa fa-home"></span> Home
                    </a>
                </div>
                <div class="col-md-11 col-12">
                    <form class="form-row">
                        <div class="col-11">
                             <input type="text" class="form-control" name="search" placeholder="Search" id="myinput">
                        </div>
                        <div class="col-1">
                            <button class="btn btn-dark text-white d-md-block d-none" id="search">
                                <span class="fa fa-search"> Search</span>
                            </button>
                                <a class="text-white font-weight-bold d-block d-md-none ml-auto" href="index.php">
                                    <span class="fa fa-home fa-lg align-middle"></span>
                                </a>
                        </div>      
                    </form>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
           <nav class="navbar navbar-default navbar-expand-md navbar-dark bg-white text-dark font-weight-bolder">
               <button class="btn btn-dark text-white font-weight-bolder navbar-toggler form-control" data-toggle="collapse" data-target="#data">
                   <span class="fa fa-search"></span> Filter</button>
               <div class="collapse navbar-collapse" id="data">
                  <div class="container-fluid">
                      <div class="col-12 col-md-2">
                           <div class="form-group">
                               <label class="from-checbox-label text-white" for="rangeinput">Price Max Range:</label>
                               <input type="range" class="custom-range" id="rangeinput" min=500 max="80000" oninput="ranges()">
                               <input type="text" value="0" class="text-center text-dark font-weight-bolder form-control form-control-sm" id="input" oninput="range()">
                           </div>
                      </div>
                      <div class="col-12 col-md-2">
                        <label for="select" class="text-white">Categories:</label>
                        <br>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="m" value="men" onclick="display(this)">
                            <label class="custom-control-label" for="m">Men</label>
                         </div>
                         <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="w"  value="women" onclick="display(this)">
                            <label class="custom-control-label" for="w">Women</label>
                         </div> 
                         <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="mo"  value="mobile" onclick="display(this)">
                            <label class="custom-control-label" for="mo">Mobile</label>
                         </div>
                      </div>
                      <div class="col-12 col-md-2">
                        <label for="select" class="text-white">Public Reviews:</label>
                        <br>
                         <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="3">
                            <label class="custom-control-label" for="3"> 3 rating</label>
                         </div>
                         <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="3">
                            <label class="custom-control-label" for="3"> 3 rating</label>
                         </div> 
                         <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="3">
                            <label class="custom-control-label" for="3"> 3 rating</label>
                         </div>
                      </div>
                      <div class="col-12 col-md-2">
                        <label for="select" class="text-white">Eshop Assured:</label>
                        <br>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="Ass">
                            <label class="custom-control-label" for="Ass">Assured</label>
                         </div> 
                         <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="nonAss">
                            <label class="custom-control-label" for="nonAss">Non Assured</label>
                         </div>
                      </div>
                      <div class="col-12 col-md-2 d-none" id="men">
                        <label for="select" class="text-white">Men Categories:</label>
                        <br>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="ts">
                            <label class="custom-control-label" for="ts">T-shirts</label>
                         </div>
                         <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="fs">
                            <label class="custom-control-label" for="fs">Formal Shirt</label>
                         </div>  
                         <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="cs">
                            <label class="custom-control-label" for="cs">Court Shout</label>
                         </div> 
                      </div>
                      <div class="col-12 col-md-2 d-none" id="women">
                        <label for="select" class="text-white">Women Categories:</label>
                        <br>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="ch">
                            <label class="custom-control-label" for="ch">Chudithar</label>
                         </div>
                         <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="sp">
                            <label class="custom-control-label" for="sp">Sports</label>
                         </div> 
                         <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="md">
                            <label class="custom-control-label" for="md">Modern</label>
                         </div>  
                      </div>
                      <div class="col-12 col-md-2 d-none" id="mobile">
                        <label for="select" class="text-white">Mobile Categories:</label>
                        <br>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="sam">
                            <label class="custom-control-label" for="sam">Samsung</label>
                         </div>
                         <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="leno">
                            <label class="custom-control-label" for="leno">Lenovo</label>
                         </div>
                         <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="Xioami">
                            <label class="custom-control-label" for="Xioami">Xioami</label>
                         </div> 
                      </div>
                      
                  </div>
               </div>
           </nav>
        </div>
        <div class="container-fluid cards">
          <div class="row">
                <?php
                $sql="SELECT * FROM product";
                $result=mysqli_query($con,$sql);       
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
                                <input type="hidden" value="'.$row["name"].'" name="cardname">';
                                echo '<span class="';
                                    if(in_array($row["name"],$cart))
                                    echo "fa fa-heart float-right fa-lg";
                                    else
                                    echo "fa fa-heart-o float-right fa-lg";
                                    echo '
                                    "style="';
                                    if(in_array($row["name"],$cart))
                                    echo "color:red";
                                    else
                                    echo "color:black";
                                    echo'
                                " onclick=heart(this)></span>';echo '
                                <input type="hidden" value="'.$row["heart"].'" name="heart">
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
                                <button type="button" class="btn btn-primary m-2" onclick="pay(this)"><span class="fa fa-arrow-circle-right"> Buy</span></button>
                                <button type="button" class="btn btn-danger m-2" onclick="cart(this)"><span class="fa fa-shopping-cart"> 
                                </span> Cart</button>
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
    <script src="menjs.js"></script>
  
    <script>
                function heart(data)
                {
                    var value=data.attributes.getNamedItem("class").value;
                    console.log(value);
                    if(value!="fa fa-heart-o float-right fa-lg")
                    {
                    data.attributes.getNamedItem("class").value="fa fa-heart-o float-right fa-lg";
                    data.style.color="black";
                    var parent=data.parentNode;
                    var wish=parent.childNodes;
                    var name=wish[1].innerHTML;
                    parent.submit();
                    }
                    else
                    {
                    data.attributes.getNamedItem("class").value="fa fa-heart fa-lg float-right fa-lg";
                    data.style.color="red";
                    var parent=data.parentNode;
                    var wish=parent.childNodes;
                    parent.submit();
                    }
                }
                function cart(id){
                    var form=id.parentNode;
                    form.action="addcart.php";
                    form.submit();
                }
                function pay(id){
                    var form=id.parentNode;
                    form.action="payment.php";
                    form.submit();
                }
        </script>
</html>