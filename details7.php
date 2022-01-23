<!DOCTYPE html>
<html lang="en">
<head> 
    <title>cellular town</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
</style>
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
    </div><!-- navbar navbar-default Finish -->
   
    <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Shop
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
   
   <?php 
    
    include("includes/sidebar.php");
    
    ?>
               
           </div><!-- col-md-3 Finish -->
           
           <div class="col-md-9"><!-- col-md-9 Begin -->
               <div id="productMain" class="row"><!-- row Begin -->
               <div class="col-sm-6"><!-- col-sm-6 Begin -->
                             <center><img class="img-responsive" src="admin_area/product_images/huawei2.jpg" alt="Product 3-a"></center>
                          
                   </div><!-- col-sm-6 Finish -->
                   <div class="col-sm-6"><!-- col-sm-6 Begin -->
                       
                       
                        
                       
                   </div><!-- col-sm-6 Finish -->
                   
                   <div class="col-sm-6"><!-- col-sm-6 Begin -->
                       <div class="box"><!-- box Begin -->
                           <h1 class="text-center" style="color:rgb(79, 191, 168); ">Huawei P30</h1>
                           <p>
                               
                           </p>
                           <form action="details.php" class="form-horizontal" method="post"><!-- form-horizontal Begin -->
                                <br />
                               <div class="card">
                                        <div class="card-body">
                                          
                                        <ul class="aps-features-list">
<li>
<div class="aps-feature-anim">
<span class="aps-list-icon aps-icon-cpu"></span>
<div class="aps-feature-info">
<strong>Processor</strong>: <span>Mediatek Helio G70</span>
</div>
</div>
</li>
<li>
<div class="aps-feature-anim">
<span class="aps-list-icon aps-icon-ram"></span>
<div class="aps-feature-info">
<strong>RAM</strong>: <span>6 GB</span>
</div>
</div>
</li>
<li>
<div class="aps-feature-anim">
<span class="aps-list-icon aps-icon-sd-card"></span>
<div class="aps-feature-info">
<strong>Storage</strong>: <span>128 GB</span>
</div>
</div>
</li>
<li>
<div class="aps-feature-anim">
<span class="aps-list-icon aps-icon-display"></span>
<div class="aps-feature-info">
<strong>Display</strong>: <span>6.95 inches</span>
</div>
</div>
</li>
<li>
<div class="aps-feature-anim">
<span class="aps-list-icon aps-icon-camera"></span>
<div class="aps-feature-info">
<strong>Camera</strong>: <span>Quad Camera</span>
</div>
</div>
</li>
<li>
<div class="aps-feature-anim">
<span class="aps-list-icon aps-icon-battery"></span>
<div class="aps-feature-info">
<strong>Battery</strong>: <span>5000 mAh, Li-Polymer</span>
</div>
</div>
</li>
</ul>

                                            </div>
                                        </div>
                               <!-- form-group Finish -->
                               <!-- form-group Finish -->
                               <p class="price">Rs.82,999</p>
                               
                               <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart"> Add to cart</button></p>
                               
                           </form><!-- form-horizontal Finish -->
                           
                       </div><!-- box Finish -->
                       
                       
                       
                   </div><!-- col-sm-6 Finish -->
                   
                   

               </div>
           </div>
     
 
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>