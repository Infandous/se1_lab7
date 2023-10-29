<!DOCTYPE html>
<html lang='en'>
        <head>
                <meta charset="UTF-8">
                <h1>Multiplication table</h1>
        </head>

        <body>

                <form action="" method="post">
                        <label for="n">Enter an integer:</label>
                        <input type="number" name="n" id="n">
                        <input type="submit" value="Generate Table">
                </form>
                <?php
                        $num = intval($_POST['n']); //get value of n from form 
                        echo "<h1>Multiplication Table for {$num}</h1>"; //echo h1 tag
                        echo "<table border='1'>"; //begin table

                        for ($i = 1; $i <= $num; $i++) { //loop for each row of table
				echo "<tr>";
                                for ($t = 1; $t <= $num; $t++) { //loop for each entry in row i of table
                                        echo "<td>" . $i * $t . "</td>";
                                }
                                echo "</tr>";
                        }

                        echo "</table>"; //end table

                ?>
        </body>
</html>

