<?php
include_once("dbLink.php");
$host="localhost";
$user="root";
$pass="";
$db="dbcontrol";
$dblink = dbLink($host,$user,$pass,$db);
if(isset($_POST['loop']))
{
    $loop = $_POST['loop'];
}
else
{
    $loop=0;
}
echo "<script>console.log('Debug: ".$loop."');</script>";
?>

<html>
<head>
    <script src="jquery-2.1.3.min.js"></script>

    <style>
        #panel {
            position:absolute;
            width:98%;
            
            top: 10%;
            right:auto;
            
        }
        
        .terminal{
            padding:15px;
            background-color:#cccccc;
            -webkit-box-shadow: inset 0px 0px 10px 0px rgba(107,107,107,1);
            -moz-box-shadow: inset 0px 0px 10px 0px rgba(107,107,107,1);
            box-shadow: inset 0px 0px 10px 0px rgba(107,107,107,1);
            height:300px;
            overflow:scroll;
        }
        
        #controls {
            margin-top:20px;
        }
    </style>
    
</head>
<body>
    <div id="panel">
        <div class="terminal">
        <?php 
            include_once("dbTerm.php");
            
            ?>
            
            <section id="dialogue"></section>
        </div>
        <div id="controls">
    
    
        
           <form class="form form-table" name="contactform" class="form form-table" method="post" action="dbControl.php">
 
                        <table  width="450px">
                        <tr>
                         <td valign="top">
                          <label  for="username">Username</label>
                            </td>
                         <td valign="top">
                          <input class="form-control hint" type="text" name="username" maxlength="50" size="30" onfocus="inputFocus(this)" onblur="inputBlur(this)"
<?php if(isset($_POST['username']))
{
    echo "value={$_POST['username']}";
    
}?>   
                                 >
                         </td>
                        </tr>
                        <tr>
                         <td valign="top">
                          <label for="name">Name</label>
                         </td>
                         <td valign="top">
                          <input class="form-control hint" type="text" name="name" maxlength="50" size="30" onfocus="inputFocus(this)" onblur="inputBlur(this)"
<?php if(isset($_POST['name']))
{
    echo "value={$_POST['name']}";
    
}?>   
                                 
                                 >
                         </td>
                        </tr>
                        <tr>
                         <td valign="top">
                          <label for="form">Table</label>
                         </td>
                         <td valign="top">
                          <input class="form-control hint" type="text" name="table" maxlength="80" size="30" onfocus="inputFocus(this)" onblur="inputBlur(this)"
                                 
<?php if(isset($_POST['table']))
{
    echo "value={$_POST['table']}";
    
}?>
                                 >
                         </td>
                        </tr>
                        <tr>
                         <td valign="top">
                          <label for="password">Password</label>
                         </td>
                         <td valign="top">
                          <input class="form-control hint" type="text" name="password" maxlength="30" size="30" onfocus="inputFocus(this)" onblur="inputBlur(this)">

                            

                         </td>
                        </tr>
                            <tr>
                         <td valign="top">
                             <label for="query">Query</label><br>
                             
                         </td>
                         <td valign="top">
                          <textarea for="query" name="query">
<?php if(isset($_POST['query']))
{
    echo trim($_POST['query']);
    
}?></textarea>
                         </td>
                        </tr>
                        <tr>
                         <td colspan="2" style="text-align:center">
                          <input type="submit" value="Submit"> 
                             
                         </td>
                        </tr>
                        </table>
                <input type="hidden" name="loop" value="<?php echo $loop+1;?>">
                <input type="radio" name="access" value="Print" checked> Print         
                <input type="radio" name="access" value="Insert" > Insert 
                <input type="radio" name="access" value="Remove" > Remove 
                <input type="radio" name="access" value="Update"> Update 
                <input type="radio" name="access" value="CreateTable"> Create Table 
                <input type="checkbox" name="raw" value="Raw" <?php
                       if(isset($_POST['raw']))
                       {
                           echo "checked";
                       }
                       ?>> Raw 

                    </form> 
            
            
            
            
            
            
            <button id="addDB">Add DB</button>
            <button id="rmvDB">Remove DB</button>
            <button id="addTB">Create Table</button>
            <button id="rmvTB">Remove Table</button>
            <br>This program ran <?php echo $loop;?> times in a row.
        </div>
    </div>
    
    <script type="text/javascript">
    
    
        
        function addDB(){
                $message = "<b>Terminal Refresh...</b>";
                $('#dialogue').after($message);
           
        }
        
        JavaScript:

function inputFocus(i){
    if(i.value==i.defaultValue){ i.value=""; i.style.color="#000"; }
}
function inputBlur(i){
    if(i.value==""){ i.value=i.defaultValue; i.style.color="#888"; }
}
   
    
    </script>
</body>
</html>