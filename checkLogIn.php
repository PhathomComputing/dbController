<?php
//comments
#comments
/* comments
    comments
    comments */

include("functions.php");


    $loggedIn=$_GET['logged_in'];
    if($loggedIn =="1") {
        redirectTo("loggedin.php");
    }
    else{
        redirectTo("index.php");
    }
   

include("header.php");

?>


<body>
    
</body>    
</html>