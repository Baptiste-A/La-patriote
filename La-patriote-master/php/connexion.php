<?php
    try{
        $db = new PDO('mysql:host=localhost;dbname=patriote','root','');
    }
    catch (PDOException $e){
        die('Error: '.$e->getMessage());
    }

