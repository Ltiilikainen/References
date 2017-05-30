<?php
  
  //require configuration
  require("../includes/config.php");
  
  if($_SERVER["REQUEST_METHOD"] == "GET")
  {
    open("start_form.php", ["title" => "Startup"]);
    exit;
  }
  else
  {
    $_SESSION["name"] = $_POST["name"];
    redirect("/");
  }

?>
