<?php

header('Content-Type: text/html; charset=utf-8');

session_start();
include 'common/inc.common.php';

$sql="select * from discount where active=1";
 //$disarr = $Cobj->union($sql);

//sited down
//header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
//header("Cache-Control: post-check=0, pre-check=0", false);
//header("Pragma: no-cache");

?>


<!DOCTYPE html>
<html lang="ja-jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
    
    <meta name="theme-color" content="#c9ad86">
    <meta name="msapplication-navbutton-color" content="#c9ad86">
    <meta name="apple-mobile-web-app-status-bar-style" content="#c9ad86">

    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">

    <link rel="icon" href="images/top-icon.png">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
          <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
    <!-- jQuery library -->
          <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <!-- Popper JS -->
          <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>-->
    <!-- Latest compiled JavaScript -->
          <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>-->
    <title>Menu</title>
<style>
table{
    width:100%;
    border-collapse:collapse;
    text-align:center;
    border:1px solid black;
    font-size:12px;
    }


</style>

</head>  

<body>
  <div class="containerPlus2">
      
<!--style="width:384px; height:2253px; "--->
       <img style="width:384px;height:auto "  src="images/cutout/top-mid-menu.png" usemap="#image-map">

            <map name="image-map" style="cursor: pointer;">


<!----------------------------------Top Menu------------------------------------->
                           <!--guest name and room number-->
                           
                             <div class="top-left-room"><p><?php echo$_SESSION['roomno'];?></p></div>
                           <div class="top-left-guest"><p><?php echo$_SESSION['guestname'];?></p></div>
                           
                         
                           <!--Change User-->
                           <area target="" alt="" title="" href="login.php" coords="220,10,281,62" shape="rect">

                           <!--Home-->
                           <area target="" alt="" title="" href="menu01.php" coords="285,10,329,62" shape="rect">

                           <!--History-->
                           <area target="" alt="" title="" href="order01.php" coords="334,10,378,62" shape="rect">



<!----------------------------------- Mid-Top Menu ------------------------------->

                            <!-- オリジナルボトル -->
                            <area target="" alt="" title="" class="tablinks" onclick="openCity(event, 'menu01')" coords="128,156,3,74" shape="rect" >

　　　　　　　　　　　　　　　　<!-- 日本酒　。焼酎 -->
                            <area target="" alt="" title="" class="tablinks" onclick="openCity(event, 'menu02')" coords="255,156,130,74" shape="rect">

                            <!--ビール　。ウイスキー　-->
                            <area target="" alt="" title="" class="tablinks" onclick="openCity(event, 'menu03')" coords="383,156,258,74" shape="rect">

                          

　　　　　　　　　　　　　　　<!-- サワー　。　果実酒　-->
                            <area target="" alt="" title="" class="tablinks" onclick="openCity(event, 'menu04')" coords="128,240,3,158" shape="rect">

                            <!--ワイン-->
                            <area target="" alt="" title="" class="tablinks" onclick="openCity(event, 'menu05')" coords="255,240,130,158" shape="rect">

                            <!--ソフトドリンク-->
                            <area target="" alt="" title="" class="tablinks" onclick="openCity(event, 'menu06')" coords="383,240,258,158" shape="rect">


                            </map> 


  </div>

  <!-------------------------------------------------->


        <!-- オリジナルボトル -->
        <div id="menu01" class="tabcontent" >
         
        <!-- <img style="width: 380px; height:auto" src="images/cutout/history.png" alt="" usemap="#m01"> -->
		  <?php
		  $r=$_SESSION['r'];
$sql="select * from confirmedorders where or_userid='$r' order by guestname";
 $dataarr = $Cobj->union($sql);
 for($i=0;$i<sizeof($dataarr);$i++){
 $gn=$dataarr[$i]['guestname'];
 $qty=$dataarr[$i]['productquantity'];
 $pri=$dataarr[$i]['productprice'];
 $tot=$pri*$qty;
 if($gnold!= $gn){
 echo "<table id='customers'>";
 
 //".$dataarr[$i]['tableno']." //if want to add table
 echo " ".$dataarr[$i]['roomno']."  ".$dataarr[$i]['guestname']." ";
 echo" <tr>		  <th>Name</th>	  <th>Qty</th> <th>Price</th>  </tr>";
echo" <tr>		  <td>".$dataarr[$i]['productname']."</td>	  <td>".$dataarr[$i]['productquantity']."</td> <td>".$dataarr[$i]['productprice']."</td>  </tr>";
$total=$total+$tot;
 }
 else{
 echo" <tr>		  <td>".$dataarr[$i]['productname']."</td>	  <td>".$dataarr[$i]['productquantity']."</td> <td>".$dataarr[$i]['productprice']."</td>  </tr>";
 $total=$total+$tot;
}
if($dataarr[$i+1]['guestname']!= $gn){

 echo" <tr>		  <td>Total:</td>	  <td></td> <td>".$total."</td>  </tr>";
echo" </table>";
$total=0;
 }

 $gnold=$dataarr[$i]['guestname'];

		  }
 
		  ?>
		  
        </div>

  <script src="js/main.js"></script>
</body>   
</html>
    