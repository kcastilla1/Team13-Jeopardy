<?php session_start(); ?>

<html>

<head>
    <link href="style.css" type="text/css" rel="stylesheet">
    <title>Jeopardy!</title>
</head>

<body>
<?php
    if(!in_array($_GET['id'], $_SESSION['attempted'])) {
        echo "
        <div class='nopass'>
        <p>This question has already been attempted.</p>
        <form action='table.php' method='post'>
            <input class='button' type='submit' value='Back to Board'>
        </form>
        </div>";
    }
?>
<h1 class = "qtitle">Jeopardy!</h1>
<p class="question"> Question: </p>
<?php
$id = $_GET['id'];
$_SESSION['currid'] = $id;
unset($_SESSION['attempted'][$id]);
$file='qna.txt';
$lines= file($file);
echo "<p class=detail>".$lines[$id];
?>
<p class=ans>Your answer: </p>
<div class=submitans>
    <form action='right_wrong.php' method='post'>
    <input type="text" name="answer" size=50>
    <br>
    <input class="button" type="submit" value="Answer">
    </form>
</div>
</body>


</html>