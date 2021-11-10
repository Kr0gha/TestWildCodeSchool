<?php
header('location:index.php');
include('Count.php');
    
    if ($row_cnt < 50) {
        
    
        // on inclut la connexion a la base
                if(isset($_POST['Name']) && !empty($_POST['Name']))
                {
                    require_once('connect.php');

                    $Name = htmlspecialchars($_POST["Name"]);
                    
                    $sql = "INSERT INTO `menbers`SET `Name` = (:Name);";    
                    $query = $db->prepare($sql);

                    $query->bindValue(':Name', $Name, PDO::PARAM_STR);
                    $query->execute();

                    require_once('close.php');
        		}
                else
                {   

                    die();
                }
    }
    else
    {
        die();
    }
?>