<?php session_start(); ?>

<html>

<?php 
    function show_amt($id, $amt) {
      if(!in_array($id, $_SESSION['attempted'])) {
        return;
      }
      else {
        echo "$".$amt;
      }
    }
?>

<head>
    <link href="style.css" type="text/css" rel="stylesheet">
    <title>Jeopardy!</title>
</head>

<body class='main'>
<h1 class = "title">Jeopardy!</h1>
<h2 class="winnings">Current Winnings: $ <?php echo $_SESSION['winnings']?></h2>
  <div class="table">
  <div class="item">FIRST DAY ON THE JOB</div>
  <div class="item">FACTS ABOUT ANIMALS</div>
  <div class="item">HOLIDAYS & OBSERVANCES</div>  
  <div class="item">REALITY SHOW WINNERS</div>
  <div class="item">FOOD & DRINK</div>
  <div class="item">CELEBRITIES</div>  
  <div class="item"> <span> <a href="question.php?id=<?php echo 0;?>"><?php show_amt(0,100)?></a></span></div>
  <div class="item"> <span> <a href="question.php?id=<?php echo 5;?>"><?php show_amt(5,100)?></a></span></div>
  <div class="item"> <span> <a href="question.php?id=<?php echo 10;?>"><?php show_amt(10,100)?></a></span></div>
  <div class="item"> <span> <a href="question.php?id=<?php echo 15;?>"><?php show_amt(15,100)?></a></span></div>
  <div class="item"> <span> <a href="question.php?id=<?php echo 20;?>"><?php show_amt(20,100)?></a></span></div>
  <div class="item"> <span> <a href="question.php?id=<?php echo 25;?>"><?php show_amt(25,100)?></a></span></div>

  <div class="item"> <span> <a href="question.php?id=<?php echo 1;?>"><?php show_amt(1,200)?></a></span></div>
  <div class="item"> <span> <a href="question.php?id=<?php echo 6;?>"><?php show_amt(6,200)?></a></span></div>
  <div class="item"> <span> <a href="question.php?id=<?php echo 11;?>"><?php show_amt(11,200)?></a></span></div>
  <div class="item"> <span> <a href="question.php?id=<?php echo 16;?>"><?php show_amt(16,200)?></a></span></div>
  <div class="item"> <span> <a href="question.php?id=<?php echo 21;?>"><?php show_amt(21,200)?></a></span></div>
  <div class="item"> <span> <a href="question.php?id=<?php echo 26;?>"><?php show_amt(26,200)?></a></span></div>

  <div class="item"> <span> <a href="question.php?id=<?php echo 2;?>"><?php show_amt(2,400)?></a></span></div>
  <div class="item"> <span> <a href="question.php?id=<?php echo 7;?>"><?php show_amt(7,400)?></a></span></div>
  <div class="item"> <span> <a href="question.php?id=<?php echo 12;?>"><?php show_amt(12,400)?></a></span></div>
  <div class="item"> <span> <a href="question.php?id=<?php echo 17;?>"><?php show_amt(17,400)?></a></span></div>
  <div class="item"> <span> <a href="question.php?id=<?php echo 22;?>"><?php show_amt(22,400)?></a></span></div>
  <div class="item"> <span> <a href="question.php?id=<?php echo 27;?>"><?php show_amt(27,400)?></a></span></div>

  <div class="item"> <span> <a href="question.php?id=<?php echo 3;?>"><?php show_amt(3,600)?></a></span></div>
  <div class="item"> <span> <a href="question.php?id=<?php echo 8;?>"><?php show_amt(8,600)?></a></span></div>
  <div class="item"> <span> <a href="question.php?id=<?php echo 13;?>"><?php show_amt(13,600)?></a></span></div>
  <div class="item"> <span> <a href="question.php?id=<?php echo 18;?>"><?php show_amt(18,600)?></a></span></div>
  <div class="item"> <span> <a href="question.php?id=<?php echo 23;?>"><?php show_amt(23,600)?></a></span></div>
  <div class="item"> <span> <a href="question.php?id=<?php echo 28;?>"><?php show_amt(28,600)?></a></span></div>

  <div class="item"> <span> <a href="question.php?id=<?php echo 4;?>"><?php show_amt(4,800)?></a></span></div>
  <div class="item"> <span> <a href="question.php?id=<?php echo 9;?>"><?php show_amt(9,800)?></a></span></div>
  <div class="item"> <span> <a href="question.php?id=<?php echo 14;?>"><?php show_amt(14,800)?></a></span></div>
  <div class="item"> <span> <a href="question.php?id=<?php echo 19;?>"><?php show_amt(19,800)?></a></span></div>
  <div class="item"> <span> <a href="question.php?id=<?php echo 24;?>"><?php show_amt(24,800)?></a></span></div>
  <div class="item"> <span> <a href="question.php?id=<?php echo 29;?>"><?php show_amt(29,800)?></a></span></div>

</div>
<form action='leaderboard.php' method='post'>
      <input class='button' type='submit' value='Click to See the Leaderboard!'>
      </form>";
<?php
  if(count($_SESSION['attempted']) < 1) {
    echo "
      <form action='leaderboard.php' method='post'>
      <input class='button' type='submit' value='Click to See the Leaderboard!'>
      </form>";
      
  }

?>
</body>


</html>
