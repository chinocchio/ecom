<!DOCTYPE html>
<html lang="en">
   
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Account Setup </title>
<link rel="stylesheet " href="style.css">
<div class="link"><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
        <div class="conatiner">
        <div class="navbar">
            <div class="logo">
               <img src="image/shopping-logo.png" width="125px">

            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="product.php">Shop</a></li>
                    <li><a href="contact-us.php">Contact</a></li>    
                    <li><a href="account.php">Account</a></li>

                </ul>
            </nav>
            <a href="cart.php"><img src="image/cart.png" width="30px" heigth="30px">
            </a>
            <img src="images/menu.png" class="menu-icon"
             onclick="menutoggle()">
        </div>    
        </div>  
    
    <!----acount page-->

    <div class="account-page">
        <div class="container">
            <div class="row">
                <div>
                    <video src="video/comercial - Made with Clipchamp.mp4" width="640" height="360" controls></video>
                  </div>
                  
                <div class="col2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="Indicator">
                          
                       </div>

                        <form id="LoginForm" action="login.php" method="post">
                            <input type="text" placeholder="Username">
                            <input type="password" placeholder="Password">
                            <button type="submit" class="btn">Login</button>
                            <a href="">Forgot Password</a>

                        </form>
                        
                        
                        <form id="RegForm" action="insert.php" method="post">
                            <input type="text" placeholder="Username" id="username" name="username">
                            <input type="email" placeholder="Email" id="email" name="email">
                            <input type="password" placeholder="Password" id="pass" name="pass">
                            <button type="submit" class="btn">Register</button>
                        </form>
                    </div>
               
                </div>
            </div>
        </div>
    </div>




  
 <!--------footer------>
 <div class="footer">
     <div class="container">
         <div class="row">
             <div class="footer-col1">
                 <h3>Download our APP</h3>
                 <P>Download our App for Andriod and ios mobile phone.</P>
                 <div class="app-logo">
                     <img src="images/play-store.png">
                     <img src="images/app-store.png">
                 </div>
             </div>

             <div class="footer-col2">
                <img src="image/shopping-logo2.png"width=125px>
                <P>As Asia’s Online Fashion Destination,
                     we create endless style possibilities
                    through an ever-expanding range of products
                     form the most coveted international and local
                      brands,putting you at the centre of it all.</P>
                
            </div>
          

            <div class="footer-col4">
                <h3>Follow us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>YouTube</li>
                </ul>
            </div>
         </div>
         <hr>
         <p class="copyright">Copyright 2022 - Hex apparel</p>
     </div>
 </div>
  <!------------js for toggle menu------->

  <script>
      var MenuItems = document. getElementById("MenuItems");
      MenuItems.style.maxHeight = "0px";
      
      function menutoggle(){
          
          if(MenuItems.style.maxHeight =="0px")
          {
          MenuItems.style,maxHeight ="200px";
      }
      else
      {
        MenuItems.style.maxHeight = "0px";
      }
    }
  </script>

  <!-----js for togle Form------>

  <script>
      var LoginForm = document.getElementById("LoginForm");
      var Regform = document.getElementById("RegForm");
      var Indicator = document.getElementById("Indicator");

      function register(){
          RegForm.style.transform = "translateX(0px)";
          LoginForm.style.transform = "translateX(0px)";
          Indicator.style.transform = "translateX(100px)";
      }
      function login(){
          RegForm.style.transform = "translateX(300px)";
          LoginForm.style.transform = "translateX(300px)";
          Indicator.style.transform = "translateX(0px)";
      }
 </script>
   




    </body>
</html>