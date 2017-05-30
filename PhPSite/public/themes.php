<?php
//require configuration
require("../includes/config.php");
    
if($_SERVER["REQUEST_METHOD"] == "GET")
  {
    open("themes_form.php", ["title" => "Theme setup"]);
    exit;
  }
else
 {
    $_SESSION["theme"] = $_POST["theme"];
    redirect("/");
 }
  
?>