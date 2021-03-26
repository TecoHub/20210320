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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
    <!-- jQuery library -->
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <!-- Popper JS -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
    <!-- Latest compiled JavaScript -->
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
    <title>Menu</title>
<style>
table{
    width:100%;
    margin-left: auto;
    margin-right: auto;
    max-width: 350px;
    border-collapse:collapse;
    text-align:center;
    border:1px solid black;
    font-size:12px;
    }

    .roomname {
      margin-left:5%;
      margin-top:20px;
      font-family: 'Arial Narrow Bold', sans-serif;
      
    }

    .blackhead {
          background-color: black;
          color: aliceblue;
    }

</style>

</head>  

<body style="background-color: #e3d3bf;">
  <div class="containerPlus2">
       <img style="width:384px;height:auto;"  src="images/cutout/top-mid-menu.png" usemap="#image-map">


            <map name="image-map" style="cursor: pointer; ">
<!----------------------------------Top Menu------------------------------------->

                           <!--guest name and room number-->
                           <div class="top-left-room"><p><?php echo$_SESSION['roomno'];?></p></div>
                           <div class="top-left-guest"><p><?php echo$_SESSION['guestname'];?></p></div>
                           
                           <!--Change User-->
                           <area target="" alt="" title="" href="index.php?goback=yes" coords="220,10,281,62" shape="rect">

                           <!--Home-->
                           <area target="" alt="" title="" href="menu01.php" coords="285,10,329,62" shape="rect">

                           <!--History-->
                           <area target="" alt="" title="" href="order01.php" coords="334,10,378,62" shape="rect">

<!----------------------------------- Mid-Top Menu ------------------------------->

                            <!-- オリジナルボトル -->
                            <area target="" alt="" title="" href="menu01.php?menuid=menu01" class="tablinks" onclick="openCity(event, 'menu01')" coords="128,156,3,74" shape="rect" >

　　　　　　　　　　　　　　　　<!-- 日本酒　。焼酎 -->
                            <area target="" alt="" title=""  href="menu01.php?menuid=menu02" class="tablinks" onclick="openCity(event, 'menu02')" coords="255,156,130,74" shape="rect">

                            <!--ビール　。ウイスキー　-->
                            <area target="" alt="" title="" href="menu01.php?menuid=menu03" class="tablinks" onclick="openCity(event, 'menu03')" coords="383,156,258,74" shape="rect">

                          

　　　　　　　　　　　　　　　<!-- サワー　。　果実酒　-->
                            <area target="" alt="" title="" class="tablinks" href="menu01.php?menuid=menu04" onclick="openCity(event, 'menu04')" coords="128,240,3,158" shape="rect">

                            <!--ワイン-->
                            <area target="" alt="" title="" class="tablinks" href="menu01.php?menuid=menu05" onclick="openCity(event, 'menu05')" coords="255,240,130,158" shape="rect">

                            <!--ソフトドリンク-->
                            <area target="" alt="" title="" class="tablinks" href="menu01.php?menuid=menu06" onclick="openCity(event, 'menu06')" coords="383,240,258,158" shape="rect">


                            </map> 


  </div>

  <!-------------------------------------------------->


        <!-- オリジナルボトル -->
        <div id="menu01" class="tabcontent" >
         
        <!-- <img style="width: 380px; height:auto" src="images/cutout/history.png" alt="" usemap="#m01"> -->
		  <?php
		  $r=$_SESSION['r'];
$sql="select * from confirmedorders where or_userid='$r' order by guestname";
 $dataarrord = $Cobj->union($sql);
 for($i=0;$i<sizeof($dataarrord);$i++){
 $gn=$dataarrord[$i]['guestname'];
 $qty=$dataarrord[$i]['productquantity'];
 $pri=$dataarrord[$i]['productprice'];
 $tot=$pri*$qty;
 if($gnold!= $gn){
 echo "<table id='customers'>";
 
 //".$dataarrord[$i]['tableno']." //if want to add table
 echo "<div class='roomname'> ".$dataarrord[$i]['roomno']."  ".$dataarrord[$i]['guestname']."</div>";
 echo" <tr class='blackhead'>		  <th>Name</th>	  <th>Qty</th> <th>Price</th>  </tr>";
echo" <tr>		  <td>".$dataarrord[$i]['productname']."</td>	  <td>".$dataarrord[$i]['productquantity']."</td> <td>".$dataarrord[$i]['productprice']."</td>  </tr>";
$total=$total+$tot;
 }
 else{
 echo" <tr>		  <td>".$dataarrord[$i]['productname']."</td>	  <td>".$dataarrord[$i]['productquantity']."</td> <td>".$dataarrord[$i]['productprice']."</td>  </tr>";
 $total=$total+$tot;
}
if($dataarrord[$i+1]['guestname']!= $gn){

 echo" <tr>		  <td>Total</td>	  <td></td> <td>".$total.'円'."</td>  </tr>";
echo" </table>";
$total=0;
 }

 $gnold=$dataarrord[$i]['guestname'];

		  }
 
		  ?>
		  
        </div>

<!---------------------------------------->
        
      <div class="footer">
            <hr class="solid">
            <span style="color: #595143; font-size:8px"> ® <script type="text/javascript">
                                          document.write(new Date().getFullYear());
                                          </script> Yunokawa Prince Hotel Nagisatei • All Rights Reserved</span>
        </div>
<!--------------------------------------->

  <script src="js/main.js"></script>
</body>   
</html>
    