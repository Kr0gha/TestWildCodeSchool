<?php
        if(isset($_GET['id']) && !empty($_GET['id']))
{
        require_once('connect.php');

        $id = strip_tags($_GET['id']);


        $sql = "DELETE FROM `menbers` WHERE `user_id` = :id;";


        $query = $db->prepare($sql);


        $query->bindValue(':id', $id, PDO::PARAM_INT);


        $query->execute();
;

        require_once('close.php');

       	header('location:index.php');



}

?>