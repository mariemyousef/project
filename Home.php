<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <title></title>
      <style type="text/css">

              #header {
            height: 100px;
            overflow: auto;
            background: #800000;
              font-size: 40px;
              color: #FFFFFF;



        }
        #footer {
            background: grey;
            float: left;
            width: 1200px;
            height: 100px;
}
  #main {
            background: #d4d4aa;
            float: left;
            width: 800px;
            height: 400px;
            margin-left: 250px;

        }
        #form{
           margin-left: 250px;

        }
        #input {
  top: 10px;
  width: 270px;
  font-size: 26px;
  text-align: center;
  background-color: #F1FAEB;

}

 #button{

   background-color: #800000;
  width: 250px;
  height: 60px;
  font-size: 20px;
  font-color : #FFFFFF;
  margin-left: 10px;

 }


       </style>

</head>

<body>
<div id="header">
   <p1 color="#FFFFFF"> Egypt Trains </p>
</div>
 <div id="main">
<form action="showdata.php" method="post" id="form" >
<br><br>
  <input type="text" name="cofrom" value="From" size="16"  id="input">  <br> <br>
  <input type="text" name="coto" value="To" size="20"  id="input"> <br>  <br>
  <select name="degre" id="input">
  <option value="degree1">degree1</option>
  <option value="VIP">VIP</option>
  <option value="air conditioner">air conditioner</option>
  <option value="sleep">sleep</option>
   <option value="express train">express train</option>
  </select>   <br><br><br>
  <input type="submit" name="submit" value="Show Trains" id="button" style="font-size: larger; color: #FFFFFF;">

</form>
</div>

   <div id="footer">

   </div>

</body>

</html>
