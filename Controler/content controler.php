<?php
require "./Model/combined_yesterday.php";
function combined_yesterday_Action()
{
    database_connect();


    $result = pagination();
    include "./Views/Liste_combined_yesterday.php";
}
