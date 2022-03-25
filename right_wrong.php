<?php session_start(); ?>

<html>
<head>
    <link href="style.css" type="text/css" rel="stylesheet">
    <title>Right-Wrong Page</title>
</head>

<body class=message>
    <div class=message>
    <?php
        #Get weight of question in dollars
        function findamt($id) {
            $amt=0;
            if($id==0 || $id%5==0)
                $amt=100;
            elseif(($id-1)==0 || ($id-1)%5==0)
                $amt=200;
            elseif(($id-2)==0 || ($id-2)%5==0)
                $amt=400;
            elseif(($id-3)==0 || ($id-3)%5==0)
                $amt=600;
            elseif(($id-4)==0 || ($id-4)%5==0)
                $amt=800;

            return $amt;
        }
        #Display correct answer message
        function rightans($val, $sol) {
            echo "Correct! <br>The answer was ".$sol.".";
            echo "<br><br>+$".$val;
            $_SESSION['winnings'] += $val;
        }
        #Display incorrect answer message
        function wrongans($val, $sol) {
            echo "Incorrect! <br>The answer was ".$sol.".";
            echo "<br><br>-$".$val;
            $_SESSION['winnings'] -= $val;
        }

        #Retrieve solution and user answer 
        $file='ans.txt';  
        $lines= file($file);
        $id = $_SESSION['currid'];
        $amt = findamt($id);
        $sol = trim($lines[$id]);

        #Compare and display respective message 
        $result = strcmp(trim($_POST['answer']), $sol);
        if($result == 0) {
            rightans($amt, $sol);
        }
        else {
            wrongans($amt, $sol);
        }

    ?>
    <p></p>
    <form action='table.php'>
    <input class="button" type="submit" value="CONTINUE">
    </form>
    </div>

</body>


</html>