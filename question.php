<html>
<head>
    <link href="style.css" type="text/css" rel="stylesheet">
    <title>Jeopardy!</title>
</head>

<body>
<h1 class = "title">Jeopardy!</h1>
<p class = "question"> Question: </p>
<?php
$id = $_GET['id'];
$file='qna.txt';  
$lines= file($file);
echo '<p class ="detail">'.$lines[$id];
?>
<p class = "question">Your answer: </p>
<form>
  <input type="text" name="ans" placeholder = "Type your answer here!">
  <br>
  <br>
  <input class = "button" type = "submit" value = "Submit">
</form>
</body>


</html>