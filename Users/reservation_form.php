<!doctype html>
<html lang="en">
  <head>
<style>
header{
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
.logo img {
  border-radius: 50%;
  width: 50px;
  height: 50px;
}
.reservation-form label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
}

.reservation-form input[type="text"],
.reservation-form input[type="email"],
.reservation-form input[type="number"],
.reservation-form input[type="datetime-local"] {
  display: block;
  width: 100%;
  padding: 5px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 3px;
  box-sizing: border-box;
}
.welcome-reservation {
  margin-top: 2%;
  width: 70%;
  height:50%;
  background-color: #FEFF86;
  padding: 20px;
  border-radius:15px;
}
.welcome-reservation .h3 {
  font-weight:bold;
}
</style>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/5829b7c1f0.js" crossorigin="anonymous"></script>
    <title>YortClub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.1/css/bootstrap.min.css" integrity="sha512-T5Z5cY3f7g3KNqWkV7G+sHtVt/Oig4tJ1/z2IfjX9ZvV7vpYnSvjhFUbL1pLpSKV7nR5zCct5x5B5/5Zd7YJqg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <li> <a href="" class="active">Reservation <i class="fa-solid fa-angle-down"></i></a>
                    <ul>
                        <li><a href="../Users/reservation_form.php">Reservation Form</a> </li>
                        <li><a href="#">Training Form</a></li>
                       
                        
                     </ul>
                    
                </li>
                <li> <a href="">Offers <i class="fa-solid fa-angle-down"></i></a>
                     <ul>
                        <li> <a href="#">Join Tournaments</a>  </li>
                        <li> <a href="#">Beat the Coaches</a>  </li>
                       
                     </ul>
                </li>
                <li> <a href="#Contact-Us"><i class="fa-solid fa-phone"></i> Contact Us</a></li>
                <li><a href="./Users/login.php"><i class="fa-solid fa-right-to-bracket"></i> Log In</a></li>
               
            </ul>
          </nav>   
    </header>


  

<h1 style="margin-top:10%;"><center>Hi players !!!</center> </h1>



<center>
<div class="welcome-reservation" >
  <h3> We confirm your booking via email once you submit your reservation. <br>
  
  We take pride in maintaining a comfortable and safe environment for players to enjoy their games. Our facilities are equipped with high-quality table tennis tables, and we offer flexible booking options so that you can choose the most convenient time and date for your game. Book your table tennis session now and get ready to have some fun!</h3>
  </div>
</center>

<center><i class="fa-solid fa-arrow-down fa-3x"></i></center>
<!-- Button trigger modal -->
<center>
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="width: 260px; height: 70px; background-color: #34BE82; border-radius: 10px; margin-top:1%;">
 <b> <h4>Create Table Tennis Reservation</h4></b>
</button>
</center>



<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#34BE82; color:whitesmoke;">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Reservation Form</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        


      <div class="reservation-form">
  <form>
    <div>
      <label for="full-name">Full Name:</label>
      <input type="text" id="full-name" name="full-name"  placeholder="Enter your full name"  required>
    </div>
    <div>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter a valid email"  required>
    </div>
    <div>
      <label for="num-people">Number of People Entering:</label>
      <input type="number" id="num-people" name="num-people"  placeholder="Enter number of people" required>
    </div>
    <div>
      <label for="num-tables">How Many Tables Do You Need?:</label>
      <input type="number" id="num-tables" name="num-tables" placeholder="Enter number of table" required>
    </div>
    <div>
      <label for="visit-datetime">Visit Date and Time:</label>
      <input type="datetime-local" id="visit-datetime" name="visit-datetime" required>
    </div>
  </form>
</div>




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit Reservation</button>
      </div>
    </div>
  </div>
</div>





















    


<?php include ('../admin/includes/footer.php'); ?>

   
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