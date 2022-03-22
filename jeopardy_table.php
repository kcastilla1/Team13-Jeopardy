<html>

<!-- WebPro Spring 2022 -->
<!-- Author: Kendall Castilla -->
<!-- Date: 03/23/2022 -->

<head>
    <link href="jeopardy.css" type="text/css" rel="stylesheet">
    <style>
        
    </style>
    <title>Jeopardy Page</title>
</head>

<body>
    <div>
    <h1>GSU Jeopardy</h1>
        <table id=board>
            <tr>
                <!--Col 1--><th>State, Not Southern</th>
                <!--Col 2--><th>Palindromes</th>
                <!--Col 3--><th>Anagrams</th>
                <!--Col 4--><th>Column 4</th>
                <!--Col 5--><th>Column 5</th>
                <!--Col 6--><th>Column 6</th>
            </tr>
            <tr>
                <?php for($i=0; $i<6; $i++) {
                    echo "<td>$100</td>";
                }
                ?>
                
            </tr>
            <tr>
                <?php for($i=0; $i<6; $i++) {
                    echo "<td>$200</td>";
                }
                ?>
            </tr>
            <tr>
                <?php for($i=0; $i<6; $i++) {
                    echo "<td>$300</td>";
                }
                ?>
            </tr>
            <tr>
                <?php for($i=0; $i<6; $i++) {
                    echo "<td>$400</td>";
                }
                ?>
            </tr>
            <tr>
                <?php for($i=0; $i<6; $i++) {
                    echo "<td>$500</td>";
                }
                ?>
            </tr>
        </table>
    </div>

</body>


</html>