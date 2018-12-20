<?php
include_once("functions.php");
redirectTo("dbControl.php");
//comments
#comments
/* comments
    comments
    comments */

include("functions.php");
include("validations.php");
$variable="";
$field="username";
echo "{$field}:{$variable}<br/>";
checkValid($field,$variable);

include("header.php");


print_r($errors);
?>


<body>
    
</body>    
</html>