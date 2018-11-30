<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <title></title>
  <style type="text/css">
    #header {
            height: 100px;
           
            background: #800000;
              font-size: 40px;
              }



  #th {
   text-align: center;
   border: 1px solid#FFFFFF;
   background-color: #800000;
    height: 50px;
     padding: 15px;
}

#td {
    text-align: center;
    border: 1px solid#FFFFFF;
    background-color: #FFFFFF;
    height: 50px;
    vertical-align: bottom;
     padding: 15px;
    }
    #main {
            background: #d4d4aa;
            float: left;
            width: 800px;
            height: 400px;
            margin-left: 250px;

        }

  </style>
</head>

<body>
<div id="header">
   <p1 style="color :#FFFFFF ; margin:40px ;  margin-top: 20px;"> Egypt Trains </p>
</div>

<?php

include_once('database.php');
 if(isset($_POST['submit'])){
 $fro=$_POST['cofrom'];
 $too=$_POST['coto'];
 $de=$_POST['degre'];
        $rows=$db->getRows("select * from train where tfrom=? and tto=? and tdegree=?" ,array($fro,$too,$de));

  ?>

  <h1> the Trains from <?php echo " ". $fro." ";?>to <?php echo " ".$too." "; ?> </h1>
   <div id="main">
  <table  width="100%">
  <tr>
  <th id="th" style="color :#FFFFFF">Train</th>
  <th id="th" style="color :#FFFFFF">move</th>
  <th id="th" style="color :#FFFFFF">Arrive</th>
  <th id="th" style="color :#FFFFFF">Degree</th>
 </tr>
    <?php

    foreach($rows as $row)
    {
    echo "<tr>";
    echo "<td id=\"td\">".$row['tnot']."</td>";
    echo "<td id=\"td\">".$row['tmove']."</td>";
    echo "<td id=\"td\">".$row['tarrive']."</td>";
    echo "<td id=\"td\">".$row['tdegree']."</td>";
    echo "</tr>";
         }
    }


?>
</table>
        </div>

</body>

</html>
