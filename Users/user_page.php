

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
    margin-top:5px;
    height:100px;
   
   
    
}
.dropdown-menu > li > a {
  text-align: left;
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
                
                <li> <a href=""><i class="fa-solid fa-bell"></i></a></li>
                <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                     <i class="fa-solid fa-user"></i> User<b class="caret"></b></a>
                           <ul class="dropdown-menu">
                               <li><a href="../Users/profile.php"><i class="fa-solid fa-user"></i> Profile</a></li>
                               <li><a href="#"><i class="fa-solid fa-lock"></i> Vault</a></li>
                               <li><a href="#"><i class="fa-solid fa-star"></i> Favourites</a></li>
                               <li><a href="#"><i class="fa-solid fa-trophy"></i> Competition</a></li>
                               <li><a href="../Users/logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
                           </ul>
                              </li>

               
            </ul>
          </nav>   
    </header>

    <div class="tclub"> 
  <h2>The Club in the Philippines </h2> <p><i class="fa-solid fa-table-tennis-paddle-ball"></i> Table Tennis Tournaments & Collaborations Plays</p>
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