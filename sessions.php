<?php 
    include_once("functions.php");
    include_once("validations.php");
    session_start();

?>
<!-- ------------------------------------------------------ -->
<html>
    <head>
        <?php 
            
        ?>
    </head>
<!-- ------------------------------------------------------ -->
    <body>
        <?php 
            $_SESSION["name"] ="Chris!";
            echo $_SESSION["name"];
        ?>
    </body>
</html>
<!-- ------------------------------------------------------ -->
<?php 

?>
