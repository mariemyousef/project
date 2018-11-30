<?php
        include('database.php');
           $table="CREATE TABLE IF NOT EXISTS train(
           tnot int not null  primary key,
           tfrom varchar(100) not null,
           tto varchar(100) not null,
           tmove varchar(100) not null,
           tarrive varchar(100) not null,
           tdegree varchar(100) not null); " ;
                $db->execute($table);


?>
