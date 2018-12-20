<?php
include_once("functions.php");
function dbLink($host,$user,$pass,$db)
{
    $dblink = mysqli_connect($host,$user,$pass,$db);
    if(!$dblink)
    {
        die("dbLink failed with error code [".mysqli_connect_errno()."]:".mysqli_connect_error());
    }
    
    return $dblink;
}

function confirmQuery($query)
{
    if(!$query)
    {
        
        echo ("Query Failed => [".mysqli_connect_errno()."]:".mysqli_connect_error());
    }
}

function dbPrint($dblink,$query)
{
    if(!$query)
     {
        $query = "SELECT * ";
        $query .="FROM admins";
    }
    $result = mysqli_query($dblink,$query);
    confirmQuery($result);
    while($row = mysqli_fetch_row($result))
    {
            var_dump($row);
            echo "<hr />";
    }
}

function dbInsert($dblink,$query,$box, $table)
{
    if(!$query)
     {
        $query = "INSERT INTO {$table} ";
        $query .= "(username,password) ";
        $query .="VALUES ('{$box['username']}','{$box['password']}')";
    }
    $result = mysqli_query($dblink,$query);
    confirmQuery($result);        
}

function dbRemove($dblink,$query,$box,$table)
{
    if(!$query)
     {
        $query = "DELETE FROM {$table} ";
        $query .="WHERE {$box['col']}='{$box['value']}'";
    }
    $result = mysqli_query($dblink,$query);
    confirmQuery($result);  
}


function dbUpdate($dblink,$query,$box,$table)
{
    if(!$query)
     {
        $query = "UPDATE {$table} ";
        $query .= "SET {$box['col'][1]}='{$box['value'][1]}' ";
        $query .="WHERE {$box['col'][0]}='{$box['value'][0]}' ";
    }
    echo $query;
    $result = mysqli_query($dblink,$query);
    confirmQuery($result);  
}



?>
