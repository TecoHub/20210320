<?php

header('Content-Type: text/html; charset=utf-8');

session_start();
include 'common/inc.common.php';
if(isset($_GET['goback'])){
//$goback=$_GET['goback'];
session_destroy();
	unset($_SESSION['guestname']);
	unset($_SESSION['tableno']);
	unset($_SESSION['roomno']);
	header("Location: index.php");

}
$sql="select * from discount where active=1";
 $disarr = $Cobj->union($sql);

//sited down
//header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
//header("Cache-Control: post-check=0, pre-check=0", false);
//header("Pragma: no-cache");

$r=$_GET['r'];

                $api = "http://rest.yunokawapn.co.jp/res_t/get_dec.pl?r=$r";
                $request = curl_init($api); // initiate curl object
                curl_setopt($request, CURLOPT_HEADER, 0); // set to 0 to eliminate header info from response
                curl_setopt($request, CURLOPT_RETURNTRANSFER, 1); // Returns response data instead of TRUE(1)
                //curl_setopt($request, CURLOPT_SSL_VERIFYPEER, FALSE); // uncomment if you get no gateway response using HTTPS
                curl_setopt($request, CURLOPT_FOLLOWLOCATION, true);
                curl_setopt($request, CURLOPT_HTTPHEADER, array("Content-Type: application/x-www-form-urlencoded"));
                $response = (string)curl_exec($request); // execute curl fetch and store results in $response

                curl_close($request); // close curl object

                $result = json_decode($response, true); // true turns it into an array
//print_r($response);               
			   //print $result; //to check variables
								//$response="12:333:vicky";

			//$response="12:333,555,666:vi,me,ra"; 
                list($tableno, $roomno, $guestname) = explode(":" , $response);
//print_r($roomno);			
$tablenoarr=explode("," , $tableno);
$roomnoarr=explode("," , $roomno);
$guestnamearr=explode("," , $guestname);

// $size=sizeof($tablenoarr);
 $size=sizeof($roomnoarr);

 if($size>1){
  ?>           
      
<?php
	$sql="select distinct category from drinks";
	$colarr = $Cobj->union($sql);
	//print_r($colarr);
?>

<!DOCTYPE html>
<html lang="ja-jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	<script>
	function update_session_value() {
var value=document.getElementById('roomname').value;
	//alert(value);

        $.ajax({
            type: "POST",
            url: 'session.php', // change url as your 
            data: 'select_amount=' + value,
            dataType: 'json',
            success: function (data) {
//alert();
if(data==1){location.href = "menu01.php";}
else{}
            }
        });
			//alert();

    }

	</script>
    <title>Menu</title>


</head>  

<body>
  <div class="containerPlus">
      

       <div>
            <img src="images/h_logo.png" alt="" class="center" >
            
            <p style="color: #595143; font-size:30px; text-align:center;margin-top:0; font-family:'Times New Roman', Times, serif">Drink Menu</p>

            <p style="color: #e88f3d;text-align:center;">お支払いされる方のお部屋番号を入力してください</p>
       </div>   
       
       <div>
           <form action="menu01.php">
             <select class="select_mate " name="roomname" onclick="return false;" id="roomname">
                <option value=""  >お部屋番号を選択 </option>
                
<?php
for($p=0;$p<sizeof($roomnoarr);$p++){
if($tablenoarr[$p]>0){
$tb=$tablenoarr[$p];
}else{
$tb=$tablenoarr[0];
}
$rm=$roomnoarr[$p];
$gn=$guestnamearr[$p];
$val=$tb."-".$rm."-".$gn;

echo " <option value=".$val.">".$val."</option>";
}
?>                
				</select>
            
            <!---部屋番号を入力してください。--->

            <input type="button" class="roundedbutton"  value="TOPへ" onclick="update_session_value()" />
           </form>
       </div>

       <div class="footer">
        
       <hr class="solid">
       <span style="color: #595143; font-size:8px"> ® <script type="text/javascript">
                                        document.write(new Date().getFullYear());
                                    </script> Yunokawa Prince Hotel Nagisatei • All Rights Reserved</span>
       </div>

  </div>
</body>       
</html>
<?php
}
else{
 $_SESSION['guestname']=$guestname;
 $_SESSION['tableno']=$tableno;
 $_SESSION['roomno']= $roomno;
  
	header("Location: menu01.php");
  
}
?>
