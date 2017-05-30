<?php

//enable sessions
session_start();

function open($target, $values = [])
{
  //make sure file exists
  if(file_exists("../views/{$target}"))
  {
    //extract values
    extract($values);
    
    //render target view between header and footer
    require("../views/header.php");
    require("../views/{$target}");
    require("../views/footer.php");
    exit();
  }
  
  //else trigger error
  else
  {
    trigger_error("Could not open view: {$target}", E_USER_ERROR);
  }
}

function redirect($location)
{

if (headers_sent($file, $line))
        {
            trigger_error("HTTP headers already sent at {$file}:{$line}", E_USER_ERROR);
        }
        header("Location: {$location}");
        exit();
}

//exclude start.php and quit.php from redirect loop
if (!in_array($_SERVER["PHP_SELF"], ["/start.php", "/quit.php"]))
    {
      if(empty($_SESSION["name"]))
      {
        redirect("start.php");
      }
}
?>
