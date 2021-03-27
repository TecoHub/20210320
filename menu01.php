<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
if(isset($_SESSION['guestname']) and $_SESSION['guestname']!=""){
include 'common/inc.common.php';

$sql="select * from drinks order by menus,position";
 $dataarr = $Cobj->union($sql);

//sited down
//header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
//header("Cache-Control: post-check=0, pre-check=0", false);
//header("Pragma: no-cache");
//print_r($_SESSION);
$tableno=$_SESSION['tableno'];
$selectroom=$_SESSION['roomno'];
$selectguest=$_SESSION['guestname'];

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
<script>

</script>
    <title>Menu</title>



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

<!-- Modal 1-->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color: #e3d3bf;">
      <div class="modal-header">
        <h5 class="modal-title">1</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
            <div class="modal-body">
              Body
            </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal 2-->
<div class="modal fade" id="modelId1" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">2</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
            <div class="modal-body">
              Body
            </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!----------------------------------Menu Items 1--------------------------------->
      <!-- オリジナルボトル -->
        <div id="menu01" class="tabcontent" >
                              <img style="width: 384px; height:auto;" src="images/cutout/Menu01.png" alt="" usemap="#m01" >
                                  
                              <?php
                                      for($t=0;$t<sizeof($dataarr);$t++){
                                      if($dataarr[$t]['menus']==1){
                                      $bl=$dataarr[$t]['CD1']."-".$dataarr[$t]['CD2']."-".$dataarr[$t]['price'];
                                      $gl=$dataarr[$t]['glass_CID']."-".$dataarr[$t]['glass_CID2']."-".$dataarr[$t]['glass_price'];
                                      echo   "<img style='width: 384px; height:auto;' src='admin/drinks/upload/".$dataarr[$t]['productimage']."' usemap='#m01' data-toggle='modal' data-id='ISBN-001122' title='Add this item'  href='#addBookDialog".$dataarr[$t]['d_refid']."' onclick='calval(".$dataarr[$t]['d_refid'].")'>";
                              ?>
                              <div id="addBookDialog<?php echo $dataarr[$t]['d_refid'];?>" class="modal fade" role="dialog">
                                   <div class="modal-dialog modal-dialog-centered"  style="width: 350px; margin-left:auto; margin-right:auto;">

                                        <!-- Modal content-->
                                        <div class="modal-content" style="background-color: #e3d3bf;border-radius:40px">

                                                            <!--close button-->
                                                            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->

                                                        <form id="form<?php echo $dataarr[$t]['d_refid'];?>" action="#" method="GET">
                                                            <input type="text" hidden value="<?php echo $selectroom;?>" name="selectroom">
                                                            <input type="text" hidden value="<?php echo $selectguest;?>" name="selectguest">
                                                            <input type="text" hidden value="<?php echo $tableno;?>" name="tableno">
                                                            <input type="text" readonly hidden value="<?php echo $dataarr[$t]['product'];?>" name="prd_name">


                                                          <div class="modal-body" >
                                                                    <img style='width: 100%; height:auto;' src='admin/drinks/upload/<?php echo $dataarr[$t]['productimage'];?>'>
                                                                       

                                                                        <div class="form-group">

                                                                                <div class="input-group">
                                                                                              <select name="price" id="prc<?php echo $dataarr[$t]['d_refid'];?>"  class=" select_mate2 form-control chosen-select"  tabindex="2">
                                                                                                      <?php 
                                                                                                          if($dataarr[$t]['price']>0){
                                                                                                          echo "<option value=".$bl.">  Bottle
                                                                                                                </option>";
                                                                                                          }
                                                                                                            if($dataarr[$t]['glass_price']>0){
                                                                                                              echo "  <option value=".$gl.">  Glass
                                                                                                                </option>";
                                                                                                          }
                                                                                                      ?>
                                                                                              </select>

                                                                                </div>
                                                                        </div>
                                                                          
                                                                      <div class="form-group">
                                                                              <label for="contact-name" class=" control-label">Quantity</label>
                                                                              <div class="element">
                                                                                      <button class="buttonquantity button-minus">
                                                                                          <img src="images/left-arrow.png" alt="">
                                                                                      </button>
                                                                                  <input type="number" style="margin-top: 2px;" class="quantity-field"  placeholder="qty" name="qty"  id="qty<?php echo $dataarr[$t]['d_refid'];?>" value="1">  
                                                                                      <button class="buttonquantity button-plus">
                                                                                         <img src="images/right-arrow.png" alt="">
                                                                                      </button>
                                                                              </div>
                                                                      </div> 

                                                                          <div class="form-group">
                                                                                    <div class="input-group">
                                                                              
                                                                                      <input type="text"  value="0hgjhgjgjg" id="price<?php echo $dataarr[$t]['d_refid'];?>" readonly hidden>
                                                                        
                                                                                    </div> 
                                                                          </div>
                                                                          
                                                                          <div class="form-group">
                                                                                    <div class="input-group">
                                                                            
                                                                                        <input type="button" class="roundedbuttonextra"  value="Order" id="sub<?php echo $dataarr[$t]['d_refid'];?>"  onclick="checkout(<?php echo $dataarr[$t]['d_refid'];?>)">
                                                                      
                                                                                    </div> 
                                                                          </div>
                                                          
                                                        
                                                        </div>
                                                          </form>
                                                          
                                                            <button type="button" class="roundedbuttonnava" data-dismiss="modal">Cancel</button>

                                        </div>

                              </div>
            </div>
                              <?php
                              }
                              }
                              ?>

        </div>

<!----------------------------------Menu Items 2--------------------------------->
      <!-- 日本酒　。焼酎 -->
        <div id="menu02" class="tabcontent" style="display: none;">
           <img style="width: 384px; height:auto;" src="images/cutout/Menu02.png" alt="" usemap="#m02">
           <?php
                                      for($t=0;$t<sizeof($dataarr);$t++){
                                      if($dataarr[$t]['menus']==2){
                                      $bl=$dataarr[$t]['CD1']."-".$dataarr[$t]['CD2']."-".$dataarr[$t]['price'];
                                      $gl=$dataarr[$t]['glass_CID']."-".$dataarr[$t]['glass_CID2']."-".$dataarr[$t]['glass_price'];
                                      echo   "<img style='width: 384px; height:auto;' src='admin/drinks/upload/".$dataarr[$t]['productimage']."' usemap='#m01' data-toggle='modal' data-id='ISBN-001122' title='Add this item'  href='#addBookDialog".$dataarr[$t]['d_refid']."' onclick='calval(".$dataarr[$t]['d_refid'].")'>";
                              ?>
                              <div id="addBookDialog<?php echo $dataarr[$t]['d_refid'];?>" class="modal fade" role="dialog">
                                   <div class="modal-dialog modal-dialog-centered"  style="width: 350px; margin-left:auto; margin-right:auto;">

                                        <!-- Modal content-->
                                        <div class="modal-content" style="background-color: #e3d3bf;border-radius:40px">

                                                            <!--close button-->
                                                            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->

                                                        <form id="form<?php echo $dataarr[$t]['d_refid'];?>" action="#" method="GET">
                                                            <input type="text" hidden value="<?php echo $selectroom;?>" name="selectroom">
                                                            <input type="text" hidden value="<?php echo $selectguest;?>" name="selectguest">
                                                            <input type="text" hidden value="<?php echo $tableno;?>" name="tableno">
                                                            <input type="text" readonly hidden value="<?php echo $dataarr[$t]['product'];?>" name="prd_name">


                                                          <div class="modal-body" >
                                                                    <img style='width: 100%; height:auto;' src='admin/drinks/upload/<?php echo $dataarr[$t]['productimage'];?>'>
                                                                       

                                                                        <div class="form-group">

                                                                                <div class="input-group">
                                                                                              <select name="price" id="prc<?php echo $dataarr[$t]['d_refid'];?>"  class=" select_mate2 form-control chosen-select"  tabindex="2">
                                                                                                      <?php 
                                                                                                          if($dataarr[$t]['price']>0){
                                                                                                          echo "<option value=".$bl.">  Bottle
                                                                                                                </option>";
                                                                                                          }
                                                                                                            if($dataarr[$t]['glass_price']>0){
                                                                                                              echo "  <option value=".$gl.">  Glass
                                                                                                                </option>";
                                                                                                          }
                                                                                                      ?>
                                                                                              </select>

                                                                                </div>
                                                                        </div>
                                                                          
                                                                      <div class="form-group">
                                                                              <label for="contact-name" class=" control-label">Quantity</label>
                                                                              <div class="element">
                                                                                      <button class="buttonquantity button-minus">
                                                                                          <img src="images/left-arrow.png" alt="">
                                                                                      </button>
                                                                                  <input type="number" style="margin-top: 2px;" class="quantity-field"  placeholder="qty" name="qty"  id="qty<?php echo $dataarr[$t]['d_refid'];?>" value="1">  
                                                                                      <button class="buttonquantity button-plus">
                                                                                         <img src="images/right-arrow.png" alt="">
                                                                                      </button>
                                                                              </div>
                                                                      </div> 

                                                                          <div class="form-group">
                                                                                    <div class="input-group">
                                                                              
                                                                                      <input type="text"  value="0hgjhgjgjg" id="price<?php echo $dataarr[$t]['d_refid'];?>" readonly hidden>
                                                                        
                                                                                    </div> 
                                                                          </div>
                                                                          
                                                                          <div class="form-group">
                                                                                    <div class="input-group">
                                                                            
                                                                                        <input type="button" class="roundedbuttonextra"  value="Order" id="sub<?php echo $dataarr[$t]['d_refid'];?>"  onclick="checkout(<?php echo $dataarr[$t]['d_refid'];?>)">
                                                                      
                                                                                    </div> 
                                                                          </div>
                                                          
                                                        
                                                        </div>
                                                          </form>
                                                          
                                                            <button type="button" class="roundedbuttonnava" data-dismiss="modal">Cancel</button>

                                        </div>

                              </div>
            </div>
                              <?php
                              }
                              }
                              ?>

        </div>

        
<!----------------------------------Menu Items 3--------------------------------->
      <!--ビール　。ウイスキー　-->  
        <div id="menu03" class="tabcontent" style="display: none;">
           <img style="width: 384px; height:auto" src="images/cutout/Menu03.png" alt="" usemap="#m03">
           <?php
                                      for($t=0;$t<sizeof($dataarr);$t++){
                                      if($dataarr[$t]['menus']==3){
                                      $bl=$dataarr[$t]['CD1']."-".$dataarr[$t]['CD2']."-".$dataarr[$t]['price'];
                                      $gl=$dataarr[$t]['glass_CID']."-".$dataarr[$t]['glass_CID2']."-".$dataarr[$t]['glass_price'];
                                      echo   "<img style='width: 384px; height:auto;' src='admin/drinks/upload/".$dataarr[$t]['productimage']."' usemap='#m01' data-toggle='modal' data-id='ISBN-001122' title='Add this item'  href='#addBookDialog".$dataarr[$t]['d_refid']."' onclick='calval(".$dataarr[$t]['d_refid'].")'>";
                              ?>
                              <div id="addBookDialog<?php echo $dataarr[$t]['d_refid'];?>" class="modal fade" role="dialog">
                                   <div class="modal-dialog modal-dialog-centered"  style="width: 350px; margin-left:auto; margin-right:auto;">

                                        <!-- Modal content-->
                                        <div class="modal-content" style="background-color: #e3d3bf;border-radius:40px">

                                                            <!--close button-->
                                                            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->

                                                        <form id="form<?php echo $dataarr[$t]['d_refid'];?>" action="#" method="GET">
                                                            <input type="text" hidden value="<?php echo $selectroom;?>" name="selectroom">
                                                            <input type="text" hidden value="<?php echo $selectguest;?>" name="selectguest">
                                                            <input type="text" hidden value="<?php echo $tableno;?>" name="tableno">
                                                            <input type="text" readonly hidden value="<?php echo $dataarr[$t]['product'];?>" name="prd_name">


                                                          <div class="modal-body" >
                                                                    <img style='width: 100%; height:auto;' src='admin/drinks/upload/<?php echo $dataarr[$t]['productimage'];?>'>
                                                                       

                                                                        <div class="form-group">

                                                                                <div class="input-group">
                                                                                              <select name="price" id="prc<?php echo $dataarr[$t]['d_refid'];?>"  class=" select_mate2 form-control chosen-select"  tabindex="2">
                                                                                                      <?php 
                                                                                                          if($dataarr[$t]['price']>0){
                                                                                                          echo "<option value=".$bl.">  Bottle
                                                                                                                </option>";
                                                                                                          }
                                                                                                            if($dataarr[$t]['glass_price']>0){
                                                                                                              echo "  <option value=".$gl.">  Glass
                                                                                                                </option>";
                                                                                                          }
                                                                                                      ?>
                                                                                              </select>

                                                                                </div>
                                                                        </div>
                                                                          
                                                                      <div class="form-group">
                                                                              <label for="contact-name" class=" control-label">Quantity</label>
                                                                              <div class="element">
                                                                                      <button class="buttonquantity button-minus">
                                                                                          <img src="images/left-arrow.png" alt="">
                                                                                      </button>
                                                                                  <input type="number" style="margin-top: 2px;" class="quantity-field"  placeholder="qty" name="qty"  id="qty<?php echo $dataarr[$t]['d_refid'];?>" value="1">  
                                                                                      <button class="buttonquantity button-plus">
                                                                                         <img src="images/right-arrow.png" alt="">
                                                                                      </button>
                                                                              </div>
                                                                      </div> 

                                                                          <div class="form-group">
                                                                                    <div class="input-group">
                                                                              
                                                                                      <input type="text"  value="0hgjhgjgjg" id="price<?php echo $dataarr[$t]['d_refid'];?>" readonly hidden>
                                                                        
                                                                                    </div> 
                                                                          </div>
                                                                          
                                                                          <div class="form-group">
                                                                                    <div class="input-group">
                                                                            
                                                                                        <input type="button" class="roundedbuttonextra"  value="Order" id="sub<?php echo $dataarr[$t]['d_refid'];?>"  onclick="checkout(<?php echo $dataarr[$t]['d_refid'];?>)">
                                                                      
                                                                                    </div> 
                                                                          </div>
                                                          
                                                        
                                                        </div>
                                                          </form>
                                                          
                                                            <button type="button" class="roundedbuttonnava" data-dismiss="modal">Cancel</button>

                                        </div>

                              </div>
            </div>
                              <?php
                              }
                              }
                              ?>

        </div>

<!----------------------------------Menu Items 4--------------------------------->
      <!-- サワー　。　果実酒　-->
        <div id="menu04" class="tabcontent" style="display: none;">
           <img style="width: 384px; height:auto" src="images/cutout/Menu04.png" alt="" usemap="#m04">
           <?php
                                      for($t=0;$t<sizeof($dataarr);$t++){
                                      if($dataarr[$t]['menus']==4){
                                      $bl=$dataarr[$t]['CD1']."-".$dataarr[$t]['CD2']."-".$dataarr[$t]['price'];
                                      $gl=$dataarr[$t]['glass_CID']."-".$dataarr[$t]['glass_CID2']."-".$dataarr[$t]['glass_price'];
                                      echo   "<img style='width: 384px; height:auto;' src='admin/drinks/upload/".$dataarr[$t]['productimage']."' usemap='#m01' data-toggle='modal' data-id='ISBN-001122' title='Add this item'  href='#addBookDialog".$dataarr[$t]['d_refid']."' onclick='calval(".$dataarr[$t]['d_refid'].")'>";
                              ?>
                              <div id="addBookDialog<?php echo $dataarr[$t]['d_refid'];?>" class="modal fade" role="dialog">
                                   <div class="modal-dialog modal-dialog-centered"  style="width: 350px; margin-left:auto; margin-right:auto;">

                                        <!-- Modal content-->
                                        <div class="modal-content" style="background-color: #e3d3bf;border-radius:40px">

                                                            <!--close button-->
                                                            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->

                                                        <form id="form<?php echo $dataarr[$t]['d_refid'];?>" action="#" method="GET">
                                                            <input type="text" hidden value="<?php echo $selectroom;?>" name="selectroom">
                                                            <input type="text" hidden value="<?php echo $selectguest;?>" name="selectguest">
                                                            <input type="text" hidden value="<?php echo $tableno;?>" name="tableno">
                                                            <input type="text" readonly hidden value="<?php echo $dataarr[$t]['product'];?>" name="prd_name">


                                                          <div class="modal-body" >
                                                                    <img style='width: 100%; height:auto;' src='admin/drinks/upload/<?php echo $dataarr[$t]['productimage'];?>'>
                                                                       

                                                                        <div class="form-group">

                                                                                <div class="input-group">
                                                                                              <select name="price" id="prc<?php echo $dataarr[$t]['d_refid'];?>"  class=" select_mate2 form-control chosen-select"  tabindex="2">
                                                                                                      <?php 
                                                                                                          if($dataarr[$t]['price']>0){
                                                                                                          echo "<option value=".$bl.">  Bottle
                                                                                                                </option>";
                                                                                                          }
                                                                                                            if($dataarr[$t]['glass_price']>0){
                                                                                                              echo "  <option value=".$gl.">  Glass
                                                                                                                </option>";
                                                                                                          }
                                                                                                      ?>
                                                                                              </select>

                                                                                </div>
                                                                        </div>
                                                                          
                                                                      <div class="form-group">
                                                                              <label for="contact-name" class=" control-label">Quantity</label>
                                                                              <div class="element">
                                                                                      <button class="buttonquantity button-minus">
                                                                                          <img src="images/left-arrow.png" alt="">
                                                                                      </button>
                                                                                  <input type="number" style="margin-top: 2px;" class="quantity-field"  placeholder="qty" name="qty"  id="qty<?php echo $dataarr[$t]['d_refid'];?>" value="1">  
                                                                                      <button class="buttonquantity button-plus">
                                                                                         <img src="images/right-arrow.png" alt="">
                                                                                      </button>
                                                                              </div>
                                                                      </div> 

                                                                          <div class="form-group">
                                                                                    <div class="input-group">
                                                                              
                                                                                      <input type="text"  value="0hgjhgjgjg" id="price<?php echo $dataarr[$t]['d_refid'];?>" readonly hidden>
                                                                        
                                                                                    </div> 
                                                                          </div>
                                                                          
                                                                          <div class="form-group">
                                                                                    <div class="input-group">
                                                                            
                                                                                        <input type="button" class="roundedbuttonextra"  value="Order" id="sub<?php echo $dataarr[$t]['d_refid'];?>"  onclick="checkout(<?php echo $dataarr[$t]['d_refid'];?>)">
                                                                      
                                                                                    </div> 
                                                                          </div>
                                                          
                                                        
                                                        </div>
                                                          </form>
                                                          
                                                            <button type="button" class="roundedbuttonnava" data-dismiss="modal">Cancel</button>

                                        </div>

                              </div>
            </div>
                              <?php
                              }
                              }
                              ?>

        </div>

<!----------------------------------Menu Items 5--------------------------------->
      <!--ワイン-->
        <div id="menu05" class="tabcontent" style="display: none;">
           <img style="width: 384px; height:auto" src="images/cutout/Menu05.png" alt="" usemap="#m05">
           <?php
                                      for($t=0;$t<sizeof($dataarr);$t++){
                                      if($dataarr[$t]['menus']==5){
                                      $bl=$dataarr[$t]['CD1']."-".$dataarr[$t]['CD2']."-".$dataarr[$t]['price'];
                                      $gl=$dataarr[$t]['glass_CID']."-".$dataarr[$t]['glass_CID2']."-".$dataarr[$t]['glass_price'];
                                      echo   "<img style='width: 384px; height:auto;' src='admin/drinks/upload/".$dataarr[$t]['productimage']."' usemap='#m01' data-toggle='modal' data-id='ISBN-001122' title='Add this item'  href='#addBookDialog".$dataarr[$t]['d_refid']."' onclick='calval(".$dataarr[$t]['d_refid'].")'>";
                              ?>
                              <div id="addBookDialog<?php echo $dataarr[$t]['d_refid'];?>" class="modal fade" role="dialog">
                                   <div class="modal-dialog modal-dialog-centered"  style="width: 350px; margin-left:auto; margin-right:auto;">

                                        <!-- Modal content-->
                                        <div class="modal-content" style="background-color: #e3d3bf;border-radius:40px">

                                                            <!--close button-->
                                                            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->

                                                        <form id="form<?php echo $dataarr[$t]['d_refid'];?>" action="#" method="GET">
                                                            <input type="text" hidden value="<?php echo $selectroom;?>" name="selectroom">
                                                            <input type="text" hidden value="<?php echo $selectguest;?>" name="selectguest">
                                                            <input type="text" hidden value="<?php echo $tableno;?>" name="tableno">
                                                            <input type="text" readonly hidden value="<?php echo $dataarr[$t]['product'];?>" name="prd_name">


                                                          <div class="modal-body" >
                                                                    <img style='width: 100%; height:auto;' src='admin/drinks/upload/<?php echo $dataarr[$t]['productimage'];?>'>
                                                                       

                                                                        <div class="form-group">

                                                                                <div class="input-group">
                                                                                              <select name="price" id="prc<?php echo $dataarr[$t]['d_refid'];?>"  class=" select_mate2 form-control chosen-select"  tabindex="2">
                                                                                                      <?php 
                                                                                                          if($dataarr[$t]['price']>0){
                                                                                                          echo "<option value=".$bl.">  Bottle
                                                                                                                </option>";
                                                                                                          }
                                                                                                            if($dataarr[$t]['glass_price']>0){
                                                                                                              echo "  <option value=".$gl.">  Glass
                                                                                                                </option>";
                                                                                                          }
                                                                                                      ?>
                                                                                              </select>

                                                                                </div>
                                                                        </div>
                                                                          
                                                                      <div class="form-group">
                                                                              <label for="contact-name" class=" control-label">Quantity</label>
                                                                              <div class="element">
                                                                                      <button class="buttonquantity button-minus">
                                                                                          <img src="images/left-arrow.png" alt="">
                                                                                      </button>
                                                                                  <input type="number" style="margin-top: 2px;" class="quantity-field"  placeholder="qty" name="qty"  id="qty<?php echo $dataarr[$t]['d_refid'];?>" value="1">  
                                                                                      <button class="buttonquantity button-plus">
                                                                                         <img src="images/right-arrow.png" alt="">
                                                                                      </button>
                                                                              </div>
                                                                      </div> 

                                                                          <div class="form-group">
                                                                                    <div class="input-group">
                                                                              
                                                                                      <input type="text"  value="0hgjhgjgjg" id="price<?php echo $dataarr[$t]['d_refid'];?>" readonly hidden>
                                                                        
                                                                                    </div> 
                                                                          </div>
                                                                          
                                                                          <div class="form-group">
                                                                                    <div class="input-group">
                                                                            
                                                                                        <input type="button" class="roundedbuttonextra"  value="Order" id="sub<?php echo $dataarr[$t]['d_refid'];?>"  onclick="checkout(<?php echo $dataarr[$t]['d_refid'];?>)">
                                                                      
                                                                                    </div> 
                                                                          </div>
                                                          
                                                        
                                                        </div>
                                                          </form>
                                                          
                                                            <button type="button" class="roundedbuttonnava" data-dismiss="modal">Cancel</button>

                                        </div>

                              </div>
            </div>
                              <?php
                              }
                              }
                              ?>

        </div>


<!----------------------------------Menu Items 6--------------------------------->
      <!--ソフトドリンク-->
        <div id="menu06" class="tabcontent" style="display: none;">
           <img style="width: 384px; height:auto" src="images/cutout/Menu06.png" alt="" usemap="#m06">
        
           <?php
                                      for($t=0;$t<sizeof($dataarr);$t++){
                                      if($dataarr[$t]['menus']==6){
                                      $bl=$dataarr[$t]['CD1']."-".$dataarr[$t]['CD2']."-".$dataarr[$t]['price'];
                                      $gl=$dataarr[$t]['glass_CID']."-".$dataarr[$t]['glass_CID2']."-".$dataarr[$t]['glass_price'];
                                      echo   "<img style='width: 384px; height:auto;' src='admin/drinks/upload/".$dataarr[$t]['productimage']."' usemap='#m01' data-toggle='modal' data-id='ISBN-001122' title='Add this item'  href='#addBookDialog".$dataarr[$t]['d_refid']."' onclick='calval(".$dataarr[$t]['d_refid'].")'>";
                              ?>
                              <div id="addBookDialog<?php echo $dataarr[$t]['d_refid'];?>" class="modal fade" role="dialog">
                                   <div class="modal-dialog modal-dialog-centered"  style="width: 350px; margin-left:auto; margin-right:auto;">

                                        <!-- Modal content-->
                                        <div class="modal-content" style="background-color: #e3d3bf;border-radius:40px">

                                                            <!--close button-->
                                                            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->

                                                        <form id="form<?php echo $dataarr[$t]['d_refid'];?>" action="#" method="GET">
                                                            <input type="text" hidden value="<?php echo $selectroom;?>" name="selectroom">
                                                            <input type="text" hidden value="<?php echo $selectguest;?>" name="selectguest">
                                                            <input type="text" hidden value="<?php echo $tableno;?>" name="tableno">
                                                            <input type="text" readonly hidden value="<?php echo $dataarr[$t]['product'];?>" name="prd_name">


                                                          <div class="modal-body" >
                                                                    <img style='width: 100%; height:auto;' src='admin/drinks/upload/<?php echo $dataarr[$t]['productimage'];?>'>
                                                                       

                                                                        <div class="form-group">

                                                                                <div class="input-group">
                                                                                              <select name="price" id="prc<?php echo $dataarr[$t]['d_refid'];?>"  class=" select_mate2 form-control chosen-select"  tabindex="2">
                                                                                                      <?php 
                                                                                                          if($dataarr[$t]['price']>0){
                                                                                                          echo "<option value=".$bl.">  Bottle
                                                                                                                </option>";
                                                                                                          }
                                                                                                            if($dataarr[$t]['glass_price']>0){
                                                                                                              echo "  <option value=".$gl.">  Glass
                                                                                                                </option>";
                                                                                                          }
                                                                                                      ?>
                                                                                              </select>

                                                                                </div>
                                                                        </div>
                                                                          
                                                                      <div class="form-group">
                                                                              <label for="contact-name" class=" control-label">Quantity</label>
                                                                              <div class="element">
                                                                                      <button class="buttonquantity button-minus">
                                                                                          <img src="images/left-arrow.png" alt="">
                                                                                      </button>
                                                                                  <input type="number" style="margin-top: 2px;" class="quantity-field"  placeholder="qty" name="qty"  id="qty<?php echo $dataarr[$t]['d_refid'];?>" value="1">  
                                                                                      <button class="buttonquantity button-plus">
                                                                                         <img src="images/right-arrow.png" alt="">
                                                                                      </button>
                                                                              </div>
                                                                      </div> 

                                                                          <div class="form-group">
                                                                                    <div class="input-group">
                                                                              
                                                                                      <input type="text"  value="0hgjhgjgjg" id="price<?php echo $dataarr[$t]['d_refid'];?>" readonly hidden>
                                                                        
                                                                                    </div> 
                                                                          </div>
                                                                          
                                                                          <div class="form-group">
                                                                                    <div class="input-group">
                                                                            
                                                                                        <input type="button" class="roundedbuttonextra"  value="Order" id="sub<?php echo $dataarr[$t]['d_refid'];?>"  onclick="checkout(<?php echo $dataarr[$t]['d_refid'];?>)">
                                                                      
                                                                                    </div> 
                                                                          </div>
                                                          
                                                        
                                                        </div>
                                                          </form>
                                                          
                                                            <button type="button" class="roundedbuttonnava" data-dismiss="modal">Cancel</button>

                                        </div>

                              </div>
            </div>
                              <?php
                              }
                              }
                              ?>

        </div>

        <!----------------------------------Menu Items end--------------------------------->

  </div>
         <script src="js/main.js"></script>
		 <script>
		 function calval(pass){
		var price=$('#prc'+pass).val();
		var qty=$('#qty'+pass).val();
		//alert(qty);
var tot=price*qty;
document.getElementById('price'+pass).value= tot;//returns a HTML DOM Object

		 //alert(price);
		 }
		 function checkout(id){
		 	$.ajax({
				url: "addorderInfo.php", // Url to which the request is send
				type: "POST",             // Type of request to be send, called as method
				data: new FormData(document.getElementById("form"+id)), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
				contentType: false,       // The content type used when sending data to the server.
				cache: false,             // To unable request pages to be cached
				processData:false,  
				success: handleResult
			
				/* url: "../masters/addStudentInfo.php",
				type: "POST",
				data: $('form#add_studentform').serialize(),
				dataType: "json",
				success: handleResult */
			});	 
		 } 
		 function handleResult(data){
			//alert(data);
			//$( "#clearcart" ).click();
           alert("ご注文を承りました。\n サービスをご利用いただきありがとうございます。");
	 //header('Location: orderhistory.php');
	 
			window.location.href = 'order01.php?ord='+data;

        }
        
</script>



      <div class="footer">
        
        <hr class="solid">
        <span style="color: #595143; font-size:8px"> ® <script type="text/javascript">
                                         document.write(new Date().getFullYear());
                                     </script> Yunokawa Prince Hotel Nagisatei • All Rights Reserved</span>
        </div>
  
</body>  
 
</html>
    <?php
	if(isset($_GET['menuid'])){
    echo "<script>openCity(event, '".$_GET['menuid']."')</script>";
    }	}else{
		header("Location: index.php");
	}
	?>