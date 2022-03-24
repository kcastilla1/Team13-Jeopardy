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
</body>


</html>