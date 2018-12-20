<?php

//comments
#comments
/* comments
    comments
    comments */
$errors = array();
function checkValid($value)
{
    return isset($value) && $value !== "";
}

function checkMax($value,$max)
{
    return strlen($value) <= $max;
}

function checkMin($value,$min)
{
    return strlen($value) >= $min;
}

function checkExistIn($value,$set)
{
    return in_array($value,$set);
}

function checkLogIn($username)
{
    
}

function checkErrors($errors=array())
{
    $output ="";
    if(!empty($errors))
    {
        $output.="<div class=\"errors\">";
        $output.="Please fix the following Errors:";
        $output.="<ul>";
        foreach($errors as $key => $error)
        {
            $output.="<li>{$error}</li>";    
        }
        $output.="</ul>";
        $output.="</div>";
    }
    return $output;
}
?>
