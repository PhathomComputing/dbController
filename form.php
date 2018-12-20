<?php

//comments
#comments
/* comments
    comments
    comments */

include_once("functions.php");
include_once("validations.php");
$errors = array();

include_once("header.php");

$userHash="123";
$message="";
$userDB="12345678";
$passDB="12345678";
$min=array("username"=>8, "password" =>6);
$max=array("username"=>16,"password" =>12);

if(isset($_POST['submit']))
{
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $fields= array("username","password");
    foreach($fields as $field)
    {
        $check = $_POST[$field];
        if(!checkValid($check))
        {
            
            $errors[$field]="{$field} can't be empty.";
        }
        else
        {   
            
            if(!checkMax($check,$max[$field]))
            {
                $errors[$field]="{$field} can't be more than {$max[$field]} characters.";
            }            
            if(!checkMin($check,$min[$field]))
            {
                $errors[$field]="{$field} can't be less than {$min[$field]} characters.";
            }
            
        }
    }
    
    
    
    
    
    if(empty($errors))
    {
        if($username == $userDB && $password == $passDB)
        {
            redirectTo("form.php");
        }
        else
        {
            $message = "Username and Password do not match";
        }
    }
    else
    {
        echo checkErrors($errors);
        
    }
}
else
{
    $username = "";
    $password = "";
    $message  = "Please log in.";
}

?>


<body>
    <?php echo $message; ?>
    <form action="form.php" method="post">
    Username: <input type="text" name="username" value="<?php echo htmlspecialchars($username);?>"/><br />
    Password: <input type="password" name="password" value=""/><br />
    <br />
    <input type="submit" name="submit" value="Submit" />
    </form>
</body>    
</html>