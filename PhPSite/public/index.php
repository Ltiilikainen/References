<?php
    //require configuration
    require("../includes/config.php");
    
    open("visitor.php", ["title" => "Welcome!", "name" => $_SESSION["name"]]);
?>