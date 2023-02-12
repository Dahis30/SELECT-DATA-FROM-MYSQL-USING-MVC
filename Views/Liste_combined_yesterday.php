<?php

$title = "Choisirer la page que vous vouler :";




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sty.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <?php ob_start(); ?>
    <div>
        <div class="outer-wrapper">
            <div class="table-wrapper">
                <table border="5" class="table table-bordered">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Ex</th>
                            <th>Date</th>
                            <th>MarketCapitalization</th>
                            <th>Open</th>
                            <th>High</th>
                            <th>Low</th>
                            <th>Close</th>
                            <th>Adjusted_close</th>
                            <th>Volume</th>
                            <th>EMA_50 </th>
                            <th>EMA_200</th>
                            <th>High_250</th>
                            <th>Low_250</th>
                            <th>Avgvol_14d</th>
                            <th>Avgvol_50d</th>
                            <th>Avgvol_200d</th>




                        </tr>
                    </thead>

                    <?php


                    foreach ($result as $elt) {
                        echo "<tr>";
                        echo "<td>" . $elt[0] . "</td>";
                        echo "<td>" . $elt[1] . "</td>";
                        echo "<td>" . $elt[2] . "</td>";
                        echo "<td>" . $elt[3] . "</td>";
                        echo "<td>" . $elt[4] . "</td>";
                        echo "<td>" . $elt[5] . "</td>";
                        echo "<td>" . $elt[6] . "</td>";
                        echo "<td>" . $elt[7] . "</td>";
                        echo "<td>" . $elt[8] . "</td>";
                        echo "<td>" . $elt[9] . "</td>";
                        echo "<td>" . $elt[10] . "</td>";
                        echo "<td>" . $elt[11] . "</td>";
                        echo "<td>" . $elt[12] . "</td>";
                        echo "<td>" . $elt[13] . "</td>";
                        echo "<td>" . $elt[14] . "</td>";
                        echo "<td>" . $elt[15] . "</td>";
                        echo "<td>" . $elt[16] . "</td>";
                        echo "<td>" . $elt[17] . "</td>";



                        echo "</tr>";
                    }
                    ?>


                    <?php
                    $content = ob_get_clean();

                    ?>

                </table>

            </div>
        </div>
    </div>

    <?php
    include_once "Layout.php";

    ?>

</body>

</html>