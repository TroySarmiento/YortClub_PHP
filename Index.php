<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/5829b7c1f0.js" crossorigin="anonymous"></script>
    <title>YortClub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/contact.css">
  </head>
  <body>

<!-- Navbar content -->
    <header>
      
        <div class="logo">
           <img src="./IMAGE/logo.jpg" alt="logo">
           <span>YortClub</span> </div>

        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
          <nav class="nav-bar">
            <ul>
                <li> <a href="index.php" class="active"><i class="fa-solid fa-house-user"></i> Home</a></li>
                <li> <a href="">Reservation <i class="fa-solid fa-angle-down"></i></a>
                    <ul>
                        <li><a href="Users/reservation_form.php">Reservation Form</a> </li>
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

 <div class="tclub"> 
  <h2>The Club in the Philippines </h2> <p><i class="fa-solid fa-table-tennis-paddle-ball"></i> Table Tennis Tournaments & Collaborations Plays</p>
</div>



<div class="def"><img src="./IMAGE/coach.jpg" alt="" style="width: 250px; height:160px; border-radius:10px; ">
<h4> Professsional or Beginner Level can play in our table tennis club. You can join rally,drills and exercises.We have Coaches for training,New service learned or matchup.</h4>

</div>
<div class="loc">

<h5><i class="fa-solid fa-location-dot"></i> Location: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 63 RD5 Brgy.888 Talippa Quezon City, Philippines </h5>
<h5><i class="fa-solid fa-peso-sign"></i> Entrance Fee: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 40 pesos 1 hour Per head or person</h5>
<h5>Available tables: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 20 Tables</h5>
<h5>Rent table tennis balls and rackets is available or you can bring your own rackets </h5><br>

</div>
 
<div class="yortclub-schedule">
  <h2 style="color:yellow;"> <i class="fa-solid fa-calendar-days"></i> Schedule of YortClub Table Tennis</h2><br>
  <h6>Monday-Friday: 07:00 am -07:00 pm </h6> 
  <h6>Saturday: 07:00 am -04:00 pm </h6>
 
  <h5 id="status"></h5>
  <p style="color:whitesmoke;">_______________ now ______________</p> 
</div>

<div class="beat">
    <center><h1 style="color:blue;">BEAT THE COACHES !!!</h1></center>
    <section class="container">
        <div class="card">
           <div class="mga-fonts"></i> WILBERT</div><br>
            <h2>5 CHAMPIONS</h2> 
            <p>2 LOSES</p>
            <p>10 MEDALS</p>     
        </div>
        <div class="card">
           <div class="mga-fonts"></i> ANDERSON</div><br>
            <h2>42 CHAMPIONS</h2>
            <p>12 LOSES</p>
            <p>44 MEDALS</p>     
        </div>
        <div class="card">
           <div class="mga-fonts"></i> PREYT</div><br>
            <h2>27 CHAMPIONS</h2>
            <p>09 LOSES</p>
            <p>29 MEDALS</p>     
        </div>
        <div class="card">
           <div class="mga-fonts"></i> JEWEL</div><br>
            <h2>25 CHAMPIONS</h2>
            <p>14 LOSES</p>
            <p>25 MEDALS</p>     
        </div>
        <div class="card">
           <div class="mga-fonts"></i> RYAN</div><br>
            <h2>08 CHAMPIONS</h2>
            <p>02 LOSES </p>
            <p>06 MEDALS</p>     
        </div>
        <div class="card">
           <div class="mga-fonts"></i>YORT</div><br>
            <h2>18 CHAMPIONS</h2>
            <p>02 LOSES</p>
            <p>20 MEDALS</p>     
        </div>
    </section>
 </div>






<div class="Contact-Us" id="Contact-Us">
    <div class="contact-form">
  <h2>Contact Us</h2>
  <form action="submit-form.php" method="post">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" required>
    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>
    <label for="message">Message</label>
    <textarea id="message" name="message" rows="5" required></textarea>
    <button type="" id="clear">Clear</button>
    <button type="submit" id="submit">Submit</button>
  </form>
</div>


<div class="contact-info" ><br>
<h3>Contact Information:</h3>
  <label for="phone"><i class="fa-solid fa-phone"></i> Phone Number:<input type="tel" id="phone" name="phone" value="+63 123 456 7890" readonly></label>
  <label for="email"><i class="fa-solid fa-envelope"></i> Email:<input type="email" id="email" name="email" value="yortclub44@gmail.com" readonly></label>
  <label for="address"><i class="fa-solid fa-location-dot"></i> Address:<input type="text" id="address" name="address" value="63 RD5 Brgy.888 Talippa Quezon City, Philippines" readonly></label>
  <h3>Follow us on social media:</h3>
  <a href="https://www.facebook.com/yortclub"><i class="fab fa-facebook"> Facebook</i></a>
  <a href="https://www.tiktok.com/@yortclub"><i class="fab fa-tiktok"> Tiktok</i></a>
  <a href="https://www.instagram.com/yortclub"><i class="fab fa-instagram"> Instagram</i></a>
  <a href="https://twitter.com/yortclub"><i class="fab fa-twitter"> Twitter</i></a>
  ---------- <i class="fa-solid fa-arrow-up"></i> ----------
  <p>click here</p>
</div>
</div>

<?php include ('admin/includes/footer.php'); ?>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
 <script>
        hamburger= document.querySelector(".hamburger");
        hamburger.onclick = function() {
              navBar= document.querySelector(".nav-bar");
              navBar.classList.toggle("active");
        }
//Clear the input fiels //
const clearBtn = document.getElementById('clear');
clearBtn.addEventListener('click', function() {
  const nameField = document.getElementById('name');
  nameField.value = '';
  const emailField = document.getElementById('email');
  emailField.value = '';
  const messageField = document.getElementById('message');
  messageField.value = '';
});



  // Get the current date and time
  const now = new Date();

  // Check if it's a weekday or a Saturday
  const isWeekday = now.getDay() >= 1 && now.getDay() <= 5;
  const isSaturday = now.getDay() === 6;

  // Check if the club is open or closed
  const isOpen = isWeekday && now.getHours() >= 7 && now.getHours() < 19 ||
                 isSaturday && now.getHours() >= 7 && now.getHours() < 16;
  const statusElement = document.getElementById('status');

  // Set the status message based on whether the club is open or closed
  if (isOpen) {
    statusElement.innerText = 'OPEN';
    statusElement.style.color = 'green';
  } else {
    statusElement.innerText = 'CLOSED';
    statusElement.style.color = 'orange';
  }
</script>



  </body>
</html>