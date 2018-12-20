<?php
            if(!isset($_POST['submit']))
            {
                $stat ="";
                $access="";
                $username="";
                $access="";
                $query="";
                $name="";
                $result="";
            }

            if(isset($stat))
            {
            echo $stat;
            }
            
            
            
            
            
            if( isset($_POST['access']) && $_POST['access']!="none")
            {
          
             $insert1 = $_POST["username"];
             $insert2 = $_POST['name'];
             $insert3 = $_POST['password'];
             $insert4 = $_POST['table'];
             $insert5 = trim($_POST['query']);

               echo "<br>";
            echo $_POST['access'];
            echo "<br>";
                $access=$_POST['access'];
                
                if($access=='Insert'){
                     $box = array('username'=>$insert1,'password'=>$insert3);
                     dbInsert($dblink,$insert5,$box,$insert4);

                }
                if($access=="Print"){
                    echo "DB Items:<br>";
                    dbPrint($dblink,$insert5);
                }
                if($access=='Remove'){
                    $box = array('col'=>$insert2,'value'=>$insert1);
                     dbRemove($dblink,$insert5,$box,$insert4);

                    
                }
                if($access=='Update'){
                    $shelf = array();
                    $box1 = split(" ",$insert2);
                    $box2= split(" ",$insert1);
                    $shelf = ['col'=>$box1, 'value'=>$box2];
                    dbUpdate($dblink,$query,$shelf,$insert4);

                }
                
                
            }
?>
