<!DOCTYPE html>
<html>
   <head>
      <title>Yamaha</title>
      <link href="Resources/css.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      <div id="wrapper">
         <?php include('header.php');?>
         <div id="mainframe">
            <div class="sub_framefullpage">
               <h3>Account Register</h3>
               <p>
               <div class="row">
                  <div class="col_3">
                     <h3>Account Benifits</h3>
                     <p>If you create an account with us, you will get additional benefits such as order history, prioritised delivery and much more.</p>
                  </div>
                  <div class="col_3">
                     <h3>Create a New Yamaha Account</h3>
                     <form method="POST" >
                        <p>Create your free account here and enjoy the benifits.</p>
                        <p><?php echo $MESSAGE_REGISTER; ?></p>
                        <?php if($MESSAGE_REGISTER == "successful"){ ?> 
                           <p>Successfully Registered! Click here to <a href='login.php'>Login</a></p>
                        <?php } else{ ?> 
                        <label>Username</label><br>
                        <input name="username" type="text"><br>
                        <label>First Name</label><br>
                        <input name="firstname" type="text"><br>
                        <label>Last Name</label><br>
                        <input name="lastname" type="text"><br>
                        <label>Email Address</label><br>
                        <input name="email" type="text" ><br>
                        <label>Phone Number</label><br>    
                        <input name="phonenumber" type="number"><br>
                        <label>Password</label><br>
                        <input name="password" type="password"><br>
                        <label>Re-Type Password</label><br>
                        <input name="retypepassword" type="password"><br>
                        <label>Security Question</label><br>
                        <select name="securityquestion">
                           <option value="1">What was the name of your primary school?</option>
                           <option value="2"> What time of the day were you born?</option>
                           <option value="3"> What was your dream job as a child?</option>
                        </select>   
                        <br>
                        <label>Security Answer</label><br>
                        <input name="securityanswer" type="text"><br>
                        <input name="register" type="submit" value="Register">
                        <p>
                        <input type="button" value="Forgot Password" class="cart_btn" onclick="location.href='forgotpassword.php'">
                        </p>
                        <?php } ?>
                     </form>
                  </div>
               </div>
            </p>
            </div>
            <div class="clear"></div>
            <div class="footer">
               <div class="col_2">
                  <h2>About Yamaha</h2>
                  <ul>
                     <li><a href="aboutus.php">About us</a></li>
                     <li><a href="aboutus.php">Privacy Policy</a></li>
                     <li><a href="aboutus.php">Terms of use</a></li>
                  </ul>
               </div>
               <div class="col_2">
                  <h2>Information</h2>
                  <ul>
                     <li><a href="aboutus.php">Help & FAQs</a></li>
                     <li><a href="aboutus.php">Shipping and delivery</a></li>
                  </ul>
               </div>
               <div class="col_2">
                  <h2>Contact Us</h2>
                  <ul>
                     <li>Hotline:</li>
                     <li>Email:</li>
                     <li>Services</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>