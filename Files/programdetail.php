<?php
include "connect.php";
$q = intval($_GET['q']);
$t=intval($_GET['t']);
$text1="DURATION FROM:";
$text2="DURATION TO:";

if($t==1){
    $sql="SELECT * FROM oncampus where sn=".$q;   
}
else if($t==2){
    $sql="SELECT * FROM offcampus WHERE sn = ".$q;
}
else if($t==3){
    $sql="SELECT * FROM regional where sn=".$q;
}

$result = mysqli_query($link,$sql);
if($result){
    $row=mysqli_fetch_row($result);
    echo "<tr id='durfrom'>
    <td height='35'>".$text1."</td>
    <td height='35'><input name='duration' type='text' readonly value='".$row['2']."'></td>
    </tr>";
    echo "<tr id='durto'>
    <td height='35'>".$text2."</td>
    <td height='35'><input name='duration' type='text' readonly value='".$row['3']."'></td>
    </tr>";
    echo "<tr id='venue'>
    <td height='35'>VENUE:</td>
    <td height='35'><input name='duration' type='text' readonly value='".$row['4']."'></td>
    </tr>";
    
}
?>


