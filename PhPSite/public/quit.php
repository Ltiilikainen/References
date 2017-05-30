<?php

    //require configuration
    require("../includes/config.php");
    
    //clear session variables
    $_SESSION = [];
        
    //clear cookie
    if (!empty($_COOKIE[session_name()]))
    {
        setcookie(session_name(), "", time() - 42000);
    }
    
    // destroy session
    session_destroy();
    
    //return to start page     
    redirect("/");
?>