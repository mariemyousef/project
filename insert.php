<?php
           include('database.php');
           $insert= "INSERT INTO train(tnot,tfrom,tto,tmove,tarrive,tdegree)VALUES
            (978,'Qena','Cairo','6:30','12:20','VIP'),
            (988,'Assuit','Cairo','8:30','2:25','sleep'),
            (958,'Assuit','Cairo','7:30','12:15','VIP'),
            (760,'Cairo','Assuit','15:00','21:00','express train'),
            (83,'Cairo','Assuit','15:00','21:00','express train'),
            (98,'Qena','Cairo','6:30','12:20','VIP'),
            (145,'Assuit','Cairo','6:30','12:20','VIP'),
            (877,'Assuit','Cairo','6:30','12:20','VIP'),
            (950,'Assuit','Cairo','7:30','12:15','VIP'),
            (18,'Assuit','Cairo','7:30','12:15','VIP'),
            (900,'Assuit','Cairo','7:50','12:55','VIP'),
            (15,'Qena','Cairo','6:30','12:20','sleep'),
            (90,'Assuit','Cairo','6:30','12:20','VIP'),
            (90,'Assuit','Cairo','6:30','12:20','degree1'),
            (90,'sohag','Cairo','6:30','12:20','degree1'),
            (125,'Assuit','Qena','15:30','17:20','air conditioner'); ";

            $db->execute($insert);

?>

