<?php
@include 'config.php';

session_start();

$conn = mysqli_connect('localhost', 'root', '', 'yortclubuser_db');


// Check if the form is being submitted
if(isset($_POST['submit'])){
// Escape and assign the form data to variables

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);

$pass = md5($_POST['password']);
$cpass = md5($_POST['cpassword']);
$user_type = $_POST['user_type'];



$select = "SELECT * FROM user_form WHERE email = '$email'";

$result = mysqli_query($conn, $select);

if(mysqli_num_rows($result) > 0){
   
    $row = mysqli_fetch_array($result);

    if($row['user_type'] == 'admin'){
        $_SESSION['admin_name'] = $row['name'];
        header('location:../admin/admin.php');
      }elseif($row['user_type'] == 'user'){

        $_SESSION['user_name'] = $row['name'];
        header('location:user_page.php');
      }   
}else{
    $error[] = 'incorrect email or password!';
}

};
?>


<!doctype html>
<html lang="en">
  <head>
    <style>
      header {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 999;
}
.logo {
    font-size: 40px;
    font-weight: bold;
    color:#FAFF00;
    display: flex;
   align-items: center;
}
.logo img{
  border-radius: 50%;
  width: 50px;
  height: 50px;
}
.footer{
    margin-top:26px;
    height:100px;
}
.nice{
    margin-top:75px;
    text-align: center;
}
.form-container{
 justify-content: center;

 display: flex;
 align-items: center;
 padding:1px;
 padding-bottom:30px;
 
}
.form-container form{
    height:365px;
    width:400px;
    padding:20px;
    
    
    text-align:center;

   

    background: rgba( 155, 155, 155, 0.7 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 20px );
-webkit-backdrop-filter: blur( 20px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
}
.form-container form h3{
    font-size:30px;
    text-transform: uppercase;
    margin-bottom:1px;
    color:#333;
}
.form-container form input,
.form-container form select{
    border:none;
    width:78%;
    padding:5px 10px;
    font-size:17px;
    margin:8px;
    background:#eee;
    border-radius:5px;
}
.form-container form select option{
   background:#fff;
}
.form-container form .form-btn{
    background-color:red;
    color:white;
    text-transform:capitalize;
    font-size:20px;
    cursor:pointer;
}
.form-container form .form-btn:hover{
    background-color:black;
    color:yellow;
}
.form-container form p{
    margin-top:10px;
    font-size:20px;
    color:#333;

}
.RemAndFor{
        display: flex;
        justify-content:space-around;
        align-items:center;
      }
     
      .RemAndFor   .form-check-input{
        width:8px;
        height:9px;
      }
      .form-container form .error-msg{
    margin:10px 0;
    display: block;
    background:crimson;
    color:#fff;
    border-radius: 5px;
    font-size:20px;
    padding:3px;
 }


    </style>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/5829b7c1f0.js" crossorigin="anonymous"></script>
    <title>Log In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
  </head>
  <body>

<!-- Navbar content -->
    <header>
      
        <div class="logo">
           <img src="../IMAGE/logo.jpg" alt="logo">
           <span>YortClub</span> </div>

        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
          <nav class="nav-bar">
            <ul>
                <li> <a href="../index.php"><i class="fa-solid fa-house-user"></i> Home</a></li>
                <li> <a href="">Reservation <i class="fa-solid fa-angle-down"></i></a>
                    <ul>
                        <li><a href="#">Reservation Form</a> </li>
                        <li><a href="#">Training Form</a></li>
                       
                        
                     </ul>
                    
                </li>
                <li> <a href="">Offers <i class="fa-solid fa-angle-down"></i></a>
                     <ul>
                        <li> <a href="#">Join Tournaments</a>  </li>
                        <li> <a href="#">Beat the Coaches</a>  </li>
                       
                     </ul>
                </li>
                <li> <a href=""><i class="fa-solid fa-phone"></i> Contact Us</a></li>
                <li><a href="../Users/login.php" class="active"><i class="fa-solid fa-right-to-bracket"></i> Log In</a></li>
               
            </ul>
          </nav>   
    </header>

    <div class="nice"><h2>Welcome Back!</h2></div><br>
    
    <div class="form-container">
        <form action="" method="post">
           
            <h3>Login</h3><br>
            <?php
               if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
               };
            ?>
            <input type="email" name="email" required placeholder="Enter your email">
            <input type="password" name="password" required placeholder="Enter your password">
            <input type="submit" name="submit" value="login now" class="form-btn">


            
            <div class="RemAndFor">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" />
                                <label class="form-check-label" for="user_form"> Remember me </label>
                            </div>
                            <a href="#!">Forgot password?</a>
      </div>


             <br><br>
            <p>don't have an account? <a href="register_form.php" style="color:red; text-decoration:none;">register now</a></p>
           
            
            

           


            
            </select>
        </form>
    </div>

































    <footer class="footer">
   <p>Copyright &copy; 2023 YortClub</p>
   <p>
      <a href="#">Terms of Use</a> |
      <a href="#">Privacy Policy</a>
   </p>
</footer>



   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script>
        hamburger= document.querySelector(".hamburger");
        hamburger.onclick = function() {
              navBar= document.querySelector(".nav-bar");
              navBar.classList.toggle("active");
        }
    </script>

  </body>
</html>