<?php
include './db/conn.php';
include './db/query/get_ratings.php';
include './db/query/get_feedbacks.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
    <title>MUJ's FoodyFeedback</title> 
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 id="title">MUJ's FOODIE FEEDBACKS</h1>      
    <p id="tagline">A ONE STOP solution for a perfect Fine-Dine</p>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-7">
      <h2 id='h2_heading'>FEEDBACK FORM</h2><br>
    <form action="includes/submit_fdbk.php" method="post">
    <label for="cafe">Choose a Restraunt:</label>
  <select id="cafe" name="cafe">
    <option value="zaika">Zaika</option>
    <option value="dialog">Dialog</option>
    <option value="lets-go-live">Let's Go Live</option>
    <option value="bade-miyan">Bade Miyan</option>
    <option value="aladeen">Aladeens</option>
    <option value="tandoor">Tandoor</option>
  </select><br>
    <textarea id="fdbk" name="fdbk" rows="4" cols="35">Your Feedback goes here.</textarea><br>
        <x type="number" placeholder="Phone Number"><br>
        <label for="stars">Star Rating : </label>
  <select id="stars" name="stars">
    <option value="5">5</option>
    <option value="4">4</option>
    <option value="3">3</option>
    <option value="2">2</option>
    <option value="1">1</option>
  </select><br><br>
  <input name="submit" type="submit"><br><br>
    </form>  
    </div>
    <div class="col-md-5">
    <h2 id='h2_heading'>Ratings </h2>
    <div id="ratings">
    <?php

if(mysqli_num_rows($cafe_rating) > 0) 
{

  $zaika=0;
  $bademiyan=0;
  $golive=0;
  $aladeen=0;
  $tandoor=0;
  $dialog=0;

  $r_zaika=0;
  $r_bademiyan=0;
  $r_golive=0;
  $r_aladeen=0;
  $r_tandoor=0;
  $r_dialog=0;
  while($row= mysqli_fetch_assoc($cafe_rating)) {

    switch ($row["cafe"]) {
      case 'zaika':
       $zaika++;
       $r_zaika=$r_zaika+$row["stars"];
        break;
        case 'bade-miyan':
         $bademiyan++;
       $r_bademiyan=$r_bademiyan+$row["stars"];
          break;
          case 'aladeen':
            $aladeen++;
       $r_aladeen=$r_aladeen+$row["stars"];
            break;
            case 'lets-go-live':
             $golive++;
       $r_golive=$r_golive+$row["stars"];
              break;
              case 'tandoor':
               $tandoor++;
       $r_tandoor=$r_tandoor+$row["stars"];
                break;
                case 'dialog':
                 $dialog++;
         $r_dialog=$r_dialog+$row["stars"];
                  break;
    }
  }
} else {
  echo "0 results";
}

echo("<br>");
echo("Zaika : ".substr(number_format(($r_zaika/$zaika), 2, '.', ''), 0, -1)." stars<br>");
echo("Bade Miyan : ".substr(number_format(($r_bademiyan/$bademiyan), 2, '.', ''), 0, -1)." stars<br>");
echo("Aladeen : ".substr(number_format(($r_aladeen/$aladeen), 2, '.', ''), 0, -1)." stars<br>");
echo("Let's go Live : ".substr(number_format(($r_golive/$golive), 2, '.', ''), 0, -1)." stars<br>");
echo("Tandoor : ".substr(number_format(($r_tandoor/$tandoor), 2, '.', ''), 0, -1)." stars<br>");
echo("Dialog : ".substr(number_format(($r_dialog/$dialog), 2, '.', ''), 0, -1)." stars<br>");
echo("<br>");
    ?>
    </div>
  </div>
</div>
</div>
<br>
    
    <?php
  $no = 0;
echo("<div id='testimonials'><h2 id='h2_heading'> T E S T I M O N I A L S </h2><br><br></div>");

echo(mysqli_error($con));
    mysqli_close($con);
?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div id='fdbkk'><b>Dialog</b><br><br><b>"</b>Green Apple Mojito is a bit too over`priced not worth it but the pizzas are value for money here.<b>"</b> -- <b>5 stars</b><br><br></div><hr>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item">
    <div id='fdbkk'><b>Zaika</b><br><br><b>"</b>'Amritsari Kulche is worth it must give it a try!<b>"</b> -- <b>5 stars</b><br><br></div><hr>
  </div><div class="carousel-inner">
    <div class="carousel-item">
    <div id='fdbkk'><b>Bade Miyan</b><br><br><b>"</b>Chicken tikka boneless biryani was simply amazing ! such a superb blend of spices and what not !! <b>"</b> -- <b>4 stars</b><br><br></div><hr>
  </div><div class="carousel-inner">
    <div class="carousel-item">
    <div id='fdbkk'><b>Aladeen</b><br><br><b>"</b>The white sauce pasta here is sooo underrated !! guyz must try this out !!<b>"</b> -- <b>5 stars</b><br><br></div><hr>
  </div><div class="carousel-inner">
    <div class="carousel-item">
    <div id='fdbkk'><b>Tandoor</b><br><br><b>"</b>Worst experience ever<b>"</b> -- <b>1 stars</b><br><br></div><hr>
  </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</body>
</html>