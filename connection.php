<?php
    
    /*  
    
    you need to fill the parameters as noted as follows in mysqli_connect() function.
    
    $link = mysqli_connect("put your server name", "your username/database_name", "password", "user_name");
    
    */

    $link = mysqli_connect("", "", "", "");
        
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }

?>