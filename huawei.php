<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cellular town</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body style="background-color:white">

    <a href="index.php" ><!-- navbar-brand home Begin -->
                   
    <img src="images/_logo.JPG" alt="flexity Logo" class="hidden-xs" width="600x" style="display: block;
  margin-left: auto;
  margin-right: auto;" >
    </a>
    <div id="navbar" class="navbar navbar-default" style="color: white;"><!-- navbar navbar-default Begin -->
       
        <div class="container" style="color: white;"><!-- container Begin -->
             
            <div class="navbar-header" style="color: white;"><!-- navbar-header Begin -->
                
             
                
                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    
                    <span class="sr-only">Toggle Navigation</span>
                    
                    <i class="fa fa-align-justify"></i>
                    
                </button>
                
                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    
                    <span class="sr-only">Toggle Search</span>
                    
                    <i class="fa fa-search"></i>
                    
                </button>
                
            </div>
            
            <div class="navbar-collapse collapse" id="navigation" style="color: black;"><!-- navbar-collapse collapse Begin -->
                
                <div class="padding-nav" style="color: black;"><!-- padding-nav Begin -->
                    
                    <ul class="nav navbar-nav left" ><!-- nav navbar-nav left Begin -->
                        
                        <li class="active">
                            <a href="index.php"style="color: black;" >Home</a>
                        </li>
                        <li>
                            <a href="shop.php" style="color: black;">lets Shop</a>
                        </li>
                        <li>
                            <a href="checkout.php" style="color: black;">My Account</a>
                        </li>
                        <li>
                            <a href="cart.php" style="color: black;">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="contact.php" style="color: black;">Contact Us</a>
                        </li>
                        
                    </ul><!-- nav navbar-nav left Finish -->
                    
                </div><!-- padding-nav Finish -->
                
                <a href="cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary Begin -->
                    
                    <i class="fa fa-shopping-cart"></i>
                    
                    <span>Check Cart</span>
                    
                </a><!-- btn navbar-btn btn-primary Finish -->
                
                <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Begin -->
                    
                    <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary navbar-btn Begin -->
                        
                        <span class="sr-only">Toggle Search</span>
                        
                        <i class="fa fa-search"></i>
                        
                    </button><!-- btn btn-primary navbar-btn Finish -->
                    
                </div><!-- navbar-collapse collapse right Finish -->
                
                <div class="collapse clearfix" id="search"><!-- collapse clearfix Begin -->
                    
                    <form method="get" action="results.php" class="navbar-form"><!-- navbar-form Begin -->
                        
                        <div class="input-group"><!-- input-group Begin -->
                            
                            <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                            
                            <span class="input-group-btn"><!-- input-group-btn Begin -->
                            
                            <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary Begin -->
                                
                                <i class="fa fa-search"></i>
                                
                            </button><!-- btn btn-primary Finish -->
                            
                            </span><!-- input-group-btn Finish -->
                            
                        </div><!-- input-group Finish -->
                        
                    </form><!-- navbar-form Finish -->
                    
                </div><!-- collapse clearfix Finish -->
                
            </div><!-- navbar-collapse collapse Finish -->
            
        </div><!-- container Finish -->
        
    </div><!-- navbar navbar-default Finish -->
   
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       lets Shop
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
   
   <?php 
    
    include("includes/sidebar.php");
    
    ?>
               
           </div><!-- col-md-3 Finish -->
           
           <div class="col-md-9"><!-- col-md-9 Begin -->
               <div class="box"><!-- box Begin -->
                   <h1>Lets Shop</h1>
                    
               </div><!-- box Finish -->
               
               <div class="row"><!-- row Begin -->
                   <div class="col-md-4 col-sm-6 center-responsive"><!-- col-md-4 col-sm-6 center-responsive Begin -->
                       
                       <div class="product"><!-- product Begin -->
                   
                   <a href="details7.php">
                       
                 
                   <img class="img-responsive" src="admin_area/product_images/huawei2.jpg" alt="Huawei P30">
                         
                   <div class="text"><!-- text Begin -->
                       
                       <h3>
                           <a href="details7.php">
                           Huawei P30
                           </a>
                       </h3>
                       
                       <p class="price">Rs.82,999</p>
                       
                       <p class="button">
                           
                           <a href="details7.php" class="btn btn-default">View Details</a>
                           
                           <a href="details7.php" class="btn btn-primary">
                               
                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>
                               
                           </a>
                           
                       </p>
                       
                   </div><!-- text Finish -->
                   
               </div><!-- product Finish -->
                       
                   </div><!-- col-md-4 col-sm-6 center-responsive Finish -->
                   <div class="col-md-4 col-sm-6 center-responsive"><!-- col-md-4 col-sm-6 center-responsive Begin -->
                       
                       <div class="product"><!-- product Begin -->
                   
                   <a href="details8.php">
                       
                   
                   <img class="img-responsive" src="admin_area/product_images/huawei4.jpg" alt="Huawei Honor 9x">
                           </a>
                   
                   <div class="text"><!-- text Begin -->
                       
                       <h3>
                           <a href="details8.php">
                           Huawei Honor 9x
                           </a> 
                       </h3>
                       
                       <p class="price">Rs.38,499</p>
                       
                       <p class="button">
                           
                           <a href="details8.php" class="btn btn-default">View Details</a>
                           
                           <a href="details8.php" class="btn btn-primary">
                               
                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>
                               
                           </a>
                           
                       </p>
                       
                   </div><!-- text Finish -->
                   
               </div><!-- product Finish -->
                       
                   </div><!-- col-md-4 col-sm-6 center-responsive Finish -->
                   <div class="col-md-4 col-sm-6 center-responsive"><!-- col-md-4 col-sm-6 center-responsive Begin -->
                       
                       <div class="product"><!-- product Begin -->
                   
                   <a href="details9.php">
                   <img class="img-responsive" src="admin_area/product_images/huawei1.jpg" alt="Samsung Galaxy Note 10 Plus">
                         
                   </a>
                   
                   <div class="text"><!-- text Begin -->
                       
                       <h3>
                           <a href="details9.php">
                          Huawei Y9 
                           </a>
                       </h3>
                       
                       <p class="price">Rs.39,699</p>
                       
                       <p class="button">
                           
                           <a href="details9.php" class="btn btn-default">View Details</a>
                           
                           <a href="details9.php" class="btn btn-primary">
                               
                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>
                               
                           </a>
                           
                       </p>
                       
                   </div><!-- text Finish -->
                   
               </div><!-- product Finish -->
                       
                   </div><!-- col-md-4 col-sm-6 center-responsive Finish -->
                    
               </div><!-- row Finish -->
               
               <center>
                   <ul class="pagination"> 
                       <li><a href="#">1</a></li>
                       <li><a href="#">2</a></li>
                       <li><a href="#">3</a></li>
                       <li><a href="#">4</a></li> 
                   </ul>
               </center>
               
           </div><!-- col-md-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>