<?php
session_start();
include '../common/inc.common.php';
$menu=$_REQUEST['menu'];
$sql="select max(position) position from drinks where menus='$menu' ";
 $van_no_array = $Cobj->union($sql);
$crp=$van_no_array[0]['position']+1;;

echo "";
echo "<select name='van_route' >";
for($i=1;$i<=$crp;$i++){
echo"<option value='".$i."'>".$i."</option>";
}
echo"</select>";

?>