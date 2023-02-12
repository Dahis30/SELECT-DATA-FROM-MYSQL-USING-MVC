<?php
function database_connect()
{

    $chain = "mysql:host=localhost;dbname=base1";
    $user = "root";
    $pass = "";
    $db = new PDO($chain, $user, $pass);
    return $db;
}

function pagination()
{

    $db = database_connect();
    if (isset($_GET["page"])) {
        $page = $_GET["page"];
    } else {
        $page = 1;
    }
    $num_page = 160;
    $start = ($page - 1) * 10;

    $que = "SELECT * from combined_yesterday ";
    $result = $db->query($que);
    $couunt = $result->rowCount();
    echo "<h3 id='ddd' class='text-center'>Choisirer la page que vous vouler :</h3>";
    echo "<br>";
    $total_page = ceil($couunt / $num_page);

    if ($page > 1) {
        $min = $page - 1;
        echo   "<a href ='index.php?page=$min' class='btn btn-danger'>PREVIOUS</a>";
    }


    for ($i = 1; $i < $total_page; $i++) {
        echo   "<a href ='index.php?page=$i' class='btn btn-primary'>$i</a>";

        echo "  ";
    }

    if ($page >= 1) {
        $max = $page + 1;
        echo   "<a href ='index.php?page=$max' class='btn btn-success'>NEXT</a>";
    }


    $l = 3;
    $sql = "SELECT * from combined_yesterday LIMIT  $start,$num_page";
    $res = $db->query($sql);
    return $res;
}
