<!DOCTYPE html>
<html lang="en">
    <head>
        <title>devschool.com</title>
        <!DOCTYPE html>

    <!-- add icon link -->
    <link rel="icon" href=
    "https://cdn.iconscout.com/icon/premium/png-512-thumb/verified-user-6768727-5568582.png?f=webp&w=256"
              type="image/x-icon">
    <!-- Additional CSS and JavaScript imports can go here -->
    <!-- Add Bootstrap -->  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
          <a class="navbar-brand" href="#">devschool.com</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#enroll">Enroll</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
    

    </head>
     
    <header>
    
    </header>

    <style>
        h1 {
            text-align: center;
        }
    </style>    
    <b>
<h1>This is my first traning for PHP. <br> I have to learn this for the goal of Ukwelys.
 <br>I have to become that great PHP software Developer</h1>
</b>
<br>
<br>
        <?php
           $txt = "PHP";
           echo "I love $txt!<br><br>";
           
           $txt = "W3Schools.com";
           echo "I love $txt because it offers a simple and clear learning platform for me. And ChatGPT, because WHY NOT?" ;


            $var = 'Mark';
            $Var = 'Hilary';
            $txt1 = "Learn PHP";
            $txt2 = "W3Schools.com";
            $txt3 = "Format to be followed during the learning";
            $txt4 = "We shall balance our time using the timetable through checkins and checkouts";

            echo " My Coaches are " . $var . " and " . $Var;                   
            echo "<h2>" . $txt1 . "</h2>";
            echo "Study PHP at " . $txt2 . "<br>";          
            echo "<h3>" . $txt3. "</h3>" ;
            echo "By working Deligently, you will learn faster because, " . $txt4 ."<br>" ."<br>";
             
            define("GREETING", "<b>Welcome to learning PHP!</b>");
            echo GREETING. "<br>";
            if (6>5) {
                echo "PHP is good";
              } else {
                echo "PHP is Bad";
              }
              
        ?>
 
     <h3>Register for PHP Classes</h3>
     Click <a href="form_application.php">HERE</a> to register for the Classes

     <br>
     <br>

     <?php


echo "" . date("l, "); echo "" . date("d/m/Y") . "<br>";




?>
<b>
<footer>
 <!-- Footer content goes here --> 
    
  
    
</footer>
</body>
</html>