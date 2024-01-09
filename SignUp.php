<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Gift Shop</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">  
      <!-- Font Awesome Bootstrap -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--Materialized CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
      <!-- CSS -->
      <link rel="stylesheet" href="css/go_to.css">

      <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <Link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="header">
        <a href="#"><img src="logo/gift-logo.jpg" class="logo"></a>
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <!-- <li><a href="Blog.php">Blog</a></li> -->
                <li><a href="about.php">About</a></li>
                <li><a href="contact.Php">contact</a></li>
                <li><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
                <a href="#" id="close"><i class="fas fa-times"></i></a>
                <li><a href="login.php">Login</a></li>
              <li><a class="active" href="SignUp.php">SignUp</a></li>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>   
    <section id="form-details">
        <form  action="register.php" method="post" name="register">
        <!-- onsubmit="return validateForm()" action="register.php" method="Post"> -->
            <h2>Create your Gift shop Account</h2>
            <input type="text" placeholder="firstname" name="firstname" id="fname" required>
            <input type="text" placeholder="lastname" name="lastname" id="lname" required>
            <input type="number" placeholder="Phone" name="phone" id="phone" required>
            <input type="text" placeholder="address" name="address" id="address" required>
            <input type="email" placeholder="@gmail.com" name="email" id="mail" required>
            <input type="password" placeholder="password" name="password" id="password" required>
            <button class="normal" type="submit">CreateAccount</button>
        </form>
        <p>Already Have Account?<a href="login.php" class="login">Login</a></p>
    </section>
        <footer class="section-p1">
            <div class="col">
                <img class="logo" src="logo/gift-logo.jpg" alt="">
                <h4>Contact</h4>
                <p> <strong>Address: </strong> sainamaina-1,Rupandehi</p>
                <p><strong>Phone: </strong>9821450915</p>
                <p><strong>Hour: </strong>24 Hour,Mon-Sat</p>
                <div class="follow">
                    <h4>Follow Us</h4>
                    <div class="icon">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-youtube"></i>
                    </div>
                </div>
            </div>
            <div class="col">
                <h4>About</h4>
                <a href="#">About Us</a>
                <a href="#">Delivery Information</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Tearms and condition</a>
                <a href="#">Contact Us</a>
            </div>
            <div class="col">
                <h4>My Account</h4>
                <a href="#">Sign in</a>
                <a href="#">View Cart</a>
                <a href="#">My wishlist</a>
                <a href="#">Track My Order</a>
                <a href="#">Help</a>
            </div>
            <div class="col install">
                <h4>Install App</h4>
                <p>From app store and Google play</p>
                <div class="row">
                    <img src="install/drive.jpg" alt="">
                </div>
                <p>Secured Payment Gateways</p>
                <img src="install/esewa.jpg" alt="">
            </div>
            <div class="Copyright">
                <p>@ 2021 , Teach etc - HTML CSS Ecommerce Templet</p>
            </div>
        </footer>
    <!-- <script src="script.js"></script> -->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script> 
      <script src="js/jquery.validate.min.js"></script>
      <script src="js/additional-methods.min.js"></script>
      <script src="js/init.js"></script>
        success modal
        <script>
         function successModal(){
          $(document).ready(function(){
            $("#modal1").openModal();
          });
        }
        function failureModal(){
          $(document).ready(function(){
            $("#modal2").openModal();
          });
        }
        <?php
          if($flag==1){
            ?>successModal();
            <?php
          }
          else{
            if(isset($_POST['submit'])){
           ?>failureModal();
           <?php 
         }
          }
          $flag=0;
        ?>
        //Slider
        $(document).ready(function(){
          $('.slider').slider();
        });
         //Dropdown Trigger
         $(document).ready(function(){
            $('.dropdown-trigger').dropdown({
               belowOrigin:true
            });
         });
         $(document).ready(function(){
            $('#go-top').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
          });
        });

         
         //Go Top 
            var pxShow = 100; // height on which the button will show
            var fadeInTime = 400; // how slow/fast you want the button to show
            var fadeOutTime = 400; // how slow/fast you want the button to hide

            // Show or hide the sticky footer button
            jQuery(window).scroll(function() {

               if (jQuery(window).scrollTop() >= pxShow) {
                  jQuery("#go-top").fadeIn(fadeInTime);
               } else {
                  jQuery("#go-top").fadeOut(fadeOutTime);
               }

           });

          //jQuery Validate defaults
        jQuery.validator.setDefaults({
            errorClass: 'errorMessage invalid',
            validClass: "valid",
            errorElement : 'div',
            errorPlacement: function(error, element) {
                var placement = $(element).data('error');
                if (placement) {
                    $(placement).append(error)
                } else {
                    error.insertAfter(element);
                }
            }
        });
        

$("#signupForm").validate({
              rules: {
                  firstname:  {
                      required: true,
                      pattern: /^[a-zA-Z ]+$/,
                      maxlength: 10
                  },
                  lastname:  {
                      required: true,
                      pattern: /^[a-zA-Z ]+$/,
                      maxlength: 16
                  },

                  phone: {
                      required: true,
                      digits: true,
                      minlength: 10,
                      maxlength: 10
                  },

                  address:  {
                      required: true,
                      pattern: /^[a-zA-Z]+$/,
					            minlength:6,
                      maxlength: 16
                  },

                  email: {
                      required: true,
                      email: true,
                      pattern: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
                      maxlength: 64
                  },                  
                  password: {
                      required: true,
                      minlength: 6,
                      maxlength: 32
                  }
              }
          });

    </script>
</body>
</html>