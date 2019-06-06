<?php
    try{
        $db = new PDO('mysql:host=localhost;dbname=patriote','root','root');
    }
    catch (PDOException $e){
        die('Error: '.$e->getMessage());
    }

