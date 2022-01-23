<!DOCTYPE html>
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
                       Contact Us
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
                   
                   <div class="box-header"><!-- box-header Begin -->
                       
                       <center><!-- center Begin -->
                           
                           <h2> Feel free to Contact Us</h2>
                           
                           <p class="text-muted"><!-- text-muted Begin -->
                               
                               If you have any questions, feel free to contact us. Our Customer Service work <strong>24/7</strong>
                               
                           </p><!-- text-muted Finish -->
                           
                       </center><!-- center Finish -->
                       
                       <form action="contact.php" method="post"><!-- form Begin -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Name</label>
                               
                               <input type="text" class="form-control" name="name" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Email</label>
                               
                               <input type="text" class="form-control" name="email" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Subject</label>
                               
                               <input type="text" class="form-control" name="subject" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Message</label>
                               
                               <textarea name="message" class="form-control"></textarea>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="text-center"><!-- text-center Begin -->
                               
                               <button type="submit" name="submit" class="btn btn-primary">
                               
                               <i class="fa fa-user-md"></i> Send Message
                               
                               </button>
                               
                           </div><!-- text-center Finish -->
                           
                       </form><!-- form Finish -->
 
<?php 
                       
                       if(isset($_POST['submit'])){
                           
                    //        /// Admin receives message with this ///
                           
                    //        $sender_name = $_POST['name'];
                           
                    //        $sender_email = $_POST['email'];
                           
                    //        $sender_subject = $_POST['subject'];
                           
                    //        $sender_message = $_POST['message'];
                           
                    //        $receiver_email = "fizzazakir1234@gmail.com";
                           
                    //        mail($receiver_email,$sender_name,$sender_subject,$sender_message,$sender_email);
                           
                    //        /// Auto reply to sender with this ///
                           
                    //        $email = $_POST['email'];
                           
                    //        $subject = "Welcome to my website";
                           
                    //        $msg = "Thanks for sending us message. ASAP we will reply your message";
                           
                    //        $from = "k191106@nu.edu.pk";
                           
                    //        mail($email,$subject,$msg,$from);
                    
                           echo "<h2 align='center'> Your message has sent sucessfully </h2>";
                           
                       }
                       
                       ?>
 
 
                   </div>
               </div>
           </div>
      
 
 
 
 
 
 
 
 
 
 
 
 
 
       </div>
 
 
 
<br />
<br /> 
 <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>