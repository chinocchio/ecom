<!DOCTYPE html>
<html lang="en">
   
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Product details </title>
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
        <!--------single product details-------->

<div class="small-container single-product">
    <div class="row">
        <div class="col2">
            <img src="images/gallery-1.jpg" width="100%" id="ProductImg">

<div class="small-img-row">
      <div class="small-img-col">
          <img src="images/gallery-1.jpg" width="100%" class="small-img">
      </div>



    <div class="small-img-col">
        <img src="images/gallery-2.jpg" width="100%" class="small-img">
    </div>



    <div class="small-img-col">
        <img src="images/gallery-3.jpg" width="100%" class="small-img">
    </div>



    <div class="small-img-col">
        <img src="images/gallery-4.jpg" width="100%" class="small-img">
    </div>
</div>
</div>

        <div class="col2">
            <p>Home / T-Shirt</p>
            <h1>Puma Red T-Shirt </h1>
            <h4>₱700</h4>
            <select name>
                <option>Select Size</option>
                <option>XXL</option>
                <option>XXL</option>
                <option>Large</option>
                <option>Medium</option>
                <option>Small</option>
            </select>
            <input type="number" value="1">
            <a href="cart.php"class="btn">Add To Cart</a>
            <h3>Product Details <i class="fa fa-indent"></i></h3>
            <br>
            <p>Give your Summer wardrobe a style upgrade with the Puma Men's Active T-Shirt.</p>

        
        </div>
    </div>
</div>
<!----------title------>
<div class="small-container">
    <div class="row row2">
        <h2>Related Products</h2>
        <p>View more</p>

    </div>
</div>
<!---products-->
<div class="small-container">
<div class="row row2">
<h2>All Products</h2>
<select>
    <option>Default Shorting</option>
    <option>Short by Price</option>
    <option>Short by Popularity</option>
    <option>Short by Rating</option>
    <option>Short by Sale</option>
</select>
</div>

  <div class="row">
        <div class="col4">
            <img src="image2/f2.jpg">
            <h4>Red Printed T-shirt</h4>
            <div class="rating">
                <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star-half-o "></span>
            </div>
            <p>₱700</p>
        </div>

        <div class="col4">
            <img src="image2/m2.jpg">
            <h4>Red Printed T-shirt</h4>
            <div class="rating">
                <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star "></span>
            </div>
            <p>₱890</p>
        </div>

        <div class="col4">
            <img src="image2/f4.jpg">
            <h4>Red Printed T-shirt</h4>
            <div class="rating">
                <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star-half-o "></span>
            </div>
            <p>₱740</p>
        </div>

        <div class="col4">
            <img src="image2/f6.jpg">
            <h4>Red Printed T-shirt</h4>
            <div class="rating">
                <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star-half-o "></span>
            </div>
            <p>₱1000</p>
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

<!------------js for product gallery-----=-->
<script>
    var ProductImg = document.getElementById("ProductImg");
    var SmallImg = document.getElementsByClassName("small-img");
    
    SmallImg[0].onclick = function()
    {
        ProductImg.src = SmallImg[0].src;
    }
    SmallImg[1].onclick = function()
    {
        ProductImg.src = SmallImg[1].src;
    }
    SmallImg[2].onclick = function()
    {
        ProductImg.src = SmallImg[2].src;
    }
    SmallImg[3].onclick = function(){
        ProductImg.src = SmallImg[3].src;
    }
    
</script>
    </body>
</html>